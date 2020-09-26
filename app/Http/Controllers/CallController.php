<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class CallController extends Controller
{

    public function callShow(Request $request){
        $search = $request->search;
        $dados = Contact::where('name','like',$search.'%')
        ->orwhere('phone','like',$search.'%')
        ->orwhere('date_contact','like','%'.$search.'%')
        ->orwhere('scheduled_return','like','%'.$search.'%')
        ->get();

    	return view('/call/call',compact('dados'));
    }

    public function searchCall(Request $request){

        $search = $request->search;

        $dados = Contact::where('name','like',$search.'%')
        ->orwhere('phone','like',$search.'%')
        ->orwhere('date_contact','like','%'.$search.'%')
        ->orwhere('scheduled_return','like','%'.$search.'%')
        ->get();

        return view('/call/call',compact('dados'));

    }

}
