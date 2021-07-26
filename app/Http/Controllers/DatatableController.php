<?php

namespace App\Http\Controllers;
use App\Nota;
use Illuminate\Http\Request;

class DatatableController extends Controller
{
    public function nota(){
        $notas = Nota::select('id', 'fecha_cite', 'nro_cite')->get();

        // return $notas;
        return datatables()->of($notas)->toJson();
    }
}
