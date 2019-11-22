<?php

namespace App\Http\Controllers;

use App\Publicacion;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use App\Comentario;
use Illuminate\Queue\RedisQueue;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Session\Flash;

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
        $publicacion->anonimo=1;
        $publicacion->save();
        return redirect('/foro');
    }
	public function createU(Request $request)
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
        $publicacion->user_id=$request->user()->id;
        $publicacion->titulo=$request->titulo;
        $publicacion->contenido=$request->contenido;
        $publicacion->anonimo=$request->anonimo;
		$publicacion->save();
		return redirect('/foro');
	}
	public  function  update(Request $request,Publicacion $publicacion)
    {
        /*
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
        }*/

        $publicacion2=new Publicacion();
        $publicacion2->id=$publicacion->id;

        $publicacion2->user_id=$request->user()->id;
        $publicacion2->titulo=$request->titulo;
        $publicacion2->contenido=$request->contenido;
        $publicacion2->anonimo=$request->anonimo;
        // Guardamos en base de datos
        Publicacion::destroy($publicacion);
        $publicacion2->save();
        return redirect('/foro');


    }
    public function destroy($id){
        $publicacion = Publicacion::findOrFail($id);
        $publicacion->delete();
        /*Flash::Danger('Publicación ' . $publicacion->titulo .'Fue eliminada');*/
        return redirect('/user_post/'.$publicacion->user_id.'');
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
    public function confirmar_delete(Publicacion $publicacion)
    {$publicaciones=Publicacion::all();
        return view('pages/delete_confirm_post',[
            'publicacion'=>$publicacion,
        ]);
    }
	/**
	* Display all instances of the database
	*
	* @return view pages/foro
	*/
	public function show_all()
	{
		$publicaciones=Publicacion::all();
		return view('pages/foro',[
		    'publicaciones'=>$publicaciones,
        ]);
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
			'comentarios'=>$comentarios,
		]);
	}
    public function getPublicacionU($id)
    {
        $publicacion = Publicacion::findOrFail($id);

        return view('pages/update_post',[
            'publicacion'=>$publicacion,
        ]);
    }
	public  function getPublicacionesUser($idUser){
        $publicacionUser = Publicacion::where('user_id',$idUser)->get();
        return view('pages/foro_usuario',[
            'publicacionUser'=>$publicacionUser
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


	/**
	* Remove the specified resource from storage.
	*
	* @param  \App\Publicacion  $publicacion
	* @return \Illuminate\Http\Response
	*/

}
