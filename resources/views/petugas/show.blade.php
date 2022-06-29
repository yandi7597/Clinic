@extends('layout/main')
@section('title',' : Detail Petugas')
    
@section('container')

    <div class="col-4" style="margin-left:10px">
    <h3>Detail Petugas</h3>
    <br>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$petugas->nama_petugas}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$petugas->jabatan}}</h6>
          <h6 class="card-text">{{$petugas->jk}}</h6>
          <h6 class="card-text">{{$petugas->no_hp}}</h6>
          <h6 class="card-text">{{$petugas->username}}</h6>
          <h6 class="card-text">{{$petugas->password}}</h6>
          <br>
          <a href="{{$petugas->id}}/edit" class="btn btn-secondary">Edit</a>
          <form action="{{$petugas->id}}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          <a href="/petugas" class="btn btn-success">Kembali</a>
        </div>
      </div>
</div>
@endsection