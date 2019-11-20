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
            @guest
            @else
                <h2 class="cursiva">Hola {{ Auth::user()->name }} </h2>
            @endguest
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center contenido-post">Recuerda no compartir información sensible personal ni de terceros.
                            Si estás en una situación de riesgo comunícate con una autoridad inmediatamente</p>
                        <p class="text-center contenido-post">No dudes en ayudar y en que serás ayudado.</p></div>

                </div>
            </div>
            <hr>
            <div class="container">
                @guest
                    <h3 class="cursiva">Nuevo tema de discusión</h3>
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
                        <button type="submit" class="btn btn-light btn-nuevo">Publicar</button>
                    </form>
                @else

                    <h3 class="cursiva">Nuevo tema de discusión</h3>
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
                        <button type="submit" class="btn btn-light btn-nuevo">Publicar</button>
                    </form>
                @endguest

            </div>
        </div>
    </div>
@stop
