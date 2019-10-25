@extends('layouts.base')
@section('content')
@section('seccion')
    <div class="text-center">
        <h1>{{$acoso->nombre}}</h1>
    </div>


    <p class="text-justify"> {{$acoso->descripcion}}</p>

@endsection
