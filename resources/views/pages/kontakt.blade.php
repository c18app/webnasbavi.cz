@extends('layouts.app', ['page_id' => 'page', 'class_page'=>'kontakt'])

@section('content')
    <div class="container header">
        <div class="row">
            <div class="col-12">
                <h1>kontakt</h1>
                <span class="wave"></span>
                <div class="perex">
                    máte zájem o nový web?
                    <br>
                    rádi se o vás postaráme
                </div>
            </div>
        </div>
    </div>

    <div class="top-block">
        <div class="top-block-bottom">
            <div class="container">
                <div class="row top-block-content">
                    <div class="col-12 popis">
                        O každý projekt pečujeme s láskou<br>
                        Jsme originální a spoléháme<br>
                        na vlastní řešení
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <h2>máte zájem?</h2><span class="wave"></span>

        <div class="row">
            <div class="col-12 mate-zajem">
                Pište, nebo volejte. Rádi se sejdeme u kávy. Budeme se těšit,<br>že společně vytvoříme něco úžasného.
            </div>
        </div>
    </div>

    <div class="container kontakty-info">
        <div class="row">
            <div class="col-12 col-lg-4 info-item">
                <h3>provozovatel</h3><span class="wave"></span>
                <div class="obsah">
                    Michal Nosavcov<br>
                    Nad Babím dolem 401<br>
                    25&nbsp;64&nbsp;Měšice<br>
                    <span class="ic">IČ: 64845915</span>
                </div>
            </div>
            <div class="col-12 col-lg-4 info-item">
                <h3>kontakty</h3><span class="wave"></span>
                <div class="obsah">
                    Objednávky a dotazy<br>
                    <a href="mailto:info@wnb.cz" class="email">info@wnb.cz</a><br>
                    <span class="phone"><span class="predcisli">+420</span>&nbsp;773&nbsp;252&nbsp;999</span>
                </div>
            </div>
            <div class="col-12 col-lg-4 info-item">
                <h3>jsme na sítích</h3><span class="wave"></span>
                <div class="jsme-na-sitich">
                    <a href="{{ config('wnb.fb_link') }}" target="_blank">facebook:<span class="fb"></span></a>
                    <a href="{{ config('wnb.in_link') }}" target="_blank">instagram:<span class="in"></span></a>
                </div>
            </div>
        </div>
    </div>
@endsection