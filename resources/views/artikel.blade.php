@extends('layouts.template')
@section('content')
<div style="margin-left: 300px;">
<table border="1">
    <thead>
        <td>ID</td>
        <td>Judul</td>
        <td>Penulis</td>
        <td>Tahun Terbit</td>
    </thead>
    @foreach($artikels as $artikel)
    <tr>
        <td>{{$artikel->id}}</td>
        <td>{{$artikel->judul}}</td>
        <td>{{$artikel->penulis}}</td>
        <td>{{$artikel->tanggal_terbit}}</td>
    </tr>
    @endforeach
</table>
</div>

@endsection