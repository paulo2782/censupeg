<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyAccountController extends Controller
{
    public function myaccountShow(Request $request)
    {
    	return view('myaccounts/myaccount');
    }
}
