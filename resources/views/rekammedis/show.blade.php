@extends('layout/main')
@section('title',' : Detail Rekam Medis')
    
@section('container')

    <div class="col-4" style="margin-left:10px">
    <h3>Detail Rekam Medis</h3>
    <br>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$rekammedis->nama_pasien}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$rekammedis->keluhan}}</h6>
          <h6 class="card-text">{{$rekammedis->tgl}}</h6>
          <h6 class="card-text">{{$rekammedis->nama_dokter}}</h6>
          <br>
          <a href="{{$rekammedis->id}}/edit" class="btn btn-secondary">Edit</a>
          <form action="{{$rekammedis->id}}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          <a href="/rekammedis" class="btn btn-success">Kembali</a>
        </div>
      </div>
</div>
@endsection