@extends('layouts.base')
@section('content')

<div class="container org-header">
	<div class="row">
		<div class="col-md-12">
			<h4 class="helpus-font-2 text-center">¡Bienvenido al Foro de HelpUs!</h4>
			<br>
			<h5 class="helpus-font-3 text-center">Aquí podrás encontrar las últimas
			publicaciones escritas por nuestra comunidad y compartir con nosotros tus experiencias.</h5>
			<p class="text-center contenido-post">No dudes en ayudar y en que serás ayudado.</p>
		</div>
	</div>
</div>
<br>
<br>
<hr>
	<h1 class="helpus-font-2">Todas las publicaciones</h1>
<hr>

		<table class="table table-hover link-foro">
			<thead>
			<tr>
				<th scope="col">Titulo</th>
				<th scope="col">Usuario</th>
				<th scope="col">Fecha</th>
				<th scope="col">Respuestas</th>
				<th><a class="btn btn-light btn-nuevopost" href="{{route('foro.nuevo')}}">Nuevo</a></th>
			<tr>
			</thead>
			<tbody>
			@foreach($publicaciones as $publicacion)
				<tr>
					<td><a  href= "{{ route('publicaciones.get',$publicacion->id) }}  " >{{ $publicacion->titulo }}</a></td>
					<td></td>
					<td>{{$publicacion->fecha_pub}}</td>
					<td></td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div></div>
@stop
