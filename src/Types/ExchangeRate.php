<?php

namespace Klev\CryptoPayApi\Types;

/**
 * class ExchangeRate
 * 
 * Represents an exchange rate between a source and target currency.
 *
 * @link https://help.crypt.bot/crypto-pay-api#ExchangeRate
 */
class ExchangeRate extends BaseType
{
    /**
     * True, if the received rate is up-to-date.
     * @var bool
     */
    public bool $is_valid;

    /**
     * True, if the source is a cryptocurrency.
     * @var bool
     */
    public bool $is_crypto;

    /**
     * True, if the source is a fiat currency.
     * @var bool
     */
    public bool $is_fiat;

    /**
     * Source currency code.
     * Currently, can be "BNB", "BONK", "BTC", "CATI", "DOGE", "DOGS", "ETH", "GRAM", "HMSTR", "LTC", "MAJOR", "MELANIA", "MEMHASH", "MY", "NOT", "PEPE", "SOL", "TON", "TRUMP", "TRX", "USDC", "USDT", "WIF".
     * @var string
     */
    public string $source;

    /**
     * Target currency code.
     * Supported fiat currencies: "USD", "EUR", "RUB", "BYN", "UAH", "GBP", "CNY", "KZT", "UZS", "GEL", "TRY",
     * "AMD", "THB", "INR", "BRL", "IDR", "AZN", "AED", "PLN" and "ILS".
     * @var string
     */
    public string $target;

    /**
     * The current rate of the source asset valued in the target currency.
     * @var string
     */
    public string $rate;
}
