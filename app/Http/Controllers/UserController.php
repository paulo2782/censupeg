<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function userShow(){
    	$dados = User::all();
    	return view('users/user',compact('dados'));
    }
    public function destroyUser(Request $request){
    	$user = User::find($request->id);
    	$user->delete();
    	return redirect()->back()->with('alert','Registro Apagado');
    }
}
