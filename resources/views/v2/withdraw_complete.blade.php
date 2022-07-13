@extends('layouts.v2.app_user')

@section('content')
<div class="user_content_title">入出金</div>
<div class="deposit_btn_flex">
    <a href="{{ route('v2_deposit') }}"  class="deposit_btn bank_btn not">銀行入金</a>
    <a href="{{ route('v2_crypto_payment') }}" class="deposit_btn crypto_btn not">暗号通貨入金</a>
    <div class="deposit_btn withdraw_btn" style="letter-spacing: 6.12px;">出金</div>
</div>
<img src="{{ asset('img/v2/card_banner.png') }}" class="card_banner" alt="">

<div class="head_title">出金を受け付けました。</div>
<div class="complete_text">３営業日以内に残高へ反映を致します。</div>
<a href="/v2/" class="btn_a"><div class="btn_purple" style="margin-top:50px;">マイページTOP</div></a>

@endsection




@section('content_sp')

<div class="user_content_title">入出金</div>
<div class="deposit_btn_flex" style="width:100%;">
    <a href="{{ route('v2_deposit') }}"  class="deposit_btn_sp bank_btn not">銀行入金</a>
    <a href="{{ route('v2_crypto_payment') }}" class="deposit_btn_sp crypto_btn not">暗号通貨入金</a>
    <div class="deposit_btn_sp withdraw_btn" style="letter-spacing: 6.12px;">出金</div>
</div>
<img src="{{ asset('img/v2/card_banner.png') }}" class="card_banner" alt="">

<div class="head_title_sp">出金を受け付けました。</div>
<div class="complete_text">３営業日以内に残高へ反映を致します。</div>
<a href="/v2/" class="btn_a_sp"><div class="btn_purple_sp" style="margin-top:50px;">マイページTOP</div></a>
@endsection

