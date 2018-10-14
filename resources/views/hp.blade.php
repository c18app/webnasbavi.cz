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
                    <h2 class="light">Nějaký<br>krátký naladění?</h2>
                    <ul>
                        <li><h3>Zkušenosti<span class="line"></span></h3><span>máme 15 let praxe<br>a vytvořili jsme<br>přes 100 projektů</span>
                        </li>
                        <li><h3>Osobní&nbsp;přístup<span class="line"></span></h3><span>postaráme se o vás,<br>protože na našich klientech<br>nám záleží</span>
                        </li>
                        <li><h3>Profesionalita<span class="line"></span></h3><span>nešijeme horkou jehlou,<br>naše weby mluví<br>samy za sebe</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="container text-center">
        <h2>Nabídka<br>webových balíčků</h2><span class="wave"></span>
    </div>

    <div class="container balicky">
        <div class="row">
            <div class="col-4">
                <div class="box box-01">
                    <div class="line-01">Web</div>
                    <div class="line-02">STADNARD</div>
                    <div class="icon-wrap">
                        <div class="icon"></div>
                    </div>
                    <div class="line-03 text-left">Grafický design<br>Popisek<br>Něco vč. SEO a PPC</div>
                </div>
            </div>
            <div class="col-4 text-center">
                <div class="box box-02">
                    <div class="line-01">Web</div>
                    <div class="line-02">PROFI</div>
                    <div class="icon-wrap">
                        <div class="icon"></div>
                    </div>
                    <div class="line-03 text-left">Grafický design<br>Popisek<br><span>Něco vč. SEO a PPC</span></div>
                </div>
            </div>
            <div class="col-4 text-right">
                <div class="box box-03">
                    <div class="line-01">Web</div>
                    <div class="line-02">NA MÍRU</div>
                    <div class="icon-wrap">
                        <div class="icon"></div>
                    </div>
                    <div class="line-03 text-left">Grafický design<br>Popisek<br><span>Něco vč. SEO a PPC</span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <a href="#" class="offer">Přejít k nabídce</a>
    </div>

    <div class="container text-center">
        <h2>Ochutnávka z naší tvorby</h2><span class="wave"></span>
    </div>

    <div class="ochutnavka-wrap">
    </div>

    <div class="reference-wrap">
        <div class="container text-center">
            <div>
                <h2>Co o nás říkají klienti</h2><span class="wave"></span>
            </div>
            <ul class="reference">
                <li>
                    <span class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</span>
                    <span class="name text-right">Karel Mařík</span>
                    <span class="company text-right">majitel společnosti.</span>
                </li>
                <li>
                    <span class="content">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</span>
                    <span class="name">Karel Mařík</span>
                    <span class="company">majitel společnosti.</span>
                </li>
            </ul>
        </div>
    </div>

    <div class="form-wrap">
        <div class="container text-center">
            <div>
                <h2>Chcete také úspěšný web?<br>Napište nám</h2><span class="wave"></span>
            </div>
            <form class="contact-form">
                <label for="f-name">Jméno</label>
                <input type="text" name="name" id="f-name">
                <label for="f-contact">Váš e-mail, nebo telefon</label>
                <input type="text" name="contact" id="f-contact">
                <label for="f-message">Zpráva</label>
                <textarea name="message" id="f-message"></textarea>
                <button type="submit" name="odeslat_zpravu" class="btn-odeslat-zpravu">Odeslat zprávu</button>
            </form>
        </div>
    </div>

    <div class="footer-top-block">

    </div>
    <div class="footer">

    </div>
</div>
</body>
</html>
