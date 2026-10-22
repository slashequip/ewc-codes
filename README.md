# ewc-codes
Codebase for the open source ewccodes.com app.

Requires PHP 8.5 and Composer 2. Laravel 13 is installed through the committed Composer lockfile.

## Local setup

```sh
composer install
cp .env.example .env
php artisan key:generate
```

Configure the database in `.env`, then run `php artisan migrate` against a new local database. The seeder only generates 10 fake records; the real EWC dataset must be restored from an existing database or a separate data source.

```sh
npm ci
npm run production
```

## Tests

```sh
composer test
```

Tests use an in-memory SQLite database, disable external search and Sentry reporting, and load the committed `.env.testing`. Its application key is only for tests.

See [the PHP 8.5 / Laravel 13 upgrade notes](docs/php85-laravel13-upgrade.md) for compatibility changes and deployment requirements.
