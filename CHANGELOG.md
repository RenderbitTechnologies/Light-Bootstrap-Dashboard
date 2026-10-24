# Changelog

All notable changes to `renderbit/light-bootstrap-dashboard` will be documented in this file.

Updates should follow the [Keep a CHANGELOG](http://keepachangelog.com/) principles.

## Unreleased

**Breaking:** the layout no longer renders the template's placeholder sidebar user, navbar search form, dropdowns, notifications or user menu, nor the `sidebar-5.jpg` background, unless `lbd.load_demo_content` is enabled. See the README for the new hooks.

### Added
- `sidebar-user` section and `navbar-left` / `navbar-right` stacks for filling the layout chrome from your own views
- `lbd.sidebar_image` config key for the sidebar background image
- README: install, asset/config/view publishing, configuration reference, layout sections and stacks, `lbd::inc.box` / `lbd::inc.card` components and lavary/laravel-menu setup.
- README: note on using `@push('scripts')` / `@push('styles')` instead of overriding `@section('scripts')` / `@section('styles')`.

### Deprecated
- Nothing

### Fixed
- Invalid navbar markup (`<a>` and `<form>` elements as direct children of `<ul>`)
- Sidebar minimize button now follows `lbd.sidebar_color` instead of always being orange
- README usage section no longer shows skeleton code for a class that does not exist.
- Package description no longer says "Laravel 5"; the package supports Laravel 5.7 to 12.
- `homepage` in `composer.json` and README links now point to `RenderbitTechnologies/Light-Bootstrap-Dashboard`.
- `extra.branch-alias.dev-master` is now `6.x-dev`, matching the version matrix.

### Removed
- Hardcoded demo content from `inc/sidebar.blade.php` and `inc/navbar.blade.php` (moved to `inc/demo.blade.php`)
- Unused `inc/demo-full.blade.php` view
- Travis CI and Scrutinizer badges (neither service is set up).
- `composer.lock` (this is a library); it is now ignored.

### Security
- `google_maps_api_key` and `google_analytics_key` no longer fall back to hardcoded third-party values; the Google Maps script and the analytics snippet are only output when the respective key is set (#7)
- Replace the legacy `ga.js` analytics snippet with GA4 `gtag.js` (#7)

## 6.x

- Laravel 11 and 12 support.
