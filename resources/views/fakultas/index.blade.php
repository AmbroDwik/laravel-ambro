
@extends('layout.master')

@section('title','Halaman falkultas')
@section('subtitile','Fakultas')
@section('content')


<p>ini Halaman fakultas</p>


<ul>
@foreach($dataFakultas as $item)
<li>{{$item}}</li>
@endforeach
</ul>
@endsection
