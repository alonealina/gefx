@extends('layouts.v2.app')

@section('content')

<div class="div_bg header_margin pb100">
    <img src="{{ asset('img/v2/logo2.png') }}" class="head_logo" alt="">
    <div class="head_title">デモ口座開設</div>
    <div class="acount_div">
        <form id="demo_form" name="demo_form" action="{{ route('v2_demo_confirm') }}" method="post">
        @csrf
            <div class="demo_explain">
                GOOD ENOUGH FX 専用MT4<br>
                世界最小スプレッドとユーザビリティー重視の取引環境を提供!!<br>
                <span class="demo_span">US$50,000のデモ取引口座</span>
            </div>
            <div class="form_item_title">デモ口座お客様情報</div>
            <div class="form_line"></div>
            <div class="form_item_name">
                <span class="required">＊</span>お名前
            </div>
            <div class="form_flex">
                <div class="form_item">
                    <div class="form_item_name_sub">姓(ローマ字)</div>
                    {{ Form::text('first_name', old('first_name'), ['class' => 'form_text', 'maxlength' => 30, 'placeholder' => '半角英字(suzuki)']) }}
                </div>
                <div class="form_item">
                    <div class="form_item_name_sub">名(ローマ字)</div>
                    {{ Form::text('last_name', old('last_name'), ['class' => 'form_text', 'maxlength' => 30, 'placeholder' => '半角英字(taro)']) }}
                </div>
            </div>
            <div class="form_item">
                <div class="form_item_name">
                    <span class="required">＊</span>メールアドレス
                </div>
                {{ Form::text('email', old('email'), ['class' => 'form_text', 'maxlength' => 30, 'placeholder' => '半角英数字(taro@fefx.com)']) }}
            </div>
            <a onclick="clickDemoFormButton()" class="btn_a">
                <div class="btn_purple" style="margin-top:50px; padding: 10px 30px;">ダウンロードアドレスを<br>メールで受け取る</div>
            </a>
        </form>
   </div>
</div>

@endsection




@section('content_sp')

<div class="div_bg_sp header_margin_sp padding_sp">
    <img src="{{ asset('img/v2/logo2.png') }}" class="head_logo" alt="">
    <div class="head_title">デモ口座開設</div>
    <div class="acount_div_sp">
        <form id="demo_form" name="demo_form" action="{{ route('v2_demo_confirm') }}" method="post">
            @csrf
            <div class="demo_explain">
                GOOD ENOUGH FX 専用MT4<br>
                世界最小スプレッドとユーザビリティー重視の取引環境を提供!!<br>
                <span class="demo_span">US$50,000のデモ取引口座</span>
            </div>
            <div class="form_item_title">デモ口座お客様情報</div>
            <div class="form_line"></div>
            <div class="form_item_name">
                <span class="required">＊</span>お名前
            </div>

            <div class="form_item_sp">
                <div class="form_item_name_sub">姓(ローマ字)</div>
                {{ Form::text('first_name', old('first_name'), ['class' => 'form_text_sp', 'maxlength' => 30, 'placeholder' => '半角英字(suzuki)']) }}
            </div>
            <div class="form_item_sp">
                <div class="form_item_name_sub">名(ローマ字)</div>
                {{ Form::text('last_name', old('last_name'), ['class' => 'form_text_sp', 'maxlength' => 30, 'placeholder' => '半角英字(taro)']) }}
            </div>

            <div class="form_item_sp">
                <div class="form_item_name">
                    <span class="required">＊</span>メールアドレス
                </div>
                {{ Form::text('email', old('email'), ['class' => 'form_text_sp', 'maxlength' => 30, 'placeholder' => '半角英数字(taro@fefx.com)']) }}
            </div>
            <a onclick="clickDemoFormButton()" class="btn_sp_a">
                <div class="btn_sp" style="margin-top:30px;">ダウンロードアドレスを<br>メールで受け取る</div>
            </a>
        </form>
   </div>
</div>

@endsection