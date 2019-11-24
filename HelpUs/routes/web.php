<?php

/*
* Rutas de Charly
*/
Auth::routes();

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

Route::post('/crear_postU',[
	'uses'=>'PublicacionController@create',
	'as'=>'publicacion.create'
]);

Route::post('/crear_post',[
    'uses'=>'PublicacionController@createU',
    'as'=>'publicacion.createU'
]);

Route::get('/user_post/{id}',[
    'uses'=>'PublicacionController@getPublicacionesUser',
    'as'=>'publicaciones.getPostU'
])->middleware('auth');

Route::get('/update_post/{id}', [
    'uses'=>'PublicacionController@getPublicacionU',
	'as'=>'publicaciones.getPublicacionU'
])->middleware('auth');

Route::post('/update/{post}',[
    'uses'=>'PublicacionController@update',
    'as'=>'publicaciones.update'
])->middleware('auth');

Route::get('/delete_confirm/{publicacion}', [
    'uses'=>'PublicacionController@confirmar_delete',
	'as'=>'publicacion.confirmar_borrar'
]);

Route::get('/foro/{id}/delete/',[
    'uses'=>'PublicacionController@destroy',
    'as'=>'publicaciones.delete'
])->middleware('auth');

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
Route::post('/publicacion/comentarioU',[
    'uses'=>'ComentarioController@createU',
    'as' => 'comentario.createU',
    ]);

//Rutas de Ángel.

Route::get('/organizaciones',[
	'uses'=>'OrganizacionController@index',
	'as'=>'organizaciones.infoGeneral'
]);

