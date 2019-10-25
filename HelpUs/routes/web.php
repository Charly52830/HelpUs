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

Route::get('/foro', function() {
	return View::make('pages.foro');
});

Route::get('/acoso','AcosoController@informacionGeneral' )->name('acoso');

Route::get('/acoso/{id}','AcosoController@detalleAcoso' )->name('acoso.detalle');

