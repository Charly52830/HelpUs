@extends('layouts.base')


@section('content')
	<h1>Organizaciones</h1>
	<div class="row" >
		@foreach($org as $orgs)
	    	<div class="col-md-4 col-lg-4 d-flex align-items-stretch">
	    		<div class="card">
	    			<img class="card-img-top" src="img/{{$orgs->imagen}}" width="100px" height="250px">
				  	<div class="card-body">
				    <h5 class="card-title">{{$orgs->nombre}}</h5>
				    <p class="card-text">{{$orgs->resumen}}</p>
                    <p class="card-text">Teléfono: {{$orgs->telefono}}</p>
				    <a href="{{$orgs->enlace}}" class="btn btn-nuevo btn-lg btn-block">ver más...</a>
				  </div>
				</div>
			</div>
			@if ($loop->iteration % 3 == 0)
    			</div>
    				<br>
    				<br>
    			<div class="row">
        	@endif
		@endforeach
    </div>
@endsection
