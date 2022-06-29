@extends('layout/main')
@section('title',' : Tambah Data Pemeriksaan')

@section('container')
<div class="col-lg-6">
    <div class="card">
            <form method="post" action="/pemeriksaan">
                @csrf
                <div class="card-header"><strong>Tambah</strong><small> Data</small></div>
                <div class="card-body card-block">
                    <div class="mb-3">
                      <div class="mb-3">
                        <label class="form-label">Nama Pasien</label>
                        <select name="pasien" class="form-control">
                        <option value="">Pilih</option>
                        @foreach ($pasien as $item)
                        <option value="{{$item->nama_pasien}}"{{old('pasien')==$item->nama_pasien? 'selected':null}}>{{$item->nama_pasien}}</option> 
                        @endforeach
                        </select>
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Clinic</label>
                        <select name="clinic" class="form-control">
                        <option value="">Pilih</option>
                        @foreach ($clinic as $item)
                        <option value="{{$item->nama}}"{{old('clinic')==$item->nama? 'selected':null}}>{{$item->nama}}</option> 
                        @endforeach
                        </select>
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Nama Dokter</label>
                        <select name="dokter" class="form-control">
                        <option value="">Pilih</option>
                        @foreach ($dokter as $item)
                        <option value="{{$item->nama_dokter}}"{{old('dokter')==$item->nama_dokter? 'selected':null}}>{{$item->nama_dokter}}</option> 
                        @endforeach
                        </select>
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                      </div>
                      <div class="mb-3">
                        <label class="form-label">Tanggal</label>
                        <input type="date" name="tgl" value="{{old('tgl')}}" class="form-control  @error('tgl') is-invalid @enderror" placeholder="Masukkan Tanggal">
                        @error('tgl')
                          <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Hasil Pengujian</label>
                        <input type="text" name="hasil_pengujian" value="{{old('hasil_pengujian')}}" class="form-control @error('hasil_pengujian') is-invalid @enderror" placeholder="Ketik Hasil Pengujian">
                        @error('hasil_pengujian')
                          <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Biaya</label>
                        <input type="text" name="biaya" value="{{old('biaya')}}" class="form-control @error('biaya') is-invalid @enderror" placeholder="Ketik Biaya">
                        @error('biaya')
                          <div class="invalid-feedback{{$message}}"></div>
                        @enderror
                        <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                    </div>
                    <div class="mb-3">
                      <label class="form-label">Pajak</label>
                      <input type="text" name="pajak" value="{{old('pajak')}}" class="form-control @error('pajak') is-invalid @enderror" placeholder="Ketik Pajak">
                      @error('pajak')
                        <div class="invalid-feedback{{$message}}"></div>
                      @enderror
                      <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Total Biaya</label>
                    <input type="text" name="total_biaya" value="{{old('total_biaya')}}" class="form-control @error('total_biaya') is-invalid @enderror" placeholder="Ketik Total Biaya">
                    @error('total_biaya')
                      <div class="invalid-feedback{{$message}}"></div>
                    @enderror
                    <!--<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>-->
                </div>
        
            <button type="submit" class="btn btn-primary">Tambah Data</button>
            <a href="/pemeriksaan" class="btn btn-danger">Kembali</a>
        </form>
    </div>
    </div>
    
    @endsection