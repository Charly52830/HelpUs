<?php

/**
 *	Autor: Carlos Ruvalcaba
 *	Fecha: 25/11/2019
 *
 *	Fuentes:
 *	https://tutsforweb.com/creating-helpers-laravel/
 * */

use Illuminate\Http\Request;
use GuzzleHttp\Client;

if (!function_exists('verifica_sesion')) {
	 
	 /*
	  * Función que verifica si existe una sesión activa del bot. Si no existe
	  * entonces crea una nueva sesión y fija la expiración a 5 minutos, si
	  * existe entonces actualiza la expiración a 5 minutos adelante del tiempo
	  * actual del servidor.
	  * 
	  * El identificador de la sesión de Watson es guardado en forma de cookie.
	  * Trata de simular el control de inactividad de Watson.
	  * */
	 function verifica_sesion() {
	 	if(!isset($_COOKIE['botsesion'])) {
			$client = new Client();
			$response = $client->request('GET', 'http://148.72.65.115:8080/servicio/chat');
			//$statusCode = $response->getStatusCode();
			$body = $response->getBody();
			$arregloRespuesta = json_decode($body,true);
			$id_sesion = $arregloRespuesta["mensaje"];
			setcookie('botsesion', $id_sesion, time()+300);
		}
		else {	// Reinicia el tiempo de inactividad
			$id_sesion = $_COOKIE['botsesion'];
			setcookie('botsesion', $id_sesion, time()+300);
		}
	 }
}


if (!function_exists('start_bot_session')) {

	/**
	 * Inicia una nueva conversación con el HelpUsBot. La sesión es inicializada
	 * a través de una solicitud POST al web service de Watson.
	 *
	 * @return string Vista con el chat del bot.
	 * */
	function start_bot_session() {
		verifica_sesion();
		if(!isset($_COOKIE['botsesion']))
			return View::make('layouts.bot',['mensaje_bienvenida' => 'Hola soy Perry, mi trabajo es orientar
				a las personas para que aprendan cómo enfrentar el acoso y cómo denunciarlo. ¿En qué te puedo ayudar?']);
		return View::make('layouts.bot');
	}
}
