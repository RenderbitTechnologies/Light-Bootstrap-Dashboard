@extends('lbd::layout-full')

@section('title', 'Register')

@section('background_color', 'orange')

@section('background_image', asset('vendor/lbd/img/bg5.jpg'))

@section('content')
    <div class="container">
        <div class="card card-register card-plain text-center">
            <div class="card-header ">
                <div class="row  justify-content-center">
                    <div class="col-md-8">
                        <div class="header-text">
                            <h2 class="card-title">{{ config('app.name') }}</h2>
                            <h4 class="card-subtitle">Register for free and experience the dashboard today</h4>
                            <hr />
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body ">
                <div class="row">
                    <div class="col-md-5 ml-auto">
                        <div class="media">
                            <div class="media-left">
                                <div class="icon">
                                    <i class="nc-icon nc-circle-09"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4>Free Account</h4>
                                <p>Here you can write a feature description for your dashboard, let the users know what is the value that you give them.</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <div class="icon">
                                    <i class="nc-icon nc-preferences-circle-rotate"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4>Awesome Performances</h4>
                                <p>Here you can write a feature description for your dashboard, let the users know what is the value that you give them.</p>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <div class="icon">
                                    <i class="nc-icon nc-planet"></i>
                                </div>
                            </div>
                            <div class="media-body">
                                <h4>Global Support</h4>
                                <p>Here you can write a feature description for your dashboard, let the users know what is the value that you give them.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mr-auto">
                        <form method="#" action="#">
                            <div class="card card-plain">
                                <div class="content">
                                    <div class="form-group">
                                        <input type="email" placeholder="Your First Name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" placeholder="Your Last Name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" placeholder="Company" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="email" placeholder="Enter email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" placeholder="Password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" placeholder="Password Confirmation" class="form-control">
                                    </div>
                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-fill btn-neutral btn-wd">Create Free Account</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function () {
            demo.checkFullPageBackgroundImage();

            setTimeout(function () {
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700);
        });
    </script>
@endpush