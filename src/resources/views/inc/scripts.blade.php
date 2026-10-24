@section('scripts')

<!--   Core JS Files   -->
<!--   Page-specific plugins are pushed onto the 'scripts' stack by the views that need them   -->
<script src="{{ asset('vendor/lbd/js/core/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/lbd/js/core/popper.min.js') }}"></script>
<script src="{{ asset('vendor/lbd/js/core/bootstrap.min.js') }}"></script>
@if(config('lbd.google_maps_api_key'))
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key={{ config('lbd.google_maps_api_key') }}"></script>
@endif
<!-- Control Center for Light Bootstrap Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('vendor/lbd/js/light-bootstrap-dashboard.js') }}?v=2.0.1"></script>

@stack('scripts')

@if(config('lbd.google_analytics_key'))
<!--  Google Analytics (GA4)  -->
<script async src="https://www.googletagmanager.com/gtag/js?id={{ config('lbd.google_analytics_key') }}"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', @json(config('lbd.google_analytics_key')));
</script>
@endif

@show