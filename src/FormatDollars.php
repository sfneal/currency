<?php

namespace Sfneal\Currency;

use Sfneal\Actions\AbstractAction;

class FormatDollars extends AbstractAction
{
    /**
     * @var float
     */
    private $amount;

    /**
     * @var int
     */
    private $decimals;

    /**
     * @var string
     */
    private $thousands_sep;

    /**
     * @var bool
     */
    private $dollar_sign_prefix;

    /**
     * FormatDollars constructor.
     *
     * @param float $amount
     * @param int $decimals
     * @param string $thousands_sep
     * @param bool $dollar_sign_prefix
     */
    public function __construct(float $amount,
                                int $decimals = 2,
                                string $thousands_sep = '',
                                bool $dollar_sign_prefix = false)
    {
        $this->amount = $amount;
        $this->decimals = $decimals;
        $this->thousands_sep = $thousands_sep;
        $this->dollar_sign_prefix = $dollar_sign_prefix;
    }

    /**
     * Format a currency float value to a standard format.
     *
     * @return string
     */
    public function execute(): string
    {
        // Format $amount
        $value = number_format($this->amount, $this->decimals, '.', $this->thousands_sep);

        // Optionally prefix the value with a dollar sign
        return $this->dollar_sign_prefix ? '$'.$value : $value;
    }
}
