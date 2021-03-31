<?php

namespace Sfneal\Currency\Tests;

use PHPUnit\Framework\TestCase;
use Sfneal\Currency\FormatDollars;

class FormatDollarsTest extends TestCase
{
    /** @test */
    public function format_currency()
    {
        $amount = 20.2134;
        $value = (new FormatDollars($amount))->execute();

        // Type is correct
        $this->assertIsString($value);

        // Value is correct
        $this->assertTrue($value == '20.21');

        // Doesn't contain dollar sign
        $this->assertStringNotContainsString('$', $value);
    }

    /** @test */
    public function format_currency_with_dollar_sign()
    {
        $amount = 43.654284;
        $value = (new FormatDollars($amount, 2, '', true))->execute();

        // Type is correct
        $this->assertIsString($value);

        // Value is correct
        $this->assertTrue($value == '$43.65');

        // Doesn't contain dollar sign
        $this->assertStringContainsString('$', $value);
    }
}
