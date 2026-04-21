<?php

namespace Klev\CryptoPayApi\Types;

/**
 * class Transfer
 *
 * @link https://help.send.tg/en/articles/10279948-crypto-pay-api#Transfer
 */
class Transfer extends BaseType
{
    /**
     * Unique ID for this transfer.
     * @var int
     */
    public int $transfer_id;
    /**
     * Unique UTF-8 string provided by the calling app (see transfer method). Returned from getTransfers.
     * @var string
     */
    public string $spend_id;
    /**
     * Telegram user ID the transfer was sent to.
     * @var int
     */
    public int $user_id;
     /**
     * Cryptocurrency alphabetic code. 
     * Currently, can be "BNB", "BONK", "BTC", "CATI", "DOGE", "DOGS", "ETH", "GRAM", "HMSTR", "LTC", "MAJOR", "MELANIA", "MEMHASH", "MY", "NOT", "PEPE", "SOL", "TON", "TRUMP", "TRX", "USDC", "USDT", "WIF".
     * @var string
     */
    public string $asset;
    /**
     * Amount of the transfer in float.
     * @var string
     */
    public string $amount;
    /**
     * Status of the transfer, can only be "completed".
     * @var string
     */
    public string $status;
    /**
     * Date the transfer was completed in ISO 8601 format.
     * @var string
     */
    public string $completed_at;
    /**
     * Optional. Comment for this transfer.
     * @var string|null
     */
    public ?string $comment = null;
}