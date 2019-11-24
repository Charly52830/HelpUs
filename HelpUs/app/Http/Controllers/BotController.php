<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class BotController extends Controller
{
	public function chat()
	{    
		if(!isset($_COOKIE['botsesion'])) {
			$client = new Client();
			$response = $client->request('GET', 'http://148.72.65.115:8080/servicio/chat');
			//$statusCode = $response->getStatusCode();
			$body = $response->getBody();
			$arregloRespuesta = json_decode($body,true);
			$idsesion= $arregloRespuesta["mensaje"];
			setcookie('botsesion',$idsesion,time()+3000);
		}
		return View::make('layouts.bot');
	}
	
	public function respuesta(Request $request)
	{
		if(isset($_COOKIE['botsesion'])) {
			$id_sesion = $_COOKIE['botsesion'];
			$mensaje = $request->pregunta;
			$url = "http://148.72.65.115:8080/servicio/message?mensaje=%s&sessionId=%s";
			$client = new Client();
			$response = $client->request('GET', sprintf($url,$mensaje,$id_sesion));
			//$statusCode = $response->getStatusCode();
			$arreglo_respuesta = json_decode($response->getBody(),true);
			return $arreglo_respuesta['respuesta']; 
		}
		else
			return "Error: sesión no iniciada correctamente";
	}
}
