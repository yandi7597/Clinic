@extends('layout/main')
@section('title',' : Edit Data Clinic')

@section('container')
<div class="col-lg-6">
    <div class="card">
        <form method="post" action="/clinic/{{$clinic->id}}">
            @method('patch')
                @csrf
                <div class="card-header"><strong>Edit</strong><small> Data</small></div>
                    <div class="card-body card-block">
                        <div class="mb-3">
                          <label class="form-label">Nama Clinic</label>
                          <input type="text" name="nama" value="{{$clinic->nama}}" class="form-control @error('nama') is-invalid @enderror" placeholder="Ketik Nama Clinic">
                          @error('nama')
                              <div class="invalid-feedback{{$message}}"></div>
                          @enderror
                          <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update Data</button>
                        <a href="/clinic" class="btn btn-danger">Kembali</a>
                    </form>
                </div>
                </div>

@endsection