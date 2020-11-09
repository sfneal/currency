<?php

namespace Sfneal\Currency;

use Sfneal\Actions\AbstractActionStatic;

class FormatDollars extends AbstractActionStatic
{
    /**
     * Format a currency float value to a standard format.
     *
     * @param float $amount
     *
     * @param int $decimals
     * @param string $thousands_sep
     * @param bool $dollar_sign_prefix
     * @return string
     */
    public static function execute(float $amount,
                                   int $decimals = 2,
                                   string $thousands_sep = '',
                                   bool $dollar_sign_prefix = false): string
    {
        // Format $amount
        $value = number_format($amount, $decimals, '.', $thousands_sep);

        // Optionally prefix the value with a dollar sign
        return $dollar_sign_prefix ? '$'.$value : $value;
    }
}
