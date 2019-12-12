<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    protected $fillable = [
        'nivel_educativo',
        'slug'
    ];
    protected $table = 'nivels';

    public function delegaciones()
    {
        return $this->hasMany('App\Delegacion');
    }  
}
