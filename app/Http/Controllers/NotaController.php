<?php

namespace App\Http\Controllers;

use App\Area;
use App\Documento;
use App\HojaRuta;
use App\Nota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotaController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index(){

        $notas = Nota::orderBy('Id','desc')->paginate();
        $documentos = Documento::get();
        return view('notas.listado', compact('notas', 'documentos'));
    }

    public function index2($documento){

        $notas = Nota::where('id_documento', $documento)->orderBy('Id','desc')->paginate();
        $documentos = Documento::get();
        // dd($documentos);
        return view('notas.listado', compact('notas', 'documentos'));
    }

    /*public function create(){

        $create = Nota::all();
        return view('notas.create',compact('create'));
    }*/

    public function create(){
        //$areas = [Area::get(), Documento::get()];
        $areas      = Area::get();
        $documentos = Documento::get();

         //$areas = Documento::get();
        //$notas = Area::get();
        //dd($areas);
        return view('notas.create')->with(compact('areas', 'documentos'));
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
        $nota->id_user = Auth::user()->id;
        $nota->id_documento = $request->id_documento;
        // $nota->hojaruta = $request->hojaruta;
        $nota->id_area = $request->id_area;

        $nota->gestion = date('Y');
        $nota->fecha_cite = $request->fecha_cite;

        // SELECT max(nro_cite)
        // FROM nota
        // WHERE nota.id_area = id_area AND nota.id_documento = id_documento

        // Hallamos el maximo valor en nota_cite donde id_area sea igual a nota.id_area y id_documento sea igual a nota.id_documento
        $nro_cite = Nota::where('id_area', $request->id_area)
                        ->where('id_documento', $request->id_documento)
                        ->max('nro_cite');
        // Preguntamos si $nro_cite esta definido
        if($nro_cite){
            // Si esta definido se incrementa en 1
            $nro_cite = $nro_cite + 1;
        }else{
            // Si no esta definido, su valor sera 1
            $nro_cite = 1;
        }

        $nota->nro_cite = $nro_cite;
        // $nota->nro_cite = $request->nro_cite;

        $nota->nombre_des = $request->nombre_des;
        $nota->cargo_des = $request->cargo_des;
        $nota->institucion_des = $request->institucion_des;
        $nota->referencia = $request->referencia;
        $nota->fecha_recepcion = $request->fecha_recepcion;
        $nota->fecha_entrega = $request->fecha_entrega;

        //dd($nota);
        //dd($request->all);
        $nota->save();
        //dd($nota->id);

        //SI ES NOTA EXTERNA, NOTA INTERNA, INFORME
        if($nota->id_documento == 1 || $nota->id_documento == 2 || $nota->id_documento == 3){
            $hojaruta = new HojaRuta();
            $hojaruta->id_nota = $nota->id;
            $hojaruta->gestion = $nota->gestion;

            if($request->hojaruta == "S"){
                // ASIGNAR HOJA RUTA MANUALMENTE
                $hojaruta->codigo = $request->codigo_hr;
                $hojaruta->numero = $request->numero_hr;
                $hojaruta->registro = $request->registro_hr;
            }else{
                // ASIGNAR HOJA RUTA AUTOMATICA
                //Si es DGSGIF
                if($nota->id_area == 1){
                    $codigo = 46;
                }else{
                    if($nota->id_area == 2 || $nota->id_area == 4){
                        // Si es UISS o UIT
                        $codigo = 123;
                    }else{
                        // Si es USI
                        $codigo = 107;
                    }
                }

                $hojaruta->codigo = $codigo;
                //dd($codigo);
                //SI ES NOTA EXTERNA
                // if($nota->id_documento == 1){
                //     $registro = "R";
                // }else{//SI ES NOTA INTERNA
                //     $registro = "D";
                // }
                $registro = "D";
                $hojaruta->registro = $registro;

                // Hallamos el maximo valor en nota_cite donde id_area sea igual a nota.id_area y id_documento sea igual a nota.id_documento
                $numero = HojaRuta::where('codigo', $codigo)
                                    ->where('registro', $registro)
                                    ->max('numero');
             
                // Preguntamos si $nro_cite esta definido
                if($numero){
                    // Si esta definido se incrementa en 1
                    $numero = $numero + 1;
                }else{
                    // Si no esta definido, su valor sera 1
                    $numero = 1;
                }

                $hojaruta->numero = $numero;
            }
            $hojaruta->save();
        }

        // SI ES MEMORANDUM Y TIENE HOJA RUTA
        if($nota->id_documento == 4 && $request->hojaruta == "S"){
            $hojaruta = new HojaRuta();
            $hojaruta->id_nota = $nota->id;
            $hojaruta->gestion = $nota->gestion;

            $hojaruta->codigo = $request->codigo_hr;
            $hojaruta->numero = $request->numero_hr;
            $hojaruta->registro = $request->registro_hr;

            $hojaruta->save();
        }

        //return redirect()->route('notas.show', $nota);
        return redirect()->route('listado_nota');
    }

    public function show(Nota $nota){

        //$nota = Nota::find($id);

        return view('notas.show', compact('nota'));
    }

    public function edit(Nota $nota){
        //dd("holas");
        //$nota = Nota::find($nota);
        $areas = Area::get();
        $documentos = Documento::get();
        //return $nota;
        // return view('notas.edit', compact('nota'));
        return view('notas.edit', compact('nota','areas','documentos'));
        // return view('notas.create')->with(compact('areas'));


        // return view('notas.create')->with(compact('areas', 'documentos'));

    }

    public function update(Request $request, Nota $nota){

        /*$request->validate([
            'autor' => 'required',
            'nombre_des' => 'required',
            'cargo_des' => 'required',
            'institucion_des' => 'required',
            'referencia' => 'required',
        ]);*/
        //dd($request-session()$request->session()->get('key', 'default');)

        // $nota->cod_hr = $request->cod_hr;
        // $nota->nro_hr = $request->nro_hr;
        // $nota->reg_hr = $request->reg_hr;
        $nota->fecha_cite = $request->fecha_cite;
        //$nota->autor = $request->autor;
        $nota->nombre_des = $request->nombre_des;
        $nota->cargo_des = $request->cargo_des;
        $nota->institucion_des = $request->institucion_des;
        $nota->referencia = $request->referencia;
        $nota->fecha_recepcion = $request->fecha_recepcion;
        $nota->fecha_entrega = $request->fecha_entrega;

        $nota->save();

        // return redirect()->route('notas.show', $nota);
        return redirect()->route('listado_nota');
    }


}
