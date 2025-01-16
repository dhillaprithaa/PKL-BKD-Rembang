@extends('layouts.master')

@section('content')
    <section class="content-header text-center">
        <h1>
            DAFTAR RIWAYAT PENGADUAN
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
            <li class="active">Riwayat Pengaduan</li>
        </ol>

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


        <br><br>
        <div class="table-container" style="width: 100%; margin: auto; text-align: justify;">
            <table id="example" class="display" style="width:100%; border-collapse: collapse; text-align: justify;">
                <thead style="background-color: #f8f9fa;">
                    <tr>
                        <th style="padding: 8px;">No.</th>
                        <th style="padding: 8px;">No. Ticketing</th>
                        <th style="padding: 8px;">Hari/Tanggal</th>
                        <th style="padding: 8px;">Nama Pelapor</th>
                        <th style="padding: 8px;">Judul Pengaduan</th>
                        <th style="padding: 8px;">Deskripsi Pengaduan</th>
                        <th style="padding: 8px;">Proses</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center" style="padding: 8px;">1</td>
                        <td class="text-center" style="padding: 8px;">LAPOR0001</td>
                        <td class="text-center" style="padding: 8px;">Kamis/1 Jan 2024</td>
                        <td class="text-center" style="padding: 8px;">Dhila Pritha Amalia</td>
                        <td class="text-center" style="padding: 8px;">Pemberkasan P3K</td>
                        <td style="padding: 8px; text-align: justify;">Lupa melampirkan materai 10.000 apakah harus submit ulang?</td>
                        <td class="text-center" style="padding: 8px;"><span class="label bg-yellow">Pending</span></td>
                    </tr>
                    <tr>
                        <td class="text-center" style="padding: 8px;">2</td>
                        <td class="text-center" style="padding: 8px;">LAPOR0002</td>
                        <td class="text-center" style="padding: 8px;">Kamis/1 Jan 2024</td>
                        <td class="text-center" style="padding: 8px;">Kaifano Zylanda De Forza</td>
                        <td class="text-center" style="padding: 8px;">Pemberkasan P3K</td>
                        <td style="padding: 8px; text-align: justify;">Kapan pengumuman P3K untuk Final</td>
                        <td class="text-center" style="padding: 8px;"><span class="label bg-blue">Sedang diproses</span></td>
                    </tr>
                    <tr>
                        <td class="text-center" style="padding: 8px;">3</td>
                        <td class="text-center" style="padding: 8px;">LAPOR0003</td>
                        <td class="text-center" style="padding: 8px;">Kamis/1 Jan 2024</td>
                        <td class="text-center" style="padding: 8px;">Ferry Firmansyah</td>
                        <td class="text-center" style="padding: 8px;">Pemberkasan P3K</td>
                        <td style="padding: 8px; text-align: justify;">Upload pas foto selalu gagal, bagaimana solusinya?</td>
                        <td class="text-center" style="padding: 8px;"><span class="label bg-green">Selesai</span></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                responsive: true,
                pageLength: 5,
                lengthChange: false,
                searching: false,
                info: false
            });
        });
    </script>
@endsection
