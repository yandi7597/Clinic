@extends('layout/main')
@section('title',' : Edit Data Dokter')

@section('container')
<div class="col-lg-6">
    <div class="card">
        <form method="post" action="/dokter/{{$dokter->id}}" enctype="multipart/form-data">
            @method('patch')
                @csrf
                <div class="card-header"><strong>Edit</strong><small> Data</small></div>
                    <div class="card-body card-block">
                        <div class="mb-3">
                          <label class="form-label">Nama dokter</label>
                          <input type="text" name="nama_dokter" value="{{$dokter->nama_dokter}}" class="form-control @error('nama_dokter') is-invalid @enderror" placeholder="Ketik Nama Dokter">
                          @error('nama_dokter')
                              <div class="invalid-feedback{{$message}}"></div>
                          @enderror
                          <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        <div class="form-group">
                            <div class="mb-3">
                              <label class="form-label">Jenis Kelamin</label>
                                    <select name="jk" id="select" class="form-control">
                                      <option value="Laki-laki">Laki-laki</option>
                                      <option value="Perempuan">Perempuan</option>
                                    </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" name="alamat" value="{{$dokter->alamat}}" class="form-control  @error('alamat') is-invalid @enderror" placeholder="Ketik Alamat">
                            @error('alamat')
                              <div class="invalid-feedback{{$message}}"></div>
                            @enderror
                            <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tanggal Lahir</label>
                            <input type="date" name="tgl_lahir" value="{{$dokter->tgl_lahir}}" class="form-control  @error('tgl_lahir') is-invalid @enderror" placeholder="Ketik Tanggal lahir">
                            @error('tgl_lahir')
                              <div class="invalid-feedback{{$message}}"></div>
                            @enderror
                            <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Spesialis</label>
                            <input type="text" name="spesialis" value="{{$dokter->spesialis}}" class="form-control @error('spesialis') is-invalid @enderror" placeholder="Ketik Spesialis">
                            @error('spesialis')
                              <div class="invalid-feedback{{$message}}"></div>
                            @enderror
                            <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No. Hp</label>
                            <input type="text" name="no_hp" value="{{$dokter->no_hp}}" class="form-control  @error('no_hp') is-invalid @enderror" placeholder="Ketik No. Hp">
                            @error('no_hp')
                              <div class="invalid-feedback{{$message}}"></div>
                            @enderror
                            <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email</label>
                            <input type="email" name="email" value="{{$dokter->email}}" class="form-control  @error('email') is-invalid @enderror" placeholder="Ketik Email">
                            @error('email')
                              <div class="invalid-feedback{{$message}}"></div>
                            @enderror
                            <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="text" name="username" value="{{$dokter->username}}" class="form-control  @error('username') is-invalid @enderror" placeholder="Ketik Username">
                            @error('username')
                              <div class="invalid-feedback{{$message}}"></div>
                            @enderror
                            <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="password" name="password" value="{{$dokter->password}}" class="form-control  @error('password') is-invalid @enderror" placeholder="Ketik Password">
                            @error('password')
                              <div class="invalid-feedback{{$message}}"></div>
                            @enderror
                            <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Clinic</label>
                          <select name="clinic"  class="form-control">
                          <option value="">Pilih</option>
                          @foreach($clinic as $item)
                          <option value="{{$item->nama}}"{{$dokter->clinic==$item->nama? 'selected':null}}>{{$item->nama}}</option>
                          @endforeach
                          </select>
                          <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        @if($dokter->foto)
                          <img src="/post-images/{{$dokter->foto}}" width="100px" height="100px">
                        @else
                          <p>Tidak Ada Foto</p>
                        @endif
                        <br>
                        <br>
                        <div class="mt-3">
                          <label class="form-label">Foto</label>
                          <input type="file" name="foto" value="{{$dokter->foto}}" class="form-control  @error('foto') is-invalid @enderror" placeholder="Masukkan foto">
                          @error('foto')
                            <div class="invalid-feedback{{$message}}"></div>
                          @enderror
                          <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                        
                        <button type="submit" class="btn btn-primary">Update Data</button>
                        <a href="/dokter" class="btn btn-danger">Kembali</a>
                    </form>
                </div>
                </div>

@endsection