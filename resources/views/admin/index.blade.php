<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">

                    <div id="lastUpdate" class="text-center" style="font-size: 1em; margin-top: 10px;">
                    </div>
                    <div class="row" style="margin-top:40px">
                        <div class="col-md-4">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h2 class="box-title text-center">Statistik Total ASN Berdasarkan Jenis Kelamin</h2>
                                </div>
                                <div class="box-body">
                                    <canvas id="genderChart" width="400" height="100"></canvas>

                                    <div class="table-container" style="flex: 1;">
                                        <div class="table-responsive">
                                            <table class="table table-bordered"
                                                style="background-color: white; border: 2px solid black;">
                                                <thead style="background-color: #f8f9fa;">
                                                    <tr style="border-bottom: 2px solid black;">
                                                        <th class="text-center" style="border-right: 2px solid black;">
                                                            Jenis
                                                            Kelamin
                                                        </th>
                                                        <th class="text-center">Total</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($chartDataGender['labels'] as $index => $jenisKelamin)
                                                        <tr style="border-bottom: 1px solid black;">
                                                            <td class="text-left"
                                                                style="border-right: 2px solid black;">
                                                                {{ $jenisKelamin }}</td>
                                                            <td class="text-right">
                                                                {{ $chartDataGender['data'][$index] }}
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row" style="margin-top:80px">
                        <div class="col-md-8">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title text-center">Statistik ASN Berdasarkan Status Pegawai dan
                                        Gender</h3>
                                </div>
                                <canvas id="statusPegawaiGenderChart" width="400" height="100"></canvas>
                                <div class="table-container" style="flex: 1;">
                                    <div class="table-responsive">
                                        <table class="table table-bordered"
                                            style="background-color: white; border: 2px solid black;">
                                            <thead style="background-color: #f8f9fa;">
                                                <tr style="border-bottom: 2px solid black;">
                                                    <th class="text-center" style="border-right: 2px solid black;">
                                                        Status
                                                        Pegawai</th>
                                                    <th class="text-center" style="border-right: 2px solid black;">
                                                        Laki-Laki
                                                    </th>
                                                    <th class="text-center">Perempuan</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($chartDataStatusGender['data'] as $statusPegawai => $dataGender)
                                                    <tr style="border-bottom: 1px solid black;">
                                                        <td class="text-left" style="border-right: 2px solid black;">
                                                            {{ $statusPegawai }}</td>
                                                        <td class="text-right" style="border-right: 2px solid black;">
                                                            {{ $dataGender['Laki-Laki'] }}</td>
                                                        <td class="text-right">{{ $dataGender['Perempuan'] }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .table {
            border-collapse: collapse;
            width: 100%;
        }

        .table-bordered th,
        .table-bordered td {
            border: 2px solid black !important;
            padding: 8px;
            text-align: left;
        }
    </style>

    <script>
        function updateClock() {
            const lastUpdateElement = document.getElementById('lastUpdate');
            const now = new Date();

            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');

            const day = String(now.getDate()).padStart(2, '0');
            const monthNames = [
                "Januari", "Februari", "Maret", "April", "Mei", "Juni",
                "Juli", "Agustus", "September", "Oktober", "November", "Desember"
            ];
            const month = monthNames[now.getMonth()];
            const year = now.getFullYear();


            lastUpdateElement.textContent = `Update: ${day} ${month} ${year} ${hours}:${minutes}:${seconds} WIB`;
        }

        setInterval(updateClock, 1000);
        updateClock();
    </script>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const genderLabels = @json($chartDataGender['labels']);
        const genderData = @json($chartDataGender['data']);

        const genderCtx = document.getElementById('genderChart').getContext('2d');
        new Chart(genderCtx, {
            type: 'bar',
            data: {
                labels: genderLabels,
                datasets: [{
                    label: 'Jumlah ASN',
                    data: genderData,
                    backgroundColor: ['#4e73df', '#1cc88a'],
                    borderColor: ['#4e73df', '#1cc88a'],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Jumlah ASN',
                        }
                    },
                    x: {
                        title: {
                            display: false,
                            text: 'Jenis Kelamin',
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                    },
                },
            }
        });
    </script>

    <script>
        const chartLabels = @json($chartDataStatusGender['labels']); // Mendapatkan label status Pegawai
        const chartData = @json($chartDataStatusGender['data']); // Mendapatkan data jumlah Laki-Laki dan Perempuan

        const ctx = document.getElementById('statusPegawaiGenderChart').getContext('2d');
        new Chart(ctx, {
            type: 'bar',
            data: {
                labels: chartLabels,
                datasets: [{
                        label: 'Laki-Laki',
                        data: chartLabels.map(label => chartData[label]['Laki-Laki']),
                        backgroundColor: '#4e73df', // Warna untuk Laki-Laki
                        borderColor: '#4e73df',
                        borderWidth: 1,
                    },
                    {
                        label: 'Perempuan',
                        data: chartLabels.map(label => chartData[label]['Perempuan']),
                        backgroundColor: '#f6c23e', // Warna untuk Perempuan
                        borderColor: '#f6c23e',
                        borderWidth: 1,
                    },
                ],
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Jumlah ASN',
                        },
                    },
                    x: {
                        title: {
                            display: false,
                            text: 'Status Pegawai',
                        },
                    },
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'top',
                    },
                },
            },
        });
    </script>
</x-app-layout>
