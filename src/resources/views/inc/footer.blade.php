<footer class="footer">
    <div class="container">
        <nav>
            <ul class="footer-menu">
                <li>
                    <a href="#">
                        Home
                    </a>
                </li>
                <li>
                    <a href="#">
                        Company
                    </a>
                </li>
                <li>
                    <a href="#">
                        Portfolio
                    </a>
                </li>
                <li>
                    <a href="#">
                        Blog
                    </a>
                </li>
            </ul>
            <p class="copyright text-center">
                © {{ (new DateTime())->format('Y') }} <a href="{{ config('app.url') }}">{{ config('app.name') }}</a>, made with <span class="text-danger">&hearts;</span> by <a href="https://renderbit.com">Renderbit Technologies</a>
            </p>
        </nav>
    </div>
</footer>