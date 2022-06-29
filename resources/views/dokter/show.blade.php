@extends('layouts/main')
@section('title',' : Detail Dokter')
    
@section('container')

    <div class="col-4" style="margin-left:10px">
    <h3>Detail Dokter</h3>
    <br>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$dokter->nama_dokter}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$dokter->jk}}</h6>
          <h6 class="card-text">{{$dokter->alamat}}</h6>
          <h6 class="card-text">{{$dokter->tgl_lahir}}</h6>
          <h6 class="card-text">{{$dokter->spesialis}}</h6>
          <h6 class="card-text">{{$dokter->no_hp}}</h6>
          <h6 class="card-text">{{$dokter->email}}</h6>
          <h6 class="card-text">{{$dokter->username}}</h6>
          <h6 class="card-text">{{$dokter->password}}</h6>
          <h6 class="card-text">{{$dokter->clinic}}</h6>
          <br>
          <img src="/post-images/{{$dokter->foto}}" height="150px" width="150px">
          <br>
          <br>
          <a href="{{$dokter->id}}/edit" class="btn btn-secondary">Edit</a>
          <form action="{{$dokter->id}}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          <a href="/dokter" class="btn btn-success">Kembali</a>
        </div>
      </div>
</div>


@endsection