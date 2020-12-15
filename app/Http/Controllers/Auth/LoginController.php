<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Session;

use Auth;
use Cookie;

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

    public function login(Request $request){
           
        $remember = request()->has('remember');
        if($remember == true){
            if(auth()->attempt([
                    'email'    => request()->input('email'),
                    'password' => request()->input('password')
            ], $remember) ){
                return redirect('/contact')
                ->withCookie(cookie('user', $request->email))
                ->withCookie(cookie('password', $request->password));

            }else{
                return back()->withErrors(['messages'=>'Usuário ou senha inválido.']);
            }          
        }

        if(auth()->attempt([
                'email'    => request()->input('email'),
                'password' => request()->input('password')
        ]) ){
            Cookie::queue(Cookie::forget('user'));
            Cookie::queue(Cookie::forget('password'));

            return redirect('/dashboard');
        }else{
            return back()->withErrors(['messages'=>'Usuário ou senha inválido.']);
        }  
    }


    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
