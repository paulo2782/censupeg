<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\Monthclass;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

use App\Exports\ExportCalls;

use App\Call;
use App\Course;

class MailingController extends Controller
{

    public function mailingShow(Request $request)
    {
        $courses = Course::all();
        return view('mailing/mailing',compact('courses'));
    }

    public function editMailing(Request $request)
    {

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
        $iMonth = $request->get('month');
        $year   = $request->get('year');

        
        $month = new Monthclass();
        $iDay   = cal_days_in_month(CAL_GREGORIAN, intval($iMonth), 2020);

        $strMonth = $month->month($iMonth);

        if($level == 1){
            $dataMonth   = DB::table('calls')
            ->whereMonth('date_contact',$iMonth)
            ->whereYear('date_contact',$year)
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

        $iCount     = count($dataMonth); 
        $dataJson   = json_encode($dataMonth);


        $dataDayMonth   = DB::table('calls')
        ->join('contacts', 'calls.contact_id', '=', 'contacts.id')
        ->join('courses',  'calls.course_id', '=',  'courses.id')
        ->select('calls.id as call_id', 'calls.contact_id as contact_id', 'calls.date_contact as date_contact', 'calls.date_return as date_return', 'calls.schedule as schedule', 'calls.status as status', 'calls.additional_information as additional_information','calls.user_id as user_id','calls.course_id as course_id','calls.created_at as created_at',
            'courses.course as course',
            'contacts.name as name')

        ->where('date_contact','like','%'.$request->get('iMonth').'%')->get();
        $iCountDayMonth     = count($dataDayMonth); 
        $dataJsonDayMonth   = json_encode($dataDayMonth);

        return response()->json(['month'=>$iMonth,'nameMonth'=>$strMonth,'iDay'=>$iDay,'dataJson'=>$dataJson,'iCount'=>$iCount,
            'iCountDayMonth'=>$iCountDayMonth,'dataDayMonth'=>$dataDayMonth,'year'=>$year]);
    }

}


