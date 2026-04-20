<?php

namespace Klev\CryptoPayApi\Methods;

/**
 * class CreateCheck
 *
 * @link https://help.send.tg/en/articles/10279948-crypto-pay-api#createCheck
 */
class CreateCheck extends BaseMethod
{
    /**
     * Cryptocurrency code.
     * @var string
     */
    public string $asset;
    /**
     * Amount of the check in float.
     * @var string
     */
    public string $amount;
    /**
     * Optional. Telegram user ID who will be able to activate the check.
     * @var int|null
     */
    public ?int $pin_to_user_id = null;
    /**
     * Optional. Telegram username who will be able to activate the check.
     * @var string|null
     */
    public ?string $pin_to_username = null;

    public function __construct(string $asset, string $amount)
    {
        $this->asset = $asset;
        $this->amount = $amount;
    }
}
