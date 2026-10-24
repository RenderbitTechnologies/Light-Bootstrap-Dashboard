# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## What this is

`renderbit/light-bootstrap-dashboard` is a Laravel **package** (not an app). It wraps Creative Tim's Light Bootstrap Dashboard theme as Blade layouts, partials and components, and supports Laravel 5.7–12 on PHP 7.4–8.4 from a single codebase. Keep code compatible with the oldest version in the matrix: PHP 7.4 syntax (no `match`, constructor promotion, named arguments or union types), and Laravel 5.7-era APIs. There is no `composer.lock` (it is ignored on purpose), and no JS/CSS build step. Assets in `src/resources/assets` are committed as prebuilt vendor files.

## Commands

```bash
composer install
composer test                                   # PHPUnit via Orchestra Testbench
vendor/bin/phpunit --filter testAllDemoRoutesAreRegistered   # single test
vendor/bin/phpunit tests/DemoDisabledTest.php   # single file
composer check-style                            # phpcs, PSR-2, src/ + tests/ (Blade excluded)
composer fix-style                              # phpcbf
```

CI (`.github/workflows/tests.yml`) runs the suite across a PHP × Laravel matrix by swapping the Testbench version (`composer require "orchestra/testbench:<ver>" --dev --no-update && composer update --with-all-dependencies`). Do the same to reproduce a version-specific failure locally. Older Laravel releases need `COMPOSER_NO_SECURITY_BLOCKING=1` to install.

## Architecture

- **`LightBootstrapDashboardServiceProvider`** is the whole wiring. It merges `config/lbd.php` and `config/sidebar-menu.php`, layers `sidebar-menu` config over `laravel-menu.settings` at boot, registers the `lbd::` view namespace, and defines the publish tags `config`, `views` and `public` (assets go to `public/vendor/lbd`). Demo routes in `src/routes.php` load **only** when `lbd.load_demo_content` is true.
- **Demo mode (`lbd.load_demo_content` / `LOAD_LBD_DEMO`)** gates three things: the `/lbd/*` routes (named `lbd.*`, `web` middleware), the menus built in `LightBootstrapDashboardController::setupMenus()`, and the placeholder chrome in `views/inc/demo.blade.php`. With demo mode off, the layouts must still render without any `lbd.*` routes or menus existing. This is why `lbd_home_url()` checks `router->has('lbd.dashboard')` and why the views guard every menu with `Menu::exists(...)`. Never reference `route('lbd.*')` unconditionally from layout partials.
- **Layouts**: `lbd::layout` (sidebar, navbar, footer) and `lbd::layout-full` (login, register and lock screen). `inc/demo.blade.php` is included at the top of the layout. When demo mode is on, it fills the same `sidebar-user` section and `navbar-left` / `navbar-right` / `navbar-full` stacks that consumers use. `inc/head` and `inc/scripts` wrap theme assets in `@section('styles'|'scripts') ... @show`, so pages must use `@push`, not `@section`, or they drop jQuery and Bootstrap. Page-specific JS plugins are not loaded globally. Each demo view pushes what it needs.
- **Menus** come from `lavary/laravel-menu` (`Menu` facade). The four menu names are `sidebar_main_menu`, `sidebar_user_menu`, `site_header_menu` and `site_footer_menu`. `inc/sidebar-menu.blade.php` renders `sidebar_main_menu` recursively. A parent item's `#id` href becomes the collapse element id. `is_child_active()` in `src/helpers.php` drives expand/active state.
- **Components**: `lbd::inc.box` and `lbd::inc.card` are slot-based `@component` views. Their slot contracts are documented in the README.

## Tests

`tests/TestCase.php` boots Testbench with the lavary Menu provider, the `Menu` alias and this package's provider. It sets `view.paths` to `tests/Fixtures/views`. Subclasses set `protected $loadDemoContent` to choose demo on or off, because routes are registered during provider boot, before any test method runs. `DemoEnabledTest` holds the canonical list of every demo route. Update it when adding or removing a demo page, alongside `routes.php`, the controller and its `setupMenus()` entry.

## Conventions

- PSR-2 for PHP. Blade files are excluded from phpcs.
- Conventional Commits. One feature per PR (see `.github/PULL_REQUEST_TEMPLATE.md`).
- Behaviour changes need README and `CHANGELOG.md` updates. The changelog follows Keep a Changelog, adds new entries under `## Unreleased`, and marks breaking changes with **Breaking:**.
- SemVer. The major version tracks the README's Laravel version matrix, and `extra.branch-alias.dev-master` in `composer.json` must match the current major.
