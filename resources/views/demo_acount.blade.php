@extends('layouts.app')

@section('content')

<div class="div_bg header_margin pb100">
    <img src="{{ asset('img/logo2.png') }}" class="head_logo" alt="">
    <div class="head_title">デモ口座開設</div>
    <div class="acount_div">
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
                {{ Form::text('indi_name_before', old('indi_name_before'), ['class' => 'form_text', 'maxlength' => 30, 'placeholder' => '半角英字(suzuki)']) }}
            </div>
            <div class="form_item">
                <div class="form_item_name_sub">名(ローマ字)</div>
                {{ Form::text('indi_name_after', old('indi_name_after'), ['class' => 'form_text', 'maxlength' => 30, 'placeholder' => '半角英字(taro)']) }}
            </div>
        </div>
        <div class="form_item">
            <div class="form_item_name">
                <span class="required">＊</span>メールアドレス
            </div>
            {{ Form::text('indi_mail', old('indi_mail'), ['class' => 'form_text', 'maxlength' => 30, 'placeholder' => '半角英数字(taro@fefx.com)']) }}
        </div>
        <a onclick="clickDemoFormButton()" class="btn_a">
            <div class="btn_purple" style="margin-top:50px; padding: 10px 30px;">ダウンロードアドレスを<br>メールで受け取る</div>
        </a>
   </div>
</div>

@endsection




@section('content_sp')



@endsection