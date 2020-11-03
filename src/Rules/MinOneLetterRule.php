<?php

namespace Parfaitementweb\PasswordValidation\Rules;

use Illuminate\Contracts\Validation\Rule;

class MinOneLetterRule implements Rule
{
    public function passes($attribute, $value)
    {
        return (bool)preg_match('/\pL/', $value);
    }

    public function message(): string
    {
        return trans('password-validation::validation.minoneletter');
    }
}
