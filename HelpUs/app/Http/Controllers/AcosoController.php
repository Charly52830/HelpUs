<?php

namespace App\Http\Controllers;

use App\Acoso;
use Illuminate\Http\Request;
use App;
/*
 * Clase que utiliza la información del conector de la base de datos para mandarsela a la vista
 */
class AcosoController extends Controller
{
    //funcion que pasa la lista de acosos a la vista index
    public function informacionGeneral(){
    	$acosos = App\Acoso::all();
    	return view('pages/index',['acosos'=>$acosos]);
    }
    //funcion que pasa la infromación de un acoso apartir de su id a la vista detalle
    public function detalleAcoso($id){
    	$acoso = App\Acoso::findOrFail($id);
    	return view('pages/detalle',['acoso'=>$acoso]);
    }

}
