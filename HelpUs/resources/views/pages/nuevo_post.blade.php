@extends('layouts.base')
@section('content')
	<div class="container"><div class="container-fluid">
		<div class="jumbotron">
			<h1> Inserta algo cul aquí</h1>
		</div>
		<hr>
		<h3 class="cursiva">Nuevo tema de discusión</h3>
		<div class="container">
			<form action="{{route('publicacion.create')}}" method="post">
				@csrf
				<div class="form-group">
					<label for="titulo" class="cursiva">Titulo</label>
					<textarea class="form-control" name="titulo" id="titulo" rows="1"></textarea>
				</div>
				<div class="form-group">
					<label for="titulo" class="cursiva">Escribe aquí</label>
					<textarea class="form-control" name="contenido" id="contenido" rows="3"></textarea>
				</div>
				<div class="form-group">
					<label for="titulo" class="cursiva">Imagen</label>
					<textarea class="form-control" name="link_img" id="link_img" rows="1"></textarea>
				</div>
				<div class="form-group">
					<label for="titulo" class="cursiva">Fecha</label>
					<input type="date" name="fecha_pub" class="form-control">
				</div>
				<button type="submit" class="btn btn-light btn-nuevo">Publicar</button>
			</form>
		</div>
	</div></div>
@stop
