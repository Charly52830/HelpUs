@extends('layouts.base')
@section('content')
    <!--
        Esta es la vista del acoso seleccionado
    -->
    <div class="text-center">
        <h1>{{$acoso->nombre}}</h1>
    </div>
    <!--
        Selecciona la descripcion del acoso que se le es pasado por el metodo get
    -->

    <p class="text-justify"> {!! nl2br(e($acoso->descripcion)) !!}</p>

@stop
