<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Contact;
use App\Call;
use App\Course;

class CallController extends Controller
{

    public function callShow(Request $request){
        $search = $request->search;
        $data = Call::all();

        return view('/call/call',compact('data'));
    }

    public function searchCall(Request $request){

        $search = $request->search;
        $data = Call::join('contacts','contacts.id','=','calls.contact_id')
        ->where('contacts.name','like',$search.'%')
        ->orwhere('contacts.phone','like',$search.'%')
        ->paginate(50);

        return view('/call/call',compact('data'));

    }
    
    public function searchCallEdit(Request $request)
    {

        $data        = Call::where('id',$request->id)->get();
        $data_contact= Contact::where('id',$data[0]->contact_id)->get();
        $course_name = Course::orderby('course')->get();
        
        return response()->json([
            'call_id'=>$request->id,
            'contact_id'=>$data[0]->contact_id,
            'contact_name'=>$data_contact[0]->name,
            'email'=>$data_contact[0]->email,
            'phone'=>$data_contact[0]->phone,
            'course_name'=>$course_name,
            'id_course'=>$data[0]->course_id,
            'date_contact'=>$data[0]->date_contact,
            'time'=>$data[0]->time,
            'date_return'=>$data[0]->date_return,
            'schedule'=>$data[0]->schedule,
            'status'=>$data[0]->status,
            'additional_information'=>$data[0]->additional_information
        ]);

    }

    public function updateCall(Request $request)
    {
        $call_id_edit = $request->call_id_edit;

        Call::where('id',$call_id_edit)->update(array(
        'contact_id'=>$request->contact_id_edit,
        'date_contact'=>$request->date_contact_edit,
        'date_return'=>$request->date_return_edit,
        'schedule'=>$request->schedule_edit,
        'status'=>$request->status_edit,
        'additional_information'=>$request->additional_information_edit,
        'user_id'=>$request->user_id_edit,
        'course_id'=>$request->course_id_edit,
        'time'=>$request->time_edit
        ));

        return response()->json(["mensagem"=>'Registro Alterado!']);
    }

    public function storeCall(Request $request){

        $validator = Validator::make($request->all(),[
          'date_contact'=>'required'
        ]);
        if($validator->fails()){
            $date_contact  = $request->date_contact;
            $date_return   = $request->date_return;
            $schedule      = $request->schedule;
            $status        = $request->status;
            $additional_information = $request->additional_information;

            return redirect()->back()->with([
                'date_contact'=>$date_contact,'date_return'=>$date_return,'schedule'=>$schedule,'status'=>$status,'additional_information'=>$additional_information])
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

    public function destroyCallAjax(Request $request){
        $call = Call::find($request->call_id);
        $call->delete();
        return redirect()->back()->with('alert','Registro Apagado!');
    }
}
