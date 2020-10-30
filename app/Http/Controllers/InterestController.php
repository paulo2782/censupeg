<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Contact;
use App\Course;
use App\Interest;

class InterestController extends Controller
{
    public function interestShow(){
    }
 
   public function routeForCorrect(){
      $dados = DB::table('contacts')
      ->whereNull('updated_at')
      ->paginate(50);
      return view('/correct/correct',compact('dados'));
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
}

