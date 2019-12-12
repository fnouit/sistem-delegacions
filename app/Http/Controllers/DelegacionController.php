<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Delegacion;
use App\Region;
use App\Nomenclatura;
use App\Nivel;
use App\Comite;
use Carbon\Carbon;

class DelegacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $delegaciones = Delegacion::all();
        
        $region = Region::all();
        return view ('admin.delegacion.index',compact('delegaciones','region'));        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nomenclaturas = Nomenclatura::all();
        $niveles = Nivel::all();
        $regiones = Region::all();
        $comites = Comite::all();
        return view ('admin.delegacion.create',compact('nomenclaturas','niveles','regiones','comites'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $delegacion = new Delegacion();

        $mensaje =[
            'nomenclatura.required' => '¿SELECCIONA NOMENCLATURA?',
            'numero.required' => 'SE REQUIERE NÚMERO DELEGACIONAL.',
            'numero.numeric' => 'SOLO SE INGRESA NÚMEROS.',
            'sede.required' => 'INGRESA NOMBRE EN EL CAMPO SEDE.',
            'calle.required' => 'LLENA EL CAMPO CALLE',
            'num.required' => 'LLENA EL CAMPO',
            'colonia.required' => 'FALTA COLONIA',
            'cp.required' => 'FALTA CP',
            'telefono.required' => 'INGRESA TELÉFONO',
            'ciudad.required' => '¿CUAL ES LA CIUDAD?',
            'municipio.required' => '¿CÚAL ES EL MUNICIPIO?',
            'data_in.required' => 'FECHA INICIAL',
            'data_out.required' => 'FECHA FINAL',
            'nivel.required' => 'SELECCIONA UN NIVEL',
            'region.required' => 'SELECCIONA UNA REGIÓN',
            $delegacion->deleg.'unique' => 'DELEGACIÓN DUPLICADA'
        ];
        $reglas = [
            'nomenclatura' => 'required|numeric',
            'numero' => 'required|numeric',
            'sede' => 'required',
            'calle' => 'required',
            'nivel' => 'required',
            'region' => 'required',
            'num' => 'required',
            'colonia' => 'required',
            'cp' => 'required',
            'telefono' => 'required',
            'ciudad' => 'required',
            'municipio' => 'required',
            'data_in' => 'required',
            'data_out' => 'required',
            $delegacion->deleg => 'unique',
        ];

        return $request;

        $this->validate($request, $reglas, $mensaje);
        
        $delegacion->nomenclatura_id = $request->get('nomenclatura');
        $delegacion->numero = $request->input('numero');
        $delegacion->sede = $request->input('sede');
        $delegacion->nivel_id = $request->get('nivel');
        $delegacion->region_id = $request->get('region');
        
        $valueNom = Nomenclatura::find($delegacion->nomenclatura_id);
        $delegacion->slug=$valueNom->nomenclatura.$delegacion->numero;
        $delegacion->deleg=$valueNom->nomenclatura.$delegacion->numero;

        
        $delegacion->calle = $request->get('calle');	
        $delegacion->numero_ext = $request->get('num');	
        $delegacion->colonia = $request->get('colonia');	
        $delegacion->cp = $request->get('cp');	
        $delegacion->telefono = $request->get('telefono');	
        $delegacion->ciudad = $request->get('ciudad');	
        $delegacion->municipio = $request->get('municipio');	
        $delegacion->p_inicial = $request->get('data_in');	
        $delegacion->p_final = $request->get('data_out');

        // return $delegacion;
        
        $delegacion->save();
        return redirect('/delegacion')->with('success_create','La delegación '.$delegacion->nomenclatura->nomenclatura.$delegacion->numero.' se CREADO satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Delegacion  $delegacion
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $delegacion = Delegacion::where('slug', $slug)->firstOrFail();
        return view('admin.delegacion.show',compact('delegacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Delegacion  $delegacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Delegacion $delegacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Delegacion  $delegacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Delegacion $delegacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Delegacion  $delegacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $delegacion = Delegacion::where('slug', $slug)->firstOrFail();
        $delegacion->delete();
        return redirect('/delegacion');
    }
}
