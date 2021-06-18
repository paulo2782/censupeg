<?php

namespace App\Http\Requests\Site\User;

use App\Rules\UserIsAdministrator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function messages()
    {
        return [
            'email.unique' => 'Esse e-mail já está cadastrado na base',
        ];
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'  => 'required',
            'email' => [
                'required',
                'email',
                Rule::unique('users')
                    ->ignore(Auth::user()),
            ],
        ];
    }
}
