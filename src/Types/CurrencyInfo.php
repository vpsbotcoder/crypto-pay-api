<?php

namespace Klev\CryptoPayApi\Types;

/**
 * class CurrencyInfo
 *
 * Represents a single currency descriptor as returned by getCurrencies.
 *
 * @link https://help.send.tg/en/articles/10279948-crypto-pay-api#getCurrencies
 */
class CurrencyInfo extends BaseType
{
    /**
     * True if the currency is a blockchain-based cryptocurrency.
     * @var bool|null
     */
    public ?bool $is_blockchain = null;
    /**
     * True if the currency is a stablecoin.
     * @var bool|null
     */
    public ?bool $is_stablecoin = null;
    /**
     * True if the currency is a fiat currency.
     * @var bool|null
     */
    public ?bool $is_fiat = null;
    /**
     * Human-readable currency name.
     * @var string|null
     */
    public ?string $name = null;
    /**
     * Alphabetic currency code (e.g. "USDT", "USD").
     * @var string|null
     */
    public ?string $code = null;
    /**
     * Optional. URL to the currency logo / info page.
     * @var string|null
     */
    public ?string $url = null;
    /**
     * Number of decimal places used for the amount.
     * @var int|null
     */
    public ?int $decimals = null;
}
