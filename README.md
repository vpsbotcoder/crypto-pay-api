<img alt="CryptoPayApi" src="images/crypto.jpg"/>

# vpsbotcoder/crypto-pay-api

PHP library for the [Crypto Pay API](https://help.crypt.bot/crypto-pay-api) (@CryptoBot on Telegram). Requires PHP ≥ 7.4.

Fork of [klev-o/crypto-pay-api](https://github.com/klev-o/crypto-pay-api) — extended with Checks, Transfers, Stats, Balance, ExchangeRate, and a full-featured WHMCS payment gateway module.

[![License](https://img.shields.io/github/license/vpsbotcoder/crypto-pay-api)](https://github.com/vpsbotcoder/crypto-pay-api/blob/main/LICENSE)
![GitHub release (latest by date)](https://img.shields.io/github/v/release/vpsbotcoder/crypto-pay-api)
![GitHub last commit](https://img.shields.io/github/last-commit/vpsbotcoder/crypto-pay-api)

---

## Installation

```bash
composer require klev-o/crypto-pay-api
```

To use this fork directly (e.g. in a `composer.json`):

```json
{
    "repositories": [
        { "type": "vcs", "url": "https://github.com/vpsbotcoder/crypto-pay-api.git" }
    ],
    "require": {
        "klev-o/crypto-pay-api": "~1.2.0"
    }
}
```

---

## Quick Start

```php
<?php
require_once '../vendor/autoload.php';

use Klev\CryptoPayApi\CryptoPay;

$api = new CryptoPay('YOUR_APP_TOKEN');       // mainnet
$api = new CryptoPay('YOUR_APP_TOKEN', true); // testnet
```

> Get your token from [@CryptoBot](http://t.me/CryptoBot?start=pay) (mainnet) or [@CryptoTestnetBot](http://t.me/CryptoTestnetBot?start=pay) (testnet) — send `/pay`, then **Create App**.

---

## API Methods

### getMe

```php
$info = $api->getMe(); // ['app_id' => 123, 'name' => 'My App', ...]
```

### createInvoice

```php
use Klev\CryptoPayApi\Methods\CreateInvoice;
use Klev\CryptoPayApi\Enums\PaidBtnName;

$invoice = new CreateInvoice('0.50', 'crypto', asset: 'TON');
// or fiat invoice:
$invoice = new CreateInvoice('25.00', 'fiat', fiat: 'USD');
$invoice->paid_btn_name = PaidBtnName::CALLBACK;
$invoice->paid_btn_url  = 'https://yoursite.com/return';

$created = $api->createInvoice($invoice);
echo $created->bot_invoice_url;
```

### getInvoices

```php
use Klev\CryptoPayApi\Methods\GetInvoices;

$filter = new GetInvoices();
$filter->status = 'paid';
$filter->count  = 10;

$invoices = $api->getInvoices($filter); // Invoice[]
```

### deleteInvoice

```php
$api->deleteInvoice(12345); // true on success
```

### createCheck / getChecks / deleteCheck

```php
use Klev\CryptoPayApi\Methods\CreateCheck;
use Klev\CryptoPayApi\Methods\GetChecks;

$check = new CreateCheck('USDT', '10.00');
$check->pin_to_username = 'telegram_username';
$created = $api->createCheck($check); // Check object

$filter = new GetChecks();
$filter->status = 'active';
$checks = $api->getChecks($filter); // Check[]

$api->deleteCheck($created->check_id); // true on success
```

### transfer

```php
use Klev\CryptoPayApi\Methods\Transfer;

$tx = new Transfer(12345678, 'USDT', '5.00', 'spend-' . uniqid());
$result = $api->transfer($tx); // Transfer object
```

### getTransfers

```php
use Klev\CryptoPayApi\Methods\GetTransfers;

$filter = new GetTransfers();
$filter->asset = 'USDT';
$transfers = $api->getTransfers($filter); // Transfer[]
```

### getBalance

```php
$balances = $api->getBalance(); // Balance[]
foreach ($balances as $b) {
    echo "{$b->currency_code}: {$b->available}\n";
}
```

### getExchangeRates

```php
$rates = $api->getExchangeRates(); // ExchangeRate[]
foreach ($rates as $r) {
    echo "{$r->source} → {$r->target}: {$r->rate}\n";
}
```

### getCurrencies

```php
$currencies = $api->getCurrencies(); // array of currency info arrays
```

### getStats

```php
use Klev\CryptoPayApi\Methods\GetStats;

$filter = new GetStats();
$filter->start_at = '2024-01-01T00:00:00Z';
$stats = $api->getStats($filter); // AppStats object
echo $stats->volume;
```

---

## Webhooks

```php
use Klev\CryptoPayApi\Enums\PaidType;

$api->setEnableEvents(true);

$api->on(PaidType::INVOICE_PAID, function($update) {
    $invoice = $update->payload;
    // process payment...
});

$api->getWebhookUpdates(); // validates HMAC signature, dispatches events
```

> Enable webhooks in @CryptoBot → My Apps → [Your App] → Webhooks.

---

## Advanced (DI Container)

See [`demo/advanced.php`](demo/advanced.php) for a full example using PHP-DI and Monolog.

---

## WHMCS Module

A production-ready WHMCS payment gateway module is available as a separate release asset. Download the latest `cryptopay_whmcs_module.zip` from the [Releases page](https://github.com/vpsbotcoder/crypto-pay-api/releases).

**Features:**
- Fiat invoices with accepted-asset filtering
- Testnet/mainnet toggle
- Webhook signature verification + replay-attack protection with a randomized endpoint token
- Configurable payment tolerance for rounding drift
- Optional Telegram notifications
- Exchange rate caching, invoice expiry tied to WHMCS due dates
- Logging level control

---

## Troubleshooting

Report issues on the [issue tracker](https://github.com/vpsbotcoder/crypto-pay-api/issues).
