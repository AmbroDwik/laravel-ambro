
@extends('layout.master')

@section('title','Halaman falkultas')
@section('subtitile','Fakultas')
@section('content')


<p>ini Halaman fakultas</p>
{{--{{$fikr}}--}}


<table class= "table table-hover">
    <thead>
        <tr><th>Nama Fakultas</th></tr>
    </thead>
    <tbody>
        @foreach($dataFakultas as $item)
        <tr><td>{{$item}}</td></tr>
        @endforeach
    </tbody>

</table>
@endsection
