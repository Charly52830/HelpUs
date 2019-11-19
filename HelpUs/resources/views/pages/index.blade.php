@extends('layouts.base')
@section('content')
	<div class="container">
		<div class="row"> 
			
		</div>
	</div>
	<h1 class="helpus-font-2">Tipos de acoso</h1>
	<br>
	<div class="card-deck">
	@foreach($acosos as $ac)
		<div class="card
			@if ($loop->iteration % 2 == 0)
				bg-helpus">
			@else
				bg-helpus2">
			@endif
			<img src="{{ asset('img/'. $ac->imagen) }}" class="card-img-top img-card" alt="">
			<div class="card-body">
				<h5 class="card-title">{{ $ac->nombre }}</h5>
				<hr>
				<p class="card-text text-justify">{{ $ac->resumen }}</p>
			</div>
			<div class="card-footer">
				<a href="{{ route('acoso.detalle', $ac) }}" class="btn btn-nuevo">Saber más</a>
			</div>
		</div>
	@endforeach
	</div>
@stop
