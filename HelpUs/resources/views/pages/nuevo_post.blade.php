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
					<h5 class="helpus-font-3 text-center">No compartir información sensible personal ni de terceros. Si estás en una situación de riesgo comunícate con una autoridad inmediatamente.</h5>
				</div>
			</div>
		</div>
		<br>
		<hr>
			<h1 class="helpus-font-2">Nuevo tema de discusión</h1>
		<hr>

		<h3 class="cursiva"></h3>
		<div class="container">
			<form action="{{route('publicacion.create')}}" method="post">
				@csrf
				<div class="form-group">
					<label for="titulo" class="helpus-font-2 ">Titulo</label>
					<textarea class="form-control" name="titulo" id="titulo" rows="1" required></textarea>
				</div>
				<div class="form-group">
					<label for="titulo" class="helpus-font-2 ">Escribe aquí</label>
					<textarea class="form-control" name="contenido" id="contenido" rows="3" required></textarea>
				</div>
				<button type="submit" class="btn btn-light btn-nuevopost">Publicar</button>
			</form>
		</div>
	</div></div>
@stop
