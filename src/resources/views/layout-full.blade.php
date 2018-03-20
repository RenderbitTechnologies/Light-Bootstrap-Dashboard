<!DOCTYPE html>
@include('lbd::inc.demo')
<html lang="en">
<head>
    @include('lbd::inc.head')
</head>
<body>
<div class="wrapper wrapper-full-page">
    @include('lbd::inc.navbar-full')
    <!-- you can change the color of the filter page using: data-color="blue | purple | green | orange | red | rose " -->
    <div class="full-page section-image" data-color="@yield('background_color')" data-image="@yield('background_image')">
        <div class="content">
            @yield('content')
        </div>
    </div>
    @include('lbd::inc.footer')
</div>
</body>
@include('lbd::inc.scripts')
</html>