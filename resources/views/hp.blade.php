<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <script src="/js/jquery-3.3.1.js"></script>
    <script src="/js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="/fonts/stylesheet.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/hp.css') }}" rel="stylesheet">
</head>
<body>
<div id="hp">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">WNB</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">

                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Kdo jsme') }}</a>
                        @endif
                    </li>
                    <li class="nav-item active">
                        @if (Route::has('register'))
                            <a class="active nav-link" href="{{ route('register') }}">{{ __('Co umíme') }}</a>
                        @endif
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Ceník') }}</a>
                        @endif
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Reference') }}</a>
                        @endif
                    </li>
                    <li class="nav-item">
                        @if (Route::has('register'))
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Kontakt') }}</a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Tvoříme<br>weby na úrovni<br><span>web nás baví</span></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="#" class="btn-napiste-nam">Napište nám</a>
            </div>
        </div>
    </div>

    <div class="top-block">
        <div class="container">
            <div class="arrow-down-wrap">
                <div class="arrow-down-arrow"></div>
            </div>
            <div class="naladeni-wrap">
                <div class="bg-dark nase-hodnoty float-left">
                    <div class="line-01">
                        <span>Naše hodnoty</span><br>v kostce
                        <ul>
                            <li>Pohodový přístup</li>
                            <li>Spolehlivost</li>
                            <li>Flexibilita</li>
                        </ul>
                    </div>
                </div>

                <div class="naladeni-content">
                    <h2>Nějaký<br>krátký naladění?</h2>
                    <ul>
                        <li><h3>Zkušenosti<span class="line"></span></h3><span>máme 15 let praxe<br>a vytvořili jsme<br>přes 100 projektů</span></li>
                        <li><h3>Osobní&nbsp;přístup<span class="line"></span></h3><span>postaráme se o vás,<br>protože na našich klientech<br>nám záleží</span></li>
                        <li><h3>Profesionalita<span class="line"></span></h3><span>nešijeme horkou jehlou,<br>naše weby mluví<br>samy za sebe</span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">...další obsah potřebuje úpravu...</div>
    <br>
    <br>
    <br>
    <br>

    <div class="container">Nabídka<br>webových balíčků</div>

    <div class="container">
        <div class="row">
            <div class="col-4">Stadnard</div>
            <div class="col-4">Profi</div>
            <div class="col-4">Na míru</div>
        </div>
    </div>

    <div class="container">
        přejít k nabídce
    </div>

    <div class="container">
        Ochutnávka z naší tvorby
    </div>

    <div class="container">
        obrázky
    </div>

    <div class="container">
        Co o nás říkají klienti
    </div>

    <div class="container">
        <div class="row">
            <div class="col-6">karel mařík</div>
            <div class="col-6">karel mařík</div>
        </div>
    </div>

    <div class="container">
        Chcete také úspěšný web?<br>Napište nám
    </div>

    <div class="container">
        FORMULÁŘ
    </div>

    <div class="container">
        Patička
    </div>
</div>
</body>
</html>
