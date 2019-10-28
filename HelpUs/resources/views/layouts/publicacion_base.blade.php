@extends('layouts.base')
@section('content')
	<div class="container"><div class="container ">
		<br>
		@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif
		<div class="jumbotron">
			<p>Datos de la publicacion</p>
			<p>Titulo: {{ $publicacion->titulo }}</p>
			<p>Texto: {{ $publicacion->contenido }}</p>
			<p>Link imagen: {{ $publicacion->link_img }}</p>
			<p>Fecha: {{ $publicacion->fecha_pub }}</p>
		</div>

		<div class="row bootstrap snippets">
			<div class="col-md-12 col-md-offset-12 col-sm-12">
				<div class="comment-wrapper">
					<div class="panel panel-info">
						<div class="panel-body">
							<ul class="media-list">
								@foreach ($comentarios as $comentario)
								<li class="media">
									<a href="#" class="pull-left">
										<img src="https://bootdey.com/img/Content/user_1.jpg" alt="" class="img-circle">
									</a>
									<div class="media-body">
										<span class="text-muted pull-right">
											<small class="text-muted">{{$comentario->created_at}}</small>
										</span>
										<strong class="text-success">Anónimo</strong>
										<p>
											{{ $comentario->respuesta }}
										</p>
									</div>
								</li>
								<br>
								@endforeach
							</ul>
							<hr>
							<form action="{{route('comentario.store')}}" method="post">
								@csrf
								<input type="hidden" name="publicacion" value="{{$publicacion->id}}"
								id="publicacion"  >
								<textarea class="form-control" name="contenido" id="contenido" required></textarea>

							<button type="submit"  class="btn btn-light btn-nuevo">Publicar</button>
							</form>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

			</div>
		</div>

		<!-- Inicia sección de comentarios



		<!-- Termina sección de comentarios -->
		<hr>
	</div></div>
@stop
