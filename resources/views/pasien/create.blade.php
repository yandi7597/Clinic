@extends('layout/main')
@section('title',' : Tambah Data Pasien')

@section('container')
<div class="col-lg-6">
    <div class="card">
            <form method="post" action="/pasien" enctype="multipart/form-data">
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
                        <label class="form-label">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" value="{{old('tgl_lahir')}}" class="form-control  @error('tgl_lahir') is-invalid @enderror" placeholder="Masukkan Tanggal Lahir">
                        @error('tgl_lahir')
                          <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
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
                        <label class="form-label">No. Hp</label>
                        <input type="text" name="no_hp" value="{{old('no_hp')}}" class="form-control @error('no_hp') is-invalid @enderror" placeholder="Ketik No. Hp">
                        @error('no_hp')
                          <div class="invalid-feedback{{$message}}"></div>
                        @enderror
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
            <a href="/pasien" class="btn btn-danger">Kembali</a>
        </form>
    </div>
    </div>
    
    @endsection