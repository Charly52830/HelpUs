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
		<div class="container">
			<hr>
			<div class="row">

				<div class="col-md-12 text-center crop"><h1 class="helpus-font-2">{{ $publicacion->titulo }} </h1></div>

			</div>
			<hr>
			<div class="row">
				<div class="col-md-12 text-center post-fecha"> {{ $publicacion->created_at }} </div>
			</div>
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10 text-justify helpus-font-p crop"> {!! nl2br(e($publicacion->contenido)) !!} </div>
				<div class="col-md-1"></div>
			</div>
		</div>
		<br>
		<br>
		<hr>
		<h3 class="helpus-font-2">Sección de respuestas</h3>
		<br>

		<div class="row bootstrap snippets ">
			<div class="col-md-12 col-md-offset-12 col-sm-12">
				<div class="comment-wrapper">
					<div class="panel panel-info">
						<div class="panel-body">
							<ul class="media-list">
								@foreach ($comentarios as $comentario)
								<li class="media jumbotron">
									<a href="#" class="pull-left">
										<img class="img-responsive user-photo"
										src="https://c.disquscdn.com/uploads/users/11626/2212/avatar92.jpg?1406657745">&nbsp;&nbsp;
									</a>
									<div class="media-body">
										<span class="text-muted pull-right">
											<small class="text-muted">{{$comentario->created_at}}</small>
										</span>
										<strong class="text-success">Anónimo</strong>

											<div class=" text-justify helpus-font-p crop"> {!! nl2br(e($comentario->respuesta)) !!} </div>




									</div>
								</li>
								<br>
								@endforeach
							</ul>
							<br>
							<br>
							<hr>
							<h3 class="helpus-font-2">Compartenos tu respuesta</h3>
							<br>
							<div class="helpus-font-p">
								<p>Respuesta:</p>
								<form action="{{route('comentario.store')}}" method="post">
									@csrf
									<input type="hidden" name="publicacion" value="{{$publicacion->id}}"
									id="publicacion"  >
									<textarea class="form-control" name="contenido" id="contenido" ></textarea>
									<br>
									<button type="submit"  class="btn btn-light btn-nuevopost">Publicar</button>
								</form>
							</div>


						</div>
					</div>
				</div>
			</div>
		</div>

	</div></div>
@stop
