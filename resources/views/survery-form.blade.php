@extends('layouts.master')


@section('content')
    <section class="content-header text-center">
        <h1>
            SURVEY KEPUASAN MASYARAKAT
        </h1>
        <h4 style="margin-top:10px; ">TERHADAP LAYANAN PENGADUAN</h4>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
            <li class="active">Statistik</li>
        </ol>

        <div class="box box-primary" style="margin-top:30px; ">
            <div class="box-header with-border">
                <h3 class="box-title">Form Survey</h3>
            </div>
            <form role="form">
                <div class="box-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Nama anda...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Alamat</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Alamat anda...">
                    </div>
                    <div class="form-group">
                        <label for="usia">Usia</label>
                        <select class="form-control" id="usia" name="usia">
                            <option value="" disabled selected>Pilih Usia</option>
                            <option value="17-25">17-25</option>
                            <option value="26-45">26-45</option>
                            <option value="46-60">46-60</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="jenisKelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenisKelamin" name="jenisKelamin">
                            <option value="" disabled selected>Pilih Jenis Kelamin</option>
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                        </select>
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
