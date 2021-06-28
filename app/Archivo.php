<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    protected $fillable = ['uuid', 'titulo', 'url'];
}
