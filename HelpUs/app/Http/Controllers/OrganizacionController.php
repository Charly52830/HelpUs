<?php

/**
*	Autor: Ángel Raúl Rodríguez Bueno
*	Fecha: octubre 2019
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organizacion;

class OrganizacionController extends Controller
{
	/**
	 * Redirige a la vista de las organizaciones
	 */
    public function informacionGeneral(){
    	return view('pages.organizaciones');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $org = Organizacion::all();
        return view('pages.organizaciones', compact('org'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('pages/organizaciones');
    }
}
