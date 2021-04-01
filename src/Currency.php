<?php


namespace Sfneal\Currency;


class Currency
{
    /**
     * Currency Symbols
     */
    public const USD = '$';
    public const EUR = '€';
    public const GBP = '£';
    public const INR = '₹';
    public const JPY = '¥';
    public const CNY = '¥';
    public const THB = '฿';
    public const AUD = self::USD;
    public const CAD = self::USD;
    public const NZD = self::USD;

    /**
     * Format a currency float value to a standard format.
     *
     * @param float $amount
     * @param string|null $currency
     * @param bool $commaSeparated
     * @param int $decimals
     * @return string
     */
    public static function format(float $amount,
                                  string $currency = null,
                                  bool $commaSeparated = false,
                                  int $decimals = 2): string
    {
        // Format the current amount
        $value = number_format(
            $amount,
            $decimals,
            '.',
            $commaSeparated ? ',' : ''
        );

        // Prepend currency symbol
        if ($currency) {
            return $currency . $value;
        }

        // Value without currency symbol
        return $value;
    }
}
