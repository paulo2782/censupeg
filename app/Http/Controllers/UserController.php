<?php

namespace App\Http\Controllers;

use App\Http\Requests\Site\User\StoreRequest;
use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\Site\User\DeleteRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function userShow()
    {
        $dados         = User::all();
        $deleted_users = User::onlyTrashed()->get();

        return view('users/user', compact('dados', 'deleted_users'));
    }

    public function store(StoreRequest $request)
    {
        User::create($request->all());
        return redirect()->back()->with('success', 'Usuário criado');
    }

    /**
     * @param User $user
     * @param DeleteRequest $request
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy(User $user, DeleteRequest $request)
    {
        $user->delete();
        return redirect()->back()->with('alert', 'Registro Apagado');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateUser(Request $request)
    {
        $data = $request->all();
        User::find($request->id)->update($data);
        return redirect()->back()->with('alert', 'Registro Alterado');

    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updatePassword(Request $request)
    {
        $id = $request->id;

        $validator = Validator::make($request->all(), [
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        if ($validator->fails()) {
            $old_password = $request->old_password;
            return redirect()->back()->withErrors($validator);
        } else {
            if (Auth::attempt(['id' => $id, 'password' => $request->old_password])) {
                $user = User::where('id', $id)->get();

                $user[0]->password = Hash::make($request['password']);
                $user[0]->save();

                return back()->with(['alert' => 'Senha alterada.']);
            } else {
                return back()->with(['alert' => 'Senha atual não confere.']);
            }
        }
    }

    /**
     * @param int $user_id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function activateUser(int $user_id)
    {
        $user = User::withTrashed()->findOrFail($user_id);
        $user->update(['deleted_at' => null]);

        return redirect()->back()->with('success', 'Usuário ativado com sucesso');
    }

}
