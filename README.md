# Light Bootstrap Dashboard

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Light Bootstrap Dashboard by Creative Tim, packaged as Blade files for Laravel 5.

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

Via Composer

``` bash
$ composer require renderbit/light-bootstrap-dashboard
```

## Usage

``` php
$skeleton = new RenderbitTechnologies\LightBootstrapDashboard();
echo $skeleton->echoPhrase('Hello, League!');
```

### Customizing the layout chrome

The sidebar and navbar are empty by default. Fill them from your own views:

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

- `sidebar-user` (section): the user block below the sidebar logo.
- `navbar-left` / `navbar-right` (stacks): `<li>` items rendered in the left and right navbar lists.
- `navbar-full` (stack): `<li>` items rendered in the navbar of the full-page layout (`lbd::layout-full`, used by the login, register and lock screen pages).
- `lbd.sidebar_color` and `lbd.sidebar_image` config keys set the sidebar colour and background image.

The template's placeholder user, search form, dropdowns and notifications are only shown when `lbd.load_demo_content` is enabled.

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email contact@renderbit.com instead of using the issue tracker.

## Credits

- [Renderbit Technologies][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/renderbit/light-bootstrap-dashboard.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/RenderbitTechnologies/LightBootstrapDashboard/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/RenderbitTechnologies/LightBootstrapDashboard.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/RenderbitTechnologies/LightBootstrapDashboard.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/renderbit/light-bootstrap-dashboard.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/renderbit/light-bootstrap-dashboard
[link-travis]: https://travis-ci.org/RenderbitTechnologies/LightBootstrapDashboard
[link-scrutinizer]: https://scrutinizer-ci.com/g/RenderbitTechnologies/LightBootstrapDashboard/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/RenderbitTechnologies/LightBootstrapDashboard
[link-downloads]: https://packagist.org/packages/renderbit/light-bootstrap-dashboard
[link-author]: https://github.com/RenderbitTechnologies
[link-contributors]: ../../contributors
