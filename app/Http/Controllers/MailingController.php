<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Monthclass;
use Illuminate\Support\Facades\DB;

use App\Call;

class MailingController extends Controller
{

    public function mailingShow(Request $request)
    {
    	return view('mailing/mailing');
    }

    public function mailingAjax(Request $request)
    {

    	$btn    = $request->get('btn');
    	$iMonth = $request->get('month');
    	
    	if($btn == 0){
    		$iMonth = $iMonth-1;
    	}

    	if($btn == 1){
    		$iMonth = $iMonth+1;
    	}

    	$month = new Monthclass();
    	$iDay   = cal_days_in_month(CAL_GREGORIAN, intval($iMonth), 2020);

    	$strMonth = $month->month($iMonth);


    	// Busca somente mês tabela CALL
 
    	$dataMonth   = DB::table('calls')->whereMonth('date_contact',$iMonth)->orderby('date_contact')->groupby('date_contact')->get();

    	$iCount		= count($dataMonth); 
    	$dataJson   = json_encode($dataMonth);

    	// Busca somente dias do mes tabela CALL
    	if($iMonth < 10){
    		$iiMonth = '0'.$iMonth;
    		$iiMonth = $iiMonth+1;
    	}

    	$dataDayMonth   = DB::table('calls')->where('date_contact','like','%'.$iiMonth.'%')->get();
    	$iCountDayMonth		= count($dataDayMonth); 
    	$dataJsonDayMonth   = json_encode($dataDayMonth);


	 	return response()->json(['month'=>$iMonth,'btn'=>$btn,'nameMonth'=>$strMonth,'iDay'=>$iDay,'dataJson'=>$dataJson,'iCount'=>$iCount,
	 		'iCountDayMonth'=>$iCountDayMonth,'dataDayMonth'=>$dataDayMonth]);
	}

}


