<?php

namespace Klev\CryptoPayApi\Types;

/**
 * class AppInfo
 *
 * Basic information about the authenticated app, returned by getMe.
 *
 * @link https://help.send.tg/en/articles/10279948-crypto-pay-api#getMe
 */
class AppInfo extends BaseType
{
    /**
     * Unique app identifier.
     * @var int
     */
    public int $app_id;
    /**
     * App name.
     * @var string
     */
    public string $name;
    /**
     * Username of the bot that processes payments for this app.
     * @var string
     */
    public string $payment_processing_bot_username;
}
