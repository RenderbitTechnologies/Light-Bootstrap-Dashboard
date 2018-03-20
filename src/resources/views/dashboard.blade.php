@extends('lbd::layout')

@section('title', 'Dashboard')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                @component('lbd::inc.card')
                    @slot('title', '150GB')

                    @slot('category', 'Number')

                    @slot('icon', 'nc-icon nc-chart text-warning')

                    @slot('footer_icon', 'fa fa-refresh')

                    @slot('footer', 'Update Now')
                @endcomponent
            </div>
            <div class="col-lg-3 col-sm-6">
                @component('lbd::inc.card')
                    @slot('title', '$ 1,345')

                    @slot('category', 'Revenue')

                    @slot('icon', 'nc-icon nc-light-3 text-success')

                    @slot('footer_icon', 'fa fa-calendar-o')

                    @slot('footer', 'Last day')
                @endcomponent
            </div>
            <div class="col-lg-3 col-sm-6">
                @component('lbd::inc.card')
                    @slot('title', '23')

                    @slot('category', 'Errors')

                    @slot('icon', 'nc-icon nc-vector text-danger')

                    @slot('footer_icon', 'fa fa-clock-o')

                    @slot('footer', 'In the last hour')
                @endcomponent
            </div>
            <div class="col-lg-3 col-sm-6">
                @component('lbd::inc.card')
                    @slot('title', '+45K')

                    @slot('category', 'Followers')

                    @slot('icon', 'nc-icon nc-favourite-28 text-primary')

                    @slot('footer_icon', 'fa fa-refresh')

                    @slot('footer', 'Update Now')
                @endcomponent
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                @component('lbd::inc.box')
                    @slot('title', 'Global Sales by Top Locations')

                    @slot('subtitle', 'All products that were shipped')

                    @slot('body')
                        <div class="row">
                            <div class="col-md-6">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="{{ asset('vendor/lbd/img/flags/US.png') }}">
                                                </div>
                                            </td>
                                            <td>USA</td>
                                            <td class="text-right">
                                                2.920
                                            </td>
                                            <td class="text-right">
                                                53.23%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="{{ asset('vendor/lbd/img/flags/DE.png') }}">
                                                </div>
                                            </td>
                                            <td>Germany</td>
                                            <td class="text-right">
                                                1.300
                                            </td>
                                            <td class="text-right">
                                                20.43%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="{{ asset('vendor/lbd/img/flags/AU.png') }}">
                                                </div>
                                            </td>
                                            <td>Australia</td>
                                            <td class="text-right">
                                                760
                                            </td>
                                            <td class="text-right">
                                                10.35%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="{{ asset('vendor/lbd/img/flags/GB.png') }}">
                                                </div>
                                            </td>
                                            <td>United Kingdom</td>
                                            <td class="text-right">
                                                690
                                            </td>
                                            <td class="text-right">
                                                7.87%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="{{ asset('vendor/lbd/img/flags/RO.png') }}">
                                                </div>
                                            </td>
                                            <td>Romania</td>
                                            <td class="text-right">
                                                600
                                            </td>
                                            <td class="text-right">
                                                5.94%
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="flag">
                                                    <img src="{{ asset('vendor/lbd/img/flags/BR.png') }}">
                                                </div>
                                            </td>
                                            <td>Brasil</td>
                                            <td class="text-right">
                                                550
                                            </td>
                                            <td class="text-right">
                                                4.34%
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-md-6 ml-auto mr-auto">
                                <div id="worldMap" style="height: 300px;"></div>
                            </div>
                        </div>
                    @endslot
                @endcomponent
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                @component('lbd::inc.box')
                    @slot('title', 'Email Statistics')

                    @slot('subtitle', 'Last Campaign Performance')

                    @slot('body')
                        <div id="chartEmail" class="ct-chart ct-perfect-fourth"></div>
                    @endslot

                    @slot('footer')
                        <div class="legend">
                            <i class="fa fa-circle text-info"></i> Open
                            <i class="fa fa-circle text-danger"></i> Bounce
                            <i class="fa fa-circle text-warning"></i> Unsubscribe
                        </div>
                        <hr>
                        <div class="stats">
                            <i class="fa fa-clock-o"></i> Campaign sent 2 days ago
                        </div>
                    @endslot
                @endcomponent
            </div>
            <div class="col-md-8">
                @component('lbd::inc.box')
                    @slot('title', 'Users Behavior')

                    @slot('subtitle', '24 Hours performance')

                    @slot('body')
                        <div id="chartHours" class="ct-chart"></div>
                    @endslot

                    @slot('footer')
                        <div class="legend">
                            <i class="fa fa-circle text-info"></i> Open
                            <i class="fa fa-circle text-danger"></i> Click
                            <i class="fa fa-circle text-warning"></i> Click Second Time
                        </div>
                        <hr>
                        <div class="stats">
                            <i class="fa fa-history"></i> Updated 3 minutes ago
                        </div>
                    @endslot
                @endcomponent
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                @component('lbd::inc.box')
                    @slot('title', '2017 Sales')

                    @slot('subtitle', 'All products including Taxes')

                    @slot('body')
                        <div id="chartActivity" class="ct-chart"></div>
                    @endslot

                    @slot('footer')
                        <div class="legend">
                            <i class="fa fa-circle text-info"></i> Tesla Model S
                            <i class="fa fa-circle text-danger"></i> BMW 5 Series
                        </div>
                        <hr>
                        <div class="stats">
                            <i class="fa fa-check"></i> Data information certified
                        </div>
                    @endslot
                @endcomponent
            </div>
            <div class="col-md-6">
                @component('lbd::inc.box')
                    @slot('class_list', 'card-tasks')

                    @slot('title', 'Tasks')

                    @slot('subtitle', 'Backend development')

                    @slot('body')
                        <div class="table-full-width">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Sign contract for "What are conference organizers afraid of?"</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked>
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Lines From Great Russian Literature? Or E-mails From My Boss?</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked>
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Flooded: One year later, assessing what was lost and what was found when a ravaging rain swept through metro Detroit
                                    </td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" checked>
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Create 4 Invisible User Experiences you Never Knew About</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="">
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Read "Following makes Medium better"</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input class="form-check-input" type="checkbox" value="" checked>
                                                <span class="form-check-sign"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>Unfollow 5 enemies from twitter</td>
                                    <td class="td-actions text-right">
                                        <button type="button" rel="tooltip" title="Edit Task" class="btn btn-info btn-simple btn-link">
                                            <i class="fa fa-edit"></i>
                                        </button>
                                        <button type="button" rel="tooltip" title="Remove" class="btn btn-danger btn-simple btn-link">
                                            <i class="fa fa-times"></i>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    @endslot

                    @slot('footer')
                        <hr>
                        <div class="stats">
                            <i class="now-ui-icons loader_refresh spin"></i> Updated 3 minutes ago
                        </div>
                    @endslot
                @endcomponent
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            demo.initDashboardPageCharts();

            demo.showNotification();

            demo.initVectorMap();
        });
    </script>
@endpush