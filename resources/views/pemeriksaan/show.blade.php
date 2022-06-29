@extends('layout/main')
@section('title',' : Detail Pemeriksaan')
    
@section('container')

    <div class="col-4" style="margin-left:10px">
    <h3>Detail Pemeriksaan</h3>
    <br>
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$pemeriksaan->nama_pasien}}</h5>
          <h6 class="card-subtitle mb-2 text-muted">{{$pemeriksaan->clinic}}</h6>
          <h6 class="card-text">{{$pemeriksaan->nama_dokter}}</h6>
          <h6 class="card-text">{{$pemeriksaan->tgl}}</h6>
          <h6 class="card-text">{{$pemeriksaan->hasil_pengujian}}</h6>
          <h6 class="card-text">{{$pemeriksaan->biaya}}</h6>
          <h6 class="card-text">{{$pemeriksaan->pajak}}</h6>
          <h6 class="card-text">{{$pemeriksaan->total_biaya}}</h6>
          <br>
          <a href="{{$pemeriksaan->id}}/edit" class="btn btn-secondary">Edit</a>
          <form action="{{$pemeriksaan->id}}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
          </form>
          <a href="/pemeriksaan" class="btn btn-success">Kembali</a>
        </div>
      </div>
</div>


@endsection