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
			<div class="row">
				<div class="col-md-12 text-center"><h1 class="titulo-post">{{ $publicacion->titulo }} </h1></div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center post-fecha"> {{ $publicacion->created_at }} </div>
			</div>
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10 text-justify contenido-post"> {!! nl2br(e($publicacion->contenido)) !!} </div>
				<div class="col-md-1"></div>
			</div>
		</div>
		<br>
		<hr>
		<div class="row bootstrap snippets">
			<div class="col-md-12 col-md-offset-12 col-sm-12">
				<div class="comment-wrapper">
					<div class="panel panel-info">
						<div class="panel-body">
							<ul class="media-list">
								@foreach ($comentarios as $comentario)
								<li class="media">
									<a href="#" class="pull-left">
										<img class="img-responsive user-photo" 
										src="https://c.disquscdn.com/uploads/users/11626/2212/avatar92.jpg?1406657745">&nbsp;&nbsp;
									</a>
									<div class="media-body">
										<span class="text-muted pull-right">
											<small class="text-muted">{{$comentario->created_at}}</small>
										</span>
										<strong class="text-success">Anónimo</strong>
										<p>{!!nl2br(e($comentario->respuesta)) !!}</p>
									</div>
								</li>
								<br>
								@endforeach
							</ul>
							<form action="{{route('comentario.store')}}" method="post">
								@csrf
								<input type="hidden" name="publicacion" value="{{$publicacion->id}}"
								id="publicacion"  >
								<textarea class="form-control" name="contenido" id="contenido" ></textarea>
								<br>
								<button type="submit"  class="btn btn-light btn-nuevo">Publicar</button>
							</form>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr>
	</div></div>
@stop
