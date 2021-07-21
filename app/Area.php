<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = [
        'nombre',
        'sigla',
    ];

    //Relacion uno a muchos - un area tiene muchas notas
    public function notas(){
        //return $this->hasMany('App\Nota','id_area');
        return $this->hasMany('App\Nota');
    }
}
