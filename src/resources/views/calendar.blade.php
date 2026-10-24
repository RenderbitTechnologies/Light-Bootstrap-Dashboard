@extends('lbd::layout')

@section('title', 'Calendar')

@section('content')
    <div class="container-fluid">
        <div class="header text-center">
            <h3 class="title">FullCalendar.io</h3>
            <small class="category">Handcrafted by our friends from
                <a target="_blank" href="https://fullcalendar.io/">FullCalendar.io</a>. Please checkout their
                <a href="https://fullcalendar.io/docs/" target="_blank">full documentation.</a>
            </small>
        </div>
        <br />
        <div class="row">
            <div class="col-md-10 ml-auto mr-auto">
                <div class="card card-calendar">
                    <div class="card-body ">
                        <div id="fullCalendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <!--  Moment.js, required by the Date Time Picker and Full Calendar  -->
    <script src="{{ asset('vendor/lbd/js/plugins/moment.min.js') }}"></script>
    <!--  Full Calendar  -->
    <script src="{{ asset('vendor/lbd/js/plugins/fullcalendar.min.js') }}"></script>
    <!--  Sweet Alert  -->
    <script src="{{ asset('vendor/lbd/js/plugins/sweetalert2.min.js') }}"></script>
@endpush

@push('scripts')
    <script type="text/javascript">
        $().ready(function() {
            demo.initFullCalendar();
        });
    </script>
@endpush