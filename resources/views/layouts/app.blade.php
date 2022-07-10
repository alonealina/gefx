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
        <link href="{{ asset('css/v2/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/v2/slick.css') }}" rel="stylesheet">
    </head>
    @php
    $now_route = \Route::currentRouteName();
    @endphp

    @if(!$isMobile)
    <div id="registration_pc">
        <body>
            <header class="header_pc">
                <a class="logo_a" href="{{ route('v2_index') }}">
                    <img src="{{ asset('img/logo.png') }}" class="header_logo" alt="">
                </a>
                <div class="header_menu">
                    <a href="{{ route('v2_index') }}" class="header_a">
                        <p class="menu_name">TOP</p>
                    </a>
                    <a href="{{ route('v2_index') }}" class="header_a">
                        <p class="menu_name" style="width: 175px;">GOOD ENOUGH FX 案内</p>
                    </a>
                    <a href="{{ route('v2_faq') }}" class="header_a">
                        <p class="menu_name" style="width: 105px;">よくあるご質問</p>
                    </a>
                    <a href="{{ route('v2_new_acount') }}" class="header_a header_btn1">
                        <p class="menu_name menu_btn_name1">新規口座開設</p>
                    </a>
                    <a href="{{ route('v2_demo_acount') }}" class="header_a header_btn2">
                        <p class="menu_name menu_btn_name1">デモ口座開設</p>
                    </a>
                    <a href="{{ route('v2_login') }}" class="header_a header_btn1">
                        <p class="menu_name menu_btn_name2">Login</p>
                    </a>
                    <a href="{{ route('v2_index') }}" class="header_a header_btn3">
                        <p class="menu_name" style="width: 30px;">JP</p>
                    </a>

                </div>
            </header>

            @yield('content')
            <div class="footer_border"></div>
            <footer>
                <div class="footer_menu">
                    <a href="{{ route('v2_index') }}" class="footer_a">
                        <p class="">金融サービスガイド(FSG)</p>
                    </a>
                    <span class="footer_separate">｜</span>
                    <a href="{{ route('v2_index') }}" class="footer_a">
                        <p class="">金融商品開示文書(PDS)</p>
                    </a>
                    <span class="footer_separate">｜</span>
                    <a href="{{ route('v2_index') }}" class="footer_a">
                        <p class="">取引規約</p>
                    </a>
                    <span class="footer_separate">｜</span>
                    <a href="{{ route('v2_index') }}" class="footer_a">
                        <p class="">ウェブサイト個人情報保護方針</p>
                    </a>
                    <span class="footer_separate">｜</span>
                    <a href="{{ route('v2_index') }}" class="footer_a">
                        <p class="">ウェブサイト利用規約</p>
                    </a>
                    <span class="footer_separate">｜</span>
                    <a href="{{ route('v2_company') }}" class="footer_a">
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
            <header class="header_sp">
                <a href="{{ route('v2_index') }}" class="header_a header_btn3_sp">
                    <p class="">JP　<span style="font-size:10px;">▼</span></p>
                </a>
                <a class="logo_a_sp" href="{{ route('v2_index') }}">
                    <img src="{{ asset('img/logo_white.png') }}" class="logo_img_sp" alt="">
                </a>
                <div class="hamburger-menu">
                    <input type="checkbox" id="menu-btn-check">
                    <label for="menu-btn-check" class="menu-btn"><span></span></label>
                    <div class="menu-content">
                        <a href="{{ route('v2_new_acount') }}" class="header_a_sp header_btn1_sp">
                            <p class="menu_btn_name_sp">新規口座開設</p>
                        </a>
                        <a href="{{ route('v2_demo_acount') }}" class="header_a_sp header_btn2_sp">
                            <p class="menu_btn_name_sp">デモ口座開設</p>
                        </a>
                        <a href="{{ route('v2_login') }}" class="header_a_sp header_btn1_sp">
                            <p class="menu_btn_name_sp">Login</p>
                        </a>
                        <ul>
                            <li>
                                <a href ="{{ route('v2_index') }}" class="menu_content_header_sp">TOP</a>
                            </li>
                            <li>
                                <a href ="{{ route('v2_index') }}" class="menu_content_header_sp">GOOD ENOUGH FX 案内</a>
                            </li>
                            <li>
                                <a href ="{{ route('v2_faq') }}" class="menu_content_header_sp">よくあるご質問</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </header>
            @yield('content_sp')

            <footer class="footer_sp">

                <div class="footer_menu_sp">
                    <ul>
                        <li>
                            <a href ="{{ route('v2_index') }}" class="menu_content_sp">金融サービスガイド(FSG)</a>
                        </li>
                        <li>
                            <a href ="{{ route('v2_index') }}" class="menu_content_sp">金融商品開示文書(PDS)</a>
                        </li>
                        <li>
                            <a href ="{{ route('v2_index') }}" class="menu_content_sp">取引規約</a>
                        </li>
                        <li>
                            <a href ="{{ route('v2_index') }}" class="menu_content_sp">ウェブサイト個人情報保護方針</a>
                        </li>
                        <li>
                            <a href ="{{ route('v2_index') }}" class="menu_content_sp">ウェブサイト利用規約</a>
                        </li>
                        <li>
                            <a href ="{{ route('v2_company') }}" class="menu_content_sp">会社概要</a>
                        </li>
                    </ul>
                    <div class="footer_text_sp">
                        リスクに関する警告: 外国為替金取引やデリバティブ取引は高リスクを伴います。
                        損失に耐えうる範囲の資金でお取引されることをお勧め致します。
                        デリバティブ取引は全ての投資家に適しているわけではございません。
                        取引に伴うリスクを充分に理解された上で、必要に応じて専門家にご相談下さい。
                        金融サービスガイド(FSG)および金融商品開示文書(PDS)は、
                        当GOOD ENOUGH FX Ltdのウェブサイトよりご確認ください。<br>
                        GOOD ENOUGH FX Ltdでデリバティブ取引を始められる前に、
                        金融サービスガイド(FSG)および金融商品開示文書(PDS)の内容を慎重に考慮してください。<br><br>
                        制限地域:<br>
                        米国、オーストラリア、カナダ、ニュージーランド、朝鮮民主主義人民共和国、
                        イラン、バヌアツ共和国のお客様もしくはFATFまたは同様の国際機関がAML-CFT対策が
                        万全でないとしている特定管轄区地域在住のお客様を対象としておりませんので、ご注意ください。<br>
                        当ウェブサイト上の情報は、FXおよび/またはCFD商品取引が法律や規制によって制限または禁止されている国在住のお客様を対象としておりません。
                    </div>
                    <img src="{{ asset('img/logo.png') }}" class="footer_logo" alt="">
                    <div class="copyright_sp">Copyright © 2014-2022 GOOD ENOUGH. All rights reserved.</div>
                </div>
            </footer>
        </body>
    </div>
    @endif

    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="{{ asset('js/v2/app.js') }}"></script>
    <script src="{{ asset('js/v2/slick.js') }}"></script>

</html>