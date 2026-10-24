# Changelog

All notable changes to `LightBootstrapDashboard` will be documented in this file.

Updates should follow the [Keep a CHANGELOG](http://keepachangelog.com/) principles.

## NEXT - YYYY-MM-DD

**Breaking:** the layout no longer renders the template's placeholder sidebar user, navbar search form, dropdowns, notifications or user menu, nor the `sidebar-5.jpg` background, unless `lbd.load_demo_content` is enabled. See the README for the new hooks.

### Added
- `sidebar-user` section and `navbar-left` / `navbar-right` / `navbar-full` stacks for filling the layout chrome from your own views
- `lbd.sidebar_image` config key for the sidebar background image

### Deprecated
- Nothing

### Fixed
- Invalid navbar markup (`<a>` and `<form>` elements as direct children of `<ul>`)
- Sidebar minimize button now follows `lbd.sidebar_color` instead of always being orange

### Removed
- Hardcoded demo content from `inc/sidebar.blade.php`, `inc/navbar.blade.php` and `inc/navbar-full.blade.php` (moved to `inc/demo.blade.php`)
- Unused `inc/demo-full.blade.php` view
- `jquery.sharrre.js` and the share-button code in `light-bootstrap-dashboard.js` (the share-count APIs it used no longer exist).

### Security
- `google_maps_api_key` and `google_analytics_key` no longer fall back to hardcoded third-party values; the Google Maps script and the analytics snippet are only output when the respective key is set (#7)
- Replace the legacy `ga.js` analytics snippet with GA4 `gtag.js` (#7)
- Updated bundled libraries to patched versions: jQuery 3.7.1, Bootstrap 4.6.2, Popper.js 1.16.1, Moment.js 2.30.1, DataTables 1.13.11, jQuery Validation 1.22.1, Bootstrap Table 1.27.3 and Bootstrap Select 1.13.18 (#9).
- `inc/scripts.blade.php` now loads only the core JS; demo pages `@push('scripts')` the plugins they need (#9).
- The Font Awesome stylesheet now loads from cdnjs with Subresource Integrity (#9).
