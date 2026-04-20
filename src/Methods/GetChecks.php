<?php

namespace Klev\CryptoPayApi\Methods;

/**
 * class GetChecks
 *
 * @link https://help.send.tg/en/articles/10279948-crypto-pay-api#getChecks
 */
class GetChecks extends BaseMethod
{
    /**
     * Optional. Cryptocurrency code to filter checks.
     * @var string|null
     */
    public ?string $asset = null;
    /**
     * Optional. Check IDs separated by comma.
     * @var string|null
     */
    public ?string $check_ids = null;
    /**
     * Optional. Check status to filter: "active" or "activated".
     * @var string|null
     */
    public ?string $status = null;
    /**
     * Optional. Offset for the list of checks. Default is 0.
     * @var int|null
     */
    public ?int $offset = 0;
    /**
     * Optional. Number of checks to return. Values 1-1000, default is 100.
     * @var int|null
     */
    public ?int $count = 100;
}
