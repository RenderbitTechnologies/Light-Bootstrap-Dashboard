# Light Bootstrap Dashboard

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

[Light Bootstrap Dashboard](https://www.creative-tim.com/product/light-bootstrap-dashboard) by Creative Tim, packaged as Blade layouts, partials and components for Laravel 5.7 to 12.

## Version Matrix

|Laravel Version|Library Version|
|-|-|
|5.x-6.x|1.x|
|7.x|2.x|
|8.x|3.x|
|9.x|4.x|
|10.x|5.x|
|11.x-12.x|6.x|

## Install

Via Composer:

``` bash
composer require renderbit/light-bootstrap-dashboard
```

The service provider (`RenderbitTechnologies\LightBootstrapDashboard\LightBootstrapDashboardServiceProvider`) is registered through Laravel package auto-discovery. The package also pulls in [lavary/laravel-menu](https://github.com/lavary/laravel-menu), which the sidebar, header and footer menus are built with.

## Publish

The CSS, JS, fonts and images have to be published to `public/vendor/lbd` before the layouts render correctly:

``` bash
php artisan vendor:publish --provider="RenderbitTechnologies\LightBootstrapDashboard\LightBootstrapDashboardServiceProvider" --tag=public
```

Optionally, publish the config files and the views:

``` bash
# config/lbd.php and config/sidebar-menu.php
php artisan vendor:publish --provider="RenderbitTechnologies\LightBootstrapDashboard\LightBootstrapDashboardServiceProvider" --tag=config

# resources/views/vendor/lbd
php artisan vendor:publish --provider="RenderbitTechnologies\LightBootstrapDashboard\LightBootstrapDashboardServiceProvider" --tag=views
```

Published views in `resources/views/vendor/lbd` take precedence over the package's own, so you can edit any layout or partial there.

Re-run the `--tag=public` command (with `--force`) after upgrading the package to pick up new assets.

## Configuration

### `config/lbd.php`

| Key | `.env` variable | Default | Description |
|-|-|-|-|
| `google_maps_api_key` | `GOOGLE_MAPS_API_KEY` | `null` | API key for the Google Maps JavaScript API. The Maps script is only loaded when this is set. |
| `google_analytics_key` | `GOOGLE_ANALYTICS_KEY` | `null` | Google Analytics (GA4) measurement ID, e.g. `G-XXXXXXXXXX`. The `gtag.js` snippet is only output when this is set. |
| `load_demo_content` | `LOAD_LBD_DEMO` | `false` | Registers the demo routes (under `/lbd`) and the demo menus, and fills the layout chrome with the template's placeholder content (sidebar user, navbar search and dropdowns, the "fixed plugin" settings panel, the `sidebar-5.jpg` background). |
| `logo_mini` | — | `RT` | Text shown as the sidebar logo when the sidebar is minimized. |
| `logo_full` | — | `Renderbit Tech` | Text shown as the sidebar logo. |
| `sidebar_color` | — | `orange` | Sidebar `data-color`: `purple`, `blue`, `green`, `orange` or `red`. The sidebar minimize button follows this colour. |
| `sidebar_image` | — | `null` | Sidebar background image, as a path relative to `public/` (e.g. `vendor/lbd/img/sidebar-5.jpg`). `null` means no image (the demo uses `sidebar-5.jpg`). |
| `footer_logo` | — | `Renderbit Tech` | Reserved for the footer logo text; not used by the bundled views yet. |
| `footer_link` | — | `https://renderbit.com` | Reserved for the footer logo link; not used by the bundled views yet. |

The footer copyright line uses your app's `app.name` and `app.url`, and the page `<title>` is `@yield('title') | {{ config('app.name') }}`.

### `config/sidebar-menu.php`

Its keys are lavary/laravel-menu settings per menu name, and they are layered over `laravel-menu.settings` when the package boots, so a published copy takes effect. By default it only sets `activate_parents` to `false` for `sidebar_main_menu`. See the [lavary/laravel-menu configuration docs](https://github.com/lavary/laravel-menu#configuration) for the available settings.

### Demo pages

To browse every page of the theme, set `LOAD_LBD_DEMO=true` in `.env` and visit `/lbd/dashboard`. The demo routes are named `lbd.*` (for example `lbd.dashboard`, `lbd.components.buttons`, `lbd.pages.login`); run `php artisan route:list --name=lbd` to see them all. The demo views (`lbd::dashboard`, `lbd::charts`, `lbd::login`, ...) are good references for the markup each component needs.

> **Note:** the sidebar logo links to `route('lbd.dashboard')` when that route exists and to `url('/')` otherwise. The navbar brand in `lbd::layout` and `lbd::layout-full` still links to `route('lbd.dashboard')` unconditionally, so with the demo turned off either define a route named `lbd.dashboard` or publish the views (`--tag=views`) and change that link.

## Usage

### Layouts

There are two layouts:

- `lbd::layout`: the dashboard layout, with sidebar, top navbar and footer.
- `lbd::layout-full`: a full-page layout without the sidebar, used for login, register and lock screen pages.

``` blade
@extends('lbd::layout')

@section('title', 'Orders')

@push('styles')
    <link href="{{ asset('css/orders.css') }}" rel="stylesheet">
@endpush

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                ...
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(function () {
            // jQuery, Bootstrap and the theme's plugins are loaded at this point
        });
    </script>
@endpush
```

Sections and stacks available in both layouts:

| Name | Type | Description |
|-|-|-|
| `title` | section | Page title, used in `<title>` and (in `lbd::layout`) in the navbar. |
| `content` | section | The page body. |
| `meta` | stack | Extra `<meta>` / `<link>` tags in `<head>`, before the theme CSS. |
| `styles` | stack | Extra `<head>` tags, output after the theme CSS. |
| `scripts` | stack | Extra scripts, output after jQuery, Bootstrap, the theme plugins and `light-bootstrap-dashboard.js`. |

`lbd::layout-full` also yields:

| Name | Type | Description |
|-|-|-|
| `background_color` | section | Filter colour of the full-page background: `black`, `blue`, `purple`, `green`, `orange`, `red` or `rose`. |
| `background_image` | section | URL of the full-page background image. |

``` blade
@extends('lbd::layout-full')

@section('title', 'Login')
@section('background_color', 'black')
@section('background_image', asset('vendor/lbd/img/full-screen-image-2.jpg'))

@section('content')
    ...
@endsection
```

#### Use `@push`, not `@section`, for styles and scripts

`inc/head` and `inc/scripts` wrap the theme's CSS and JS in `@section('styles') ... @show` and `@section('scripts') ... @show`. If a page defines `@section('scripts')` (or `@section('styles')`) itself, it **replaces** that whole block, which removes jQuery, Bootstrap, the plugins and the theme JS (or CSS). Use `@push('scripts')` / `@push('styles')` to add to the page instead.

If you do need to override the section, call `@parent` to keep the theme's assets:

``` blade
@section('scripts')
    @parent
    <script src="{{ asset('js/extra.js') }}"></script>
@endsection
```

### Layout chrome

The sidebar user block and the navbar menus are empty by default. Fill them from your own views:

``` blade
@extends('lbd::layout')

@section('sidebar-user')
<div class="user">
    <div class="info">
        <a href="{{ route('profile') }}"><span>{{ auth()->user()->name }}</span></a>
    </div>
</div>
@endsection

@push('navbar-right')
<li class="nav-item">
    <a class="nav-link" href="{{ route('logout') }}">Log out</a>
</li>
@endpush
```

- `sidebar-user` (section): the user block below the sidebar logo (`lbd::layout`).
- `navbar-left` / `navbar-right` (stacks): `<li>` items rendered in the left and right navbar lists (`lbd::layout`).
- `lbd.sidebar_color` and `lbd.sidebar_image` config keys set the sidebar colour and background image.

The template's placeholder user, search form, dropdowns and notifications are only shown when `lbd.load_demo_content` is enabled.

### Components

#### `lbd::inc.box`

A card with an optional header and footer.

``` blade
@component('lbd::inc.box')
    @slot('title', 'Email Statistics')
    @slot('subtitle', 'Last Campaign Performance')

    @slot('body')
        <div id="chartEmail" class="ct-chart"></div>
    @endslot

    @slot('footer')
        <div class="stats"><i class="fa fa-clock-o"></i> Campaign sent 2 days ago</div>
    @endslot
@endcomponent
```

| Slot | Required | Description |
|-|-|-|
| `body` | yes | Card body. |
| `title` | no | Header title. The header is only rendered when this is set. |
| `subtitle` | no | Header subtitle (needs `title`). |
| `footer` | no | Card footer. |
| `class_list` | no | Extra classes on `.card`. |
| `body_class_list` | no | Extra classes on `.card-body`. |

#### `lbd::inc.card`

A stats card with an icon, a number and a footer line.

``` blade
@component('lbd::inc.card')
    @slot('title', '$ 1,345')
    @slot('category', 'Revenue')
    @slot('icon', 'nc-icon nc-light-3 text-success')
    @slot('footer_icon', 'fa fa-calendar-o')
    @slot('footer', 'Last day')
@endcomponent
```

| Slot | Required | Description |
|-|-|-|
| `title` | yes | The big number or value. |
| `category` | yes | Label shown above the value. |
| `icon` | yes | Icon classes, e.g. `nc-icon nc-chart text-warning`. |
| `footer_icon` | yes | Footer icon classes, e.g. `fa fa-refresh`. |
| `footer` | yes | Footer text. |
| `class_list` | no | Classes on `.card`; defaults to `card-stats`. |

### Menus

The layouts render menus built with [lavary/laravel-menu](https://github.com/lavary/laravel-menu). Each menu is only rendered if it exists, so define the ones you need:

| Menu name | Where it is rendered |
|-|-|
| `sidebar_main_menu` | Main sidebar navigation (`lbd::layout`). Supports one level of nested items, shown as collapsible groups. |
| `sidebar_user_menu` | Dropdown under the demo's sidebar user block. Only rendered when `lbd.load_demo_content` is on; otherwise render it yourself in the `sidebar-user` section (see below). |
| `site_header_menu` | Navbar links (`lbd::layout-full`). |
| `site_footer_menu` | Footer links (both layouts). |

Define them before the view renders, for example in a middleware applied to your dashboard routes:

``` php
<?php

namespace App\Http\Middleware;

use Closure;
use Lavary\Menu\Facade as Menu;

class BuildDashboardMenus
{
    public function handle($request, Closure $next)
    {
        Menu::make('sidebar_main_menu', function ($menu) {
            $menu->add('Dashboard', ['route' => 'dashboard'])
                ->before('<i class="nc-icon nc-chart-pie-35"></i>');

            // A parent item needs an "#id" href: it is used as the id of the collapsible group.
            $orders = $menu->add('Orders')->before('<i class="nc-icon nc-cart-simple"></i>');
            $orders->link->href('#ordersMenu');

            $orders->add('<span class="sidebar-normal">All orders</span>', ['route' => 'orders.index'])
                ->before('<span class="sidebar-mini">AO</span>');
            $orders->add('<span class="sidebar-normal">New order</span>', ['route' => 'orders.create'])
                ->before('<span class="sidebar-mini">NO</span>');
        });

        Menu::make('sidebar_user_menu', function ($menu) {
            $menu->add('')
                ->prepend('<span class="sidebar-mini">MP</span>')
                ->append('<span class="sidebar-normal">My Profile</span>')
                ->link->href(route('profile'));
        });

        return $next($request);
    }
}
```

Outside demo mode the layout doesn't render `sidebar_user_menu` for you. Output it from your `sidebar-user` section:

``` blade
@section('sidebar-user')
<div class="user">
    <div class="info">
        <a data-toggle="collapse" href="#userMenu" class="collapsed">
            <span>{{ auth()->user()->name }} <b class="caret"></b></span>
        </a>
        <div class="collapse" id="userMenu">
            {!! Menu::get('sidebar_user_menu')->asUl(['class' => 'nav']) !!}
        </div>
    </div>
</div>
@endsection
```

The demo menus in `src/Controllers/LightBootstrapDashboardController.php` (`setupMenus()`) show more complete examples.

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Code style

``` bash
composer check-style
composer fix-style
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email contact@renderbit.com instead of using the issue tracker.

## Credits

- [Creative Tim](https://www.creative-tim.com) for the Light Bootstrap Dashboard theme
- [Renderbit Technologies][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/renderbit/light-bootstrap-dashboard.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/renderbit/light-bootstrap-dashboard.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/renderbit/light-bootstrap-dashboard
[link-downloads]: https://packagist.org/packages/renderbit/light-bootstrap-dashboard
[link-author]: https://github.com/RenderbitTechnologies
[link-contributors]: https://github.com/RenderbitTechnologies/Light-Bootstrap-Dashboard/graphs/contributors
