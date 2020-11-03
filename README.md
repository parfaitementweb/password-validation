# Laravel Password Validation Rules

[![Latest Version on Packagist](https://img.shields.io/packagist/v/parfaitementweb/password-validation.svg?style=flat-square)](https://packagist.org/packages/parfaitementweb/password-validation)
[![MIT Licensed](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
![GitHub Workflow Status](https://img.shields.io/github/workflow/status/parfaitementweb/password-validation/run-tests?label=tests)

This package provides additional validation rules to empower strong password usage in Laravel applications.

## Installation

You can install the package via composer:

```bash
composer require parfaitementweb/password-validation
```

The package will automatically register itself.

### Translations

If you wish to edit the package translations, you can run the following command to publish them into your `resources/lang` folder

```bash
php artisan vendor:publish --provider="Parfaitementweb\PasswordValidation\PasswordValidationServiceProvider"
```

## Rules

 * `minoneletter` - The field must include at least one letter.
 * `upperandlower` - The field must include both upper and lower case letters.
 * `minonenumber` - The field must include at least one number.
 * `minonesymbol` - The field must include at least one symbol.