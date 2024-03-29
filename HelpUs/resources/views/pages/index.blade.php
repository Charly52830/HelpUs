@extends('layouts.base')
@section('content')
<div class="container org-header">
	<div class="row">
		<div class="col-md-12">
			<h4 class="helpus-font-2 text-center">¡Infórmate!</h4>
			<br>
			<h5 class="helpus-font-3 text-center">En esta sección puedes encontrar información general del acoso.</h5>
		</div>
	</div>
</div>

<br>
<hr>

	<h1 class="helpus-font-2">Tipos de acoso</h1>
	<hr>
	<div class="card-deck" >
	@foreach($acosos as $ac)
		<div class="card @if ($loop->iteration % 2 == 0) bg-helpus">
			@else
				bg-helpus2">
			@endif
			<img src="{{ asset('img/'. $ac->imagen) }}" class="card-img-top img-card" alt="">
			<div class="card-body">
				<h5 class="card-title text-center">{{ $ac->nombre }}</h5>
				<hr>
				<p class="card-text text-justify">{{ $ac->resumen }}</p>
			</div>
			<div class="card-footer">
				<a href="{{ route('acoso.detalle', $ac) }}" class="btn btn-lg btn-block  btn-nuevo ">Saber más</a>
			</div>
		</div>
	@endforeach
	</div>
@stop
