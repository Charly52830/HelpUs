<?php

/*
* Rutas de Charly
*/

Route::get('/foro',[
	'uses'=>'PublicacionController@show_all',
	'as'=>'publicaciones.show_all'
]);

Route::get('/publicacion/{id}',[
	'uses'=>'PublicacionController@get',
	'as'=>'publicaciones.get'
]);

Route::get('/nuevo_post', function() {
	return View::make('pages.nuevo_post');
})->name('foro.nuevo');

Route::post('/crear_post',[
	'uses'=>'PublicacionController@create',
	'as'=>'publicacion.create'
]);

/*
Route::get('/bot', function() {
	return View::make('layouts.bot');
})->name('bot');
*/

Route::get('/start_bot', function() {
	return start_bot_session();
})->name('start_bot');

/*
*	Rutas de Zorrilla
*/

Route::get('/',[
	'uses'=>'AcosoController@informacionGeneral',
	'as'=>'acoso.informacionGeneral'
]);

Route::get('/acoso/{id}','AcosoController@detalleAcoso' )->name('acoso.detalle');

//Rutas de Fer
Route::post('/publicacion/comentario',[
	'uses'=>'ComentarioController@store',
	'as'=>'comentario.store'
]);

//Rutas de Ángel.

Route::get('/organizaciones',[
	'uses'=>'OrganizacionController@index',
	'as'=>'organizaciones.infoGeneral'
]);
