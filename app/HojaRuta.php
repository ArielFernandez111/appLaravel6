<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HojaRuta extends Model
{
    protected $fillable = [
        'id_nota',
        'codigo',
        'numero',
        'registro',
        'gestion',
    ];

    public function nota(){
        return $this->belongsTo('App\Nota','id_nota');
    }
}
