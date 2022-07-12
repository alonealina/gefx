@extends('layouts.v2.app_user')

@section('content')
<div class="user_content_title">資金移動</div>

<div id="transfer_div">
    <div class="withdraw_box">
        <div class="deposit_item_flex">
            <div class="deposit_item2">
                <div class="user_item_name">出金元口座番号</div>
                {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
            </div>
            <div class="deposit_item2">
                <div class="user_item_name">移動元口座番号</div>
                {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
            </div>
        </div>
        <div class="deposit_item_flex">
            <div class="deposit_item2">
                <div class="user_item_name">移動申請金額</div>
                {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '', 'style' => 'width: 83%;']) }}
                <span style="vertical-align: bottom;">USD</span>
            </div>
            <div class="deposit_item2">
                <div class="user_item_name"><span class="required">＊</span>銀行名</div>
                {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
            </div>
        </div>
        <div class="checkbox_item">
            <input type="checkbox" id="check_policy" value="1">
            <span>利用規則に同意する</span>
        </div>
    </div>

    <a onclick="clickTransferFormButton()" class="btn_a">
        <div class="btn_purple" style="margin-top:50px;">資金移動する</div>
    </a>
</div>

<script src="{{ asset('js/v2/transfer.js') }}"></script>
@endsection




@section('content_sp')

<div class="user_content_title">資金移動</div>

<div id="transfer_div">
    <div class="deposit_item_sp">
        <div class="user_item_name">出金元口座番号</div>
        {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
    </div>
    <div class="deposit_item_sp">
        <div class="user_item_name">移動元口座番号</div>
        {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
    </div>
    <div class="deposit_item_sp">
        <div class="user_item_name">移動申請金額</div>
        {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
        <span style="float: right;">USD</span>
    </div>
    <div class="deposit_item_sp">
        <div class="user_item_name"><span class="required">＊</span>銀行名</div>
        {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
    </div>

    <div class="checkbox_item" style="margin:20px;">
        <input type="checkbox" id="check_policy" value="1">
        <span>利用規則に同意する</span>
    </div>

    <a onclick="clickTransferFormButtonSp()" class="btn_a_sp">
        <div class="btn_purple_sp" style="margin-top:50px;">資金移動する</div>
    </a>
</div>

<script src="{{ asset('js/v2/transfer.js') }}"></script>
@endsection

