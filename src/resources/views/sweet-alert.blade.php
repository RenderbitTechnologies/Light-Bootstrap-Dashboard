@extends('lbd::layout')

@section('title', 'Sweet Alert')

@section('content')
    <div class="container-fluid">
        <div class="card card-plain">
            <h4 class="title">Sweet Alert 2</h4>
            <p class="category">A beautiful plugin, that replace the classic alert, Handcrafted by our friend
                <a target="_blank" href="https://twitter.com/t4t5">Tristan Edwards</a>. Please check out the
                <a href="http://limonte.github.io/sweetalert2/" target="_blank">full documentation.</a>
            </p>
            <br>
            <br>
            <div class="places-sweet-alerts">
                <div class="row">
                    <div class="col-md-3">
                        @component('lbd::inc.box')
                            @slot('body_class_list', 'text-center')

                            @slot('body')
                                <h5>Basic example</h5>
                                <button class="btn btn-default btn-fill" onclick="demo.showSwal('basic')">Try me!</button>
                            @endslot
                        @endcomponent
                    </div>
                    <div class="col-md-3">
                        @component('lbd::inc.box')
                            @slot('body_class_list', 'text-center')

                            @slot('body')
                                <h5>A title with a text under</h5>
                                <button class="btn btn-default btn-fill" onclick="demo.showSwal('title-and-text')">Try me!</button>
                            @endslot
                        @endcomponent
                    </div>
                    <div class="col-md-3">
                        @component('lbd::inc.box')
                            @slot('body_class_list', 'text-center')

                            @slot('body')
                                <h5>A success message</h5>
                                <button class="btn btn-default btn-fill" onclick="demo.showSwal('success-message')">Try me!</button>
                            @endslot
                        @endcomponent
                    </div>
                    <div class="col-md-3">
                        @component('lbd::inc.box')
                            @slot('body_class_list', 'text-center')

                            @slot('body')
                                <h5>Custom HTML description</h5>
                                <button class="btn btn-default btn-fill" onclick="demo.showSwal('custom-html')">Try me!</button>
                            @endslot
                        @endcomponent
                    </div>
                    <div class="col-md-3">
                        @component('lbd::inc.box')
                            @slot('body_class_list', 'text-center')

                            @slot('body')
                                <h5>A warning message, with a function attached to the "Confirm" Button...</h5>
                                <button class="btn btn-default btn-fill" onclick="demo.showSwal('warning-message-and-confirmation')">Try me!</button>
                            @endslot
                        @endcomponent
                    </div>
                    <div class="col-md-3">
                        @component('lbd::inc.box')
                            @slot('body_class_list', 'text-center')

                            @slot('body')
                                <h5>...and by passing a parameter, you can execute something else for "Cancel"</h5>
                                <button class="btn btn-default btn-fill" onclick="demo.showSwal('warning-message-and-cancel')">Try me!</button>
                            @endslot
                        @endcomponent
                    </div>
                    <div class="col-md-3">
                        @component('lbd::inc.box')
                            @slot('body_class_list', 'text-center')

                            @slot('body')
                                <h5>A message with auto close timer set to 2 seconds</h5>
                                <button class="btn btn-default btn-fill" onclick="demo.showSwal('auto-close')">Try me!</button>
                            @endslot
                        @endcomponent
                    </div>
                    <div class="col-md-3">
                        @component('lbd::inc.box')
                            @slot('body_class_list', 'text-center')

                            @slot('body')
                                <h5>Modal window with input field</h5>
                                <button class="btn btn-default btn-fill" onclick="demo.showSwal('input-field')">Try me!</button>
                            @endslot
                        @endcomponent
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection