<?php

namespace Klev\CryptoPayApi\Methods;

/**
 * class GetStats
 *
 * @link https://help.send.tg/en/articles/10279948-crypto-pay-api#getStats
 */
class GetStats extends BaseMethod
{
    /**
     * Optional. Date from which start calculating statistics in ISO 8601 format. Defaults to 24 hours ago.
     * @var string|null
     */
    public ?string $start_at = null;
    /**
     * Optional. The date on which to finish calculating statistics in ISO 8601 format. Defaults to the current date.
     * @var string|null
     */
    public ?string $end_at = null;
}
