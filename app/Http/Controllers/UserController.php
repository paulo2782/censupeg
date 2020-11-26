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
}
