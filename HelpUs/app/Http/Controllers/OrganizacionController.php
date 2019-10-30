<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Organizacion;

class OrganizacionController extends Controller
{
    public function informacionGeneral(){
    	//$acosos = App\Acoso::all();
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
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       //return view('pages.organizaciones');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$org = new Organizacion();
        $org->nombre = $request->input('nombre');
        $org->resumen = $request->input('resumen');
        $org->telefono = $request->input('telefono');
        $org->enlace = $request->input('enlace');
        $org->save();
        return 'Saved';
        */
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
