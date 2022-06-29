@extends('layout/main')
@section('title',' : Tambah Data Dokter')

@section('container')
<div class="col-lg-6">
    <div class="card">
            <form method="post" action="/dokter" enctype="multipart/form-data">
                @csrf
                <div class="card-header"><strong>Tambah</strong><small> Data</small></div>
                <div class="card-body card-block">
                    <div class="mb-3">
                        <label class="form-label">Nama Dokter</label>
                        <input type="text" name="nama_dokter" value="{{old('nama_dokter')}}" class="form-control @error('nama_dokter') is-invalid @enderror" placeholder="Ketik Nama Dokter">
                        @error('nama_dokter')
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
                          <label class="form-label">Alamat</label>
                          <input type="text" name="alamat" value="{{old('alamat')}}" class="form-control  @error('alamat') is-invalid @enderror" placeholder="Ketik Alamat">
                          @error('alamat')
                            <div class="invalid-feedback{{$message}}"></div>
                          @enderror
                          <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      <div class="mb-3">
                          <label class="form-label">Tanggal Lahir</label>
                          <input type="date" name="tgl_lahir" value="{{old('tgl_lahir')}}" class="form-control  @error('tgl_lahir') is-invalid @enderror" placeholder="Masukkan Tanggal Lahir">
                          @error('tgl_lahir')
                            <div class="invalid-feedback{{$message}}"></div>
                          @enderror
                          <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Spesialis</label>
                        <input type="text" name="spesialis" value="{{old('spesialis')}}" class="form-control @error('spesialis') is-invalid @enderror" placeholder="Ketik Spesialis">
                        @error('spesialis')
                          <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
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
                        <label class="form-label">Email</label>
                        <input type="email" name="email" value="{{old('email')}}" class="form-control @error('email') is-invalid @enderror" placeholder="Ketik Email">
                        @error('email')
                          <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Username</label>
                        <input type="text" name="username" value="{{old('username')}}" class="form-control @error('username') is-invalid @enderror" placeholder="Ketik Username">
                        @error('username')
                          <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" value="{{old('password')}}" class="form-control @error('password') is-invalid @enderror" placeholder="Ketik Password">
                        @error('password')
                          <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Clinic</label>
                        <select name="clinic" class="form-control">
                        <option value="">Pilih</option>
                        @foreach ($clinic as $item)
                        <option value="{{$item->nama}}"{{old('clinic')==$item->nama? 'selected':null}}>{{$item->nama}}</option> 
                        @endforeach
                        </select>
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Foto</label>
                        <input type="file" name="foto" value="{{old('foto')}}" class="form-control @error('foto') is-invalid @enderror" placeholder="Masukkan Foto">
                        @error('foto')
                          <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
        
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <a href="/dokter" class="btn btn-danger">Kembali</a>
        </form>
    </div>
    </div>
    
    @endsection