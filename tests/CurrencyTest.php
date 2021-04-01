<?php

namespace Sfneal\Currency\Tests;

use PHPUnit\Framework\TestCase;
use Sfneal\Currency\Currency;

class CurrencyTest extends TestCase
{
    /** @test */
    public function dollars()
    {
        $expected = '20.21';
        $amount = 20.2134;
        $value = Currency::format($amount);

        // Type is correct
        $this->assertIsString($value);

        // Value is correct
        $this->assertEquals($expected, $value);

        // Doesn't contain dollar sign
        $this->assertStringNotContainsString('$', $value);
    }

    /** @test */
    public function dollars_with_symbol()
    {
        $expected = '$43.65';
        $amount = 43.654284;
        $value = Currency::format($amount, true, Currency::USD, 2, false);

        // Type is correct
        $this->assertIsString($value);

        // Value is correct;
        $this->assertEquals($expected, $value);

        // Doesn't contain dollar sign
        $this->assertStringContainsString('$', $value);
    }
}
