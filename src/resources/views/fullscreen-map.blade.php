@extends('lbd::layout')

@section('title', 'Fullscreen Map')

@push('styles')
    <style>
        .content {
            padding: 0 !important;
        }
    </style>
@endpush

@section('content')
    <div id="map" class="full-screen-map"></div>
@endsection

@push('scripts')
    <script type="text/javascript">
        $(document).ready(function () {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initFullScreenGoogleMap();
        });
    </script>
@endpush