@extends('layouts.base')
@section('content')
<div class="card grey lighten-3 chat-room">
<div class="card-body">


  <div class="row px-lg-2 px-2">
    <div class="col-md-12 pl-md-3 px-lg-auto px-0">
      <div class="chat-message">

        <ul class="list-unstyled chat">
          <li class="d-flex justify-content-between mb-4">
            <div class="chat-body white p-3  z-depth-1">
              <div class="header">
                <strong class="primary-font">Help Us Bot</strong>
              </div>
              <hr class="">
              <p class="mb-0">
                {{$mensajes}}
              </p>
            </div>
          </li>

          <li class="white">
          <form action="{{route('bot.respuesta')}}" method="post">
            @csrf
              <div class="form-group basic-textarea">
                <textarea class="form-control pl-2 my-0" rows="3" placeholder="Escribe tu mensaje aquí" name="pregunta" id="pregunta"></textarea>
                <input type="hidden" name="idsesion" value="{{$sessionid}}"
								id="idsesion"  >
              </div>
            <button type="submit"  class="btn btn-info btn-rounded btn-sm waves-effect waves-light float-right">Enviar</button>
          </form>
          </li>

        </ul>

      </div>

    </div>


  </div>

</div>
</div>
@stop
