@extends('layouts.app_user')

@section('content')
<div class="user_content_title">設定</div>

<div class="setting_title2">2段階認証設定</div>
<div class="setting_text2">
    GOOD ENOUGH FXにログインするたびに、ユーザー名とパスワードに加えて、<br>
    スマートフォンのGoogle認証システムアプリによって生成されたコードも必要になります。<br>
    ログインするには動的コードを入力する必要があります。<br>
    これにより、アカウントのパスワードが漏洩した場合のアカウントへの侵入を効果的に防ぐことができます。
</div>
<div class="setting_item_flex">
    <div class="deposit_item">
        <div class="user_item_name">MT4パスワード入力</div>
        {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
    </div>
    <div class="deposit_item">
        <a class="active_btn_a">
            <div class="active_btn">アクティブ申請</div>
        </a>
    </div>
</div>
<div class="setting_item_flex">
    <div class="deposit_item">
        <div class="user_item_name">MT4パスワード入力</div>
        {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
    </div>
    <div class="deposit_item">
        <a class="active_btn_a">
            <div class="active_btn">非アクティブ申請</div>
        </a>
    </div>
</div>

<img src="{{ asset('img/qr.png') }}" class="qr_img" alt="">



@endsection




@section('content_sp')



@endsection

