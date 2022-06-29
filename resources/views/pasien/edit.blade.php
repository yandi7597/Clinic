@extends('layout/main')
@section('title',' : Edit Data Pasien')

@section('container')
<div class="col-lg-6">
    <div class="card">
        <form method="post" action="/pasien/{{$pasien->id}}" enctype="multipart/form-data">
            @method('patch')
                @csrf
                <div class="card-header"><strong>Edit</strong><small> Data</small></div>
                    <div class="card-body card-block">
                        <div class="mb-3">
                          <label class="form-label">Nama pasien</label>
                          <input type="text" name="nama_pasien" value="{{$pasien->nama_pasien}}" class="form-control @error('nama_pasien') is-invalid @enderror" placeholder="Ketik Nama Pasien">
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
                            <input type="date" name="tgl_lahir" value="{{$pasien->tgl_lahir}}" class="form-control  @error('tgl_lahir') is-invalid @enderror" placeholder="Ketik Tanggal lahir">
                            @error('tgl_lahir')
                              <div class="invalid-feedback{{$message}}"></div>
                            @enderror
                            <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Alamat</label>
                            <input type="text" name="alamat" value="{{$pasien->alamat}}" class="form-control  @error('alamat') is-invalid @enderror" placeholder="Ketik Alamat">
                            @error('alamat')
                              <div class="invalid-feedback{{$message}}"></div>
                            @enderror
                            <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        <div class="mb-3">
                            <label class="form-label">No. Hp</label>
                            <input type="text" name="no_hp" value="{{$pasien->no_hp}}" class="form-control  @error('no_hp') is-invalid @enderror" placeholder="Ketik No. Hp">
                            @error('no_hp')
                              <div class="invalid-feedback{{$message}}"></div>
                            @enderror
                            <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                      @if($pasien->foto)
                        <img src="/post-images/{{$pasien->foto}}" width="100px" height="100px">
                      @else
                        <p>Tidak Ada Foto</p>
                      @endif
                      <br>
                      <div class="mb-3">
                        <label class="form-label">Foto</label>
                        <input type="file" name="foto" value="{{$pasien->foto}}" class="form-control  @error('foto') is-invalid @enderror" placeholder="Masukkan foto">
                        @error('foto')
                          <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                    </div>
                        
                        <button type="submit" class="btn btn-primary">Update Data</button>
                        <a href="/pasien" class="btn btn-danger">Kembali</a>
                    </form>
                </div>
                </div>

@endsection