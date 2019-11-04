@extends('layouts.base')


@section('content')
	<h1>Organizaciones</h1>
	<div class="row" >
		@foreach($org as $orgs)
	    	<div class="col">
	    		<div class="card" style="width: 20rem;">
	    			<img class="card-img-top" src="img/{{$orgs->imagen}}" width="100px" height="250px">
				  <div class="card-body">
				    <h5 class="card-title">{{$orgs->nombre}}</h5>
				    <p class="card-text">{{$orgs->resumen}}</p>
                    <p class="card-text">Teléfono: {{$orgs->telefono}}</p>
                   
				    <a href="{{$orgs->enlace}}" class="btn btn-primary">ver más...</a>
				  </div>
				</div>
	    	</div>
        @endforeach
    </div>
@endsection
