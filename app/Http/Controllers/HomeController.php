<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nota;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function home()
    {
        $notas = Nota::orderBy('Id','desc')->paginate();
        return view('notas.listado')->with(compact('notas'));
    }
}
