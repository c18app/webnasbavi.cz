<nav class="navbar">
    <div class="container">
        {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"--}}
        {{--aria-controls="navbarSupportedContent" aria-expanded="false"--}}
        {{--aria-label="{{ __('Toggle navigation') }}">--}}
        {{--<span class="navbar-toggler-icon"></span>--}}
        {{--</button>--}}

        <div id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    @if (Route::has('o-nas'))
                        <a class="{{ Route::is('o-nas') ? 'active ' : '' }}nav-link"
                           href="{{ route('o-nas') }}">{{ __('O nás') }}</a>
                    @endif
                </li>
                <li class="nav-item active">
                    @if (Route::has('co-umime'))
                        <a class="{{ Route::is('co-umime') ? 'active ' : '' }}nav-link"
                           href="{{ route('co-umime') }}">{{ __('Co umíme') }}</a>
                    @endif
                </li>
                <li class="nav-item">
                    @if (Route::has('cenik'))
                        <a class="{{ Route::is('cenik') ? 'active ' : '' }}nav-link"
                           href="{{ route('cenik') }}">{{ __('Ceník') }}</a>
                    @endif
                </li>
                <li class="nav-item">
                    @if (Route::has('reference'))
                        <a class="{{ Route::is('reference') ? 'active ' : '' }}nav-link"
                           href="{{ route('reference') }}">{{ __('Reference') }}</a>
                    @endif
                </li>
                <li class="nav-item">
                    @if (Route::has('kontakt'))
                        <a class="{{ Route::is('kontakt') ? 'active ' : '' }}nav-link"
                           href="{{ route('kontakt') }}">{{ __('Kontakt') }}</a>
                    @endif
                </li>
            </ul>
        </div>

        <a class="navbar-brand" href="{{ url('/') }}"><img src="/img/logo.png"></a>
    </div>
</nav>