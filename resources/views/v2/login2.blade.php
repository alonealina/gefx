@extends('layouts.v2.app')

@section('content')

<div class="div_bg header_margin pt100 pb100">
    <div class="login_div">
        <img src="{{ asset('img/v2/logo2.png') }}" class="login_logo" alt="">
        <div class="login_title">Login</div>
        <div class="login_text">ようこそ。GOOD ENOUGH FXへ</div>

        <div class="login_item_name">MT4口座番号</div>
        {{ Form::text('accountnum', old('accountnum'), ['class' => 'login_form_text', 'maxlength' => 30, 'placeholder' => '']) }}
        <div class="login_item_name">パスワード</div>
        {{ Form::text('password', old('password'), ['class' => 'login_form_text', 'maxlength' => 30, 'placeholder' => '']) }}
        <div class="login_item_name"> ワンタイムパスワード</div>
        {{ Form::text('onepass', old('onepass'), ['class' => 'login_form_text', 'maxlength' => 30, 'placeholder' => '']) }}

        <a onclick="clickDemoFormButton()" class="login_btn_a">
            <div class="login_btn" style="margin-top:30px;">Login</div>
        </a>
        <div class="reminder_a"><a href="{{ route('v2_contact') }}">ログインパスワードを忘れた方はこちら</a></div>
        <div class="reminder_a">口座をお持ちでないですか？ <a href="{{ route('v2_new_acount') }}">取引口座を今すぐ開設する</a></div>
   </div>
</div>

@endsection




@section('content_sp')

<div class="div_bg_sp header_margin_sp padding_sp">
    <div class="login_div_sp">
        <img src="{{ asset('img/v2/logo2.png') }}" class="login_logo" alt="">
        <div class="login_title">Login</div>
        <div class="login_text">ようこそ。GOOD ENOUGH FXへ</div>

        <div class="login_item_name">MT4口座番号</div>
        {{ Form::text('accountnum', old('accountnum'), ['class' => 'login_form_text', 'maxlength' => 30, 'placeholder' => '']) }}
        <div class="login_item_name">パスワード</div>
        {{ Form::text('password', old('password'), ['class' => 'login_form_text', 'maxlength' => 30, 'placeholder' => '']) }}
        <div class="login_item_name">ワンタイムパスワード</div>
        {{ Form::text('onepass', old('onepass'), ['class' => 'login_form_text', 'maxlength' => 30, 'placeholder' => '']) }}

        <a onclick="clickDemoFormButton()" class="login_btn_a">
            <div class="login_btn" style="margin-top:30px;">Login</div>
        </a>
        <div class="reminder_a"><a href="{{ route('v2_contact') }}">ログインパスワードを忘れた方はこちら</a></div>
        <div class="reminder_a">口座をお持ちでないですか？<br><a href="{{ route('v2_new_acount') }}">取引口座を今すぐ開設する</a></div>
   </div>
</div>


@endsection