@extends('layouts.base')
@section('content')
    <div class="container"><div class="container-fluid">
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
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">Titulo</th>
                    <th scope="col">Usuario</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Respuestas</th>
                </tr>
                </thead>
                <tbody>
                @foreach($publicaciones as $publicacion)
                    <tr>
                        <td><a href="publicacion/{{ $publicacion->id }}">{{$publicacion->titulo}}</a></td>
                        <td></td>
                        <td>{{$publicacion->fecha_pub}}</td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div></div>
@stop
