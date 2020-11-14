<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Course;
use App\Contact;
use App\Interest;

class CourseController extends Controller
{
 	public function courseShow(Request $request){
 		$data_level_graduacao = Course::where('level_course','like','G%')->orderby('course')->get();
        $data_level_pos       = Course::where('level_course','like','P%')->orderby('course')->get();
 
    	return view('/course/course',compact('data_level_graduacao','data_level_pos'));
    }

    public function listCourse(Request $request){
        $level_course = $request->level_course;
        $dados = Course::where('level_course',$level_course)->orderby('course')->get();

        $id_course_type = $request->id_course_type;

        $dados_course_type = Course::where('id',$id_course_type)->orderby('course')->get();

        return response()->json(['courses'=>$dados,'id'=>$request->id,'dados_course_type'=>$dados_course_type]);
    }

    public function searchCourse(Request $request){
        $dados = Course::where('id',$request->id)->get();
        return response()->json(['course'=>$dados[0]->course,
            'id'=>$dados[0]->id,
            'level_course'=>$dados[0]->level_course,
            'additional_information'=>$dados[0]->additional_information,
            'course_type'=>$dados[0]->course_type]);
    }

    public function updateCourse(Request $request){
        $id = $request->id;


        $level_course = $request->level_course;
        $course = $request->course;
        $course_type = implode(",",$request->course_type);

        $additional_information = $request->additional_information;

        

        Course::where('id','=',$id)->update(array('level_course'=>$level_course,'course'=>$course,'course_type'=>$course_type,'additional_information'=>$additional_information));
        
     }

    public function storeCourse(Request $request)
    {
        $rules = array(
            'course_type' => 'required'
        );    
        $messages = array(
            'course_type.required' => 'Campo Modalidade do Curso é obrigatório'
        );

        $validator = Validator::make($request->all(),$rules, $messages);

        if($validator->fails()){
            $course = $request->course;
            $additional_information = $request->additional_information;

            return redirect()->back()
            ->with([
                'course'=>$course,
                'additional_information'=>$additional_information
            ])->withErrors($validator);
        }

    	$course_type = implode(",",$request->course_type);
    	Course::create([
    		'course'=>$request['course'],
    		'level_course'=>$request['level_course'],
    		'course_type'=>$course_type,
            'additional_information'=>$request['additional_information']
    	]);
 		return redirect('/course');
    }

    public function destroyCourse(Request $request, $id){

        $interest = Interest::where('course_id',$id)->count();

        if($interest == 0){
            $id = Course::find($id);
            $id->delete();
            return redirect()->back()->with('alert','Registro Excluído.');            
        }else{
            return redirect()->back()->with('alert','Não é possível excluir esse registro, existe contatos vinculadas.');

        }

    }

}
