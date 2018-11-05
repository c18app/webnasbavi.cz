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
                    <div class="col-12 col-lg-6">jsme nový tým,<br>s mnohaletými zkušenostmi</div>
                    <div class="col-12 col-lg-6">
                        <div class="row">
                            <div class="col-4">{{ date('Y') - 2002 }}</div>
                            <div class="col-4">105</div>
                            <div class="col-4">98</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <h2>náš tým</h2><span class="wave"></span>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-4"><img src="/img/pages/o-nas/michalnosavcov.png" style="max-width: 100%"></div>
            <div class="col-12 col-lg-4"><img src="/img/pages/o-nas/jitkahermankova.png" style="max-width: 100%"></div>
            <div class="col-12 col-lg-4"><img src="/img/pages/o-nas/ondrejkormos.png" style="max-width: 100%"></div>
        </div>
    </div>
@endsection