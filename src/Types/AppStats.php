<?php

namespace Klev\CryptoPayApi\Types;

/**
 * class AppStats
 *
 * @link https://help.send.tg/en/articles/10279948-crypto-pay-api#AppStats
 */
class AppStats extends BaseType
{
    /**
     * Total volume of paid invoices in USD.
     * @var float
     */
    public float $volume;
    /**
     * Conversion rate of created to paid invoices.
     * @var float
     */
    public float $conversion;
    /**
     * Number of unique users who have paid invoices.
     * @var int
     */
    public int $unique_users_count;
    /**
     * Total number of invoices created.
     * @var int
     */
    public int $created_invoice_count;
    /**
     * Total number of invoices paid.
     * @var int
     */
    public int $paid_invoice_count;
    /**
     * Start of the period in ISO 8601 format.
     * @var string
     */
    public string $start_at;
    /**
     * End of the period in ISO 8601 format.
     * @var string
     */
    public string $end_at;
}
