@extends('layouts.base')
@section('content')
    <div class="container"><div class="container-fluid">
      <div class="container org-header">
      	<div class="row">
      		<div class="col-md-12">
      			<h4 class="helpus-font-2 text-center">¡Bienvenido al Foro de HelpUs!</h4>
      			<br>
      			<h5 class="helpus-font-3 text-center">Aquí podrás encontrar las últimas
      				publicaciones escritas por nuestra comunidad y compartir con nosotros tus experiencias.</h5>
      				<p class="text-center contenido-post">No dudes en ayudar y en que serás ayudado.</p>
      			</div>
      		</div>
      	</div>
        <hr>
        <div class="container"><div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<h1 class="helpus-font-2 text-center">Todos mis post</h1>
				</div>

      </div>

        <table class="table table-hover link-foro">
            <thead>
            <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Usuario</th>
                <th scope="col">Fecha</th>
                <th scope="col">Respuestas</th>
                <th>	<a class="btn btn-light btn-nuevopost offset-11" href="{{route('foro.nuevo')}}">NUEVO</a></th>
            </tr>
            </thead>
            @guest
            @else
            @endguest
            <tbody>
            @foreach($publicacionUser as $publicacion)
                <tr>
                    <td><a class="helpus-font" href= "{{ route('publicaciones.get',$publicacion->id) }}" >{{ $publicacion->titulo }}</a></td>
                    @if ($publicacion->anonimo==1)
                        <td>Anonimo</td>
                    @else
                        <td>{{Auth::user()->name}}</td>
                    @endif

                    <td>{{$publicacion->create_at}}</td>
                    <td></td>
                    @if ($publicacion->user_id == Auth::user()->id)
                        <td><a class="btn btn-success" href= "{{ route('publicaciones.getPublicacionU',$publicacion->id) }}"> Modificar Post </a></td>
                        <td><a type="delete" class="btn btn-danger" href= "{{ route('publicaciones.delete', $publicacion->id) }}"> Eliminar Post </a></td>
                    @endif
                </tr>
            @endforeach
            </tbody>
        </table>
    </div></div>

    <script>
        if(document.getElementById("anonimo").checked) {
            document.getElementById('anonimo').valueOf(true);
        }else{
            document.getElementById('anonimo').valueOf(false);
        }
    </script>
@stop
