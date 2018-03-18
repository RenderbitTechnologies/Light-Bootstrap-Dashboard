<footer class="footer">
    <div class="container">
        <nav>
            {!! Menu::get('site_footer_menu')->asUl(['class' => 'footer-menu']) !!}

            <p class="copyright text-center">
                © {{ (new DateTime())->format('Y') }} <a href="{{ config('app.url') }}">{{ config('app.name') }}</a>, made with <span class="text-danger">&hearts;</span> by <a href="https://renderbit.com">Renderbit Technologies</a>
            </p>
        </nav>
    </div>
</footer>