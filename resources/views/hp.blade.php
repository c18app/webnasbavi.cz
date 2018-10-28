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
    <link href="/fontawesome-free-5.4.2-web/css/all.min.css" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<div id="hp">
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}"><img src="/img/logo.png"></a>
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
                <h1>tvoříme projekty na úrovni<br><span>web nás baví</span></h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="javascript:void(0);" class="btn-napiste-nam" onclick="$([document.documentElement, document.body]).animate({scrollTop: $('#napiste-nam').offset().top}, 1000);">Napište nám</a>
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
                    <h2 class="light">Na čem nám záleží</h2>
                    <ul>
                        <li><h3>Zkušenosti<span class="line"></span></h3><span>máme 15 let praxe<br>a vytvořili jsme<br>desítky projektů</span>
                        </li>
                        <li><h3>Osobní&nbsp;přístup<span class="line"></span></h3><span>postaráme se o vás,<br>protože na našich klientech<br>nám záleží</span>
                        </li>
                        <li><h3>Profesionalita<span class="line"></span></h3><span>pracujeme důsledně,<br>kreativně a efektivně</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div class="container text-center">
        <h2>Co nabízíme</h2><span class="wave"></span>
    </div>

    <div class="container balicky">
        <div class="row">
            <div class="col-4">
                <div class="box box-01">
                    <div class="line-01">Web</div>
                    <div class="line-02">STANDARD</div>
                    <div class="icon-wrap">
                        {{--<div class="icon"></div>--}}
                        <span class="fas fa-paper-plane icon"></span>
                    </div>
                    <div class="line-03">Grafický design<br>Jednoduchá administrace<br>Kontaktní formulář</div>
                </div>
            </div>
            <div class="col-4 text-center">
                <div class="box box-02">
                    <div class="line-01">Web</div>
                    <div class="line-02">PREMIUM</div>
                    <div class="icon-wrap">
                        {{--<div class="icon"></div>--}}
                        <span class="fas fa-plane icon"></span>
                    </div>
                    <div class="line-03">Grafický
                        design<br><span>Pokročilá administrace</span><br><span>Další formulář</span></div>
                </div>
            </div>
            <div class="col-4 text-right">
                <div class="box box-03">
                    <div class="line-01">Web</div>
                    <div class="line-02">NA MÍRU</div>
                    <div class="icon-wrap">
                        {{--<div class="icon"></div>--}}
                        <span class="fas fa-rocket icon"></span>
                    </div>
                    <div class="line-03">Grafický
                        design<br><span>Administrace na míru</span><br><span>Zákaznické úpravy</span></div>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <a href="#" class="offer">více</a>
    </div>

    <div class="container text-center">
        <h2>Naše projekty</h2><span class="wave"></span>
    </div>

    <div class="ochutnavka-wrap">
        <div class="container">
            <div class="row">
                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="/img/hp/001.png" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/img/hp/002.png" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/img/hp/003.png" alt="Third slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/img/hp/004.png" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{--
    <div class="reference-wrap">
        <div class="container text-center">
            <div>
                <h2>Reference</h2><span class="wave"></span>
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
    --}}

    <div class="form-wrap" id="napiste-nam">
        <div class="container text-center">
            <div>
                <h2>Chcete také úspěšný web?<br>Napište nám</h2><span class="wave"></span>
            </div>
            <form class="contact-form">
                <label for="f-name">Jméno</label>
                <input type="text" name="name" id="f-name" class="text-input">
                <label for="f-contact">E-mail, nebo telefon</label>
                <input type="text" name="contact" id="f-contact" class="text-input">
                <label for="f-message">Zpráva</label>
                <textarea name="message" id="f-message"></textarea>
                <div class="text-left">
                    <input type="checkbox" name="confirm" id="f-confirm" class="checkbox-input">
                    <label for="f-confirm" class="label-checkbox">Odesláním formuláře souhlasíte se zpracováním osobních
                        údajů <a href="#">ochrana os. údajů</a></label>
                </div>
                <button type="submit" name="odeslat_zpravu" class="btn-odeslat-zpravu">Odeslat</button>
            </form>
        </div>
    </div>

    <div class="footer-top-block"></div>

    <div class="footer">
        <div class="container">
            <div class="content-01">
                <div class="line-01">Web nás baví!</div>
                <div class="line-02">již 15 let vytváříme weby na míru</div>
            </div>
            <div class="content-02">
                <ul>
                    <li><a href="#"><span class="fb"></span></a></li>
                    <li><a href="#"><span class="in"></span></a></li>
                </ul>
            </div>
            <div class="content-03">
                <div class="line-01">Rádi se setkáme</div>
                <div class="line-02">pište, volejte, budeme se těšit!</div>
                <div class="line-03">773&nbsp;252&nbsp;999</div>
                <div class="line-04">email: <a href="mailto:info@wnb.cz">info@wnb.cz</a></div>
            </div>
        </div>
    </div>

    <div class="bottom">
        <div class="container text-center">
            <span>Made with <span class="heart"></span> by Web nás baví | <a href="#">Ochrana os. údajů</a></span>
        </div>
    </div>
</body>
</html>
