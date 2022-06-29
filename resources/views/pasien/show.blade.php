@extends('layout/main')
@section('title',' : Detail Pasien')
    
@section('container')

    <div class="col-4" style="margin-left:10px">
    <h3>Detail Pasien</h3>
    <br>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$pasien->nama_pasien}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$pasien->jk}}</h6>
          <h6 class="card-text">{{$pasien->tgl_lahir}}</h6>
          <h6 class="card-text">{{$pasien->alamat}}</h6>
          <h6 class="card-text">{{$pasien->no_hp}}</h6>
          <br>
          <img src="/post-images/{{$pasien->foto}}" height="150px" width="150px">
          <br>
          <br>
          <a href="{{$pasien->id}}/edit" class="btn btn-secondary">Edit</a>
          <form action="{{$pasien->id}}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          <a href="/pasien" class="btn btn-success">Kembali</a>
        </div>
      </div>
</div>


@endsection