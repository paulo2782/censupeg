<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class UserIsAdministrator implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return auth()->user()->isAdministrator();
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Apenas administradores podem excluir um usuário';
    }
}
