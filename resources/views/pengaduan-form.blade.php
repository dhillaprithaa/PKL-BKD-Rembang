@extends('layouts.master')


@section('content')
    <section class="content-header text-center">
        <h1>
            FORMULIR LAPORAN PENGADUAN
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
            <li class="active">Laporan Pengaduan</li>
        </ol>

        <div class="box box-primary" style="margin-top:30px; ">
            <div class="box-header with-border">
                <h3 class="box-title">Buat Laporan Pengaduan</h3>
            </div>
            <form role="form">
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputtext1">Hari/tanggal</label>
                        <input type="date" class="form-control" id="exampleInputtext1" placeholder="Nama anda...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputtext1">Judul Pengaduan</label>
                        <input type="text" class="form-control" id="exampleInputtext1" placeholder="Nama anda...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputtext1">Nama</label>
                        <input type="text" class="form-control" id="exampleInputtext1" placeholder="Nama anda...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputtext1">Alamat</label>
                        <input type="text" class="form-control" id="exampleInputtext1" placeholder="Alamat anda...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputtext1">Nomor WA</label>
                        <input type="text" class="form-control" id="exampleInputtext1" placeholder="Alamat anda...">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputtext1">Deskripsi Pengaduan</label>
                        <textarea type="text" class="form-control" id="exampleInputtext1" placeholder="Jelaskan masalah..."></textarea>
                    </div>
                    <div class="form-group" style="padding: 12px;">
                        <h4>Bagaimana pendapat anda tentang Layanan BKD Online Rembang?</h4>
                        <div class="d-flex justify-between" style="margin-top: 32px">
                            <img src="{{ asset('excellence.png') }}" style="margin-right: 38px; cursor:pointer"
                                width="85" alt="">
                            <img src="{{ asset('good.png') }}" style="margin-right: 38px; cursor:pointer" width="75"
                                alt="">
                            <img src="{{ asset('average.png') }}" style="margin-right: 38px; cursor:pointer" width="80"
                                alt="">
                            <img src="{{ asset('poor.png') }}" style="margin-right: 38px; cursor:pointer" width="75"
                                alt="">
                            <img src="{{ asset('bad.png') }}" style="margin-right: 38px; cursor:pointer" width="70"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Kirim Tanggapan<i class="fa fa-paper-plane-o"
                            style="margin-left: 5px"></i></button>
                </div>
            </form>
        </div>
    </section>
@endsection
