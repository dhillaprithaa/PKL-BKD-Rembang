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
        <div class="box box-primary">
            <div class="box-header with-border">
                <h3 class="box-title">Form Laporan Pengaduan</h3>
            </div>
            <form role="form">
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Hari/Tanggal</label>
                        <input type="date" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nama anda...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Alamat anda...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nomor WA/Telepon</label>
                        <input type="nomor_hp" class="form-control" id="exampleInputEmail1"
                            placeholder="Nomor WA/Telepon anda...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Deskripsi Pengaduan</label>
                        <textarea type="deskripsi" class="form-control" id="exampleInputEmail1" placeholder="Jelaskan pengaduan anda..."></textarea>
                    </div>

                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Kirim Pengaduan<i class="fa fa-paper-plane-o"
                            style="margin-left: 5px"></i></button>
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
