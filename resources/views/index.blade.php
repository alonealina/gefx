@extends('layouts.app')

@section('content')

<div class="header_margin top_bg1">
    <img src="{{ asset('img/logo_white.png') }}" class="top_logo" alt="">
    <div class="top_text_main">使いやすさとFXの「自由」を手に入れる</div>
    <div class="top_text_sub">多種「暗号通貨」での入出金を可能にした GOOD ENOUGH FXで新しい取引と資産形成を可能に !!</div>
    <div class="top_btn_flex">
        <a href="{{ route('new_acount') }}" class="btn_a" style="margin:0;">
            <div class="btn_purple">新規口座開設はこちら</div>
        </a>
        <a href="{{ route('demo_acount') }}" class="btn_a" style="margin:0;">
            <div class="btn_purple" style="background:none;">デモ口座開設はこちら</div>
        </a>
    </div>
</div>
<img src="{{ asset('img/fx_bar.png') }}" class="fx_bar" alt="">

<div class="top_bg2">
    <div class="top2_title">Service</div>
    <div class="top2_title_sub">
        <img src="{{ asset('img/logo_white.png') }}" class="top2_logo" alt="">
        GOOD ENOUGH FX の取引プラットフォーム
        <div class="top2_line"></div>
    </div>
    <div class="top2_text">
        GOOD ENOUGH FX が採用する取引ツール「MetaTrader4」(メタトレーダー 4)は、<br>
        MetaQueotesSoftware 社が開発した世界でも最も利用されている FX 取引のプラットフォームです。
    </div>
    <img src="{{ asset('img/top2_img1.png') }}" class="top2_img" alt="">
    <a href="{{ route('new_acount') }}" class="btn_a" style="margin:50px auto;">
        <div class="btn_purple" style="background: #3939399B;">ダウンロードはこちら</div>
    </a>
    <div class="top2_title_sub">
        <img src="{{ asset('img/logo_white.png') }}" class="top2_logo" alt="">
        GOOD ENOUGH FX は暗号通貨での入出金が可能
        <div class="top2_line" style="width: 35%;"></div>
    </div>
    <div class="top2_text">
        GOOD ENOUGH FX での資金の入出金は現金振り込みの他に暗号通貨での入出金が可能です。<br>
        （USDTのみ）高いセキュリティー技術で安全な管理と操作をお約束します。
    </div>
    <img src="{{ asset('img/top2_img2.png') }}" class="top2_img" alt="">
</div>

<div class="top_bg3">
    <div class="top3_text">簡単即座の新規口座開設手順</div>
    <img src="{{ asset('img/top3_img.png') }}" class="top3_img" alt="">
</div>

<div class="div_bg" style="padding:100px 0">
    <div class="top4_text">GOOD ENOUGH FX が選ばれる理由</div>
    <div class="top4_flex">
        <div class="top4_div">
            <img src="{{ asset('img/top4_img1.png') }}" class="top4_img" alt="">
            <div class="top4_text2" style="padding: 15px;">最大レバレッジ200倍</div>
            資金効率を高めるため、FX取引最大200:1の取引を 提供。真のDMA業者として、お客様の取引残高や司 教によるレバレッジの一時的な変更は行ません
        </div>
        <div class="top4_div">
            <img src="{{ asset('img/top4_img2.png') }}" class="top4_img" alt="">
            <div class="top4_text2">ゼロカット方式採用<br>安心の追証の請求なし</div>
            相場の急激な変動により、お客様の残高がマイナス になった場合でも、追証・追加入金の必要はありま せん。当社では、マイナス残高をゼロリセット対応 いたします。
        </div>
    </div>
</div>


@endsection




@section('content_sp')

<div class="header_margin_sp">

</div>

@endsection