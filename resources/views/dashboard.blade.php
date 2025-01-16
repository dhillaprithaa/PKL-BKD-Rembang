@extends('layouts.master')

@section('content')
    <section class="content-header text-center">
        <h1>
            Dashboard Layanan BKD Kabupaten Rembang
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
        <br> <br>

        <div class="table-container" style="flex: 1; max-width: 800px; margin: auto;">
            <h4 class="text-center">Laporan Masuk Pengaduan Masyarakat</h4>
            <div class="table-responsive">
                <table class="table" style="background-color: white; margin-top:10px; width: 100%;">
                    <thead style="background-color: #f8f9fa;">
                        <tr>
                            <th class="text-center">Tahun</th>
                            <th class="text-center">Status Laporan</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">2025</td>
                            <td class="text-center">Dalam Proses/Pending</td>
                            <td class="text-center">1000</td>
                        </tr>
                        <tr>
                            <td class="text-center">2025</td>
                            <td class="text-center">Selesai</td>
                            <td class="text-center">1000</td>
                        </tr>
                        <tr>
                            <td class="text-center">2025</td>
                            <td class="text-center">Belum Diproses</td>
                            <td class="text-center">1000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <h4 class="text-center">Hasil Survey Kepuasan Pengaduan Masyarakat</h4>
            <div class="table-responsive">
                <table class="table" style="background-color: white; margin-top:10px; width: 100%;">
                    <thead style="background-color: #f8f9fa;">
                        <tr>
                            <th class="text-center">Tahun</th>
                            <th class="text-center">Status Laporan</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">2025</td>
                            <td class="text-center">Memuaskan 😊</td>
                            <td class="text-center">1000</td>
                        </tr>
                        <tr>
                            <td class="text-center">2025</td>
                            <td class="text-center">Cukup Memuaskan 👍</td>
                            <td class="text-center">1000</td>
                        </tr>
                        <tr>
                            <td class="text-center">2025</td>
                            <td class="text-center">Kurang Memuaskan ☹️</td>
                            <td class="text-center">1000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <div id="lastUpdate" class="text-center" style="font-size: 1em; margin-top: 10px;">
        </div>

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

    </section>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        // $(document).ready(function() {
        //     $('#example').DataTable();
        // });
    </script>
@endsection
