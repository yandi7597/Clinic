@extends('layout/main')
@section('title',' : Edit Data Petugas')

@section('container')
<div class="col-lg-6">
    <div class="card">
        <form method="post" action="/petugas/{{$petugas->id}}">
            @method('patch')
                @csrf
                <div class="card-header"><strong>Edit</strong><small> Data</small></div>
                    <div class="card-body card-block">
                        <div class="mb-3">
                          <label class="form-label">Nama petugas</label>
                          <input type="text" name="nama_petugas" value="{{$petugas->nama_petugas}}" class="form-control @error('nama_petugas') is-invalid @enderror" placeholder="Ketik Nama Petugas">
                          @error('nama_petugas')
                              <div class="invalid-feedback{{$message}}"></div>
                          @enderror
                          <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Jabatan</label>
                            <input type="date" name="jabatan" value="{{$petugas->jabatan}}" class="form-control  @error('jabatan') is-invalid @enderror" placeholder="Ketik Jabatan">
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
                            <input type="text" name="no_hp" value="{{$petugas->no_hp}}" class="form-control  @error('no_hp') is-invalid @enderror" placeholder="Ketik No. Hp">
                            @error('no_hp')
                              <div class="invalid-feedback{{$message}}"></div>
                            @enderror
                            <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Username</label>
                            <input type="date" name="username" value="{{$petugas->username}}" class="form-control  @error('username') is-invalid @enderror" placeholder="Ketik Username">
                            @error('username')
                              <div class="invalid-feedback{{$message}}"></div>
                            @enderror
                            <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input type="date" name="password" value="{{$petugas->password}}" class="form-control  @error('password') is-invalid @enderror" placeholder="Ketik Password">
                            @error('password')
                              <div class="invalid-feedback{{$message}}"></div>
                            @enderror
                            <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update Data</button>
                        <a href="/petugas" class="btn btn-danger">Kembali</a>
                    </form>
                </div>
                </div>

@endsection