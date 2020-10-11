<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;

class CourseController extends Controller
{
 	public function courseShow(Request $request){
 		$dados = Course::all(); 
    	return view('/course/course',compact('dados'));
    }

    public function storeCourse(Request $request)
    {
    	$course_type = implode(",",$request->course_type);

    	Course::create([
    		'course'=>$request['course'],
    		'level_course'=>$request['level_course'],
    		'course_type'=>$course_type
    	]);
 		return redirect('/course');
    }
}
