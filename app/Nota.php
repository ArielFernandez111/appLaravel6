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

    // esta area pertenece a una nota
    public function area(){
        return $this->belongsTo('App\Area');
    }

    // este documento pertenece a una nota
    public function documento(){
        return $this->belongsTo('App\Documento');
    }
}
