<?php

/**
 *	Fuentes:
 *	https://tutsforweb.com/creating-helpers-laravel/
 *	https://weichie.com/blog/curl-api-calls-with-php/
 * */

if (!function_exists('start_bot_session')) {
	/**
	 * Inicia una nueva conversación con el HelpUsBot. La sesión es inicializada
	 * a través de una solicitud POST al web service de Watson.
	 *
	 * @return string Cadena que contiene el identificador de la sesión iniciada.
	 *
	 * */
	function start_bot_session() {
		$curl = curl_init();
		
		// Llamada através de POST
		curl_setopt($curl,CURLPOST,1);
		
		//Api Key de Watson.
		$api_key = 'DehLPXzb1FXnyb0gbHaZkJMEoXbql-nzMmxsOl0lBmFM';
		
		//ID del bot en la nube.
		$assistant_id = '9c1c426d-cd33-49ec-a3bc-f0835c3264b5';
		
		//URL del servicio.
		$url = 'https://gateway.watsonplatform.net/assistant/api/v2/assistants/'.$assistant_id.'/sessions?version=2019-02-28';
		curl_setopt($curl,CURLOPT_URL,$url);
		
		//Header de la petición.
		curl_setopt($curl, CURLOPT_HTTPHEADER,array(
			'APIKEY: '.$api_key,
			'Content-type: application/json',
		));
		curl_setopt($curl, CURLOPT_RETURNTRANSFER,1);
		curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
		
		//Ejecución
		$result=curl_exec($curl);
		if (!$result)
			return "Ocurrió un problema porque el resultado está vacío.";
		
		curl_close($curl);
		$response = json_decode($result,true);
		$session_id = $response['session_id'];
		
		return $session_id;
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
