<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HojaRuta extends Model
{
    //

    public function nota(){
        return $this->belongsTo('App\Nota');
    }
}
