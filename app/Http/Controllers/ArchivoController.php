<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Archivo;
use Illuminate\Support\Str;

use Illuminate\Support\Facades\Storage;

class ArchivoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){

        $archivos = Archivo::all();
        return view('archivos.listado',compact('archivos'));
    }

    public function create(){

       // $create = Archivo::all();
        return view('archivos.create');
    }

    public function store(Request $request){

        $archivo = $request->all();
        $archivo['uuid'] = (String) Str::uuid();

        if($request->hasFile('url')){
            // $archivo['url'] = $request->file('url')->store('documentos');

            $archivo['url'] = time() . '_' . $request->file('url')->getClientOriginalName();
            $request->file('url')->storeAs('public/documentos', $archivo['url']);
        }
        

        Archivo::create($archivo);

        return redirect()->route('listado_archivo');

        // $request->validate([
        //     'file' => 'required'
        // ]);
        // // $create = Archivo::all();
        // $imagenes = $request->file('file')->store('public/2021/06/21');
        // //$archivo = new Archivo();
        // $url = Storage::url($imagenes);

        // //$titulos = $archivo->titulo = $request->titulo;
        // $titulo = Storage::url($imagenes);

        // Archivo::create([
        //     'titulo' => $titulo,
        //     'url' => $url
        // ]);

        // return redirect()->route('listado_archivo');
        //return view('archivos.listado');
        //$nota->save();

       // return redirect()->route('notas.show', $nota);
     }

     public function download($uuid){
        $archivo = Archivo::where('uuid', $uuid)->firstOrFail();
        $pathToFile = storage_path("app/public/documentos/" . $archivo->url);
        return response()->download($pathToFile);
     }
}