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
            @if ($publicacion->anonimo==1 || empty($publicacion->user_id))
                <div class="row">
                    <h3 class="text-center cursiva">Publicado por: </h3>
                    <label class="text-center">Anonimo</label>
                </div>
                @else
                    <div class="row">
                        <label class="text-center cursiva">Publicado por:</label>
                        <label class="text-center">{{$usuario}}</label>
                    </div>
            @endif
			<div class="row">
                <h1 class="cursiva">Titulo</h1>
				<div class="col-md-12 text-center"><h1 class="titulo-post">{{ $publicacion->titulo }} </h1></div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center post-fecha"> {{ $publicacion->created_at }} </div>
			</div>
            </br>


            <hr>
                </br>
			<div class="row">
                <h3 class="text-center cursiva">Contenido de la Publicación:</h3>
				<div class="col-md-12 text-justify contenido-post" style="border: #1b1e21"> {!! nl2br(e($publicacion->contenido)) !!} </div>
			</div>
		</div>
		<br>
		<hr>
            <h3 class="cursiva">Comentarios a esta publicación:</h3>
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

                                            @if ( empty($comentarioName[$comentario->user_id]))
                                                <td><strong class="text-success">Anonimo</strong></td>
                                            @else
                                                @if ($comentario->anonimo==1 || empty($comentario->user_id))
                                                    <td><strong class="text-success">Anonimo</strong></td>
                                                @else
                                                    <td><strong class="text-success">{{$comentarioName[$comentario->user_id]}}</strong></td>
                                                @endif

                                            @endif


										<p>{!!nl2br(e($comentario->respuesta)) !!}</p>
									</div>
								</li>
								<br>
								@endforeach
							</ul>
                            @guest
                                <form action="{{route('comentario.store')}}" method="post">
                                    @csrf

                                    <input type="hidden" name="publicacion" value="{{$publicacion->id}}"
                                           id="publicacion"  >
                                    <textarea class="form-control" name="contenido" id="contenido" ></textarea>
                                    <br>
                                    <button type="submit"  class="btn btn-light btn-nuevo">Publicar</button>
                                </form>
                            @else
                                <form action="{{route('comentario.createU')}}" method="post">
                                    @csrf

                                    <input type="hidden" name="publicacion" value="{{$publicacion->id}}"
                                           id="publicacion"  >
                                    <textarea class="form-control" name="contenido" id="contenido" ></textarea>
                                    <br>
                                    <input type="checkbox" class="form-check-input " name="anonimo" id="anonimo" value="1">¿Quieres publicarlo de manera anonima?</br>
                                    <button type="submit"  class="btn btn-light btn-nuevo">Publicar</button>
                                </form>

                            @endguest

							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<hr>
	</div></div>
@stop
