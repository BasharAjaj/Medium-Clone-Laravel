# Copilot Instructions for Medium-Clone-Laravel

## Project Overview

-   This is a Laravel-based web application, structured as a Medium-like clone.
-   Follows standard Laravel conventions for MVC, routing, and service providers.
-   Key directories: `app/` (business logic), `routes/` (route definitions), `resources/views/` (Blade templates), `database/` (migrations, seeders, factories), `public/` (entry point, assets).

## Architecture & Patterns

-   **Controllers**: All HTTP logic is in `app/Http/Controllers/`. Each resource (e.g., Posts, Categories) has its own controller.
-   **Models**: Eloquent models are in `app/Models/` (e.g., `Posts.php`, `Category.php`, `User.php`).
-   **Requests**: Form validation logic is in `app/Http/Requests/`.
-   **Views**: Blade templates are in `resources/views/`, organized by feature (e.g., `auth/`, `profile/`, `components/`).
-   **Migrations/Seeders/Factories**: All DB schema and test data logic is in `database/` subfolders.
-   **Service Providers**: Custom providers in `app/Providers/`.

## Developer Workflows

-   **Run the app**: Use `php artisan serve` (default port 8000).
-   **Run Vite for assets**: Use `npm run dev` (for hot reload) or `npm run build` (for production assets).
-   **Run tests**: Use `php artisan test` or `vendor/bin/pest` (Pest is configured).
-   **Migrate DB**: Use `php artisan migrate` (SQLite by default, see `database/database.sqlite`).
-   **Seed DB**: Use `php artisan db:seed`.
-   **Clear caches**: Use `php artisan optimize:clear`.

## Project-Specific Conventions

-   **Naming**: Models use singular (`Post`, `Category`), tables use plural (`posts`, `categories`).
-   **Factories/Seeders**: Each model has a corresponding factory and seeder in `database/factories/` and `database/seeders/`.
-   **Blade Components**: Reusable UI in `resources/views/components/`.
-   **Auth**: Auth routes in `routes/auth.php`, logic in `app/Http/Controllers/Auth/`.
-   **API**: If present, API routes are in `routes/api.php` (not shown in current structure).

## Integration & Dependencies

-   **Composer**: PHP dependencies managed via `composer.json`.
-   **NPM**: JS/CSS dependencies managed via `package.json` (uses Vite, Tailwind, etc.).
-   **Pest**: For testing, see `tests/` and `Pest.php`.
-   **SQLite**: Default DB for local/dev, file at `database/database.sqlite`.

## Examples

-   To add a new resource (e.g., Tag):

    1. Create model in `app/Models/Tag.php`.
    2. Create migration in `database/migrations/`.
    3. Add controller in `app/Http/Controllers/TagController.php`.
    4. Add routes in `routes/web.php`.
    5. Create views in `resources/views/tag/`.

-   To run all tests:
    ```sh
    php artisan test
    # or
    vendor/bin/pest
    ```

## References

-   See `README.md` for general Laravel info.
-   See `phpunit.xml` for test config.
-   See `vite.config.js` and `tailwind.config.js` for asset pipeline setup.

---

_If any conventions or workflows are unclear, please ask for clarification or check the referenced files._
