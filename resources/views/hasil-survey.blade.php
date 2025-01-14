@extends('layouts.master')


@section('content')
    <section class="content-header text-center">
        <h1>
            HASIL SURVEY KEPUASAN
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
            <li class="active">Hasil Survey Kepuasan</li>
        </ol>
        <br> <br>
        <table id="example" class="display" style="width:100%;">
            <thead class="text-center">
                <tr>
                    <th width="2px">No.</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Rentang Usia</th>
                    <th>Emoji</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Muhammad Tono</td>
                    <td>Rembang</td>
                    <td>17 - 25 Tahun</td>
                    <td>Dhila</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Muhammad Tono</td>
                    <td>Rembang</td>
                    <td>17 - 25 Tahun</td>
                    <td>Dhila</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Muhammad Tono</td>
                    <td>Rembang</td>
                    <td>17 - 25 Tahun</td>
                    <td>Dhila</td>
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
