<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

use App\Contact;

class ContactController extends Controller
{
    public function contactShow(Request $request){
        $search = $request->search;
        $dados = Contact::where('name','like',$search.'%')
        ->orwhere('phone','like',$search.'%')
        ->orwhere('email','like',$search.'%')
        ->paginate(50);

    	return view('/contact/contact',compact('dados'));
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
        // $interest_course = implode(",",$request->interest_course);
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

    public function destroy(Request $request){
        $id = Contact::find($request->id);
        $id->delete();
        return redirect('/contact');
    }

    public function searchContact(Request $request){
        $search = $request->search;

        $dados = Contact::where('name','like',$search.'%')
        ->orwhere('phone','like',$search.'%')
        ->orwhere('email','like',$search.'%')
        ->paginate(50);

        return view('contact/contact',compact('dados'));
     }

    public function viewData(Request $request){
        
        $dados = Contact::where('id',$request->id)->get();
        
        return view('/contact/viewData',compact('dados'));
    }
}
