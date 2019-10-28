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
});

Route::post('/crear_post',[
	'uses'=>'PublicacionController@create',
	'as'=>'publicacion.create'
]);

/*
*	Rutas de Zorrilla
*/

Route::get('/',[
	'uses'=>'AcosoController@informacionGeneral',
	'as'=>'acoso.informacionGeneral'
]);

//Route::get('/','AcosoController@informacionGeneral' )->name('acoso');

Route::get('/acoso/{id}','AcosoController@detalleAcoso' )->name('acoso.detalle');



//
