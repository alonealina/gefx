@extends('layouts.v2.app_user')

@section('content')
<div class="user_content_title">入出金</div>
<div class="deposit_btn_flex">
    <a href="{{ route('v2_deposit') }}"  class="deposit_btn bank_btn not">銀行入金</a>
    <a href="{{ route('v2_crypto_payment') }}" class="deposit_btn crypto_btn not">暗号通貨入金</a>
    <div class="deposit_btn withdraw_btn" style="letter-spacing: 6.12px;">出金</div>
</div>
<img src="{{ asset('img/v2/card_banner.png') }}" class="card_banner" alt="">

<div id="withdraw_div">
    <div class="deposit_btn_flex" style="width:100%; margin-bottom:30px;">
        <div class="deposit_btn bank_btn2" style="width:47%;">銀行出金</div>
        <div class="deposit_btn crypto_btn2 not" style="width:47%;">暗号通貨出金</div>
    </div>
    <div id="bank_div2">
        <form name="bank_withdraw_form" action="{{ route('v2_bank_withdraw_confirm') }}" method="post">
        @csrf
            <div class="deposit_title">銀行出金</div>
            <div class="deposit_item_flex">
                <div class="deposit_item">
                    <div class="user_item_name" style="text-align: right; padding-right: 86px;">出金元口座番号</div>
                    <div class="deposit_item_content" style="text-align: right;">2131905483</div>
                </div>
                <div class="deposit_item">
                    <div class="user_item_name">出金申請金額</div>
                    {{ Form::text('withdraw', old('withdraw'), ['class' => 'deposit_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
                </div>
            </div>
            <div class="withdraw_box">
                <div class="deposit_item_flex">
                    <div class="deposit_item">
                        <div class="user_item_name"><span class="required">＊</span>銀行口座名義人氏名</div>
                        {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
                    </div>
                    <div class="deposit_item">
                        <div class="user_item_name">銀行口座名義人住所</div>
                        {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
                    </div>
                </div>
                <div class="deposit_item_flex">
                    <div class="deposit_item">
                        <div class="user_item_name"><span class="required">＊</span>受取人口座番号</div>
                        {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
                    </div>
                    <div class="deposit_item">
                        <div class="user_item_name"><span class="required">＊</span>銀行名</div>
                        {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
                    </div>
                </div>
                <div class="deposit_item_flex">
                    <div class="deposit_item">
                        <div class="user_item_name"><span class="required">＊</span>支店名</div>
                        {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
                    </div>
                    <div class="deposit_item">
                        <div class="user_item_name"><span class="required">＊</span>口座種類</div>
                        {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
                    </div>
                </div>
            </div>

            <a onclick="clickBankWithdrawFormButton()" class="btn_a">
                <div class="btn_purple" style="margin-top:50px;">出金申請</div>
            </a>
            <div class="bank_text" style="width:620px; margin-top:50px;">
                ◇金融商品取引は高リスクを伴う為、損失に耐えうる資金投資をして下さい<br>
                ◇場合により口座への入金反映が通常より遅れる場合がございます<br>
                ◇当社が取扱わない通貨、トークン等を誤ってお預入された場合、原則として返還対応いたしかねます。<br>
                　返還が可能な場合においても、それに係る手数料等をお支払いただくことがあります。<br>
                ◇外国為替相場については、三菱UFJ銀行（TTS AM11:00）のレートを適応しております。
            </div>
        </form>
    </div>

    <div id="crypto_div2" hidden>
        <img src="{{ asset('img/v2/t_mark.png') }}" class="t_mark" alt="">
        <form name="crypto_withdraw_form" action="{{ route('v2_crypto_withdraw_confirm') }}" method="post">
        @csrf
            <div class="deposit_text">お客様の Tether(USDT) アドレスを以下にご入力下さい。</div>
            <div class="t_box">
                <div style="text-align:left;"><span class="required">＊</span>Tether(USDT) アドレス</div>
                {{ Form::text('Tether', old('Tether'), ['class' => 'deposit_input_text', 'maxlength' => 10, 'placeholder' => '', 'style' => 'width: 100%;']) }}
            </div>
            <a onclick="clickCryptoWithdrawFormButton()" class="btn_a">
                <div class="btn_purple" style="margin-top:50px;">出金申請</div>
            </a>
            <div class="bank_text" style="width:620px; margin-top:50px;">
                ◇金融商品取引は高リスクを伴う為、損失に耐えうる資金投資をして下さい<br>
                ◇場合により口座への入金反映が通常より遅れる場合がございます<br>
                ◇当社が取扱わない通貨、トークン等を誤ってお預入された場合、原則として返還対応いたしかねます。<br>
                　返還が可能な場合においても、それに係る手数料等をお支払いただくことがあります。<br>
                ◇外国為替相場については、三菱UFJ銀行（TTS AM11:00）のレートを適応しております。
            </div>
        </form>
    </div>
</div>

<script src="{{ asset('js/v2/deposit.js') }}"></script>


@endsection




@section('content_sp')

<div class="user_content_title">入出金</div>
<div class="deposit_btn_flex" style="width:100%;">
    <a href="{{ route('v2_deposit') }}"  class="deposit_btn_sp bank_btn not">銀行入金</a>
    <a href="{{ route('v2_crypto_payment') }}" class="deposit_btn_sp crypto_btn not">暗号通貨入金</a>
    <div class="deposit_btn_sp withdraw_btn" style="letter-spacing: 6.12px;">出金</div>
</div>
<img src="{{ asset('img/v2/card_banner.png') }}" class="card_banner" alt="">

<div id="withdraw_div">
    <div class="deposit_btn_flex" style="width:100%; margin-bottom:30px;">
        <div class="deposit_btn bank_btn2" style="width:47%; padding: 10px 0;">銀行出金</div>
        <div class="deposit_btn crypto_btn2 not" style="width:47%; padding: 10px 0;">暗号通貨出金</div>
    </div>
    <div id="bank_div2">
        <form name="bank_withdraw_form" action="{{ route('v2_bank_withdraw_confirm') }}" method="post">
        @csrf

            <div class="deposit_title">銀行出金</div>

            <div class="deposit_item_sp">
                <div class="user_item_name">出金元口座番号</div>
                <div class="deposit_item_content">2131905483</div>
            </div>
            <div class="deposit_item_sp">
                <div class="user_item_name">出金申請金額</div>
                {{ Form::text('withdraw', old('withdraw'), ['class' => 'deposit_input_text_sp', 'maxlength' => 10, 'placeholder' => '']) }}
            </div>

            <div class="withdraw_box" style="padding: 10px;width: 100%;">
                <div class="bank_info_sp">送金先銀行情報</div>
                <div class="deposit_item_sp">
                    <div class="user_item_name"><span class="required">＊</span>銀行口座名義人氏名</div>
                    {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
                </div>
                <div class="deposit_item_sp">
                    <div class="user_item_name">銀行口座名義人住所</div>
                    {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
                </div>

                <div class="deposit_item_sp">
                    <div class="user_item_name"><span class="required">＊</span>受取人口座番号</div>
                    {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
                </div>
                <div class="deposit_item_sp">
                    <div class="user_item_name"><span class="required">＊</span>銀行名</div>
                    {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
                </div>
                <div class="deposit_item_sp">
                    <div class="user_item_name"><span class="required">＊</span>支店名</div>
                    {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
                </div>
                <div class="deposit_item_sp">
                    <div class="user_item_name"><span class="required">＊</span>口座種類</div>
                    {{ Form::text('withdraw', old('withdraw'), ['class' => 'withdraw_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
                </div>
            </div>

            <a onclick="clickBankWithdrawFormButton()" class="btn_a_sp">
                <div class="btn_purple_sp" style="margin-top:50px;">出金申請</div>
            </a>
            <div class="bank_text" style="width:100%; margin-top:50px;">
                ◇金融商品取引は高リスクを伴う為、損失に耐えうる資金投資をして下さい<br>
                ◇場合により口座への入金反映が通常より遅れる場合がございます<br>
                ◇当社が取扱わない通貨、トークン等を誤ってお預入された場合、原則として返還対応いたしかねます。<br>
                　返還が可能な場合においても、それに係る手数料等をお支払いただくことがあります。<br>
                ◇外国為替相場については、三菱UFJ銀行（TTS AM11:00）のレートを適応しております。
            </div>
        </form>
    </div>

    <div id="crypto_div2" hidden>
        <img src="{{ asset('img/v2/t_mark.png') }}" class="t_mark" alt="">
        <form name="crypto_withdraw_form" action="{{ route('v2_crypto_withdraw_confirm') }}" method="post">
        @csrf
            <div class="deposit_text">お客様の Tether(USDT) アドレスを以下にご入力下さい。</div>
            <div class="t_box" style="padding: 10px;width: 100%;">
                <div style="text-align:left;"><span class="required">＊</span>Tether(USDT) アドレス</div>
                {{ Form::text('Tether', old('Tether'), ['class' => 'deposit_input_text_sp', 'maxlength' => 10, 'placeholder' => '', 'style' => 'width: 100%;']) }}
            </div>
            <a onclick="clickCryptoWithdrawFormButton()" class="btn_a_sp">
                <div class="btn_purple_sp" style="margin-top:50px;">出金申請</div>
            </a>
            <div class="bank_text" style="width:100%; margin-top:50px;">
                ◇金融商品取引は高リスクを伴う為、損失に耐えうる資金投資をして下さい<br>
                ◇場合により口座への入金反映が通常より遅れる場合がございます<br>
                ◇当社が取扱わない通貨、トークン等を誤ってお預入された場合、原則として返還対応いたしかねます。<br>
                　返還が可能な場合においても、それに係る手数料等をお支払いただくことがあります。<br>
                ◇外国為替相場については、三菱UFJ銀行（TTS AM11:00）のレートを適応しております。
            </div>
        </form>
    </div>
</div>

<script src="{{ asset('js/v2/deposit.js') }}"></script>

@endsection

