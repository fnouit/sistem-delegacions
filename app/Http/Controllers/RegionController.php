<?php

namespace App\Http\Controllers;

use App\Region;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            return $regiones = Region::all();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.region.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $region = Region::where('slug', $slug)->first();

        return view('admin.region.edit')->withRegion($region);        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $mensaje =[
            'nombre.required' => 'Es necesario ingresar un nombre para la Región',
            'sede.required' => 'El nombre de la sede es necesario',
            'coordinador.required' => 'Nombre de coordinador es requerido',
        ];
        $reglas = [
            'nombre' => 'required',
            'sede' => 'required',
            'coordinador' => 'required',
        ];

        $this->validate($request, $reglas, $mensaje);
        $region = Region::where('slug','=', $slug)->firstOrFail();
        
        $region->nombre = $request->nombre;
        $region->sede = $request->sede;
        $region->coordinador = $request->coordinador;        
        $region->save();


        // return $request;
        return redirect()->route('region');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Region  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy(Region $region)
    {
        //
    }
}
