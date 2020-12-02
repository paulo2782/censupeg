<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Monthclass;

class MailingController extends Controller
{

    public function mailingShow(Request $request)
    {
    	$iMonth = $request->month;

    	$month = new Monthclass();

    	$iDay   = cal_days_in_month(CAL_GREGORIAN, $iMonth, date('Y'));
    	

    	$strMonth = $month->month($iMonth);
    			
    	return view('mailing/mailing',compact('strMonth','iDay','iMonth'));
    }

}
