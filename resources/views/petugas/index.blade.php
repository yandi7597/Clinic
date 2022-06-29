@extends('layout/main')
@section('title',' : Petugas')
    
@section('container')
    <div class="col-md-12">
        @if (session('status'))
            <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
                <span class="badge badge-pill badge-success">Success</span>
                    {{session('status')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
        </div>
        @endif
        <h3>Data Petugas</h3>
            <div class="card-body">
                <div class="card w-60">
                  <div class="card-body">
                    <h5 class="card-title">Tambah Data</h5>
                    <p class="card-text">Klik Tambah Data untuk menambahkan data.</p>
                    <a href="/petugas/create" class="btn btn-success my-3">Tambah Data</a>
                  </div>
                </div>
                <form class="row" method="GET" action="{{url('/petugas')}}">
                    <div class="col-md-4 offset-md-6 col-sm-4">
                      <input type="text" class="form-control" name="keyword" placeholder="Pencarian">
                    </div>
                    <div class="col-auto">
                      <button type="submit" class="btn btn-primary">Cari</button>
                    </div>
                  </form>
                  <br>
    <ul class="list-group">
    @foreach ($petugas as $pgs)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        
        {{$pgs->nama_petugas}}   
        
        <a class="btn btn-primary" href="/petugas/{{$pgs->id}}">Detail</a>
       
    </li>
    @endforeach
    </ul>  
    
@endsection