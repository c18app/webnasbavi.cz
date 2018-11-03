@extends('layouts.app', ['page_id' => 'hp'])

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="pre-header">tvoříme&nbsp;projekty na&nbsp;úrovni</div>
                <h1>web nás baví</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="javascript:void(0);" class="btn-napiste-nam">Napište nám</a>
            </div>
        </div>
    </div>

    <div class="top-block">
        <div class="top-block-bottom">
            <div class="container">
                <div class="arrow-down-wrap">
                    <div class="arrow-down-arrow"></div>
                </div>
                <div class="naladeni-wrap">
                    <div class="bg-dark nase-hodnoty">
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
                        <h2 class="light">Na&nbsp;čem nám&nbsp;záleží</h2>
                        <ul class="d-block d-lg-flex justify-content-between">
                            <li><h3>Zkušenosti</h3><span class="line"></span><span class="naladeni-text">máme 15 let praxe<br>a vytvořili jsme<br>desítky projektů</span>
                            </li>
                            <li><h3>Osobní&nbsp;přístup</h3><span class="line"></span><span class="naladeni-text">postaráme se o vás,<br>protože na našich klientech<br>nám záleží</span>
                            </li>
                            <li><h3>Profesionalita</h3><span class="line"></span><span class="naladeni-text">pracujeme důsledně,<br>kreativně a efektivně</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container text-center">
        <h2>Co nabízíme</h2><span class="wave"></span>
    </div>

    <div class="container balicky">
        <div class="row">
            <div class="col-12 col-lg-4">
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
            <div class="col-12 col-lg-4">
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
            <div class="col-12 col-lg-4">
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
                <div id="jssor_1"
                     style="position:relative;top:0px;left:0px;width:1140px;height:704px;overflow:hidden;">
                    <!-- Loading Screen -->
                    <div data-u="loading" class="jssorl-009-spin"
                         style="position:absolute;top:0px;left:0px;width:100%;height:100%;text-align:center;background-color:rgba(0,0,0,0.7);">
                        <img style="margin-top:-19px;position:relative;top:50%;width:38px;height:38px;"
                             src="svg/spin.svg"/>
                    </div>
                    <div data-u="slides"
                         style="position:absolute;top:0px;left:0px;width:1140px;height:704px;overflow:hidden;">
                        <div>
                            <img data-u="image" src="/img/reference/001.png"/>
                        </div>
                        <div>
                            <img data-u="image" src="/img/reference/002.png"/>
                        </div>
                        <div>
                            <img data-u="image" src="/img/reference/003.png"/>
                        </div>
                        <div>
                            <img data-u="image" src="/img/reference/004.png"/>
                        </div>
                    </div>
                    <!-- Bullet Navigator -->
                    <div data-u="navigator" class="jssorb053" style="position:absolute;bottom:12px;right:12px;"
                         data-autocenter="1" data-scale="0.5" data-scale-bottom="0.75">
                        <div data-u="prototype" class="i" style="width:16px;height:16px;">
                            <svg viewBox="0 0 16000 16000"
                                 style="position:absolute;top:0;left:0;width:100%;height:100%;">
                                <circle class="b" cx="8000" cy="8000" r="5800"></circle>
                            </svg>
                        </div>
                    </div>
                    <!-- Arrow Navigator -->
                    <div data-u="arrowleft" class="jssora093" style="width:50px;height:50px;top:0px;left:30px;"
                         data-autocenter="2" data-scale="0.75" data-scale-left="0.75">
                        <svg viewBox="0 0 16000 16000"
                             style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <polyline class="a" points="11040,1920 4960,8000 11040,14080 "></polyline>
                        </svg>
                    </div>
                    <div data-u="arrowright" class="jssora093" style="width:50px;height:50px;top:0px;right:30px;"
                         data-autocenter="2" data-scale="0.75" data-scale-right="0.75">
                        <svg viewBox="0 0 16000 16000"
                             style="position:absolute;top:0;left:0;width:100%;height:100%;">
                            <polyline class="a" points="4960,1920 11040,8000 4960,14080 "></polyline>
                        </svg>
                    </div>
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
                    <label for="f-confirm" class="label-checkbox">Odesláním formuláře souhlasíte se zpracováním
                        osobních
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
                <div class="line-02">již&nbsp;15&nbsp;let vytváříme&nbsp;weby na&nbsp;míru</div>
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
            <span>Made&nbsp;with&nbsp;<span class="heart"></span> by&nbsp;Web&nbsp;nás&nbsp;baví<span class="hide sm-show">&nbsp;|&nbsp;</span><div class="sm-hide rozdelovnik"></div><a href="#">Ochrana os. údajů</a></span>
        </div>
    </div>
@endsection