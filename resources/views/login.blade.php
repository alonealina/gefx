@extends('layouts.app')

@section('content')

<div class="div_bg header_margin pt100 pb100">
    <div class="login_div">
        <img src="{{ asset('img/logo2.png') }}" class="login_logo" alt="">
        <div class="login_title">Login</div>
        <div class="login_text">ようこそ。GOOD ENOUGH FXへ</div>

        <div class="login_item_name">MT4口座番号</div>
        {{ Form::text('indi_name_before', old('indi_name_before'), ['class' => 'login_form_text', 'maxlength' => 30, 'placeholder' => '半角英字(suzuki)']) }}
        <div class="login_item_name">パスワード</div>
        {{ Form::text('indi_name_before', old('indi_name_before'), ['class' => 'login_form_text', 'maxlength' => 30, 'placeholder' => '半角英字(suzuki)']) }}

        <a onclick="clickDemoFormButton()" class="login_btn_a">
            <div class="login_btn" style="margin-top:30px;">Login</div>
        </a>
        <div class="reminder_a"><a href="">ログインパスワードを忘れた方はこちら</a></div>
        <div class="reminder_a">口座をお持ちでないですか？ <a href="">取引口座を今すぐ開設する</a></div>
   </div>
</div>

@endsection




@section('content_sp')



@endsection