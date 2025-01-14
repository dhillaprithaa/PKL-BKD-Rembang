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


        <br> <br>
        <table id="example" class="display" style="width:100%;">
            <thead class="text-center">
                <tr>
                    <th width="2px">No.</th>
                    <th>No. Ticketing</th>
                    <th>Hari/Tanggal</th>
                    <th>Nama Pelapor</th>
                    <th>Judul Pengaduan</th>
                    <th>Deskripsi Pengaduan</th>
                    <th>Proses</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>LAPOR0001</td>
                    <td>Kamis/1 Jan 2024</td>
                    <td>Dhila Aprilia</td>
                    <td>Pemberkasan P3K</td>
                    <td>Lupa melampirkan materai 10.000 apakah harus submit ulang?</td>
                    <td><span class="label bg-yellow">Pending</span></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>LAPOR0002</td>
                    <td>Kamis/1 Jan 2024</td>
                    <td>Dhila Aprilia</td>
                    <td>Pemberkasan P3K</td>
                    <td>Lupa melampirkan materai 10.000 apakah harus submit ulang?</td>
                    <td><span class="label bg-blue">Sedang diproses</span></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>LAPOR0003</td>
                    <td>Kamis/1 Jan 2024</td>
                    <td>Dhila Aprilia</td>
                    <td>Pemberkasan P3K</td>
                    <td>Lupa melampirkan materai 10.000 apakah harus submit ulang?</td>
                    <td><span class="label bg-green">Selesai</span></td>
                </tr>
            </tbody>
        </table>
    </section>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
