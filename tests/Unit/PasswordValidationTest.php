<?php

namespace  Parfaitementweb\PasswordValidation\Tests\Unit;

use Parfaitementweb\PasswordValidation\Rules\MinOneLetterRule;
use Parfaitementweb\PasswordValidation\Rules\MinOneNumberRule;
use Parfaitementweb\PasswordValidation\Rules\MinOneSymbolRule;
use Parfaitementweb\PasswordValidation\Rules\UpperAndLowerRule;
use Parfaitementweb\PasswordValidation\Tests\TestCase;

class PasswordValidationTest extends TestCase
{
    public function testMinOneLetter()
    {
        $rule = new MinOneLetterRule();

        $this->assertFalse($rule->passes('attribute', '1'));
        $this->assertTrue($rule->passes('attribute', '1111a'));
    }

    public function testUpperAndLower()
    {
        $rule = new UpperAndLowerRule();

        $this->assertFalse($rule->passes('attribute', 'azerty'));
        $this->assertTrue($rule->passes('attribute', 'azeRTY'));
        $this->assertFalse($rule->passes('attribute', '123456'));
    }

    public function testMinOneNumber()
    {
        $rule = new MinOneNumberRule();

        $this->assertFalse($rule->passes('attribute', 'azeRTY'));
        $this->assertFalse($rule->passes('attribute', 'azerty'));
        $this->assertTrue($rule->passes('attribute', '123456'));
        $this->assertTrue($rule->passes('attribute', 'aze1rty'));
        $this->assertTrue($rule->passes('attribute', 'aze134rty'));
    }

    public function testMinOneSymbol()
    {
        $rule = new MinOneSymbolRule();

        $this->assertFalse($rule->passes('attribute', 'azeRTY'));
        $this->assertFalse($rule->passes('attribute', 'azerty'));
        $this->assertFalse($rule->passes('attribute', '123456'));
        $this->assertFalse($rule->passes('attribute', 'aze123rty'));
        $this->assertTrue($rule->passes('attribute', 'aze123r#ty'));
        $this->assertTrue($rule->passes('attribute', 'aze123r:ty'));
    }
}
