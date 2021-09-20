<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Exception;
use DB;

class LoginController extends Controller
{
    public function index(){
        if(is_null(Session::get('login'))){
            return view('auth.login');
        }else{
            return redirect('/notas/listado');
        }
    }

    public function home(){
        if(Session::get('login') !== true){
            return redirect('/');
        }else{
            return redirect('/notas/listado');
        }
    }


    public function newlogin(Request $request)
    {
        $username = $request->input('login');
        $password = $request->input('password');
        try{
            $usuario = DB::select("select * from users WHERE username = ?", [$username] );
            if($usuario){
                //dd($usuario[0]->name);
                $usuario = $usuario[0];
                if(password_verify($password, $usuario->password)){
                    
                    // $_SESSION['name'] = $usuario->name;
                    // $_SESSION['username'] = $usuario->username;
                    // $_SESSION['email'] = $usuario->email;
                    // $_SESSION['login'] = true;
                    session([
                        'nombre' => $usuario->name,
                        'username' => $usuario->username,
                        'email' => $usuario->email,
                        'login' => true
                    ]);
                    // dd(session()->all());
                    // dd(session()->get('login'));
                    // dd(session()->all());
                    return redirect('/notas/listado');
                }
                return redirect('/');
            }else{
                return redirect('/');
            }
            // Primero buscaremos si existe una coincidencia del username
            // Segunod buscaremos si existe la conincidencia del password con el username
        }catch(Exception $e){
            dd($e);
            return redirect('/');
        }
    }

    public function logout(Request $request){
        try{
            // $usuario = $request->session()->get('usuario_id');
            // $hora = $request->session()->get('ingreso');
            // $resultado = DB::select("select * from logs WHERE usuario_id = '$usuario' AND ingreso = '$hora'");
            // $id = $resultado[0]->id;
            // $hora = date("Y-m-d H:i:s");
            // $log = Log::find($id);
            // $log->salida = $hora;
            // $log->save();
            Session::flush();
            return redirect('/');
        }catch(Exception $e){
            return redirect('/');
        }
        
    }
}
