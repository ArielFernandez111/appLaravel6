<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    //Relacion muchos a muchos - un permiso va a pertenecer a muchos roles
    public function roles(){
        return $this->belongsToMany('App\Role');
    }
}
