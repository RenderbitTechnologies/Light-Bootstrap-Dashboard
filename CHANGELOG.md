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
- Nothing

### Security
- `google_maps_api_key` and `google_analytics_key` no longer fall back to hardcoded third-party values; the Google Maps script and the analytics snippet are only output when the respective key is set (#7)
- Replace the legacy `ga.js` analytics snippet with GA4 `gtag.js` (#7)
