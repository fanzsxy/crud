@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('guru') }}</div>

                <div class="card-body">

<form action="/guru/{{$guru->id}}" method="POST">
    @method('PUT')

    @csrf

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">nama</label>
    <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$guru->nama}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">email</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$guru->email}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">no telp</label>
    <input type="text" name="no_telp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$guru->no_telp}}">
  </div>
  
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">alamat</label>
    <textarea class="form-control" name="alamat" rows="10" >{{$guru->alamat}}</textarea>
    </div>

    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">barang</label>
    <select name="barang" class="form-select @error('barang') is-invalid @enderror">
      <option value="">pilih barang</option>
      @foreach ($barang as $barang)
      <option value="{{$barang->id_barang}}">{{$barang->nama_barang}}</option>
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