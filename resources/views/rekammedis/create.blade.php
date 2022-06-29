@extends('layout/main')
@section('title',' : Tambah Data Rekam Medis')

@section('container')
<div class="col-lg-6">
    <div class="card">
            <form method="post" action="/rekammedis">
                @csrf
                <div class="card-header"><strong>Tambah</strong><small> Data</small></div>
                <div class="card-body card-block">
                    <div class="mb-3">
                        <label class="form-label">Nama Pasien</label>
                        <input type="text" name="nama_pasien" value="{{old('nama_pasien')}}" class="form-control @error('nama_pasien') is-invalid @enderror" placeholder="Ketik Nama Pasien">
                        @error('nama_pasien')
                            <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Keluhan</label>
                        <input type="text" name="keluhan" value="{{old('keluhan')}}" class="form-control  @error('keluhan') is-invalid @enderror" placeholder="Ketik Keluhan">
                        @error('keluhan')
                          <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                    </div>
                      <div class="mb-3">
                        <label class="form-label">Tanggal</label>
                        <input type="date" name="tgl" value="{{old('tgl')}}" class="form-control  @error('tgl') is-invalid @enderror" placeholder="Masukkan Tanggal ">
                        @error('tgl')
                          <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama Dokter</label>
                        <input type="text" name="nama_dokter" value="{{old('nama_dokter')}}" class="form-control @error('nama_dokter') is-invalid @enderror" placeholder="Ketik Nama Dokter">
                        @error('nama_dokter')
                            <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
        
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <a href="/rekammedis" class="btn btn-danger">Kembali</a>
        </form>
    </div>
    </div>
    
    @endsection