<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Archivo;

class ArchivoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $archivos = Archivo::all();
        return view('archivos.listado_a',compact('archivos'));
    }

    public function create(){

        $create = Archivo::all();
        return view('archivos.create',compact('create'));
    }
}
