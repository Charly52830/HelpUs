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
      echo "destrui sesion ".$id;
      $client = new Client();
      $response = $client->request('GET', 'http://localhost:8080/sesion?sessionId='.$id);
      setcookie("botsesion", "", time() - 3600);

    }
    $client = new Client();
    $response = $client->request('GET', 'http://localhost:8080/chat');
    $statusCode = $response->getStatusCode();
    $body = $response->getBody();
    $arregloRespuesta = json_decode($body,true);
    $idsesion= $arregloRespuesta["mensaje"];
    setcookie('botsesion',$idsesion);
    $res= $arregloRespuesta["respuesta"];
    echo "cree sesion".$idsesion;
    return view('pages/chat',['mensajes'=>$res,'sessionid'=>$idsesion]);
  }


  public function respuesta(Request $request)
  {
    	$client = new Client();

    	$response = $client->request('GET', 'http://localhost:8080/message?mensaje='.$request->pregunta.'&sessionId='.$request->idsesion);

    	$statusCode = $response->getStatusCode();
    	$body = $response->getBody();

      $arregloRespuesta = json_decode($body,true);
      array_push($this->mensajes,$arregloRespuesta["mensaje"],$res= $arregloRespuesta["respuesta"] );
      return view('pages/respuestas',['mensajes'=>$this->mensajes,'sessionid'=>$request->idsesion]);
    }



}
