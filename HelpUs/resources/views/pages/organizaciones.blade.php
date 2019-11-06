<!--
  Autor: Angel Raúl Rodríguez Bueno
-->
@extends('layouts.base')
@section('content')
	<!--
        Crea el contenido visual y logico de la vista de organizaciones
    -->
	<h1>Organizaciones</h1>
	<div class="row" >
		<!--
       for each, hace iteraciones en la lista de objetos obtenidos por el metodo get a la vista
       obteniendo las organizaciones de la DB.
       -->
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
			<!--
                if, hace que el número de columnas por fila sea de 3
            -->
			@if ($loop->iteration % 3 == 0)
    			</div>
    				<br>
    				<br>
    			<div class="row">
        	@endif
		@endforeach
    </div>
@endsection
