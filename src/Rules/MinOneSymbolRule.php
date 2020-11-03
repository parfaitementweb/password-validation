<?php

namespace Parfaitementweb\PasswordValidation\Rules;

use Illuminate\Contracts\Validation\Rule;

class MinOneSymbolRule implements Rule
{
    public function passes($attribute, $value)
    {
        return (bool)preg_match('/\p{Z}|\p{S}|\p{P}/', $value);
    }

    public function message(): string
    {
        return trans('password-validation::validation.minonesymbol');
    }
}
