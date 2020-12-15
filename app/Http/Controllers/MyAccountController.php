<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class MyAccountController extends Controller
{
    public function myaccountShow(Request $request)
    {
    	$user = Auth()->user()->id;
    	$dados = User::where('id',$user)->get();
    	return view('myaccounts/myaccount',compact('dados'));
    }
}
