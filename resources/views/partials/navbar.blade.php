<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">WebWit</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto" style="margin-right: 0 !important;">
            <li class="nav-item @if (Route::currentRouteName() == 'home') active @endif">
                <a class="nav-link" href="#">@lang('theme.home') <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item @if (Route::currentRouteName() == 'auth.login') active @endif">
                <a class="nav-link" href="{{ route('auth.login') }}">@lang('theme.login')</a>
            </li>
            <li class="nav-item @if (Route::currentRouteName() == 'auth.register') active @endif">
                <a class="nav-link" href="{{ route('auth.register') }}">@lang('theme.register')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">@lang('theme.profile')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">@lang('theme.logout')</a>
            </li>
            {{-- <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li> --}}
            {{-- <li class="nav-item">
                <a class="nav-link disabled" href="#">Disabled</a>
            </li> --}}
        </ul>
        <form class="form-inline my-2 my-lg-0" style="margin-right: auto;">
            <input class="form-control mr-sm-2" type="search" placeholder="@lang('theme.search')" aria-label="Search" style="margin-right: 0 !important; margin-left: 5px;">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">@lang('theme.search')</button>
        </form>
    </div>
</nav>