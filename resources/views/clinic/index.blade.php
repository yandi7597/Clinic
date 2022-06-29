@extends('layout/main')
@section('title',' : Clinic')
    
@section('container')
    <div class="col-8" style="margin-left:50px">
        <br>
        <div class="col-md-12">
        @if (session('status'))
        <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
            <span class="badge badge-pill badge-success">Success</span>
            {{session('status')}}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif
        
        <h3>Data Clinic</h3>
        <div class="card-body">
            <div class="card w-60">
              <div class="card-body">
                <h5 class="card-title">Tambah Data</h5>
                <p class="card-text">Klik Tambah Data untuk menambahkan data.</p>
                <a href="/clinic/create" class="btn btn-success my-3">Tambah Data</a>
              </div>
            </div>
              
    
    <ul class="list-group">
    @foreach ($clinic as $cln)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        
        {{$cln->nama}}   
        
        
        
          <form action="/clinic/{{$cln->id}}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
            <a href="/clinic/{{$cln->id}}/edit" class="btn btn-secondary">Edit</a>
          </form>
          
       
    </li>
    
    @endforeach
    </ul>  
    

@endsection