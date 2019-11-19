<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class BotController extends Controller
{
  private $idsesion=0;
  private $res="";

  public function chat(){
    $client = new Client();
    $response = $client->request('GET', 'http://localhost:8080/chat');
    $statusCode = $response->getStatusCode();
    $body = $response->getBody();
    $arregloRespuesta = json_decode($body,true);
    $this->idsesion= $arregloRespuesta["mensaje"];
    $res= $arregloRespuesta["respuesta"];

    return view('pages/chat',['mensajes'=>$res]);
  }


  public function respuesta()
    {
    	$client = new Client();
    	$response = $client->request('GET', 'http://localhost:8081/message?mensaje=Mis%20compa%C3%B1eros%20de%20trabajo%20se%20masturban%20enfrente%20de%20mi%20y%20no%20se%20que%20hacer');
    	$statusCode = $response->getStatusCode();
    	$body = $response->getBody()->getContents();

    	return $body;
    }
}
