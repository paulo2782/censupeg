<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Call;
use App\Contact;
use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function userShow(){
    	$dados = User::all();
    	return view('users/user',compact('dados'));
    }
    public function destroyUser(Request $request){
    	$user = User::find($request->id);

        $call    = Call::where('user_id',$request->id)->count();
        $contact = Contact::where('user_id',$request->id)->count();

        if($call == 0 && $contact == 0){
	    	$user->delete();
	    	return redirect()->back()->with('alert','Registro Apagado');
	    }else{
	    	return redirect()->back()->with('alert','Não foi possível apagar existe ligações ou contatos vinculados');
	    }
    }

    public function updateUser(Request $request)
    {
        $data = $request->all();
        User::find($request->id)->update($data);
        return redirect()->back()->with('alert','Registro Alterado');

    }

    public function updatePassword(Request $request)
    {
        $id = $request->id;

        $validator = Validator::make($request->all(),[
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if($validator->fails()){
            $old_password  = $request->old_password;
            return redirect()->back()->withErrors($validator);
        }else{
            if(Auth::attempt(['id'=>$id,'password'=>$request->old_password])){
                $user = User::where('id',$id)->get();

                $user[0]->password = Hash::make($request['password']);
                $user[0]->save();

                return back()->with(['alert'=>'Senha alterada.']);            
            }else{
                return back()->with(['alert'=>'Senha atual não confere.']);
            }
        } 
    }

}
