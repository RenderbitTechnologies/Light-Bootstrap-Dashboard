<footer class="footer">
    <div class="container">
        <nav>
            @if(Menu::exists('site_footer_menu'))
            {!! Menu::get('site_footer_menu')->asUl(['class' => 'footer-menu']) !!}
            @endif
            <p class="copyright text-center">
                © {{ (new DateTime())->format('Y') }} <a href="{{ config('app.url') }}">{{ config('app.name') }}</a>@if(config('lbd.footer_logo')), made with <span class="text-danger">&hearts;</span> by <a href="{{ config('lbd.footer_link') }}">{{ config('lbd.footer_logo') }}</a>@endif
            </p>
        </nav>
    </div>
</footer>