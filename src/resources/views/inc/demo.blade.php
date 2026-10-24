@if(config('lbd.load_demo_content'))

@section('sidebar-user')
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
@endsection

@push('navbar-left')
<li class="nav-item">
    <form class="navbar-form navbar-left navbar-search-form" role="search">
        <div class="input-group">
            <i class="nc-icon nc-zoom-split"></i>
            <input type="text" value="" class="form-control" placeholder="Search...">
        </div>
    </form>
</li>
@endpush

@push('navbar-right')
<li class="dropdown nav-item">
    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
        <i class="nc-icon nc-planet"></i>
    </a>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Create New Post</a>
        <a class="dropdown-item" href="#">Manage Something</a>
        <a class="dropdown-item" href="#">Do Nothing</a>
        <a class="dropdown-item" href="#">Submit to live</a>
        <div class="divider"></div>
        <a class="dropdown-item" href="#">Another action</a>
    </div>
</li>
<li class="dropdown nav-item">
    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
        <i class="nc-icon nc-bell-55"></i>
        <span class="notification">5</span>
        <span class="d-lg-none">Notification</span>
    </a>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="#">Notification 1</a>
        <a class="dropdown-item" href="#">Notification 2</a>
        <a class="dropdown-item" href="#">Notification 3</a>
        <a class="dropdown-item" href="#">Notification 4</a>
        <a class="dropdown-item" href="#">Notification 5</a>
    </div>
</li>
<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="nc-icon nc-bullet-list-67"></i>
    </a>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
        <a class="dropdown-item" href="#">
            <i class="nc-icon nc-email-85"></i> Messages
        </a>
        <a class="dropdown-item" href="#">
            <i class="nc-icon nc-umbrella-13"></i> Help Center
        </a>
        <a class="dropdown-item" href="#">
            <i class="nc-icon nc-settings-90"></i> Settings
        </a>
        <div class="divider"></div>
        <a class="dropdown-item" href="#">
            <i class="nc-icon nc-lock-circle-open"></i> Lock Screen
        </a>
        <a href="#" class="dropdown-item text-danger">
            <i class="nc-icon nc-button-power"></i> Log out
        </a>
    </div>
</li>
@endpush

@push('demo')
<div class="fixed-plugin">
    <div class="dropdown show-dropdown">
        <a href="#" data-toggle="dropdown">
            <i class="fa fa-cog fa-2x"> </i>
        </a>
        <ul class="dropdown-menu">
            <li class="header-title"> Sidebar Style</li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Background Image</p>
                    <label class="switch-image">
                        <input type="checkbox" data-toggle="switch" checked="" data-on-color="info" data-off-color="info">
                        <span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Sidebar Mini</p>
                    <label class="switch-mini">
                        <input type="checkbox" data-toggle="switch" data-on-color="info" data-off-color="info">
                        <span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger">
                    <p>Fixed Navbar</p>
                    <label class="switch-nav">
                        <input type="checkbox" data-toggle="switch" data-on-color="info" data-off-color="info">
                        <span class="toggle"></span>
                    </label>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="adjustments-line">
                <a href="javascript:void(0)" class="switch-trigger background-color">
                    <p>Filters</p>
                    <div class="pull-right">
                        <span class="badge filter badge-black" data-color="black"></span>
                        <span class="badge filter badge-azure" data-color="azure"></span>
                        <span class="badge filter badge-green" data-color="green"></span>
                        <span class="badge filter badge-orange active" data-color="orange"></span>
                        <span class="badge filter badge-red" data-color="red"></span>
                        <span class="badge filter badge-purple" data-color="purple"></span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            </li>
            <li class="header-title">Sidebar Images</li>
            <li class="active">
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('vendor/lbd/img/sidebar-1.jpg') }}" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('vendor/lbd/img/sidebar-3.jpg') }}" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('vendor/lbd/img/sidebar-4.jpg') }}" alt="" />
                </a>
            </li>
            <li>
                <a class="img-holder switch-trigger" href="javascript:void(0)">
                    <img src="{{ asset('vendor/lbd/img/sidebar-5.jpg') }}" alt="" />
                </a>
            </li>
            {{--<li class="button-container">
                <div>
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard" target="_blank" class="btn btn-info btn-block">Get free demo!</a>
                </div>
            </li>
            <li class="button-container">
                <div>
                    <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank" class="btn btn-warning btn-block">Buy now!</a>
                </div>
            </li>
            <li class="button-container">
                <div>
                    <a href="https://demos.creative-tim.com/light-bootstrap-dashboard-pro/documentation/tutorial-components.html" target="_blank" class="btn btn-danger btn-block">Documention</a>
                </div>
            </li>
            <li class="header-title" id="sharrreTitle">Thank you for sharing!</li>
            <li class="button-container">
                <button id="twitter" class="btn btn-social btn-twitter btn-round twitter-sharrre"><i class="fa fa-twitter"></i> · 256</button>
                <button id="facebook" class="btn btn-social btn-facebook btn-round facebook-sharrre"><i class="fa fa-facebook-square"></i> · 426</button>
            </li>--}}
        </ul>
    </div>
</div>
@endpush

@push('styles')
<!-- CSS Just for demo purpose, don't include it in your project -->
<link href="{{ asset('vendor/lbd/css/demo.css') }}" rel="stylesheet">
@endpush

@push('scripts')
<!-- Light Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('vendor/lbd/js/demo.js') }}"></script>
@endpush

@endif