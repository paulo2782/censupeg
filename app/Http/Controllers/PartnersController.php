<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnersController extends Controller
{
    public function partnerShow(Request $request)
    {
    	return view('partners-business/partners');
    }

}
