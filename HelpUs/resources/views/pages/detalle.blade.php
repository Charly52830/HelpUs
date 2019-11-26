@extends('layouts.base')
@section('content')
<!--
Esta es la vista del acoso seleccionado

<div class="text-center">
<h1>{{$acoso->nombre}}</h1>
</div>

-->
<p class="text-justify"> {!!  html_entity_decode($acoso->descripcion) !!}</p>














@stop
