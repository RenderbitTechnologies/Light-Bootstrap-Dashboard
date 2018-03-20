@if(config('lbd.load_demo_content'))

@push('styles')
<!-- CSS Just for demo purpose, don't include it in your project -->
<link href="{{ asset('vendor/lbd/css/demo.css') }}" rel="stylesheet">
@endpush

@push('scripts')
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
@endpush

@endif