<?php

namespace Klev\CryptoPayApi\Types;

/**
 * class Balance
 * 
 * Represents the balance for a specific currency in the app.
 * 
 * @link https://help.crypt.bot/crypto-pay-api#Balance
 */
class Balance extends BaseType
{
    /**
     * Cryptocurrency alphabetic code.
     * Currently, can be "BNB", "BONK", "BTC", "CATI", "DOGE", "DOGS", "ETH", "GRAM", "HMSTR", "LTC", "MAJOR", "MELANIA", "MEMHASH", "MY", "NOT", "PEPE", "SOL", "TON", "TRUMP", "TRX", "USDC", "USDT", "WIF".
     * @var string
     */
    public string $currency_code;

    /**
     * Total available amount in float.
     * @var string
     */
    public string $available;

    /**
     * Unavailable amount currently is on hold in float.
     * @var string
     */
    public string $onhold;
}
