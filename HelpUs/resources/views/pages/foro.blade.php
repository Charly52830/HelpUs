@extends('layouts.base')
@section('content')
	<div class="container"><div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-md-12"><h3 class="cursiva text-center">Bienvenido al Foro de HelpUs.</h3></div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<p class="text-center contenido-post">Aquí podrás encontrar las últimas 
					publicaciones escritas por nuestra comunidad y compartir con nosotros tus experiencias.</p>
					<p class="text-center contenido-post">No dudes en ayudar y en que serás ayudado.</p>
				</div>				
			</div>
		</div>
		<hr>
		<div class="container"><div class="container-fluid">
			<div class="row">
				<div class="col-md-3">
					<h3 class="cursiva">Todos los post</h3>
				</div>
				<div class="col-md-3 col-btn-nuevo">
					<a class="btn btn-light btn-nuevo" href="{{route('foro.nuevo')}}">NUEVO</a>
				</div>
			</div>
		</div></div>
		<table class="table table-hover link-foro">
			<thead>
			<tr>
				<th scope="col">Titulo</th>
				<th scope="col">Usuario</th>
				<th scope="col">Fecha</th>
				<th scope="col">Respuestas</th>
			<tr>
			</thead>
			<tbody>
			@foreach($publicaciones as $publicacion)
				<tr>
					<td><a class="helpus-font" href= "{{ route('publicaciones.get',$publicacion->id) }}  " >{{ $publicacion->titulo }}</a></td>
					<td></td>
					<td>{{$publicacion->fecha_pub}}</td>
					<td></td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div></div>
@stop
