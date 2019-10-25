<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/', function() {
	return View::make('pages.index');
});

/*
Route::get('/foro', function() {
	return View::make('pages.foro');
});
*/

Route::get('/foro',[
	'uses'=>'PublicacionController@show_all',
	'as'=>'publicaciones.show_all'
]);

Route::get('/nuevo_post', function() {
	return View::make('pages.nuevo_post');
});

Route::post('/crear_post',[
	'uses'=>'PublicacionController@create',
	'as'=>'publicacion.create'
]);
