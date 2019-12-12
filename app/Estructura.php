<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estructura extends Model
{
  
    protected $fillable = [
        'delegacion_id',
        'p_inicial',
        'p_final', 
        'secretaria_id',
        'titulo',
        'nombre',
        'ap_paterno',
        'ap_materno',
        'rfc',
        'genero_id',
        'cargo_id',
        'email',
        'celular',
        'telefono',
        'facebook',
        'twitter',
        'seccion',
        'estado',
        'calle',
        'numero_ext',
        'colonia',
        'cp',
        'municipio',
        'ciudad',
        'slug',     
        'imagen',    
    ];

    protected $table = 'estructuras';    
  
    public function delegacion() {
        return $this->belongsTo('App\Delegacion')->withDefault();
    }
}
