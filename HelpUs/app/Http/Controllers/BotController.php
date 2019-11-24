<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;

class BotController extends Controller
{
	/**
	 * Envía un nuevo mensaje al bot continuando con la sesión previa. 
	 * El mensaje es enviado través de una solicitud GET a un servicio web
	 * que sirve como middleware para comunicarse con el servicio de Watson.
	 *
	 * @param string $mensaje
	 * Mensaje que el usuario le escribe al bot.
	 * 
	 * @return string Json con el contenido del mensaje.
	 * */
	public function respuesta(Request $request)
	{
		$url = "http://148.72.65.115:8080/servicio/message?mensaje=%s&sessionId=%s";
		$mensaje = $request -> pregunta;
		$id_sesion = $_COOKIE['botsesion'];
		$client = new Client();
		$response = $client->request('GET', sprintf($url, $mensaje, $id_sesion));
		return json_decode($response->getBody(), true);
	}
}
