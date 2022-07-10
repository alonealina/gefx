@extends('layouts.app_user')

@section('content')
<div class="user_content_title">追加口座</div>

<div class="withdraw_box">
    <div class="deposit_item_flex">
        <div class="deposit_item2">
            <div class="user_item_name">お名前（ローマ字）</div>
            {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
        </div>
        <div class="deposit_item2">
            <div class="user_item_name">メールアドレス</div>
            {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
        </div>
    </div>
    <div class="deposit_item_flex">
        <div class="deposit_item2">
            <div class="user_item_name">取引プラットフォーム</div>
            <select name="indi_leverage" style="width: 100%;">
                <option value="">選択してください</option>
            </select>
        </div>
        <div class="deposit_item2">
            <div class="user_item_name">レバレッジ</div>
            <select name="indi_leverage" style="width: 100%;">
                <option value="">選択してください</option>
            </select>
        </div>
    </div>
    <div class="deposit_item_flex">
        <div class="deposit_item2">
            <div class="user_item_name">口座種類</div>
            <select name="indi_leverage" style="width: 100%;">
                <option value="">選択してください</option>
            </select>
        </div>
        <div class="deposit_item2">
            <div class="user_item_name">紹介者コード</div>
            {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
        </div>
    </div>
    <div class="checkbox_item">
        <input type="checkbox" id="check_policy" value="1">
        <span>利用規則に同意する</span>
    </div>
</div>


<a onclick="clickBankFormButton()" class="btn_a">
    <div class="btn_purple" style="margin-top:50px;">資金移動する</div>
</a>


@endsection




@section('content_sp')

<div class="user_content_title">追加口座</div>

<div class="deposit_item_sp">
    <div class="user_item_name">お名前（ローマ字）</div>
    {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
</div>
<div class="deposit_item_sp">
    <div class="user_item_name">メールアドレス</div>
    {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
</div>
<div class="deposit_item_sp">
    <div class="user_item_name">取引プラットフォーム</div>
    <select name="indi_platform" style="width:100%;">
        <option value="">選択してください</option>
    </select>
</div>
<div class="deposit_item_sp">
    <div class="user_item_name">レバレッジ</div>
    <select name="indi_platform" style="width:100%;">
        <option value="">選択してください</option>
    </select>
</div>
<div class="deposit_item_sp">
    <div class="user_item_name">口座種類</div>
    <select name="indi_platform" style="width:100%;">
        <option value="">選択してください</option>
    </select>
</div>
<div class="deposit_item_sp">
    <div class="user_item_name">紹介者コード</div>
    {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
</div>



<div class="checkbox_item" style="margin:30px;">
    <input type="checkbox" id="check_policy" value="1">
    <span>利用規則に同意する</span>
</div>

<a onclick="clickBankFormButton()" class="btn_a_sp">
    <div class="btn_purple_sp" style="margin-top:50px;">資金移動する</div>
</a>

@endsection

