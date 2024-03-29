@extends('layouts.base')
@section('content')
<div class="container"><div class="container-fluid">
	@if ($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach ($errors->all() as $error)
			<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
	@endif

	<div class="container org-header">
		<div class="row">
			<div class="col-md-12">
				<h4 class="helpus-font-2 text-center">¡Recuerda!</h4>
				<br>
				<h5 class="helpus-font-3 text-center">
					No compartir información sensible  de terceros. Si estás en una situación de riesgo comunícate con una autoridad inmediatamente.
				</h5>
			</div>
		</div>
	</div>
	<br>
	<hr>
	<h1 class="helpus-font-2">Nuevo tema de discusión</h1>
	<hr>
	<div class="container">
		@guest
		<form action="{{route('publicacion.create')}}" method="post">
			@csrf
			<div class="form-group">
				<label for="titulo" class="cursiva">Titulo</label>
				<textarea class="form-control" name="titulo" id="titulo" rows="1" required></textarea>
			</div>
			<div class="form-group">
				<label for="titulo" class="cursiva">Escribe aquí</label>
				<textarea class="form-control" name="contenido" id="contenido" rows="3" required></textarea>
			</div>
			<button type="submit" class="btn btn-light btn-nuevopost">Publicar</button>
		</form>
		@else



		<form action="{{route('publicacion.createU')}}" method="post">
			@csrf
			<div class="row">

				<input type="checkbox" class="form-check-input " name="anonimo" id="anonimo" value="1">¿Quieres publicarlo de manera anonima?</br>
			</div>
			<div class="form-group">
				<label for="titulo" class="cursiva">Titulo</label>
				<textarea class="form-control" name="titulo" id="titulo" rows="1" required></textarea>
			</div>
			<div class="form-group">
				<label for="titulo" class="cursiva">Escribe aquí</label>
				<textarea class="form-control" name="contenido" id="contenido" rows="3" required></textarea>
			</div>
			<div class="row">
				<button type="submit" class="btn btn-light btn-nuevopost">Publicar</button>
				<h4 class="helpus-font-p post-fecha offset-9">Hola {{ Auth::user()->name }} </h4>
			</div>

		</form>

		@endguest

	</div>
</div>
</div>
@stop
