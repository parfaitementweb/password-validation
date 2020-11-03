<?php

namespace Parfaitementweb\PasswordValidation;

use Illuminate\Contracts\Validation\Factory;
use Illuminate\Support\ServiceProvider as IlluminateServiceProvider;

class PasswordValidationServiceProvider extends IlluminateServiceProvider
{
    public function boot(Factory $validator)
    {
        $this->loadTranslationsFrom(__DIR__ . '/../resources/lang', 'password-validation');
    }
}
