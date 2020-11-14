<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Contact;
use App\Course;
use App\Interest;
use App\Call;

class ContactController extends Controller
{
    public function contactShow(Request $request){
    
        $search = $request->search;
        $dados = Contact::where('name','like',$search.'%')
        ->orwhere('phone','like',$search.'%')
        ->orwhere('email','like',$search.'%')
        ->paginate(50);

    	return view('/contact/contact',compact('dados','search'));
    }

    
    public function updateContact(Request $request, $id){
        $dados = $request->all();
        Contact::find($id)->update($dados);
        return back();
    }

    public function store(Request $request)
    { 
        
    	$validator = Validator::make($request->all(),[
		  'name'=>'required|min:5',
		  'email'=>'required|unique:contacts',
          'contact_origin'=>'required'
		]);
		if($validator->fails()){
            $name                   = $request->name;
            $email                  = $request->email;
            $phone                  = $request->phone;
            $contact_origin         = $request->contact_origin;
            $date_contact           = $request->date_contact;
            $scheduled_return       = $request->scheduled_return;
            $schedule               = $request->schedule;
            $additional_information = $request->additional_information; 
            $other_course           = $request->other_course;
            $status                 = $request->status;
            $hiddenContact_origin   = $request->contact_origin;
            
            return redirect()->back()->with([
                'name'=>$name,'email'=>$email,'phone'=>$phone,'contact_origin'=>$contact_origin,
                'date_contact'=>$date_contact,'scheduled_return'=>$scheduled_return,
                'schedule'=>$schedule,'additional_information'=>$additional_information,
                'other_course'=>$other_course,'status'=>$status,
                'hiddenContact_origin'=>$hiddenContact_origin])
            ->withErrors($validator);
		}

         Contact::create([

            'user_id'=>$request['id'],
            'name'=>$request['name'],
            'email'=>$request['email'],
            'phone'=>$request['phone'],
            'schooling'=>$request['schooling'],
            'state'=>$request['state'],
            'city'=>$request['city'],
            'contact_origin'=>$request['contact_origin'],
            // 'interest_course'=>$interest_course,
            'date_contact'=>$request['date_contact'],
            'scheduled_return'=>$request['scheduled_return'],
            'schedule'=>$request['schedule'],
            'status'=>$request['status'],
            'additional_information'=>$request['additional_information'],
            'other_course'=>$request['other_course']
        ]);
 
         return redirect('/contact');
    }

    public function destroy(Request $request, $id){
 
        $data = Interest::where('contact_id',$id)->get();
        $iCount = Interest::where('contact_id',$id)->count();

        if($iCount > 0){
            $id_course = $data[0]->course_id;
        }else{
            $id_course = 0;
        }
 
        $ligacao = Call::where('contact_id',$id)->count();
        $course  = Course::where('id',$id_course)->count();
        


        if($ligacao == 0 && $course == 0){
            $id = Contact::find($id);
            $id->delete();
            return redirect()->back()->with('alert','Registro Excluído.');            
        }else{
            return redirect()->back()->with('alert','Não é possível excluir esse registro, existem cursos (e ou) ligações vinculadas.');
        }
    }

    public function searchContact(Request $request){
        $search = $request->search;

        $dados = Contact::where('name','like',$search.'%')
        ->orwhere('phone','like',$search.'%')
        ->orwhere('email','like',$search.'%')
        
        ->paginate(50);

        return view('contact/contact',compact('dados','search'));
     }

    public function viewData(Request $request){
        $courses = Course::all();
        $dados = Contact::where('id',$request->id)->get();
        
        // $dataInterests = Interest::where('contact_id','=',$request->id)->get();

        $dataInterests = DB::table('interests')
        ->where('contact_id',$request->id)
        ->join('courses','courses.id','=','interests.course_id')
        ->select('interests.*','courses.course as course', 'courses.course_type as course_type','level_course as level_course')
        ->orderby('courses.course')
        ->get();


        $dataCalls = Call::where('contact_id','=',$request->id)->get(); 
        return view('/contact/viewData',compact('dados','courses','dataInterests','dataCalls'));
    }
}
