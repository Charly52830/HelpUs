@extends('layouts.base')


@section('content')
	<div class="row">
		@foreach($org as $orgs)
	    	<div class="col-sm">
	    		<div class="card" style="width: 20rem;">
	    			<img class="card-img-top" src="img/{{$orgs->imagen}}" alt="">
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
