@extends('layouts.master')


@section('content')
    <section class="content-header text-center">
        <h1>
            LAPORAN PENGADUAN
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
            <li class="active">Laporan Pengaduan</li>
        </ol>
        <br> <br>
        <table id="example" class="display" style="width:100%;">
            <thead class="text-center">
                <tr>
                    <th width="2px">No.</th>
                    <th>No. Ticketing</th>
                    <th>Hari/Tanggal</th>
                    <th>No WA</th>
                    <th>Nama Pelapor</th>
                    <th>Pengaduan</th>
                    <th>Status Pengaduan</th>
                    <th>Ket/Tanggapan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>LAPOR0001</td>
                    <td>Kamis/1 Jan 2024</td>
                    <td>089912111199</td>
                    <td>Dhila</td>
                    <td>Pemberkasan P3K</td>
                    <td><span class="label bg-yellow">Pending</span></td>
                    <td>-</td>
                    <td><i class="fa fa-trash text-danger"></i></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>LAPOR0001</td>
                    <td>Kamis/1 Jan 2024</td>
                    <td>089912111199</td>
                    <td>Dhila</td>
                    <td>Pemberkasan P3K</td>
                    <td><span class="label bg-blue">Sedang diproses</span></td>
                    <td>-</td>
                    <td><i class="fa fa-trash text-danger"></i></td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>LAPOR0001</td>
                    <td>Kamis/1 Jan 2024</td>
                    <td>089912111199</td>
                    <td>Dhila</td>
                    <td>Pemberkasan P3K</td>
                    <td><span class="label bg-green">Selesai</span></td>
                    <td>-</td>
                    <td><i class="fa fa-trash text-danger"></i></td>
                </tr>
            </tbody>
            {{-- <tfoot>
                <tr>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Office</th>
                    <th>Age</th>
                    <th>Start date</th>
                    <th>Salary</th>
                </tr>
            </tfoot> --}}
        </table>
    </section>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
