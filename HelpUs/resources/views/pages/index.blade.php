@extends('layouts.base')
@section('content')
    <h1 class="cursiva">Acosos</h1>
    <div class="row">
        @foreach($acosos as $ac)
            <div class="col-md-4 col-lg-4 d-flex align-items-stretch">
                <div class="card ">

                    <img width="200" height="200"  src="{{ asset('img/'. $ac->imagen) }}" class=" card-img-top rounded mx-auto d-block" alt="Logo Help US">
                    <div class="card-body">
                        <h5 class="card-title">{{$ac->nombre}}</h5>
                        <p class="card-text helpus-font" style="height: 15rem;"> {!! nl2br(e($ac->resumen)) !!}</p>
                        <br>
                    </div>
                    <div class="card-footer">
                        <a href="{{route('acoso.detalle', $ac) }}" type="button" class="btn btn-nuevo btn-lg btn-block">Saber más</a>
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
