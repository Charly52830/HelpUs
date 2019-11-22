<?php

namespace App\Http\Controllers;

use App\Publicacion;
use Illuminate\Http\Request;
use App\Comentario;
use Illuminate\Support\Facades\Validator;
use GuzzleHttp\Client;


class PublicacionController extends Controller
{
	/**
	* Display a listing of the resource.
	*
	* @return \Illuminate\Http\Response
	*/
    public function index()
	{
		//
	}

	/**
	* Store a newly created resource in storage.
	*
	* @return \Illuminate\Http\Response
	*/
	public function create(Request $request)
	{
		$mensajeError = [
			'required' => 'Porfavor ingresa todos los datos de la publicacion',
		];
		$validator = Validator::make($request->all(), [
			'titulo' => 'required|max:255',
			'contenido' => 'required'
		],$mensajeError);

		if ($validator->fails()) {
			return redirect()->back()
					->withErrors($validator)
					->withInput();
		}
		$publicacion=new Publicacion();
		$publicacion->titulo=$request->titulo;
		$publicacion->contenido=$request->contenido;
		$publicacion->save();
		return redirect('/foro');
	}

	/**
	* Store a newly created resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @return \Illuminate\Http\Response
	*/
	public function store(Request $request)
	{
		//
	}

	/**
	* Display the specified resource.
	*
	* @param  \App\Publicacion  $publicacion
	* @return \Illuminate\Http\Response
	*/
	public function show(Publicacion $publicacion)
	{
		//
	}

	/**
	* Display all instances of the database
	*
	* @return view pages/foro
	*/
	public function show_all()
	{
    if (isset($_COOKIE['botsesion'])) {
      $id=$_COOKIE['botsesion'];
      echo "destrui sesion ".$id;
      $client = new Client();
      $response = $client->request('GET', 'http://148.72.65.115:8080/sesion?sessionId='.$id);
      setcookie("botsesion", "", time() - 3600);

    }
		$publicaciones=Publicacion::all();
		return view('pages/foro',['publicaciones'=>$publicaciones]);
	}

	/**
	* Regresa a una página con la información de una publicación.
	*
	* @param $id Identificador en la base de datos
	* @return view pages/foro
	*/
	public function get($id)
	{
		$publicacion = Publicacion::findOrFail($id);
		$comentarios=Comentario::where('publicacion_id',$id)->get();
		return view('layouts/publicacion_base',[
			'publicacion'=>$publicacion,
			'comentarios'=>$comentarios
		]);
	}

	/**
	* Show the form for editing the specified resource.
	*
	* @param  \App\Publicacion  $publicacion
	* @return \Illuminate\Http\Response
	*/
	public function edit(Publicacion $publicacion)
	{
		//
	}

	/**
	* Update the specified resource in storage.
	*
	* @param  \Illuminate\Http\Request  $request
	* @param  \App\Publicacion  $publicacion
	* @return \Illuminate\Http\Response
	*/
	public function update(Request $request, Publicacion $publicacion)
	{
		//
	}

	/**
	* Remove the specified resource from storage.
	*
	* @param  \App\Publicacion  $publicacion
	* @return \Illuminate\Http\Response
	*/
	public function destroy(Publicacion $publicacion)
	{
		//
	}
}
