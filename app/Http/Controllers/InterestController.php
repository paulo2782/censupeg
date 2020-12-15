<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Contact;
use App\Course;
use App\Interest;

class InterestController extends Controller
{
    public function interestStore(Request $request){
       $dados = $request->all();
       Interest::create($dados);
       return back();
    }

    public function searchInterest(Request $request)
    {
      $dados = Interest::find($request->id);


      return response()->json([
        'course_id'=>$dados->course_id,
        'level_course'=>$dados->course->level_course,
        'status'=>$dados->status,
        'course'=>$dados->course->course,
        'course_type'=>$dados->course->course_type]);
    }

    public function searchInterestModal(Request $request)
    {
      $course_id = [];

      $contact_id = $request->get('contact_id');

      $dados = DB::table('interests')->where('contact_id',$contact_id)->get();

      $iCount = count($dados);
      
      for($i = 0 ; $i <= $iCount-1 ; $i++){
        array_push($course_id, $dados[$i]->course_id);
      }

      $course_name = Course::wherein('id',$course_id)->get();

      return response()->json(['dados'=>$course_name]);
    }

    

    public function updateInterestCourse(Request $request)
    {
        $interest_id_edit = $request->interest_id_edit;

        Interest::where('id',$interest_id_edit)->update(array(
          'course_id'=>$request->id_selectCourse,
          'contact_id'=>$request->contact_id,
          'status'=>$request->status
        ));

        return response()->json(["mensagem"=>$interest_id_edit]);
    }
    public function updateRegister(Request $request, $id){
        $dados = $request->all();
        Contact::find($id)->update($dados);

        Interest::create($dados);

        return redirect('routeForCorrect');
    }

    public function destroyInterestCourse(Request $request){
        $id = Interest::find($request->id);
        $id->delete();
        return back();

    }

}

