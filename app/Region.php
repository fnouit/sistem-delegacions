<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $fillable = [
        'nombre',
        'sede',
        'coordinador',
        'email',
        'telefono',
        'photo_extension',
        'slug'
    ];
    public function delegaciones()
    {
        return $this->hasMany(Delegacion::class);
    }
}
