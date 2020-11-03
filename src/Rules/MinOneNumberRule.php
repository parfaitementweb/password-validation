<?php

namespace Parfaitementweb\PasswordValidation\Rules;

use Illuminate\Contracts\Validation\Rule;

class MinOneNumberRule implements Rule
{
    public function passes($attribute, $value)
    {
        return (bool)preg_match('/\pN/', $value);
    }

    public function message(): string
    {
        return trans('password-validation::validation.minonenumber');
    }
}
