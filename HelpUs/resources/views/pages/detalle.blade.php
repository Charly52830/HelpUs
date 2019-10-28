@extends('layouts.base')
@section('content')
    <div class="text-center">
        <h1>{{$acoso->nombre}}</h1>
    </div>


    <p class="text-justify"> {!! nl2br(e($acoso->descripcion)) !!}</p>

@stop
