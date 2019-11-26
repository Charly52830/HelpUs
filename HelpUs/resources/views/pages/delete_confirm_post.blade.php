@extends('layouts.base')
@section('content')
    @method('DELETE')
    @csrf
    <form action="{{ route('publicaciones.delete',$publicacion) }}" method="POST">
        @method('DELETE')
        @csrf
        <p>¿Estas segura de querer borrar tu publicacion?</p>
        <button type="submit" class="btn btn-danger">
            <i class="lni-trash">Eliminar</i>
        </button>
        <button type="submit" class="btn btn-success" onclick="{{route('publicaciones.show_all')}}">
            <i class="">Cancelar</i>
        </button>
    </form>


@stop
