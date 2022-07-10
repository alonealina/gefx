@extends('layouts.app')

@section('content')

<div class="div_bg header_margin pb100">
    <img src="{{ asset('img/logo2.png') }}" class="head_logo" alt="">
    <div class="head_title">よくあるご質問</div>
    <div class="faq_div">
        <div id="faq_q1" class="faq_q">1. アカウントへの入出金はどうすればよいですか？</div>
        <div id="faq_a1" class="faq_a faq_close">いくつかの方法を使用してアカウントに入出金を行うことができます。会員ページの入出金ページをご覧ください。</div>
        <div id="faq_q2" class="faq_q">2. 口座から別の口座に資金を送金するにはどうすればよいですか？</div>
        <div id="faq_a2" class="faq_a faq_close">会員ページの資金移動ページから可能です。</div>
        <div id="faq_q3" class="faq_q">3. 私の資金は安全で分散されていますか？</div>
        <div id="faq_a3" class="faq_a faq_close">はい、すべての資金は分散された口座、ウォレットに保管されており、企業の資金とは完全に分離されており、混合されていません。</div>
        <div id="faq_q4" class="faq_q">4. デモアカウントを提供していますか？</div>
        <div id="faq_a4" class="faq_a faq_close">はい、ここでデモアカウントにサインアップできます：<a href="{{ route('v2_demo_acount') }}">デモ口座開設ページ</a></div>
        <div id="faq_q5" class="faq_q">5. どのプラットフォームを提供していますか？</div>
        <div id="faq_a5" class="faq_a faq_close">MetaTrader 4を提供しています。将来的にMetaTrader5、cTrader、Currenex（FXのみ）を含む、世界をリードするいくつかの異なるプラットフォームを提供しています。<br>SterlingTraderとの交換株式も提供していきます。</div>
        <div id="faq_q6" class="faq_q">6. 暗号資産取引を提供していますか？</div>
        <div id="faq_a6" class="faq_a faq_close">はい、さまざまな暗号通貨ペアを提供しています。スプレッドと実行を表示するには、当社のプラットフォームをダウンロードしてください。</div>
        <div id="faq_q7" class="faq_q">7. GOOD ENOUGH FXの流動性プロバイダーは誰ですか？</div>
        <div id="faq_a7" class="faq_a faq_close">さまざまなLPとの緊密な関係を通じて、市場で最もタイトなスプレッドのいくつかを提供しています。価格フィードを集計して、クライアントの最上位の価格を示す、いつでも最高のBID / OFFERを表示します。</div>
        <div id="faq_q8" class="faq_q">8. レバレッジ設定が変更されることはありますか？</div>
        <div id="faq_a8" class="faq_a faq_close">レバレッジ設定に関してはお客様ご自身で選択いただけます。</div>
        <div id="faq_q9" class="faq_q">9. 入金が反映されるまで、どれくらい時間がかかりますか？</div>
        <div id="faq_a9" class="faq_a faq_close">ご入金が反映されるまで、最大3営業日程度時間を要します。</div>
    </div>
    <a href="{{ route('v2_contact') }}" class="btn_a">
        <div class="btn_purple" style="margin-top:50px;">お問い合わせはこちら</div>
    </a>
</div>

<script src="{{ asset('js/v2/faq.js') }}"></script>
@endsection




@section('content_sp')

<div class="div_bg_sp header_margin_sp padding_sp">
    <img src="{{ asset('img/logo2.png') }}" class="head_logo" alt="">
    <div class="head_title">よくあるご質問</div>
    <div class="acount_div_sp">
    <div id="faq_q1" class="faq_q">1. アカウントへの入出金はどうすればよいですか？</div>
        <div id="faq_a1" class="faq_a faq_close">いくつかの方法を使用してアカウントに入出金を行うことができます。会員ページの入出金ページをご覧ください。</div>
        <div id="faq_q2" class="faq_q">2. 口座から別の口座に資金を送金するにはどうすればよいですか？</div>
        <div id="faq_a2" class="faq_a faq_close">会員ページの資金移動ページから可能です。</div>
        <div id="faq_q3" class="faq_q">3. 私の資金は安全で分散されていますか？</div>
        <div id="faq_a3" class="faq_a faq_close">はい、すべての資金は分散された口座、ウォレットに保管されており、企業の資金とは完全に分離されており、混合されていません。</div>
        <div id="faq_q4" class="faq_q">4. デモアカウントを提供していますか？</div>
        <div id="faq_a4" class="faq_a faq_close">はい、ここでデモアカウントにサインアップできます：<a href="{{ route('v2_demo_acount') }}">デモ口座開設ページ</a></div>
        <div id="faq_q5" class="faq_q">5. どのプラットフォームを提供していますか？</div>
        <div id="faq_a5" class="faq_a faq_close">MetaTrader 4を提供しています。将来的にMetaTrader5、cTrader、Currenex（FXのみ）を含む、世界をリードするいくつかの異なるプラットフォームを提供しています。<br>SterlingTraderとの交換株式も提供していきます。</div>
        <div id="faq_q6" class="faq_q">6. 暗号資産取引を提供していますか？</div>
        <div id="faq_a6" class="faq_a faq_close">はい、さまざまな暗号通貨ペアを提供しています。スプレッドと実行を表示するには、当社のプラットフォームをダウンロードしてください。</div>
        <div id="faq_q7" class="faq_q">7. GOOD ENOUGH FXの流動性プロバイダーは誰ですか？</div>
        <div id="faq_a7" class="faq_a faq_close">さまざまなLPとの緊密な関係を通じて、市場で最もタイトなスプレッドのいくつかを提供しています。価格フィードを集計して、クライアントの最上位の価格を示す、いつでも最高のBID / OFFERを表示します。</div>
        <div id="faq_q8" class="faq_q">8. レバレッジ設定が変更されることはありますか？</div>
        <div id="faq_a8" class="faq_a faq_close">レバレッジ設定に関してはお客様ご自身で選択いただけます。</div>
        <div id="faq_q9" class="faq_q">9. 入金が反映されるまで、どれくらい時間がかかりますか？</div>
        <div id="faq_a9" class="faq_a faq_close">ご入金が反映されるまで、最大3営業日程度時間を要します。</div>
    </div>
    <a href="{{ route('v2_contact') }}" class="btn_sp_a">
        <div class="btn_sp" style="margin-top:50px;">お問い合わせはこちら</div>
    </a>
</div>

<script src="{{ asset('js/v2/faq.js') }}"></script>
@endsection