<?php

namespace App\Http\Requests\Site\User;

use App\Rules\UserIsAdministrator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DeleteRequest extends FormRequest
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
            'id.not_in' => 'Você não pode excluir a si mesmo',
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
            'level' => [new UserIsAdministrator()],
            'id'    => ['required', Rule::notIn([auth()->id()])],
        ];
    }

    public function validationData()
    {
        $this->merge([
            'level' => auth()->user()->level
        ]);

        return $this->all();
    }
}
