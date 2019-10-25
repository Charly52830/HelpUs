@extends('layouts.base')
@section('content')
    <div class="jumbotron">Este es un jumbotron</div>
    <h1>Acosos</h1>
    <div class="row align-items-center">
        @foreach($acosos as $ac)
            <div class="col-6 col-md-4">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/'. $ac->imagen) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$ac->nombre}}</h5>
                        <p class="card-text">{{$ac->resumen}}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('acoso.detalle', $ac) }}" type="button" class="btn btn-secondary btn-lg btn-block">Saber más</a>
                    </div>
                </div>
                </br>
            </div>
            @if ($loop->iteration % 3 == 0)
    </div>
    <br>
    <br>
    <div class="row">
        @endif

        @endforeach
    </div>
@stop
