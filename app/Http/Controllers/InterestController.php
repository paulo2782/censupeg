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
 
   public function routeForCorrect(){
      $dados = DB::table('contacts')
      ->whereNull('updated_at')
      ->paginate(50);

      $iCount = DB::table('contacts')
      ->whereNull('updated_at')->count();

      return view('/correct/correct',compact('dados','iCount'));
    }

    public function correctRegister(request $request){
      $id = $request->id;
      $dados = DB::table('contacts')
      ->where('id','=',$id)->get();
      $dataCourses = Course::all();

      return view('/correct/correctRegister',compact('dados','dataCourses'));
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

