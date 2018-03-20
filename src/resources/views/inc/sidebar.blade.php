<div class="sidebar" data-color="{{ config('lbd.sidebar_color') }}" data-image="{{ asset('vendor/lbd/img/sidebar-5.jpg') }}">
    <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="{{ route('lbd.dashboard') }}" class="simple-text logo-mini">
                {{ config('lbd.logo_mini') }}
            </a>
            <a href="{{ route('lbd.dashboard') }}" class="simple-text logo-normal">
                {{ config('lbd.logo_full') }}
            </a>
        </div>
        <div class="user">
            <div class="photo">
                <img src="{{ asset('vendor/lbd/img/default-avatar.png') }}" alt="...">
            </div>
            <div class="info ">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    <span>Tania Andrew
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="collapse" id="collapseExample">
                    @if(Menu::exists('sidebar_user_menu'))
                    {!! Menu::get('sidebar_user_menu')->asUl(['class' => 'nav']) !!}
                    @endif
                </div>
            </div>
        </div>
        @if(Menu::exists('sidebar_main_menu'))
        <ul class="nav">
            @include('lbd::inc.sidebar-menu', ['items' => Menu::get('sidebar_main_menu')->roots()])
        </ul>
        @endif
    </div>
</div>