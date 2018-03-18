<!DOCTYPE html>
<html lang="en">
<head>
    @include('lbd::inc.head')
</head>
<body>
<div class="wrapper">
    @include('lbd::inc.sidebar')
    
    <div class="main-panel">
        @include('lbd::inc.navbar')

        <div class="content">
            @yield('content')
        </div>

        @include('lbd::inc.footer')
    </div>
</div>
@include('lbd::inc.demo')
</body>
@include('lbd::inc.scripts')
</html>