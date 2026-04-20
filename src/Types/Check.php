<?php

namespace Klev\CryptoPayApi\Types;

/**
 * class Check
 *
 * @link https://help.send.tg/en/articles/10279948-crypto-pay-api#Check
 */
class Check extends BaseType
{
    /**
     * Unique ID for this check.
     * @var int
     */
    public int $check_id;
    /**
     * Hash of the check.
     * @var string
     */
    public string $hash;
    /**
     * Cryptocurrency alphabetic code.
     * @var string
     */
    public string $asset;
    /**
     * Amount of the check in float.
     * @var string
     */
    public string $amount;
    /**
     * URL that can be used to activate the check.
     * @var string
     */
    public string $bot_check_url;
    /**
     * Status of the check, can be "active" or "activated".
     * @var string
     */
    public string $status;
    /**
     * Date the check was created in ISO 8601 format.
     * @var string
     */
    public string $created_at;
    /**
     * Optional. Date the check was activated in ISO 8601 format.
     * @var string|null
     */
    public ?string $activated_at = null;
}
