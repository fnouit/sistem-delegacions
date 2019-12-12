<?php

namespace App\Http\Controllers;

use App\Estructura;
use App\Region;
use Illuminate\Http\Request;

class EstructuraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $estructuras = Estructura::all();
        return view ('admin.estructura.index',compact('estructuras'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $regiones = Region::all();
        return view ('admin.estructura.create',compact('regiones'));
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
     * @param  \App\Estructura  $estructura
     * @return \Illuminate\Http\Response
     */
    public function show(Estructura $estructura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estructura  $estructura
     * @return \Illuminate\Http\Response
     */
    public function edit(Estructura $estructura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estructura  $estructura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estructura $estructura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estructura  $estructura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estructura $estructura)
    {
        //
    }
}
