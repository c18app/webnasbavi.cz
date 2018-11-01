<nav class="navbar">
    <div class="container">
        <div class="navbar-wrap">
            <div class="container">
                <div class="navbar-button text-center">
                    <span class="fas fa-bars"></span>
                </div>

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
        </div>

        <a class="navbar-brand" href="{{ url('/') }}"><img src="/img/logo_dark.png"></a>
    </div>
</nav>