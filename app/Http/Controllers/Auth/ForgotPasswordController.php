<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;
    
 

    public function recoveryPassword()
    {
        return view('auth/recovery_password');
    }
    public function alter_new_password(Request $request)
    {
        $token = $request->token;
        return view('auth/alter_new_password',compact('token'));    
    }
    public function updatePassword(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if($validator->fails()){
            $password  = $request->password;
            return redirect()->back()->withErrors($validator);
        }else{

            $user = User::where('token',$request->token)->get();
            
            $user[0]->password = Hash::make($request['password']);
            $user[0]->token    = '';
            $user[0]->save();
            
            return redirect('home');

        }
    }
}
