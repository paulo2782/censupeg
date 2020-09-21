<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function index(Request $request){
        $search = $request->search;
        $dados = Contact::where('name','like',$search.'%')->get();

    	return view('/contact/contact',compact('dados'));
    }


    public function store(Request $request)
    { 
    	$validator = Validator::make($request->all(),[
		  'name'=>'required|min:5',
		  'email'=>'required'
		]);
		if($validator->fails()){
            return back()->withErrors($validator);
		}

    	$interest_course = json_encode($request->interest_course,JSON_UNESCAPED_UNICODE);
        Contact::create([
            'name'=>$request['name'],
            'email'=>$request['email'],
            'phone'=>$request['phone'],
            'contact_origin'=>$request['contact_origin'],
            'interest_course'=>$interest_course,
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

    public function search(Request $request){
        $search = $request->search;
        $dados = Contact::where('name','like',$search.'%')->get();
        return view('contact/contact',compact('dados'));
    }
}
