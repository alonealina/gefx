@extends('layouts.app')

@section('content')

<div class="div_bg header_margin pb100">
    <img src="{{ asset('img/logo2.png') }}" class="head_logo" alt="">
    <div class="head_title">よくあるご質問</div>
    <div class="faq_div">
        <div class="faq_q">1. アカウントへの入出金はどうすればよいですか？</div>
        <div class="faq_a">いくつかの方法を使用してアカウントに入出金を行うことができます。会員ページの入出金ページをご覧ください。</div>
        <div class="faq_q">2. 口座から別の口座に資金を送金するにはどうすればよいですか？</div>
        <div class="faq_q">3. 私の資金は安全で分散されていますか？</div>
        <div class="faq_q">4. デモアカウントを提供していますか？</div>
        <div class="faq_q">5. どのプラットフォームを提供していますか？</div>
        <div class="faq_q">6. 暗号資産取引を提供していますか？</div>
        <div class="faq_q">7. GOOD ENOUGH FXの流動性プロバイダーは誰ですか？</div>
        <div class="faq_q">8. レバレッジ設定が変更されることはありますか？</div>
        <div class="faq_q">9. 入金が反映されるまで、どれくらい時間がかかりますか？</div>
    </div>
    <a href="{{ route('contact') }}" class="btn_a">
        <div class="btn_purple" style="margin-top:50px;">お問い合わせはこちら</div>
    </a>
</div>

@endsection




@section('content_sp')



@endsection