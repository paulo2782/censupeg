<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Contact;
use App\Course;

class InterestController extends Controller
{
    public function interestShow(){
      // $dados = DB::table('contacts')
      // ->join('courses','contacts.course','=','courses.course')
      // ->get();
      // dd($dados);
    }
 
   public function routeForCorrect(){
      $dados = Contact::all();

      return view('/correct/correct',compact('dados'));
    }
}

