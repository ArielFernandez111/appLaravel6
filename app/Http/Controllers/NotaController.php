<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nota;

class NotaController extends Controller
{
    public function index(){

        $notas = Nota::all();
        return view('notas.listado',compact('notas'));
    }

    public function create(){

        $create = Nota::all();
        return view('notas.create',compact('create'));
    }

}
