@extends('layouts.base')
@section('content')
    <!--
        Contenido visual y logico de la vista principal de la aplicación HelpUs
    /-->
    <h1>Acosos</h1>
    <div class="row">
        <!--
        Este for each se encarga de iterar sobre la lista de objetos pasados por el metodo get a esta vista
        permitiendo obtener los tipos de acosos de la base de datos
        -->
        @foreach($acosos as $ac)
            <div class="col-md-4 col-lg-4 d-flex align-items-stretch">
                <div class="card ">

                    <img width="200" height="200"  src="{{ asset('img/'. $ac->imagen) }}" class=" card-img-top rounded mx-auto d-block" alt="Logo Help US">
                    <div class="card-body">
                        <h5 class="card-title">{{$ac->nombre}}</h5>
                        <p class="card-text" style="height: 15rem;"> {!! nl2br(e($ac->resumen)) !!}</p>
                        <br>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('acoso.detalle', $ac) }}" type="button" class="btn btn-secondary btn-lg btn-block">Saber más</a>
                    </div>
                </div>
                </br>
            </div>
        <!--
            Este if hace que cada fila contenga a lo más tres columnas
        -->
            @if ($loop->iteration % 3 == 0)
    </div>
    <br>
    <br>
    <div class="row">
        @endif

        @endforeach
    </div>
@stop
