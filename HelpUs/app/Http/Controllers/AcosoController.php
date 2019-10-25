<?php

namespace App\Http\Controllers;

use App\Acoso;
use Illuminate\Http\Request;
use App;
class AcosoController extends Controller
{
    public function informacionGeneral(){
        $acosos = App\Acoso::all();
        return view('acoso.acoso',compact('acosos'));
    }
    public function  detalleAcoso($id){
        $acoso = App\Acoso::findOrFail($id);
        return view('acoso.detalle', compact('acoso'));
    }
}
