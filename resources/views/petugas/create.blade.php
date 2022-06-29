@extends('layout/main')
@section('title',' : Tambah Data Petugas')

@section('container')
<div class="col-lg-6">
    <div class="card">
            <form method="post" action="/petugas">
                @csrf
                <div class="card-header"><strong>Tambah</strong><small> Data</small></div>
                <div class="card-body card-block">
                    <div class="mb-3">
                        <label class="form-label">Nama Petugas</label>
                        <input type="text" name="nama_petugas" value="{{old('nama_petugas')}}" class="form-control @error('nama_petugas') is-invalid @enderror" placeholder="Ketik Nama Petugas">
                        @error('nama_petugas')
                            <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Jabatan</label>
                        <input type="text" name="jabatan" value="{{old('jabatan')}}" class="form-control  @error('jabatan') is-invalid @enderror" placeholder="Masukkan Jabatan">
                        @error('jabatan')
                          <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                    </div>
                      <div class="form-group">
                        <div class="mb-3">
                          <label class="form-label">Jenis Kelamin</label>
                                <select name="jk" id="select" class="form-control" required>
                                  <option value="Laki-laki">Laki-laki</option>
                                  <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                      </div>
                      <div class="mb-3">
                        <label class="form-label">No. Hp</label>
                        <input type="text" name="no_hp" value="{{old('no_hp')}}" class="form-control @error('no_hp') is-invalid @enderror" placeholder="Ketik No. Hp">
                        @error('no_hp')
                          <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" value="{{old('username')}}" class="form-control  @error('username') is-invalid @enderror" placeholder="Masukkan Username">
                        @error('username')
                          <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" value="{{old('password')}}" class="form-control  @error('password') is-invalid @enderror" placeholder="Masukkan Password">
                        @error('password')
                          <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                    </div>
        
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <a href="/petugas" class="btn btn-danger">Kembali</a>
        </form>
    </div>
    </div>
    
    @endsection