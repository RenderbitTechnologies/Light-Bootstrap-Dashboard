<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute">
    <div class="container">
        <div class="navbar-wrapper">
            <a class="navbar-brand" href="{{ route('lbd.dashboard') }}">{{ config('app.name') }}</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse justify-content-end" id="navbar">
            @if(Menu::exists('site_header_menu'))
                {!! Menu::get('site_header_menu')->asUl(['class' => 'navbar-nav']) !!}
            @endif
        </div>
    </div>
</nav>
<!-- End Navbar -->