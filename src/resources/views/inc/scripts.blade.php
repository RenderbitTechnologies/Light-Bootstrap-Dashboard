@section('scripts')

<!--   Core JS Files   -->
<!--   Page-specific plugins are pushed onto the 'scripts' stack by the views that need them   -->
<script src="{{ asset('vendor/lbd/js/core/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/lbd/js/core/popper.min.js') }}"></script>
<script src="{{ asset('vendor/lbd/js/core/bootstrap.min.js') }}"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key={{ config('lbd.google_maps_api_key') }}"></script>
<!-- Control Center for Light Bootstrap Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('vendor/lbd/js/light-bootstrap-dashboard.js') }}?v=2.0.1"></script>

@stack('scripts')

<script>
    // analytics

    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', '{{ config('lbd.google_analytics_key') }}']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>

@show