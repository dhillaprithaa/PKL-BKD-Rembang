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

        <div class="box box-primary" style="margin-top:20px; max-width: 400px; margin-left: auto; margin-right: auto;">
            <div class="box-header with-border text-center">
                <h3 class="box-title">Buat Laporan Pengaduan</h3>
            </div>
            <form role="form">
                <div class="box-body" style="padding: 15px;">
                    <div class="form-group">
                        <label for="exampleInputtext1">Hari/Tanggal</label>
                        <input type="date" class="form-control" id="exampleInputtext1">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputtext2">Judul Pengaduan</label>
                        <input type="text" class="form-control" id="exampleInputtext2" placeholder="Judul pengaduan...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputtext3">Nama</label>
                        <input type="text" class="form-control" id="exampleInputtext3" placeholder="Nama anda...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputtext4">Alamat</label>
                        <input type="text" class="form-control" id="exampleInputtext4" placeholder="Alamat anda...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputtext5">Nomor WA</label>
                        <input type="text" class="form-control" id="exampleInputtext5" placeholder="Nomor WA anda...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputtext6">Deskripsi Pengaduan</label>
                        <textarea class="form-control" id="exampleInputtext6" placeholder="Jelaskan masalah..."></textarea>
                    </div>
                    <div class="form-group" style="padding: 10px;">
                        <h5>Bagaimana pendapat anda tentang Layanan BKD Online Rembang?</h5>
                        <div class="d-flex justify-between" style="margin-top: 16px; display: flex; justify-content: space-around;">
                            <img src="{{ asset('excellence.png') }}" style="cursor:pointer" width="50" alt="">
                            <img src="{{ asset('good.png') }}" style="cursor:pointer" width="50" alt="">
                            <img src="{{ asset('average.png') }}" style="cursor:pointer" width="50" alt="">
                            <img src="{{ asset('poor.png') }}" style="cursor:pointer" width="50" alt="">
                            <img src="{{ asset('bad.png') }}" style="cursor:pointer" width="50" alt="">
                        </div>
                    </div>
                </div>
                <div class="box-footer text-center">
                    <button type="submit" class="btn btn-primary">Kirim Tanggapan<i class="fa fa-paper-plane-o" style="margin-left: 5px"></i></button>
                </div>
            </form>
        </div>
    </section>
@endsection
