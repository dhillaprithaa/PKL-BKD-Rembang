@extends('layouts.master')

@section('content')
    <section class="content-header text-center">
        <h1>
            SURVEY KEPUASAN MASYARAKAT
        </h1>
        <h4 style="margin-top:10px;">TERHADAP LAYANAN PENGADUAN</h4>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
            <li class="active">Statistik</li>
        </ol>

        <div class="box box-primary" style="margin-top:20px; max-width: 400px; margin-left: auto; margin-right: auto;">
            <div class="box-header with-border text-center">
                <h3 class="box-title">Form Survey</h3>
            </div>
            <form role="form">
                <div class="box-body" style="padding: 15px;">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama anda...">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail2">Alamat</label>
                        <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Alamat anda...">
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
                        <h5>Bagaimana penilaian Anda terhadap kualitas layanan BKD Online Rembang?</h5>
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
