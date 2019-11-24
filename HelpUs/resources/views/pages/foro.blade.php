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
                <th></th>
                <th></th>
            </tr>
            </thead>
            @guest
            @else
                <hr>
                <a class="btn  btn-primary cursiva align-middle" href="{{ route('publicaciones.getPostU', Auth::user()->id)}}">Ver mis publicaciones</a>
                </br>
                </br>
            @endguest
            <tbody>
            @foreach($publicaciones as $publicacion)
                <tr>
                    <td><a class="helpus-font" href= "{{ route('publicaciones.get',$publicacion->id) }}  " >{{ $publicacion->titulo }}</a></td>
                    @if ( !empty($arryN[$publicacion->id]))
                        <td>Anonimo</td>
                    @else
                        @if ($publicacion->anonimo==1)
                            <td>Anonimo</td>
                        @else
                            <td>{{$arrayN[$publicacion->id]}}</td>
                        @endif

                    @endif
                    <td class="text-center post-fecha" >{{$publicacion->update_at}}</td>
                    @if ( empty($arrayC[$publicacion->id]))
                        <td>0</td>
                    @else
                        <td>{{$arrayC[$publicacion->id]}} </td>
                    @endif

                </tr>
            @endforeach
            </tbody>
        </table>
    </div></div>
@stop
