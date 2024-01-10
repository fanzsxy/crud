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
        <th>Nama</th>
        <th>Email</th>
        <th>No Telepon</th>
        <th>alamat</th>
        <th>aksi</th>
    </tr>
    @foreach($guru as $g)
    <tr>
        <td>{{$g->nama}}</td>
        <td>{{$g->email}}</td>
        <td>{{$g->no_telp}}</td>
        <td>{{$g->alamat}}</td>
        <td> 
        <div class="btn-group" role="group" aria-label="Basic example">    
            <a class="btn btn-warning" href="/guru/{{$g->id}}/edit">edit</a>
             <form action="/guru/{{$g->id}}" method="POST">
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

