# AGENTS.md

## What this is
Laravel package (`renderbit/light-bootstrap-dashboard`) wrapping Creative Tim's Light Bootstrap Dashboard as Blade layouts/partials/components for Laravel 5.7–12, PHP 7.4–8.4. Single codebase — keep PHP 7.4 compatible (no match/promotion/named args/union types). No composer.lock, no build step; assets under `src/resources/assets` are prebuilt. Supports lavary/laravel-menu.

## Commands
```bash
composer install
composer test                                   # PHPUnit via Orchestra Testbench
vendor/bin/phpunit --filter testAllDemoRoutesAreRegistered
vendor/bin/phpunit tests/DemoDisabledTest.php
composer check-style                            # phpcs PSR-2, src/ + tests/ (Blade excluded)
composer fix-style                              # phpcbf
```
CI swaps Testbench versions across PHP×Laravel matrix. Older Laravel may need `COMPOSER_NO_SECURITY_BLOCKING=1`.

## Architecture (package wiring)
- `src/LightBootstrapDashboardServiceProvider`: merges configs (`lbd`, `sidebar-menu`), layers `sidebar-menu` over `laravel-menu.settings` (array_replace_recursive), loads views as `lbd::` from `src/resources/views`, publishes tags `config`/`views`/`public` (to `public/vendor/lbd`), loads `src/routes.php` **only if** `config('lbd.load_demo_content')` true.
- Demo mode (`lbd.load_demo_content` / `LOAD_LBD_DEMO`): gates `/lbd/*` routes (named `lbd.*`, web), menus in `LightBootstrapDashboardController::setupMenus()`, and placeholder chrome in `views/inc/demo.blade.php`. Layouts must render with demo off (no unconditional `route('lbd.*')` refs; guard menus with `Menu::exists(...)`). `lbd_home_url()` uses `app('router')->has('lbd.dashboard')`.
- Layouts: `lbd::layout` (sidebar/navbar/footer), `lbd::layout-full` (login/register/lock). `inc/demo.blade.php` included top of layout. `inc/head`/`inc/scripts` wrap assets in `@section('styles'|'scripts') ... @show` — **use `@push` not `@section`** or you drop jQuery/Popper/Bootstrap/theme JS. Plugins pushed per page. 
- Menus (lavary/laravel-menu): names `sidebar_main_menu`, `sidebar_user_menu`, `site_header_menu`, `site_footer_menu`. `inc/sidebar-menu.blade.php` renders recursively; parent `#id` href = collapse id; `is_child_active()` in `src/helpers.php` drives expand/active. Outside demo mode, render `sidebar_user_menu` yourself in `sidebar-user` section.
- Components: `lbd::inc.box` (slots: body required; title/subtitle/footer/class_list/body_class_list), `lbd::inc.card` (title/category/icon/footer_icon/footer required; class_list defaults `card-stats`).
- Helpers: `is_child_active()`, `lbd_home_url()`, `lbd_sidebar_button_color()`.

## Config keys (see README)
`lbd.php`: `google_maps_api_key`, `google_analytics_key`, `load_demo_content`, `home_url` (`LBD_HOME_URL`), `logo_mini`/`logo_full`, `sidebar_color` (black/azure/blue/purple/green/orange/red), `sidebar_image`, `footer_logo`/`footer_link`. Footer uses `app.name`/`app.url`; title `@yield('title') | {{ config('app.name') }}`. `sidebar-menu.php` layered over `laravel-menu.settings` (default sets `activate_parents` false for `sidebar_main_menu`).

## Tests
`tests/TestCase.php` boots Testbench with Menu provider/alias and package provider; sets `view.paths` to `tests/Fixtures/views`. Subclasses set `protected $loadDemoContent` (routes registered at boot). `DemoEnabledTest` is canonical list of demo routes — update when adding/removing demo pages (routes.php, controller, setupMenus()).

## Conventions
- PSR-2 (Blade excluded). Conventional Commits (one feature/PR). Behaviour changes need README + `CHANGELOG.md` updates (add to `## Unreleased`, mark breaking with **Breaking:**). SemVer; major tracks README Laravel matrix; `extra.branch-alias.dev-master` must match current major.
