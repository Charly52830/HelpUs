@extends('layouts.base')
@section('content')
	<div class="container"><div class="container ">
		<div class="jumbotron">
			<p>Datos de la publicacion</p>
			<p>Titulo: {{ $publicacion->titulo }}</p>
			<p>Texto: {{ $publicacion->contenido }}</p>
			<p>Link imagen: {{ $publicacion->link_img }}</p>
			<p>Fecha: {{ $publicacion->fecha_pub }}</p>
		</div>
		<hr>
		<!-- Inicia sección de comentarios -->
		@yield('comentarios')
		<!-- Termina sección de comentarios -->
	</div></div>
@stop
