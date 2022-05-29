<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>GOOD ENOUGH FX</title>
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=yes" />

        <link rel="icon" type="image/jpg" href="{{ asset('img/favicon.jpg') }}">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Devanagari:wght@600&amp;display=swap">
        <link href="https://fonts.googleapis.com/css2?family=Devanagari:wght@400;600&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    </head>
    @php
    $now_route = \Route::currentRouteName();
    @endphp

    @if(!$isMobile)
    <div id="registration_pc">
        <body>
            <header class="header_pc">
                <a class="logo_a" href="/">
                    <img src="{{ asset('img/logo.png') }}" class="header_logo" alt="">
                </a>
                <div class="header_menu_user">
                    <a href="{{ route('faq') }}" class="header_a">
                        <p class="menu_name" style="width: 105px;">よくあるご質問</p>
                    </a>
                    <a href="{{ route('login') }}" class="header_a header_btn1">
                        <p class="menu_name" style="width: 90px;">Logout</p>
                    </a>
                    <a href="/" class="header_a header_btn3">
                        <p class="menu_name" style="width: 30px;">JP</p>
                    </a>
                </div>
                <div class="user_div">
                    <img src="{{ asset('img/human.png') }}" class="" alt="">
                    <span class="user_span user_name">test test</span>
                    <span class="user_span user_tab">▼</span>
                </div>
            </header>
            <div class="user_detail" hidden>
                口座番号
                <div class="user_detail_content">2131905483</div>
                口座種類
                <div class="user_detail_content">USD</div>
                レバレッジ
                <div class="user_detail_content">0</div>
                メールアドレス
                <div class="user_detail_content">example@gmail.com</div>
                開設日
                <div class="user_detail_content">2021-09-28 13:09:30</div>
            </div>

            <div class="user_content_div header_margin">
                <div class="user_content_flex">
                    <div class="user_sidebar">
                        <a href="{{ route('summary') }}" class="user_a @if (strpos($now_route,'summary') !== false) current @endif">口座サマリー</a>
                        <a href="{{ route('history') }}" class="user_a @if (strpos($now_route,'history') !== false) current @endif">履歴</a>
                        <a href="{{ route('deposit') }}" class="user_a @if (strpos($now_route,'deposit') !== false) current @endif">入出金</a>
                        <a href="{{ route('transfer') }}" class="user_a @if (strpos($now_route,'transfer') !== false) current @endif">資金移動</a>
                        <a href="{{ route('add_acount') }}" class="user_a @if (strpos($now_route,'add_acount') !== false) current @endif">追加口座</a>
                        <a href="{{ route('summary') }}" class="user_a @if (strpos($now_route,'asdfasdfa') !== false) current @endif">設 定</a>
                    </div>
                    <div class="user_content_main">
                    @yield('content')
                    </div>
                </div>
            </div>

            <div class="footer_border"></div>
            <footer>
                <div class="footer_menu">
                    <a href="/" class="footer_a">
                        <p class="">金融サービスガイド(FSG)</p>
                    </a>
                    <span class="footer_separate">｜</span>
                    <a href="/" class="footer_a">
                        <p class="">金融商品開示文書(PDS)</p>
                    </a>
                    <span class="footer_separate">｜</span>
                    <a href="/" class="footer_a">
                        <p class="">取引規約</p>
                    </a>
                    <span class="footer_separate">｜</span>
                    <a href="/" class="footer_a">
                        <p class="">ウェブサイト個人情報保護方針</p>
                    </a>
                    <span class="footer_separate">｜</span>
                    <a href="/" class="footer_a">
                        <p class="">ウェブサイト利用規約</p>
                    </a>
                    <span class="footer_separate">｜</span>
                    <a href="{{ route('company') }}" class="footer_a">
                        <p class="">会社概要</p>
                    </a>
                </div>
                <div class="footer_explain">
                リスクに関する警告:<br>
                外国為替金取引やデリバティブ取引は高リスクを伴います。損失に耐えうる範囲の資金でお取引されることをお勧め致します。<br>
                デリバティブ取引は全ての投資家に適しているわけではございません。取引に伴うリスクを充分に理解された上で、必要に応じて専門家にご相談下さい。<br>
                金融サービスガイド(FSG)および金融商品開示文書(PDS)は、当GOOD ENOUGH FX Ltdのウェブサイトよりご確認ください。<br>
                GOOD ENOUGH FX Ltdでデリバティブ取引を始められる前に、金融サービスガイド(FSG)および金融商品開示文書(PDS)の内容を慎重に考慮してください。<br><br>
                制限地域:<br>
                米国、オーストラリア、カナダ、ニュージーランド、朝鮮民主主義人民共和国、イラン、バヌアツ共和国のお客様もしくはFATFまたは同様の国際機関がAML-CFT対策が万全でないとしている特定管轄区地域在住のお客様を対象としておりませんので、ご注意ください。<br>
                当ウェブサイト上の情報は、FXおよび/またはCFD商品取引が法律や規制によって制限または禁止されている国在住のお客様を対象としておりません。
                </div>
                <img src="{{ asset('img/logo.png') }}" class="footer_logo" alt="">
                <div class="copyright">Copyright © 2014-2022 GOOD ENOUGH. All rights reserved.</div>
            </footer>

        </body>
    </div>

    @else
    <div id="registration_sp">
    @php
    $now_route = \Route::currentRouteName();
    @endphp
        <body>
        </body>
    </div>
    @endif

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/slick.js') }}"></script>

</html>