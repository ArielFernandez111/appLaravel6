<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Exception;
use App\User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function inicio()
    {
        return view('auth.login');
    }
    
    public function newlogin(Request $request)
    {
        $username = $request->input('login');
        $password = $request->input('password');
        try{
            $usuario    = User::where('username', $username)
                                ->first();
            if($usuario){
                if(password_verify($password, $usuario->password)){
                    $_SESSION['name'] = $usuario->name;
                    $_SESSION['username'] = $usuario->username;
                    $_SESSION['email'] = $usuario->email;
                    $_SESSION['login'] = true;
                    // session([
                    //     'name' => $usuario->name,
                    //     'username' => $usuario->username,
                    //     'email' => $usuario->email
                    // ]);
                    //dd($_SESSION['name']);
                    return redirect('home');
                }
            }else{
                return redirect('/');
            }
            // Primero buscaremos si existe una coincidencia del username
            // Segunod buscaremos si existe la conincidencia del password con el username
        }catch(Exception $e){
            return redirect('/');
        }
    }

    public function username()
    {
        $login = request()->input("login");
        
        $fieldType = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

        request()->merge([$fieldType => $login]);

        return $fieldType;
    }
}
