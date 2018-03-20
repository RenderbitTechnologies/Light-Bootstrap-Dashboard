@extends('lbd::layout-full')

@section('title', 'Lock Screen')

@section('background_color', 'purple')

@section('background_image', asset('vendor/lbd/img/bg4.jpg'))

@section('content')
    <div class="container">
        <div class="col-md-4 ml-auto mr-auto">
            <div class="card card-lock text-center card-plain">
                <div class="card-header ">
                    <div class="author">
                        <img class="avatar" src="{{ asset('vendor/lbd/img/default-avatar.png') }}" alt="...">
                    </div>
                </div>
                <div class="card-body ">
                    <h4 class="card-title">Tania Andrew</h4>
                    <div class="form-group">
                        <input type="password" placeholder="Enter Password" class="form-control">
                    </div>
                </div>
                <div class="card-footer ">
                    <a href="#" class="btn btn-info btn-round">Unlock</a>
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