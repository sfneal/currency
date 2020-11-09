<?php

namespace Sfneal\Currency;

use Sfneal\Actions\AbstractActionStatic;

class FormatDollarsAction extends AbstractActionStatic
{
    /**
     * Format a currency float value to a standard format.
     *
     * @param float $amount
     *
     * @param int $decimals
     * @param string $thousands_sep
     * @return string
     */
    public static function execute(float $amount, int $decimals = 2, string $thousands_sep = ''): string
    {
        return number_format($amount, $decimals, '.', $thousands_sep);
    }
}
