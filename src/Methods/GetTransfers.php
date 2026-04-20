<?php

namespace Klev\CryptoPayApi\Methods;

/**
 * class GetTransfers
 *
 * @link https://help.send.tg/en/articles/10279948-crypto-pay-api#getTransfers
 */
class GetTransfers extends BaseMethod
{
    /**
     * Optional. Cryptocurrency code to filter transfers.
     * @var string|null
     */
    public ?string $asset = null;
    /**
     * Optional. Transfer IDs separated by comma.
     * @var string|null
     */
    public ?string $transfer_ids = null;
    /**
     * Optional. Unique transfer string used to filter by spend_id.
     * @var string|null
     */
    public ?string $spend_id = null;
    /**
     * Optional. Offset for the list of transfers. Default is 0.
     * @var int|null
     */
    public ?int $offset = 0;
    /**
     * Optional. Number of transfers to return. Values 1-1000, default is 100.
     * @var int|null
     */
    public ?int $count = 100;
}
