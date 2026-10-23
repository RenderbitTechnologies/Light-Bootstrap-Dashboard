# Changelog

All notable changes to `LightBootstrapDashboard` will be documented in this file.

Updates should follow the [Keep a CHANGELOG](http://keepachangelog.com/) principles.

## NEXT - YYYY-MM-DD

### Added
- Nothing

### Deprecated
- Nothing

### Fixed
- Nothing

### Removed
- `jquery.sharrre.js` and the share-button code in `light-bootstrap-dashboard.js` (the share-count APIs it used no longer exist).

### Security
- Updated bundled libraries to patched versions: jQuery 3.7.1, Bootstrap 4.6.2, Popper.js 1.16.1, Moment.js 2.30.1, DataTables 1.13.11, jQuery Validation 1.22.1, Bootstrap Table 1.27.3 and Bootstrap Select 1.13.18 (#9).
- `inc/scripts.blade.php` now loads only the core JS; demo pages `@push('scripts')` the plugins they need (#9).
- The Font Awesome stylesheet now loads from cdnjs with Subresource Integrity (#9).
