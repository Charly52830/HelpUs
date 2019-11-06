<?php
/*
 * Autor: Angel Raúl Rodríguez Bueno
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organizacion;

//Clase que utiliza la información del conector de la base de datos para mandarla a la vista
class OrganizacionController extends Controller
{
    //Función que manda la lista de organizaciones al home(index)
    public function informacionGeneral(){
    	return view('pages.organizaciones');
    }
    //Función que manda la información de la organización
    public function index()
    {
        $org = Organizacion::all();
        return view('pages.organizaciones', compact('org'));
    }
}
