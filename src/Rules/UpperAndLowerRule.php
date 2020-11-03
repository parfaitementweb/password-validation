<?php

namespace Parfaitementweb\PasswordValidation\Rules;

use Illuminate\Contracts\Validation\Rule;

class UpperAndLowerRule implements Rule
{
    public function passes($attribute, $value)
    {
        return (bool)preg_match('/(\p{Ll}+.*\p{Lu})|(\p{Lu}+.*\p{Ll})/u', $value);
    }

    public function message(): string
    {
        return trans('password-validation::validation.upperandlower');
    }
}
