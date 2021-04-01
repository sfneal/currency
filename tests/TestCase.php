<?php

namespace Sfneal\Currency\Tests;

use PHPUnit\Framework\TestCase as PHPUnitTestCase;

class TestCase extends PHPUnitTestCase
{
    /**
     * Execute currency assertions.
     *
     * @param string $expected
     * @param string $value
     * @param string|null $symbol
     * @return void
     */
    protected function currencyAssertions(string $expected, string $value, string $symbol = null): void
    {
        // Type is correct
        $this->assertIsString($value);

        // Value is correct
        $this->assertEquals($expected, $value);

        // Contains currency symbol
        if ($symbol) {
            $this->assertStringContainsString($symbol, $value);
        }
    }
}
