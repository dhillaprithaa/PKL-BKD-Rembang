@extends('layouts.master')

@section('content')
    <section class="content-header text-center">
        <h1 style="font-weight: bold;">
            LAPORAN PENGADUAN
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
            <li class="active">Laporan Pengaduan</li>
        </ol>
        <br><br>
        <div class="box box-primary" style="max-width: 400px; margin: auto;">
            <div class="box-header with-border text-center">
                <h3 class="box-title">Form Laporan Pengaduan</h3>
            </div>
            <form role="form">
                <div class="box-body" style="padding: 15px;">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hari/Tanggal</label>
                        <input type="date" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail2">Nama</label>
                        <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Nama anda...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail3">Alamat</label>
                        <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Alamat anda...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail4">Nomor WA/Telepon</label>
                        <input type="text" class="form-control" id="exampleInputEmail4" placeholder="Nomor WA/Telepon anda...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail5">Deskripsi Pengaduan</label>
                        <textarea class="form-control" id="exampleInputEmail5" placeholder="Jelaskan pengaduan anda..." rows="4"></textarea>
                    </div>
                </div>
                <div class="box-footer text-center">
                    <button type="submit" class="btn btn-primary">Kirim Pengaduan<i class="fa fa-paper-plane-o" style="margin-left: 5px"></i></button>
                </div>
            </form>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
