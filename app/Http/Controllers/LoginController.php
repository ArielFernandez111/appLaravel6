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

        define('DOMINIO', 'dgsgif.gob.bo');
        define('DN', 'dc=dgsgif,dc=gob,dc=bo');

        try{
            // $usuario = DB::select("select * from users WHERE username = ?", [$username] );
            // if($usuario){
            //     //dd($usuario[0]->name);
            //     $usuario = $usuario[0];
            //     if(password_verify($password, $usuario->password)){
                    
            //         // $_SESSION['name'] = $usuario->name;
            //         // $_SESSION['username'] = $usuario->username;
            //         // $_SESSION['email'] = $usuario->email;
            //         // $_SESSION['login'] = true;
            //         session([
            //             'nombre' => $usuario->name,
            //             'username' => $usuario->username,
            //             'email' => $usuario->email,
            //             'login' => true
            //         ]);
            //         // dd(session()->all());
            //         // dd(session()->get('login'));
            //         // dd(session()->all());
            //         return redirect('/notas/listado');
            //     }
            //     return redirect('/');
            // }else{
            //     return redirect('/');
            // }
            // Primero buscaremos si existe una coincidencia del username
            // Segunod buscaremos si existe la conincidencia del password con el username
            //$usuario = verifica($username,$password);

            $ldaprdn = trim($username).'@'.DOMINIO;  
            $ldappass = trim($password);  
            $ds = DOMINIO;  
            $dn = DN;   
            $puertoldap = 389;
            $ldapconn = ldap_connect($ds,$puertoldap);
            
            ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION,3);  
            ldap_set_option($ldapconn, LDAP_OPT_REFERRALS,0);  
            
            $ldapbind = @ldap_bind($ldapconn, $ldaprdn, $ldappass);  
            if ($ldapbind){ 
                $filter="(|(SAMAccountName=".trim($username)."))"; 
                $fields = array("SAMAccountName");  
                $sr = @ldap_search($ldapconn, $dn, $filter, $fields);  
                $info = @ldap_get_entries($ldapconn, $sr);  
                $array = $info[0]["samaccountname"][0]; 
            }else{  
                    $array=0; 
            }  
            ldap_close($ldapconn);


            if(strcmp($array,$username)==0 && $username!="")
            {
                session([
                    'nombre' => $username,
                    'username' => $password,
                    //'email' => $usuario->email,
                    'login' => true
                    ]);
                return redirect('/notas/listado');
            }
            else
             {  	
                //echo"<script> alert('Usuario o clave incorrecta. Vuelva a digitarlos por favor.'); window.location.href='https://dgsgif.sigma.gob.bo/index.php/ldap-dgsgif/'; </script>";	   
                return redirect('/');
             }

        }catch(Exception $e){
            dd($e);
            return redirect('/');
        }
    }

    public function verifica($user,$pass){ 
        $ldaprdn = trim($user).'@'.DOMINIO;  
        $ldappass = trim($pass);  
        $ds = DOMINIO;  
        $dn = DN;   
        $puertoldap = 389;
        echo "ldaprdn=".$ldaprdn.'----ldappass='.$ldappass.'-----ds='.$ds.'------dn='.$dn;
        echo "<br>";
        
        $ldapconn = ldap_connect($ds,$puertoldap);
        
          ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION,3);  
          ldap_set_option($ldapconn, LDAP_OPT_REFERRALS,0);  
          
          $ldapbind = @ldap_bind($ldapconn, $ldaprdn, $ldappass);  
          if ($ldapbind){ 
            $filter="(|(SAMAccountName=".trim($user)."))"; 
            $fields = array("SAMAccountName");  
            $sr = @ldap_search($ldapconn, $dn, $filter, $fields);  
            $info = @ldap_get_entries($ldapconn, $sr);  
            $array = $info[0]["samaccountname"][0]; 
            print_r($info);
          }else{  
                $array=0; 
                print_r($array);
          }  
        ldap_close($ldapconn);  
        return $array; 
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
