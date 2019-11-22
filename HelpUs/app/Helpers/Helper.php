<?php

/**
 *	Fuentes:
 *	https://tutsforweb.com/creating-helpers-laravel/
 *	https://weichie.com/blog/curl-api-calls-with-php/
 * */


use Illuminate\Http\Request;
use GuzzleHttp\Client;

if (!function_exists('start_bot_session')) {
	/**
	 * Inicia una nueva conversación con el HelpUsBot. La sesión es inicializada
	 * a través de una solicitud POST al web service de Watson.
	 *
	 * @return string Cadena que contiene el identificador de la sesión iniciada.
	 *
	 * */
	function start_bot_session() {
		if(!isset($_COOKIE['botsesion'])) {
			echo "jaja";
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
}

if (!function_exists('bot_api_call')) {
	/**
	 * Envía un nuevo mensaje al bot continuando con la sesión previa. 
	 * El mensaje es enviado través de una solicitud POST al web service
	 * de Watson.
	 *
	 * @param string $id_sesion
	 * Identificador del usuario con el que está hablando actualmente el bot.
	 *
	 * @param string $mensaje
	 * Mensaje que el usuario le escribe al bot.
	 * 
	 * @return string Mensaje de respuesta del bot.
	 * */
	function bot_api_call($id_sesion,$mensaje) {
		return "Not implemented yet";
	}
}
