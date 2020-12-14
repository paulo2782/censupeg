<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardShow(Request $request)
    {
    	return view('dashboards/dashboard');
    }
}
