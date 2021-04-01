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
        $value2 = Currency::dollars($amount);

        $this->assertSame($value, $value2);
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

    /** @test */
    public function format_euros()
    {
        $expected = '20.21';
        $amount = 20.2134;
        $value = Currency::format($amount);

        $this->currencyAssertions($expected, $value);
    }

    /** @test */
    public function format_euros_with_symbol()
    {
        $expected = '€43.65';
        $amount = 43.654284;
        $currency = Currency::EUR;
        $value = Currency::format($amount, $currency);
        $value2 = Currency::euros($amount);

        $this->assertSame($value, $value2);
        $this->currencyAssertions($expected, $value, $currency);
    }

    /** @test */
    public function format_euros_with_symbol_comma_separated()
    {
        $expected = '€2,342.79';
        $amount = 2342.79354618;
        $currency = Currency::EUR;
        $value = Currency::format($amount, $currency, true);

        $this->currencyAssertions($expected, $value, $currency);
    }

    /** @test */
    public function format_pounds()
    {
        $expected = '20.21';
        $amount = 20.2134;
        $value = Currency::format($amount);

        $this->currencyAssertions($expected, $value);
    }

    /** @test */
    public function format_pounds_with_symbol()
    {
        $expected = '£43.65';
        $amount = 43.654284;
        $currency = Currency::GBP;
        $value = Currency::format($amount, $currency);
        $value2 = Currency::pounds($amount);

        $this->assertSame($value, $value2);
        $this->currencyAssertions($expected, $value, $currency);
    }

    /** @test */
    public function format_pounds_with_symbol_comma_separated()
    {
        $expected = '£2,342.79';
        $amount = 2342.79354618;
        $currency = Currency::GBP;
        $value = Currency::format($amount, $currency, true);

        $this->currencyAssertions($expected, $value, $currency);
    }
}
