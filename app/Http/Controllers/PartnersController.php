<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Partners;

class PartnersController extends Controller
{
    public function partnerShow(Request $request)
    {
        $search = $request->search;
        $dados = Partners::where('name','like',$search.'%')
        ->orwhere('phone','like',$search.'%')
        ->orwhere('email','like',$search.'%')
        ->orwhere('phone','like',$search.'%')

        ->paginate(50);

    	return view('partners-business/partners',compact('dados','search'));
    }

    public function storePartner(Request $request)
    {
    	$dados = $request->all();
    	Partners::create($dados);
    	return redirect()->back()->with('alert','Registro Salvo!');
    }

    public function destroyPartner(Request $request, $id)
    {
    	Partners::find($id)->delete();
    	return redirect()->back()->with('alert','Registro Excluído!');

    }

    public function updatePartner(Request $request)
    {
    	$data = $request->all();
        Partners::find($request->id)->update($data);
        return redirect()->back()->with('alert','Registro Alterado');

    }

}
