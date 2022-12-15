@extends('layout')

@section('content')
@if (session('addData'))
    <div class="alert alert-success">
        {{session('addData')}}
    </div>
@endif 
<br>
<a href="/">Back</a>
<table class="table table-success table-striped table-bordered">
    <tr>
        <td>NIS</td>
        <td>Nama</td>
        <td>Rayon</td>
        <td>Tujuan</td>
        <td>Keterangan</td>
        <td>Tanggal</td>
        <td>Tanggal dikembalikan</td>
        <td>Guru</td>
        <td>Aksi</td>
    </tr>
    @foreach ( $laptops as $laptop)  
    <tr>  
        <td>{{ $laptop['nis'] }}</td>
        <td>{{ $laptop['name'] }}</td>
        <td>{{ $laptop['rayon'] }}</td>
        <td>{{ $laptop['purpose'] }}</td>
        <td>{{ $laptop['keterangan'] }}</td>
        <td>{{ $laptop['tanggal'] }}</td>
        <td>{{ $laptop['return_date'] }}</td>
        <td>{{ $laptop['teacher_name'] }}</td>
        <td class="d-flex">
            @if ($laptop->return_date == NULL)
            <form action="/update/{{ $laptop['id'] }}" method="post">
                @csrf
                @method('patch')
                <button class="btn btn-warning">Complated</button>
            </form>
            @endif
            <form action="/destroy/{{ $laptop['id'] }}" method="post">
                @csrf
                @method('delete')
                <button class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr> 
    @endforeach
@endsection
