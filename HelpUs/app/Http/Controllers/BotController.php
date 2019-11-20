<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class BotController extends Controller
{
  
  private $mensajes = array();
  public function chat(){
    if (isset($_COOKIE['botsesion'])) {
      $id=$_COOKIE['botsesion'];
      $client = new Client();
      $response = $client->request('GET', 'http://148.72.65.115:8080/servicio/sesion?sessionId='.$id);
      setcookie("botsesion", "", time() - 3600);

    }
    $client = new Client();
    $response = $client->request('GET', 'http://148.72.65.115:8080/servicio/chat');
    $statusCode = $response->getStatusCode();
    $body = $response->getBody();
    $arregloRespuesta = json_decode($body,true);
    $idsesion= $arregloRespuesta["mensaje"];
    setcookie('botsesion',$idsesion);
    $res= $arregloRespuesta["respuesta"];
    return view('pages/chat',['mensajes'=>$res,'sessionid'=>$idsesion]);
  }


  public function respuesta(Request $request)
  {
    $client = new Client();
    $response = $client->request('GET', 'http://148.72.65.115:8080/servicio/message?mensaje='.$request->pregunta.'&sessionId='.$request->idsesion);
    $statusCode = $response->getStatusCode();
    $body = $response->getBody();
    $arregloRespuesta = json_decode($body,true);
    array_push($this->mensajes,$arregloRespuesta["mensaje"],$res= $arregloRespuesta["respuesta"] );
    return view('pages/respuestas',['mensajes'=>$this->mensajes,'sessionid'=>$request->idsesion]);
  }



}
