<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Monthclass;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\ExportCalls;

use App\Call;

class MailingController extends Controller
{

    public function mailingShow(Request $request)
    {
    	return view('mailing/mailing');
    }

    public function csvMailing(Request $request){

        if($request->get('date') <> NULL){
            $date = $request->get('date');
            $dados = Call::where('date_contact',$date)->get();
            return Excel::download(new ExportCalls($dados), 'mailing.xlsx');

        }else{
            $dados = Call::all();
            return Excel::download(new ExportCalls($dados), 'mailing.xlsx');
        }

    }


    public function mailingAjax(Request $request)
    {

    	$btn    = $request->get('btn');
    	$iMonth = $request->get('month');
    	$year   = $request->get('year');

    	if($btn == 0){
    		$iMonth = $iMonth-1;
    	}

    	if($btn == 1){
    		$iMonth = $iMonth+1;
    	}
    	if($btn == 2){
    		$iMonth = $iMonth;
    	}

    	$month = new Monthclass();
    	$iDay   = cal_days_in_month(CAL_GREGORIAN, intval($iMonth), 2020);

    	$strMonth = $month->month($iMonth);


    	// Busca somente mês tabela CALL
 
    	$dataMonth   = DB::table('calls')->whereMonth('date_contact',$iMonth)->whereYear('date_contact',$year)->orderby('date_contact')->groupby('date_contact')->get();

    	$iCount		= count($dataMonth); 
    	$dataJson   = json_encode($dataMonth);

    	// Busca somente dias do mes tabela CALL
    	if($iMonth < 10){
    		$iiMonth = '0'.$iMonth;
    		$iiMonth = $iiMonth+1;
    	} 
        if($iMonth >= 10){
            // $iiMonth = '0'.$iMonth;
            $iiMonth = $iMonth+1;
        } 
        

    	$dataDayMonth   = DB::table('calls')
        ->join('contacts', 'calls.contact_id', '=', 'contacts.id')
        ->join('courses',  'calls.course_id', '=',  'courses.id')

        ->where('date_contact','like','%'.$iiMonth.'%')->get();
    	$iCountDayMonth		= count($dataDayMonth); 
    	$dataJsonDayMonth   = json_encode($dataDayMonth);

	 	return response()->json(['month'=>$iMonth,'btn'=>$btn,'nameMonth'=>$strMonth,'iDay'=>$iDay,'dataJson'=>$dataJson,'iCount'=>$iCount,
	 		'iCountDayMonth'=>$iCountDayMonth,'dataDayMonth'=>$dataDayMonth,'year'=>$year]);
	}

}


