@extends('layouts.base')
@section('content')
	<div class="container org-header">
		<div class="row">
			<div class="col-md-12">
				<h4 class="helpus-font-2 text-center">¡No estás solo!</h4>
				<br>
				<h5 class="helpus-font-3 text-center">Conoce las organizaciones que pueden ayudarte
				si sufres de acoso o discriminación.</h5>
			</div>
		</div>
	</div>
	<br>
	<hr>
		<h1 class="helpus-font-2">Organizaciones de ayuda</h1>
	<hr>
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
					<p class="card-text text-justify ">{{ $orgs->resumen }}</p>
					<p class="card-text">Teléfono: {{ $orgs->telefono }}</p>
				</div>
				<div class="card-footer">
					<a href="{{ $orgs->enlace }}" class="btn btn-nuevo btn-lg btn-block">Saber más</a>
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
