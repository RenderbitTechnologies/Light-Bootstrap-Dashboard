# Changelog

All notable changes to `renderbit/light-bootstrap-dashboard` will be documented in this file.

Updates should follow the [Keep a CHANGELOG](http://keepachangelog.com/) principles.

## Unreleased

### Added
- README: install, asset/config/view publishing, configuration reference, layout sections and stacks, `lbd::inc.box` / `lbd::inc.card` components and lavary/laravel-menu setup.
- README: note on using `@push('scripts')` / `@push('styles')` instead of overriding `@section('scripts')` / `@section('styles')`.

### Fixed
- README usage section no longer shows skeleton code for a class that does not exist.
- Package description no longer says "Laravel 5"; the package supports Laravel 5.7 to 12.
- `homepage` in `composer.json` and README links now point to `RenderbitTechnologies/Light-Bootstrap-Dashboard`.
- `extra.branch-alias.dev-master` is now `6.x-dev`, matching the version matrix.

### Removed
- Travis CI and Scrutinizer badges (neither service is set up).
- `composer.lock` (this is a library); it is now ignored.

## 6.x

- Laravel 11 and 12 support.
