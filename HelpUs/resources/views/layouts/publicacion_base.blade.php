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
			<div class="col-md-12 text-center crop"><h1 class="helpus-font-2">{{ $publicacion->titulo }} </h1></div>
		</div>
		@if ($publicacion->anonimo==1 || empty($publicacion->user_id))
		<div class="row">
			<div class="col-md-12">
				<h3 class="text-center helpus-font-p">Publicado por: </h3>
				<label class="text-center helpus-font-p">Anonimo</label>
			</div>

		</div>
		@else
		<div class="row">
			<div class="col-md-12 text-center helpus-font-p crop">
				Publicado por: {{$usuario}}
			</div>
		</div>
		@endif


		<div class="row">
			<div class="col-md-12 text-center post-fecha"> {{ $publicacion->created_at }} </div>
		</div>
		<hr>
	</br>



</br>
<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-10 text-justify helpus-font-p crop"> {!! nl2br(e($publicacion->contenido)) !!} </div>
	<div class="col-md-1"></div>
</div>
<br>
@guest

@else
@if ($publicacion->user_id == Auth::user()->id)
<div  style="text-align: right;">
	<td><a class="btn btn-success cursiva" href= "{{ route('publicaciones.getPublicacionU',$publicacion->id) }} "> Modificar Post </a></td>
	<td><a type="delete" class="btn btn-danger cursiva" href= "{{ route('publicaciones.delete', $publicacion->id) }}"> Eliminar Post </a></td>
</div>

@endif
@endguest
<hr>
<br>
<br>

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

								@if ( empty($comentarioName[$comentario->user_id]))
								<td><strong class="text-success">Anonimo</strong></td>
								@else
								@if ($comentario->anonimo==1 || empty($comentario->user_id))
								<td><strong class="text-success">Anonimo</strong></td>
								@else
								<td><strong class="text-success">{{$comentarioName[$comentario->user_id]}}</strong></td>
								@endif

								@endif


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
					@guest
					<div class="helpus-font-p">
						<p>Respuesta:</p>
						<form action="{{route('comentario.store')}}" method="post">
							@csrf

							<input  class="form-control" type="hidden" name="publicacion" value="{{$publicacion->id}}"
							id="publicacion"  >
							<textarea class="form-control" name="contenido" id="contenido" ></textarea>
							<br>
							<button type="submit"  class="btn btn-light btn-nuevopost">Publicar</button>
						</form>
					</div>
					@else
					<div class="helpus-font-p">
						<p>Respuesta:</p>
						<form action="{{route('comentario.createU')}}" method="post">
							@csrf

							<input type="hidden" name="publicacion" value="{{$publicacion->id}}"
							id="publicacion"  >
							<textarea class="form-control" name="contenido" id="contenido" ></textarea>
							<br>
							<input type="checkbox" class="helpus-font-p form-check-input " name="anonimo" id="anonimo" value="1">¿Quieres publicarlo de manera anonima?</br>
						</br>

						<button type="submit"  class="btn btn-light btn-nuevopost">Publicar</button>
					</form>
				</div>

				@endguest

				<div class="clearfix"></div>

			</div>
		</div>
	</div>
</div>
</div>

</div></div>
@stop
