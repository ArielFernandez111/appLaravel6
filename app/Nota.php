<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{

    protected $fillable = [
        'id_user',
        'id_documento',
        'id_area',
        'gestion',
        'fecha_cite',
        'nro_cite',
        'nombre_des',
        'cargo_cite',
        'institucion_cite',
        'referencia',
        'fecha_recepcion',
        'fecha_entrega',
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
        return $this->hasOne('App\HojaRuta','id_nota');
    }
}
