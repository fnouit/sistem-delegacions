<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delegacion extends Model
{
    protected $fillable = [
        'nomenclatura_id',
        'numero',
        'sede',
        'nivel_id',
        'region_id',
        'slug'
    ];
    
    protected $table = 'delegacions';

    public function nivel() {
        return $this->belongsTo('App\Nivel')->withDefault();
    }
    public function region() {
        return $this->belongsTo('App\Region')->withDefault();
    }
    public function nomenclatura() {
        return $this->belongsTo('App\Nomenclatura')->withDefault();
    }
    public function estructuras()
    {
        return $this->hasMany('App\Estructura');
    }
}
