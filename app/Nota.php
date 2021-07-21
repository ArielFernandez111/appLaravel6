<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{


    protected $fillable = [
        'id_documento',
        'id_area',
        'cod_hr',
        'nro_hr',
    ];

    //Relacion uno a muchos (inversa)
    public function user(){
        return $this->belongsTo('App\User');
    }

    //Relacion uno a muchos (inversa) - este documento pertenece a una nota
    public function documento(){
        return $this->belongsTo('App\Documento');
    }

    //Relacion uno a muchos (inversa) -  esta area pertenece a una nota
    public function area(){
        return $this->belongsTo('App\Area');
    }

    // esta hojaruta pertenece a una nota // Relacion uno a uno
    public function hojaruta(){
        return $this->hasOne('App\HojaRuta');
    }
}
