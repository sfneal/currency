<?php

namespace Sfneal\Currency\Tests;

use Sfneal\Currency\Currency;

class CurrencyTest extends TestCase
{
    /** @test */
    public function format_dollars()
    {
        $expected = '20.21';
        $amount = 20.2134;
        $value = Currency::format($amount);

        $this->currencyAssertions($expected, $value);
    }

    /** @test */
    public function format_dollars_with_symbol()
    {
        $expected = '$43.65';
        $amount = 43.654284;
        $currency = Currency::USD;
        $value = Currency::format($amount, $currency);

        $this->currencyAssertions($expected, $value, $currency);
    }

    /** @test */
    public function format_dollars_with_symbol_comma_separated()
    {
        $expected = '$2,342.79';
        $amount = 2342.79354618;
        $currency = Currency::USD;
        $value = Currency::format($amount, $currency, true);

        $this->currencyAssertions($expected, $value, $currency);
    }
}
