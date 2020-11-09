<?php

namespace Sfneal\Currency;

use Sfneal\Actions\AbstractActionStatic;

class FormatDollarsAction extends AbstractActionStatic
{
    /**
     * Format a Task's amount attribute for display in tables & charts.
     *
     * @param float $amount
     *
     * @return string
     */
    public static function execute(float $amount): string
    {
        return number_format($amount, 2, '.', '');
    }
}
