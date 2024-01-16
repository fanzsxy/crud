@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('tambah') }}</div>

                <div class="card-body">

<form action="/guru/store" method="POST">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nama</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">email</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">no telp</label>
    <input type="text" name="no_telp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">alamat</label>
    <textarea class="form-control" name="alamat" rows="10" ></textarea>
    </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">barang</label>
    <select name="barang" class="form-select @error('barang') is-invalid @enderror">
      <option value="">barang</option>
      @foreach ($barang as $guru)
      <option value="{{$guru->id_barang}}">{{$guru->nama_barang}}</option>
      @endforeach
    </select>
  </div>

    <input class="btn btn-primary" type="submit" name="submit" value="simpan">
</form>


</div>
            </div>
        </div>
    </div>
</div>

@endsection