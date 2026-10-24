@php
    $sidebarImage = config('lbd.sidebar_image') ?: (config('lbd.load_demo_content') ? 'vendor/lbd/img/sidebar-5.jpg' : null);
@endphp
<div class="sidebar" data-color="{{ config('lbd.sidebar_color') }}"@if($sidebarImage) data-image="{{ asset($sidebarImage) }}"@endif>
    <!--
        Tip 1: You can change the color of the sidebar using the lbd.sidebar_color config key: purple | blue | green | orange | red

        Tip 2: you can also add a background image using the lbd.sidebar_image config key
    -->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{ lbd_home_url() }}" class="simple-text logo-mini">
                {{ config('lbd.logo_mini') }}
            </a>
            <a href="{{ lbd_home_url() }}" class="simple-text logo-normal">
                {{ config('lbd.logo_full') }}
            </a>
        </div>
        @yield('sidebar-user')
        @if(Menu::exists('sidebar_main_menu'))
        <ul class="nav">
            @include('lbd::inc.sidebar-menu', ['items' => Menu::get('sidebar_main_menu')->roots()])
        </ul>
        @endif
    </div>
</div>