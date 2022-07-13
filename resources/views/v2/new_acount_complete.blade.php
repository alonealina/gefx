@extends('layouts.v2.app')

@section('content')

<div class="div_bg header_margin pb100">
    <img src="{{ asset('img/v2/logo2.png') }}" class="head_logo" alt="">
    <div class="head_title">新規口座開設</div>
    <div class="acount_div">
        <div class="head_title">ご登録ありがとうございました。</div>
        <div class="complete_text">口座申請いただき、誠にありがとうございます。<br>２営業日以内にメールにてご連絡致します</div>
        <a href="/v2/" class="btn_a"><div class="btn_purple" style="margin-top:50px;">TOPページ</div></a>
    </div>
</div>

@endsection




@section('content_sp')

<div class="div_bg_sp header_margin_sp padding_sp">
    <img src="{{ asset('img/v2/logo2.png') }}" class="head_logo" alt="">
    <div class="head_title">新規口座開設</div>
    <div class="acount_div_sp">
        <div class="head_title">ご登録ありがとうございました。</div>
        <div class="complete_text">口座申請いただき、誠にありがとうございます。<br>２営業日以内にメールにてご連絡致します</div>
        <a href="/v2/" class="btn_sp_a"><div class="btn_sp" style="margin-top:50px;">TOPページ</div></a>
    </div>
</div>



@endsection