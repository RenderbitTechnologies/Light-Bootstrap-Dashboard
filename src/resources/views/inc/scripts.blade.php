@section('scripts')

<!--   Core JS Files   -->
<script src="{{ asset('vendor/lbd/js/core/jquery.3.2.1.min.js') }}"></script>
<script src="{{ asset('vendor/lbd/js/core/popper.min.js') }}"></script>
<script src="{{ asset('vendor/lbd/js/core/bootstrap.min.js') }}"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="{{ asset('vendor/lbd/js/plugins/bootstrap-switch.js') }}"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key={{ config('lbd.google_maps_api_key') }}"></script>
<!--  Chartist Plugin  -->
<script src="{{ asset('vendor/lbd/js/plugins/chartist.min.js') }}"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('vendor/lbd/js/plugins/bootstrap-notify.js') }}"></script>
<!--  Share Plugin -->
<script src="{{ asset('vendor/lbd/js/plugins/jquery.sharrre.js') }}"></script>
<!--  jVector Map  -->
<script src="{{ asset('vendor/lbd/js/plugins/jquery-jvectormap.js') }}"></script>
<!--  Plugin for Date Time Picker and Full Calendar Plugin-->
<script src="{{ asset('vendor/lbd/js/plugins/moment.min.js') }}"></script>
<!--  DatetimePicker   -->
<script src="{{ asset('vendor/lbd/js/plugins/bootstrap-datetimepicker.js') }}"></script>
<!--  Sweet Alert  -->
<script src="{{ asset('vendor/lbd/js/plugins/sweetalert2.min.js') }}"></script>
<!--  Tags Input  -->
<script src="{{ asset('vendor/lbd/js/plugins/bootstrap-tagsinput.js') }}"></script>
<!--  Sliders  -->
<script src="{{ asset('vendor/lbd/js/plugins/nouislider.js') }}"></script>
<!--  Bootstrap Select  -->
<script src="{{ asset('vendor/lbd/js/plugins/bootstrap-selectpicker.js') }}"></script>
<!--  jQueryValidate  -->
<script src="{{ asset('vendor/lbd/js/plugins/jquery.validate.min.js') }}"></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{ asset('vendor/lbd/js/plugins/jquery.bootstrap-wizard.js') }}"></script>
<!--  Bootstrap Table Plugin -->
<script src="{{ asset('vendor/lbd/js/plugins/bootstrap-table.js') }}"></script>
<!--  DataTable Plugin -->
<script src="{{ asset('vendor/lbd/js/plugins/jquery.dataTables.min.js') }}"></script>
<!--  Full Calendar   -->
<script src="{{ asset('vendor/lbd/js/plugins/fullcalendar.min.js') }}"></script>
<!-- Control Center for Light Bootstrap Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('vendor/lbd/js/light-bootstrap-dashboard.js') }}?v=2.0.1"></script>
@if(config('lbd.load_demo_content'))
    <!-- Light Dashboard DEMO methods, don't include it in your project! -->
    <script src="{{ asset('vendor/lbd/js/demo.js') }}"></script>
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();

            demo.showNotification();

            demo.initVectorMap();
        });
    </script>
@endif

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