@extends('layouts.app_user')

@section('content')
<div class="user_content_title">入出金</div>
<div class="deposit_btn_flex">
    <div class="deposit_btn bank_btn">銀行入金</div>
    <div class="deposit_btn crypto_btn not">暗号通貨入金</div>
    <div class="deposit_btn withdraw_btn not" style="letter-spacing: 6.12px;">出金</div>
</div>
<img src="{{ asset('img/card_banner.png') }}" class="card_banner" alt="">

<div id="bank_div">
    <div class="deposit_title">銀行入金</div>
    <div class="deposit_text">下記口座にお振り込みをお願いいたします</div>
    <div class="deposit_red">
        必ず振り込み名には登録口座のお名前と MT４口座番号をご入力下さいますよう お願い申し上げます。<br>
        MT４口座番号が入力されておりませんと残高に反映できない場合がございますので ご注意下さい。
    </div>
    <div class="bank_detail">
        <div>銀行名<br>支店名<br>口座種類<br>口座番号<br>口座名義<br>振込名義</div>
        <div>住信ＳＢＩネット銀行<br>法人第一支店（106)<br>普通預金<br>1387680<br>グッドイナフトレジャー(カ<br>21310000000 test test</div>
    </div>
    <div class="bank_text" style="width:470px; margin-bottom:60px;">
        ※反映までの時間 : 最大３営業日<br>
        ※振り込み手数料 : お客様負担でお願いいたします。
    </div>
    <div class="bank_text" style="width:620px;">
        ◇金融商品取引は高リスクを伴う為、損失に耐えうる資金投資をして下さい<br>
        ◇場合により口座への入金反映が通常より遅れる場合がございます<br>
        ◇当社が取扱わない通貨、トークン等を誤ってお預入された場合、原則として返還対応いたしかねます。<br>
        　返還が可能な場合においても、それに係る手数料等をお支払いただくことがあります。<br>
        ◇外国為替相場については、三菱UFJ銀行（TTS AM11:00）のレートを適応しております。
    </div>
</div>

<div id="crypto_div" hidden>
    <div id="crypto1">
        <div class="deposit_title">暗号通貨入金</div>
        <div class="deposit_text">
            ご入金の前に、下記入力フォームにて、入金申請を行ってください。<br>
            次へボタンを押すと次ページに振込情報（QRコード,預入用アドレス）が表示されます。
        </div>
        <div class="deposit_item_flex">
            <div class="deposit_item">
                <div class="user_item_name">トレード口座</div>
                <div class="deposit_item_content">2131905483</div>
            </div>
            <div class="deposit_item">
                <div class="user_item_name">メールアドレス</div>
                <div class="deposit_item_content">example@gmail.com</div>
            </div>
        </div>
        <div class="deposit_item_flex">
            <div class="deposit_item">
                <div class="user_item_name">ご入金方法</div>
                <div class="deposit_item_content">Tether(USDT)</div>
            </div>
            <div class="deposit_item">
                <div class="user_item_name">入金額</div>
                {{ Form::text('deposit', old('deposit'), ['class' => 'deposit_input_text', 'maxlength' => 10, 'placeholder' => '']) }}
            </div>
        </div>
        <div class="deposit_item_flex">
            <div class="deposit_item">
                <div class="user_item_name">入金元のウォレットアドレス</div>
                {{ Form::text('wallet_address', old('wallet_address'), ['class' => 'deposit_input_text', 'maxlength' => 50, 'placeholder' => '']) }}
            </div>
            <div class="deposit_item">
                <div class="user_item_name">備考欄</div>
                {{ Form::text('remarks', old('remarks'), ['class' => 'deposit_input_text', 'maxlength' => 50, 'placeholder' => '']) }}
            </div>
        </div>
        <a onclick="clickCryptoFormButton1()" class="btn_a">
            <div class="btn_purple" style="margin-top:50px;">振込情報を確認する</div>
        </a>
        <div class="bank_text" style="width:620px; margin-top:50px;">
            ◇金融商品取引は高リスクを伴う為、損失に耐えうる資金投資をして下さい<br>
            ◇場合により口座への入金反映が通常より遅れる場合がございます<br>
            ◇当社が取扱わない通貨、トークン等を誤ってお預入された場合、原則として返還対応いたしかねます。<br>
            　返還が可能な場合においても、それに係る手数料等をお支払いただくことがあります。<br>
            ◇外国為替相場については、三菱UFJ銀行（TTS AM11:00）のレートを適応しております。
        </div>
    </div>

    <div id="crypto2" hidden>
        <img src="{{ asset('img/t_mark.png') }}" class="t_mark" alt="">
        <div class="deposit_text">
            お客様の Tether(USDT) 預入用アドレスです。<br>
            コピーするか、2次元バーコードをスキャンしてご利用ください。<br>
            ※送金の際、タグに口座番号を記載して送金してください。
        </div>
        <div class="bank_text" style="text-align:center; margin-top:30px;">
            セキュリティの関係で、下記アドレスは本画面のみの表示となっています。前のページへ戻ると<br>
            表示されませんのでご注意ください。再度確認したい場合は、再度入金申請を送信してください。
        </div>
        <div class="t_box">
            <div>お客様用Tetherアドレス</div>
            <img src="{{ asset('img/qr.png') }}" class="t_mark" alt="">
            <div style="color: #6E6E6E;">0xD3A272Bc0AC3FFf9F00c2Ebc8f2F2D8A573B97ef</div>
        </div>
        <div class="deposit_red">
            送信完了時のトランザクションID(TXID)を下記入力欄に必ず入力してください<br>
            トランザクションID(TXID)が未記入の場合は、着金確認および反映までお時間を要することがあります。
        </div>
        <div class="deposit_item" style="margin:30px auto 15px;">
            <div class="user_item_name">TXID</div>
            {{ Form::text('txid', old('txid'), ['class' => 'deposit_input_text', 'maxlength' => 10, 'placeholder' => '', 'style' => 'width: 100%;']) }}
        </div>
        <a onclick="clickCryptoFormButton2()" class="btn_a">
            <div class="btn_purple" style="margin-top:50px;">送信する</div>
        </a>
        <div class="bank_text" style="width:620px; margin-top:50px;">
            ◇金融商品取引は高リスクを伴う為、損失に耐えうる資金投資をして下さい<br>
            ◇場合により口座への入金反映が通常より遅れる場合がございます<br>
            ◇当社が取扱わない通貨、トークン等を誤ってお預入された場合、原則として返還対応いたしかねます。<br>
            　返還が可能な場合においても、それに係る手数料等をお支払いただくことがあります。<br>
            ◇外国為替相場については、三菱UFJ銀行（TTS AM11:00）のレートを適応しております。
        </div>
    </div>

</div>

<div id="withdraw_div" hidden>
    <div class="deposit_btn_flex" style="width:100%; margin-bottom:30px;">
        <div class="deposit_btn bank_btn2" style="width:47%;">銀行出金</div>
        <div class="deposit_btn crypto_btn2 not" style="width:47%;">暗号通貨出金</div>
    </div>
    <div id="bank_div2">
        <div class="deposit_title">銀行出金</div>
    </div>
    <div id="crypto_div2" hidden>
        <img src="{{ asset('img/t_mark.png') }}" class="t_mark" alt="">
        <div class="deposit_text">お客様の Tether(USDT) アドレスを以下にご入力下さい。</div>
        <div class="t_box">
            <div style="text-align:left;"><span class="required">＊</span>Tether(USDT) アドレス</div>
            {{ Form::text('Tether', old('Tether'), ['class' => 'deposit_input_text', 'maxlength' => 10, 'placeholder' => '', 'style' => 'width: 100%;']) }}
        </div>
        <a onclick="clickCryptoFormButton3()" class="btn_a">
            <div class="btn_purple" style="margin-top:50px;">出金申請</div>
        </a>
        <div class="bank_text" style="width:620px; margin-top:50px;">
            ◇金融商品取引は高リスクを伴う為、損失に耐えうる資金投資をして下さい<br>
            ◇場合により口座への入金反映が通常より遅れる場合がございます<br>
            ◇当社が取扱わない通貨、トークン等を誤ってお預入された場合、原則として返還対応いたしかねます。<br>
            　返還が可能な場合においても、それに係る手数料等をお支払いただくことがあります。<br>
            ◇外国為替相場については、三菱UFJ銀行（TTS AM11:00）のレートを適応しております。
        </div>
    </div>
</div>

<script src="{{ asset('js/deposit.js') }}"></script>


@endsection




@section('content_sp')



@endsection

