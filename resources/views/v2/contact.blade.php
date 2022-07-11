@extends('layouts.app')

@section('content')

<div class="div_bg header_margin pb100">
    <img src="{{ asset('img/logo2.png') }}" class="head_logo" alt="">
    <div class="head_title">お問い合わせ</div>
    <div class="acount_div">

        <div class="form_flex">
            <div class="form_item">
                <div class="form_item_name">
                    <span class="required">＊</span>お名前
                </div>
                {{ Form::text('name', old('name'), ['class' => 'form_text', 'maxlength' => 30, 'placeholder' => '']) }}
            </div>
            <div class="form_item">
                <div class="form_item_name">
                    <span class="required">＊</span>お名前（ローマ字）
                </div>
                {{ Form::text('name_romazi', old('name_romazi'), ['class' => 'form_text', 'maxlength' => 30, 'placeholder' => '']) }}
            </div>
        </div>
        <div class="form_flex">
            <div class="form_item">
                <div class="form_item_name">
                    <span class="required">＊</span>メールアドレス
                </div>
                {{ Form::text('email', old('email'), ['class' => 'form_text', 'maxlength' => 30, 'placeholder' => '半角英数字(taro@fefx.com)']) }}
            </div>
            <div class="form_item">
                <div class="form_item_name">
                    <span class="required">＊</span>お問い合わせジャンル
                </div>
                <select name="category">
                    <option value="">選択してください</option>
                </select>
            </div>
        </div>

        <div class="form_item_name">
            <span class="required">＊</span>お問い合わせ内容
        </div>
        <textarea name="message"></textarea>


        <a onclick="clickContactFormButton()" class="btn_a">
            <div class="btn_purple" style="margin-top:50px;">送信する</div>
        </a>
   </div>
</div>

@endsection




@section('content_sp')

<div class="div_bg_sp header_margin_sp padding_sp">
    <img src="{{ asset('img/logo2.png') }}" class="head_logo" alt="">
    <div class="head_title">お問い合わせ</div>
    <div class="acount_div_sp">
        <div class="form_item_sp">
            <div class="form_item_name">
                <span class="required">＊</span>お名前
            </div>
            {{ Form::text('name', old('name'), ['class' => 'form_text_sp', 'maxlength' => 30, 'placeholder' => '']) }}
        </div>
        <div class="form_item_sp">
            <div class="form_item_name">
                <span class="required">＊</span>お名前（ローマ字）
            </div>
            {{ Form::text('name_romazi', old('name_romazi'), ['class' => 'form_text_sp', 'maxlength' => 30, 'placeholder' => '']) }}
        </div>

        <div class="form_item_sp">
            <div class="form_item_name">
                <span class="required">＊</span>メールアドレス
            </div>
            {{ Form::text('email', old('email'), ['class' => 'form_text_sp', 'maxlength' => 30, 'placeholder' => '半角英数字(taro@fefx.com)']) }}
        </div>
        <div class="form_item_sp">
            <div class="form_item_name">
                <span class="required">＊</span>お問い合わせジャンル
            </div>
            <select name="category" style="width:100%;">
                <option value="">選択してください</option>
            </select>
        </div>

        <div class="form_item_name">
            <span class="required">＊</span>お問い合わせ内容
        </div>
        <textarea name="message" style="width: 100%;"></textarea>


        <a onclick="clickContactFormButtonSp()" class="btn_sp_a">
            <div class="btn_sp" style="margin-top:50px;">送信する</div>
        </a>
   </div>
</div>


@endsection