<?php

namespace Klev\CryptoPayApi\Methods;

/**
 * class GetInvoices
 *
 * @link https://help.crypt.bot/crypto-pay-api#getInvoices
 */
class GetInvoices extends BaseMethod
{
    /**
     * Optional. Cryptocurrency codes separated by a comma. Supported assets: "BNB", "BONK", "BTC", "CATI", "DOGE", "DOGS", "ETH", "GRAM", "HMSTR", "LTC", "MAJOR", "MELANIA", "MEMHASH", "MY", "NOT", "PEPE", "SOL", "TON", "TRUMP", "TRX", "USDC", "USDT", "WIF".
     * Defaults to all assets if not specified.
     * @var string|null
     */
    public ?string $asset = null;
    /**
     * Optional. Fiat currency codes separated by a comma. 
     * Supported fiat currencies: "USD", "EUR", "RUB", "BYN", "UAH", "GBP", "CNY", "KZT", "UZS", "GEL", "TRY", 
     * "AMD", "THB", "INR", "BRL", "IDR", "AZN", "AED", "PLN" and "ILS".
     * This field is used when querying invoices processed in fiat currencies. Defaults to all fiat currencies if not specified.
     * @var string|null
     */
    public ?string $fiat = null;
    /**
     * Optional. Invoice IDs separated by comma.
     * @var string|null
     */
    public ?string $invoice_ids = null;
    /**
     * Optional. Status of invoices to be returned. Available statuses: "active", "paid" and "expired". Defaults to all statuses if not specified.
     * @var string|null
     */
    public ?string $status = null;
    /**
     * Optional. Offset needed to return a specific subset of invoices. Default is 0.
     * @var int|null
     */
    public ?int $offset = 0;
    /**
     * Optional. Number of invoices to be returned. Values between 1-1000 are accepted. Defaults to 100.
     * @var int|null
     */
    public ?int $count = 100;
}
