@extends('layouts.app_user')

@section('content')
<div class="user_content_title">資金移動</div>


<div class="withdraw_box">
    <div class="deposit_item_flex">
        <div class="deposit_item">
            <div class="user_item_name">出金元口座番号</div>
            {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
        </div>
        <div class="deposit_item">
            <div class="user_item_name">移動元口座番号</div>
            {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
        </div>
    </div>
    <div class="deposit_item_flex">
        <div class="deposit_item">
            <div class="user_item_name">移動申請金額</div>
            {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '', 'style' => 'width: 85%;']) }}
            <span style="vertical-align: bottom;">USD</span>
        </div>
        <div class="deposit_item">
            <div class="user_item_name"><span class="required">＊</span>銀行名</div>
            {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
        </div>
    </div>
    <div class="checkbox_item">
        <input type="checkbox" id="check_policy" value="1">
        <span>利用規則に同意する</span>
    </div>
</div>

<div class="deposit_item" style="margin: auto;">
    <div class="deposit_red" style="text-align: left;">MT4パスワード入力</div>
    {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
</div>

<a onclick="clickBankFormButton()" class="btn_a">
    <div class="btn_purple" style="margin-top:50px;">資金移動する</div>
</a>


@endsection




@section('content_sp')



@endsection

