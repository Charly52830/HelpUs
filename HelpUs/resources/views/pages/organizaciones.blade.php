@extends('layouts.base')
@section('content')
	<h1>Organizaciones</h1>
	<br>
	<div class="card-deck">
		@foreach($org as $orgs)
			<div class="card 
				@if ($loop->iteration % 2 == 0)
					bg-helpus">
				@else
					bg-helpus2">
				@endif
				<img class="card-img-top img-card"  src="img/{{ $orgs->imagen }}"  alt="">
				<div class="card-body">
					<h5 class="card-title">{{ $orgs->nombre }}</h5>
					<hr>
					<p class="card-text text-justify helpus-font">{{ $orgs->resumen }}</p>
					<p class="card-text">Teléfono: {{ $orgs->telefono }}</p>
				</div>
				<div class="card-footer">
					<a href="{{ $orgs->enlace }}" class="btn btn-nuevo">Saber más</a>
				</div>
			</div>
			@if($loop->iteration % 3 == 0)
				</div>
				<br>
				<div class="card-deck">
			@endif
		@endforeach
	</div>
@endsection
