# Changelog

All notable changes to this project are documented here. This project follows
[Semantic Versioning](https://semver.org/).

## [1.5.0] - 2026-04-21

### Changed
- `createInvoice`, `transfer`, `deleteInvoice`, `createCheck`, and `deleteCheck`
  now issue `POST` requests (previously `GET` with query params), matching the
  current Crypto Pay API contract for mutating calls.
- `getMe()` now returns an `AppInfo` object instead of a raw array.
- `getCurrencies()` now returns `CurrencyInfo[]` instead of raw strings/arrays.
- `Invoice::$fee_amount` is now typed as `?float` (was `?string`).
- `Transfer::$user_id` is now typed as `int` (was `string`).
- All doc links updated from `help.crypt.bot` to `help.send.tg`.

### Added
- `Types/AppInfo` — typed response for `getMe`.
- `Types/CurrencyInfo` — typed response for `getCurrencies`.
- `Enums/Fiat`, `Enums/SwapTo`.
- `Currency::JET` constant.
- Structured API error reporting in `request()` (surfaces `error.code` /
  `error.name` from the API response).
- Webhook signature verification now uses `hash_equals` (timing-safe).

## [1.4.0] - prior release

- Added Checks, Transfers, and Stats support.
- Extended `Invoice`, `Balance`, `ExchangeRate` types.
- `CreateInvoice` currency validation.
- `getCurrencies` response format validation.

## [1.3.0] - prior release

- Type updates to match the then-current API documentation.

## [1.2.1] - prior release

- Support for all PHP versions from 7.4+; Composer dependency cleanup.

## [1.2.0] - prior release

- `Invoice::$usd_rate` and `Invoice::$fee` fields.
- Extracted HTTP client behind `CryptoPayHttpClientInterface`.
- Added `psr/http-client` dependency; simplified request method.

## [1.1.0] - prior release

- Demo files, README, image, initial refactor.

## [1.0.0] - initial release
