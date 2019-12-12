<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nomenclatura extends Model
{
    protected $fillable = [
        'nomenclatura'
    ];
    public function delegaciones()
    {
        return $this->hasMany(Delegacion::class);
    }
}
