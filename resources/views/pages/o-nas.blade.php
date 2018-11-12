@extends('layouts.app', ['page_id' => 'page', 'class_page'=>'o-nas'])

@section('content')
    <div class="container header">
        <div class="row">
            <div class="col-12">
                <h1>o nás</h1>
                <span class="wave"></span>
                <div class="perex">zvládli jsme vytvořít desítky webů za&nbsp;posledních {{ date('Y') - 2002 }}
                    &nbsp;let
                </div>
            </div>
        </div>
    </div>

    <div class="top-block">
        <div class="top-block-bottom">
            <div class="container">
                <div class="row top-block-content">
                    <div class="col-12 col-lg-6 popis">jsme <strong>nový tým</strong>,<br>s mnohaletými zkušenostmi</div>
                    <div class="col-12 col-lg-6">
                        <div class="row">
                            <div class="col-4">
                                <span class="cislo">{{ date('Y') - 2002 }}</span>
                                <span class="text">let&nbsp;praxe</span>
                                <span class="wave"></span>
                            </div>
                            <div class="col-4">
                                <span class="cislo">105</span>
                                <span class="text">projektů</span>
                                <span class="wave"></span>
                            </div>
                            <div class="col-4">
                                <span class="cislo">98</span>
                                <span class="text">klientů</span>
                                <span class="wave"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <h2>náš tým</h2><span class="wave"></span>
    </div>

    <div class="container nas-tym">
        <div class="row">
            <div class="col-12 col-lg-4 clen-tymu">
                <img src="/img/pages/o-nas/michalnosavcov.png">
                <span class="jmeno">Michal</span>
                <span class="funkce">vývojář &amp; zakladatel</span>
                <span class="popis">Jedničky a nuly skládá už od čtrnácti. Od té doby vytváří weby nejen pro kominíky, ale několik let se podílel i na vývoji portálu Economia.</span>
                <div></div>
                <span class="motto">musíš jít po cestě jako muž, kterému hoří hlava a hledá vodu</span>
            </div>
            <div class="col-12 col-lg-4 clen-tymu">
                <img src="/img/pages/o-nas/jitkahermankova.png">
                <span class="jmeno">Jitka</span>
                <span class="funkce">copywriterka &amp; marketing</span>
                <span class="popis">Dává projektům řád a vdechuje jim život. Zároveň se stará o naše klienty a hledá kreativní řešení v každé situaci.</span>
                <div></div>
                <span class="motto">Lorem Ipsum je demonstrativní výplňový text používaný v tiskařském a knihařském průmyslu</span>
            </div>
            <div class="col-12 col-lg-4 clen-tymu">
                <img src="/img/pages/o-nas/ondrejkormos.png">
                <span class="jmeno">Ondra</span>
                <span class="funkce">UX &amp; webdesignér</span>
                <span class="popis">Webovému designu se věnuje přes deset let. V jeho práci se odráží čistota, smysl pro detail a preciznost.</span>
                <div></div>
                <span class="motto">Lorem Ipsum je demonstrativní výplňový text používaný v tiskařském a knihařském průmyslu</span>
            </div>
        </div>
    </div>
@endsection