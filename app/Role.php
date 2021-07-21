<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    //Relacion muchos a muchos - un rol va a pertenecer a muchos usuarios
    public function users(){
        return $this->belongsToMany('App\User');
    }

    //Relacion muchos a muchos - un rol va a pertenecer a muchos permisos
    public function permisos(){
        return $this->belongsToMany('App\Permiso');
    }
}
