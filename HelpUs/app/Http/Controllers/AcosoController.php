<?php

namespace App\Http\Controllers;

use App\Acoso;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App;
/*
 * Clase que utiliza la información del conector de la base de datos para mandarsela a la vista
 */
class AcosoController extends Controller
{
    //funcion que pasa la lista de acosos a la vista index
    public function informacionGeneral(){
      if (isset($_COOKIE['botsesion'])) {
        $id=$_COOKIE['botsesion'];
        echo "destrui sesion ".$id;
        $client = new Client();
        $response = $client->request('GET', 'http://localhost:8080/sesion?sessionId='.$id);
        setcookie("botsesion", "", time() - 3600);

      }
      $acosos = App\Acoso::all();
    	return view('pages/index',['acosos'=>$acosos]);
    }
    //funcion que pasa la infromación de un acoso apartir de su id a la vista detalle
    public function detalleAcoso($id){
    	$acoso = App\Acoso::findOrFail($id);
    	return view('pages/detalle',['acoso'=>$acoso]);
    }

}
