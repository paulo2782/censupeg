<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Contact;
use App\Call;

class CallController extends Controller
{

    public function callShow(Request $request){
        $search = $request->search;
        $data = Call::all();

    	return view('/call/call',compact('data'));
    }

    public function searchCall(Request $request){

        $search = $request->search;
        $data = Call::all();

        return view('/call/call',compact('data'));

    }

    public function storeCall(Request $request){

        $validator = Validator::make($request->all(),[
          'date_contact'=>'required',
          'date_return'=>'required',
          'schedule'=>'required'
        ]);
        if($validator->fails()){
            $date_contact  = $request->date_contact;
            $date_return   = $request->date_return;
            $schedule      = $request->schedule;
            $status        = $request->status;

            return redirect()->back()->with([
                'date_contact'=>$date_contact,'date_return'=>$date_return,'schedule'=>$schedule,'status'=>$status])
            ->withErrors($validator);
        }

        Call::create($request->all());
        return back();

    }

    public function destroyCall(Request $request, $id){
        $id = Call::find($request->id);
        $id->delete();
        return back();

    }

}
