<?php

namespace Parfaitementweb\PasswordValidation\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use Parfaitementweb\PasswordValidation\PasswordValidationServiceProvider;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app)
    {
        return [PasswordValidationServiceProvider::class];
    }
}
