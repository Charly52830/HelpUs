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
		//$idsesion = $_COOKIE['botsesion'];
		//return view('layouts/bot');
		return View::make('layouts.bot');
	}
	
	public function respuesta(Request $request)
	{
		$url = "http://148.72.65.115:8080/servicio/message?mensaje=%s&sessionId=%s";
		$mensaje = $request->pregunta;
		$id_sesion = $_COOKIE['botsesion'];
		$client = new Client();
		$response = $client->request('GET', sprintf($url, $mensaje, $id_sesion));
		return json_decode($response->getBody(), true);
	}
}
