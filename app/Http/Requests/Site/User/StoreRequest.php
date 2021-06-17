<?php

namespace App\Http\Requests\Site\User;

use App\Rules\UserIsAdministrator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Arr;
use Illuminate\Validation\Rule;

class StoreRequest extends FormRequest
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

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
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
            'name'     => 'required',
            'email'    => 'required|unique:users,email',
            'password' => 'required|confirmed',
            'level'    => 'required',
        ];
    }

    /**
     * @param null $keys
     * @return array
     */
    public function all($keys = null)
    {
        $data = parent::all($keys);

        $password = bcrypt(Arr::get($data, 'password'));

        return array_merge($data, [
            'email'                 => strtolower(Arr::get($data, 'email')),
            'password'              => $password,
            'password_confirmation' => $password
        ]);
    }
}
