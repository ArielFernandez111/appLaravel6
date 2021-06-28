<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Documento extends Model
{
    protected $fillable = [
        'nombre',
    ];

    public function notas(){
        //return $this->hasMany('App\Nota','id_area');
        return $this->hasMany('App\Nota');
    }
}
