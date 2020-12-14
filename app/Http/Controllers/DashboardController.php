<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Course;
use App\Partner;
use App\Call;

class DashboardController extends Controller
{
    public function dashboardShow(Request $request)
    {
    	$contact   = Contact::get();
    	$iContacts = count($contact); 

    	$course    = Course::get();
    	$iCourses  = count($course); 

    	$partner   = Course::get();
    	$iPartners = count($partner); 

    	$month     = date('m');
    	$year      = date('Y');

    	$call      = Call::whereYear('date_contact','=',$year)->whereMonth('date_contact','=',$month)->get();
    	$iCalls    = count($call); 

    	$arrayMonth = [];
    	for($i = 1 ; $i <= 12 ; $i++){
    		$m  = Call::whereYear('date_contact','=',$year)->whereMonth('date_contact','=',$i)->get();
    		array_push($arrayMonth, count($m));
    	}
    	
    	return view('dashboards/dashboard',compact('iContacts','iCourses','iPartners','iCalls','arrayMonth'));
    }
}
