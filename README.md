# Laravel Password Validation Rules

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