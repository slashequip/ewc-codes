# PHP 8.5 and Laravel 13 upgrade

## Upgrade references

Reviewed the official upgrade guides for each Laravel major between the original Laravel 8.74 application and Laravel 13.38:

- [Laravel 9](https://laravel.com/docs/9.x/upgrade)
- [Laravel 10](https://laravel.com/docs/10.x/upgrade)
- [Laravel 11](https://laravel.com/docs/11.x/upgrade)
- [Laravel 12](https://laravel.com/docs/12.x/upgrade)
- [Laravel 13](https://laravel.com/docs/13.x/upgrade)
- [PHP 8.5 deprecations](https://www.php.net/manual/en/migration85.deprecated.php)
- [Scout 10](https://github.com/laravel/scout/blob/10.x/UPGRADE.md)
- [Sentry PHP 4](https://github.com/getsentry/sentry-php/blob/master/UPGRADE-4.0.md)
- [Meilisearch PHP server compatibility](https://github.com/meilisearch/meilisearch-php#-compatibility-with-meilisearch)

## Compatibility changes

- Require PHP `^8.5` and Laravel `^13.0`, with updated stable dependencies and a regenerated lockfile. Replace Facade Ignition with Spatie Laravel Ignition, upgrade Pest to 4 and PHPUnit to 12, and migrate the PHPUnit configuration using its migration command.
- Keep the existing application kernels, providers and bootstrap structure, following the Laravel 11 upgrade guide's recommendation for existing applications.
- Replace Fruitcake's CORS middleware with Laravel's built-in middleware, retaining the existing CORS policy.
- Update the CSRF middleware to Laravel 13's `PreventRequestForgery` class.
- Use `Pdo\Mysql::ATTR_SSL_CA` to avoid the PHP 8.5 deprecation, rename PostgreSQL's `schema` option to `search_path`, and remove the obsolete SMTP `auth_mode` setting.
- Laravel 11 removed the old `float(total, places)` migration arguments. New databases use `decimal(8, 4)` for density to retain four decimal places, with the existing model/resource casts continuing to return JSON numbers. Existing databases retain their original column and data; this edit does not rerun an applied migration or require a column conversion.
- Preserve the existing local storage path, cache prefixes, session cookie name and session serialization behavior. The application does not use the other changed contracts, relationships, custom logging handlers, mail APIs or queue integrations described in the guides.
- Update Gitpod's PHP packages to 8.5 and copy Composer 2 from its official image instead of using an outdated installer checksum.

## Verification

Verified locally on PHP 8.5.12:

- API listing, individual lookup, unknown-code responses, CORS requests/preflights, API rate limiting, landing page and documentation rendering.
- Composer validation, platform requirements and security advisory check.
- Production asset compilation with the existing Laravel Mix pipeline.
- Configuration, event, route and Blade view caching, followed by clearing the generated caches.

The automated database tests use SQLite. Live MySQL, Meilisearch and Sentry connections, and the Gitpod Docker image build, are not covered by these checks.

## Deployment

The server and queue/CLI processes must run PHP 8.5 with the extensions required by `composer check-platform-reqs`. Install the committed lockfile using `composer install --no-dev --optimize-autoloader`, build the frontend assets, regenerate application caches and restart any long-running workers.

If `SCOUT_DRIVER=meilisearch` is enabled, verify the server runs a compatible Meilisearch 1.x version before deploying the upgraded 1.x PHP SDK. The repository defaults to the null search driver, and the API endpoints query the database directly. No running search server version was established during this upgrade.

Retain the existing database. The repository's seeder contains fake data, so `migrate:fresh` or reseeding cannot restore the real EWC dataset.
