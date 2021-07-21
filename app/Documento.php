<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $fillable = [
        'nombre',
    ];

    //Relacion uno a muchos - una categoria puede asignarse a varias notas
    public function notas(){
        //return $this->hasMany('App\Nota','id_area');
        return $this->hasMany('App\Nota');
    }
}
