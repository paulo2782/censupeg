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

        $user_id= $request->get('user_id');
        $level  = $request->get('level');
        $month = $request->get('month');
        $value_month = $request->get('value_month');
        $value_year = $request->get('value_year');
        // dd($request->all());

        // TODOS REGISTRO MENSAL TABELA CALL
        if($month <> null){
            if($level == 1){        
                $dados = Call::whereMonth('date_contact',$value_month)
                ->whereYear('date_contact',$value_year)
                ->orderby('date_contact','DESC')->get();
                return Excel::download(new ExportCalls($dados), 'mailing.xlsx');
            }

            if($level == 0){        
                $dados = Call::whereMonth('date_contact',$value_month)
                ->whereYear('date_contact',$value_year)
                ->where('user_id',$user_id)
                ->orderby('date_contact','DESC')
                ->get();
                return Excel::download(new ExportCalls($dados), 'mailing.xlsx');
            }
            
        }

        // TODOS REGISTROS DA TABELA CALL
        // POR DATA
        if($request->get('date') <> NULL){
        
            $date = $request->get('date');

        // TODOS OS REGISTROS P/ ADMINISTRADOR C/ DATA
            
            if($level == 1){        
                $dados = Call::where('date_contact',$date)->orderby('date_contact','DESC')->get();
                return Excel::download(new ExportCalls($dados), 'mailing.xlsx');
            }

            if($level == 0){        
                $dados = Call::orderby('date_contact','DESC')
                ->where('date_contact',$date)
                ->where('user_id',$user_id)
                ->get();
                return Excel::download(new ExportCalls($dados), 'mailing.xlsx');
            }

        }

        // TODOS OS REGISTROS P/ ADMINISTRADOR
            
        if($level == 1){        
            $dados = Call::orderby('date_contact','DESC')->get();                
            return Excel::download(new ExportCalls($dados), 'mailing.xlsx');
        }

        //  TODOS REGISTROS P/ OPERADOR
            
        if($level == 0){

            $dados = Call::where('user_id',$user_id)
            ->orderby('date_contact','DESC')
            ->get();
            return Excel::download(new ExportCalls($dados), 'mailing.xlsx');
        }

    }


    public function mailingAjax(Request $request)
    {

        $level  = $request->get('level');
        $user_id= $request->get('user_id');
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
        if($level == 1){
        	$dataMonth   = DB::table('calls')
            ->whereMonth('date_contact',$iMonth)
            ->whereYear('date_contact',$year)
            // ->where('user_id',$user_id)
            ->orderby('date_contact')
            ->groupby('date_contact')
            ->get();
        }else{
            $dataMonth   = DB::table('calls')
            ->whereMonth('date_contact',$iMonth)
            ->whereYear('date_contact',$year)
            ->where('user_id',$user_id)
            ->orderby('date_contact')
            ->groupby('date_contact')
            ->get();

        }

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


