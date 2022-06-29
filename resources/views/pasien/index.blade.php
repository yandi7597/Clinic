@extends('layout/main')
@section('title',' : Pasien')
    
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
                    <div class="content mt-3">
                      <div class="animated fadeIn">
                          <div class="row">
                          <div class="col-md-12">
                              <div class="card">
                                  <div class="card-header">
                                    <strong class="card-title">Data Pasien</strong>
                                  </div>
                                  <div class="card-body">
                                    <div class="card w-60">
                                      <div class="card-body">
                                        <h5 class="card-title">Tambah Data</h5>
                                        <p class="card-text">Klik Tambah Data untuk menambahkan data.</p>
                                        <a href="/pasien/create" class="btn btn-success my-3">Tambah Data</a>
                                      </div>
                                    </div>
                                    <form class="row" method="GET" action="{{url('/pasien')}}">
                                      <div class="col-md-4 offset-md-6 col-sm-4">
                                        <input type="text" class="form-control" name="keyword" placeholder="Pencarian">
                                      </div>
                                      <div class="col-auto">
                                        <button type="submit" class="btn btn-dark">Cari</button>
                                      </div>
                                    </form>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-12">
                                        <div class="table-responsive table--no-card m-b-30">
                                        <table class="table table-borderless table-striped table-earning">
                                    <thead>
                                      <tr>
                                        <th scope="col">No.</th>
                                        <th scope="col">Nama Pasien</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Alamat</th>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Action</th>
                                      </tr>
                                    </thead>
                                  
                                    <tbody>
                                      @foreach ($pasien as $psn)
                                      <tr>
                                        <th scope="row">{{$loop->iteration}}</th>
                                        <td>{{$psn->nama_pasien}}</td>
                                        <td>{{$psn->jk}}</td>
                                        <td>{{$psn->alamat}}</td>
                                        <td><img src="/post-images/{{$psn->foto}}" height="100px" width="100px"></td>
                                        <td>
                                            <a href="/pasien/{{$psn->id}}" class="btn btn-primary">Detail</a>
                                            <a href="/pasien/{{$psn->id}}/edit" class="btn btn-secondary">Edit</a>
                                            <form action="/pasien/{{$psn->id}}" method="POST" class="d-inline">
                                              @method('delete')
                                              @csrf
                                              <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                        </td>
                                      </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                              </div>
                            </div>
                          </div>
            
                                </div>
                            </div><!-- .animated -->
                        </div><!-- .content -->
                
      @endsection