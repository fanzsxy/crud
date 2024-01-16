@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('guru') }}</div>

                <div class="card-body">
<a class="btn btn-primary" href="/guru/create"> tambah</a></button>
<br>
<table class="table table-hover">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Email</th>
        <th>No Telepon</th>
        <th>alamat</th>
        <th>barang</th>
        <th>satuan</th>
        <th>aksi</th>
    </tr>
    @foreach($guru as $g => $item)
    <tr>
    <td>{{$g+1}}</td>
        <td>{{$item->nama}}</td>
        <td>{{$item->email}}</td>
        <td>{{$item->no_telp}}</td>
        <td>{{$item->alamat}}</td>
        <td>{{$item->nama_barang}}</td>
        <td>{{$item->nama_satuan}}</td>
        <td> 
        <div class="btn-group" role="group" aria-label="Basic example">    
            <a class="btn btn-warning" href="{{ route('guru.edit', ['id' => $item->id, 'id_barang' => $item->id_barang]) }}">edit</a>
             <form action="/guru/{{$item->id}}" method="POST">
                @csrf
                @method('delete')
                <input class="btn btn-danger" type="submit" value="Delete">
             </form>
        </div>
    </td>
    </tr>
    @endforeach

</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

