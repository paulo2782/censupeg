<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailingController extends Controller
{
    public function mailingShow(Request $request)
    {
    	return view('mailing/mailing');
    }

}
