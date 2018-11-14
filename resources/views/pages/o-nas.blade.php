@extends('layouts.app', ['page_id' => 'page', 'class_page'=>'o-nas'])

@section('content')
    <div class="container header">
        <div class="row">
            <div class="col-12">
                <h1>o nás</h1>
                <span class="wave"></span>
                <div class="perex">zvládli jsme vytvořit desítky webů za&nbsp;posledních {{ date('Y') - 2002 }}
                    &nbsp;let<br>
                    <div class="new-line">se smyslem pro detail se zaměřujeme na individualitu našich klientů a tvoříme
                        kvalitní weby, které mluví samy za&nbsp;sebe
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="top-block">
        <div class="top-block-bottom">
            <div class="container">
                <div class="row top-block-content">
                    <div class="col-12 col-lg-6 popis">jsme <strong>nový tým</strong>,<br>s mnohaletými zkušenostmi
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="row">
                            <div class="col-4 cislo-01">
                                <span class="cislo">{{ date('Y') - 2002 }}</span>
                                <span class="text">let&nbsp;praxe</span>
                                <span class="wave"></span>
                            </div>
                            <div class="col-4 cislo-02">
                                <span class="cislo">{{ config('wnb.pocet_projektu') }}</span>
                                <span class="text">projektů</span>
                                <span class="wave"></span>
                            </div>
                            <div class="col-4 cislo-03">
                                <span class="cislo">{{ config('wnb.pocet_klientu') }}</span>
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
        <h2>jak to začalo</h2><span class="wave"></span>

        <div class="row">
            <div class="col-12 col-xl-10 offset-xl-1 jak-to-zacalo">
                Michala weby baví už dvacet let a&nbsp;po letech zkušeností se rozhodl pro svůj vlastní projekt, do kterého
                přibral grafika Ondru a&nbsp;oslovil Jitku pro marketing.<br>Slovo dalo slovo a&nbsp;v&nbsp;poměrně krátké době vznikl
                nový funkční tým<br>a&nbsp;projekt "web&nbsp;nás&nbsp;baví" dostal reálné&nbsp;základy.
            </div>
        </div>
    </div>

    <div class="container nas-tym">
        <div class="row">
            <div class="col-12 col-lg-4 clen-tymu">
                <div class="img-wrap">
                    <img src="/img/pages/o-nas/michalnosavcov.png">
                </div>
                <span class="jmeno">Michal</span>
                <span class="funkce">vývojář &amp; zakladatel</span>
                <span class="popis">Jedničky a nuly skládá už od čtrnácti. Od té doby vytváří weby nejen pro kominíky, ale několik let se podílel i na vývoji portálu Economia.</span>
                <div></div>
                <span class="motto">Musíš jít po cestě jako muž, kterému hoří hlava a hledá vodu.</span>
            </div>
            <div class="col-12 col-lg-4 clen-tymu">
                <div class="img-wrap">
                    <img src="/img/pages/o-nas/jitkahermankova.png">
                </div>
                <span class="jmeno">Jitka</span>
                <span class="funkce">marketing & copywrighter</span>
                <span class="popis">Dává projektům řád a vdechuje jim život. Zároveň se stará o naše klienty a hledá kreativní řešení v&nbsp;každé situaci.</span>
                <div></div>
                <span class="motto">Řemeslo se naučí každý<br>umění nikdo.</span>
            </div>
            <div class="col-12 col-lg-4 clen-tymu">
                <div class="img-wrap">
                    <img src="/img/pages/o-nas/ondrejkormos.png?v=2">
                </div>
                <span class="jmeno">Ondra</span>
                <span class="funkce">UX &amp; webdesigner</span>
                <span class="popis">Webovému designu se věnuje přes deset let. V jeho práci se odráží čistota, smysl pro detail a&nbsp;preciznost.</span>
                <div></div>
                <span class="motto">Nesnažte se být dokonalí. Buďte úplní.</span>
            </div>
        </div>
    </div>
@endsection