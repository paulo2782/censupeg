<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function reportShow(Request $request)
    {
    	return view('report/report_general');
    }

}
