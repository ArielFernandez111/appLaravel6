<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nota;

class NotaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        
        $notas = Nota::orderBy('Id','desc')->paginate();
    
        return view('notas.listado', compact('notas'));
    }

    /*public function create(){

        $create = Nota::all();
        return view('notas.create',compact('create'));
    }*/

    public function create(){
        
        return view('notas.create');
    }

    public function store(Request $request){
        
        /*$request->validate([
            'autor' => 'required',
            'nombre_des' => 'required',
            'cargo_des' => 'required',
            'institucion_des' => 'required',
            'referencia' => 'required',
        ]);*/
        //return $request->file('adjdoc')->store('public/documentos');
        $nota = new Nota();

        $nota->id_documento = $request->id_documento;
        $nota->id_area = $request->id_area;
        $nota->cod_hr = $request->cod_hr;
        $nota->nro_hr = $request->nro_hr;
        $nota->reg_hr = $request->reg_hr;
        $nota->gestion = $request->gestion;
        $nota->fecha_cite = $request->fecha_cite;
        $nota->nro_cite = $request->nro_cite;
        $nota->autor = $request->autor;
        $nota->nombre_des = $request->nombre_des;
        $nota->cargo_des = $request->cargo_des;
        $nota->inst_des = $request->inst_des;
        $nota->referencia = $request->referencia;
        $nota->fecha_rec = $request->fecha_rec;

        $nota->save();

        return redirect()->route('notas.show', $nota);
    }

    public function show(Nota $nota){
        
        //$nota = Nota::find($id);

        return view('notas.show', compact('nota'));
    }

    /*public function edit(Nota $nota){
        
        //$nota = Nota::find($id);

        //return $nota;
        return view('notas.edit', compact('nota'));
    }*/

    public function update(Request $request, Nota $nota){

        $request->validate([
            'autor' => 'required',
            'nombre_des' => 'required',
            'cargo_des' => 'required',
            'institucion_des' => 'required',
            'referencia' => 'required',
        ]);

        $nota->autor = $request->autor;
        $nota->nombre_des = $request->nombre_des;
        $nota->cargo_des = $request->cargo_des;
        $nota->institucion_des = $request->institucion_des;
        $nota->referencia = $request->referencia;

        $nota->save();

        return redirect()->route('notas.show', $nota);
    }


}
