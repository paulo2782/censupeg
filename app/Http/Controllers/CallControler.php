<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CallControler extends Controller
{
    public function callShow(){
    	return view('/call/call');
    }
}
