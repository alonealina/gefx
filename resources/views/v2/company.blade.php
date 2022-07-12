@extends('layouts.v2.app')

@section('content')

<div class="div_bg header_margin pb100">
    <img src="{{ asset('img/v2/logo2.png') }}" class="head_logo" alt="">
    <div class="head_title">会社概要</div>
    <div class="acount_div">
        <div class="company_flex">
            <div class="company_before">会社名</div>
            <div class="company_after">GOOD ENOUGH TREASURE co.ltd</div>
        </div>
        <div class="company_flex">
            <div class="company_before">所在地</div>
            <div class="company_after">Intershore Chambers, Road Town, Tortola, British<br>Virgin Islands,</div>
        </div>
        <div class="company_flex" style="border-bottom: 1px solid #A5A5A5;">
            <div class="company_before">事業内容</div>
            <div class="company_after">
                1. Business related to foreign exchange / CFD<br>
                　/ trading on the Internet<br>
                2. Forex / CFD / trading business<br>
                3. Forex / CFD / Trading information service
            </div>
        </div>

    </div>
</div>

@endsection




@section('content_sp')

<div class="div_bg_sp header_margin_sp padding_sp">
    <img src="{{ asset('img/v2/logo2.png') }}" class="head_logo" alt="">
    <div class="head_title">会社概要</div>
    <div class="acount_div_sp">
        <div class="company_flex">
            <div class="company_before_sp">会社名</div>
            <div class="company_after_sp">GOOD ENOUGH TREASURE co.ltd</div>
        </div>
        <div class="company_flex">
            <div class="company_before_sp">所在地</div>
            <div class="company_after_sp">Intershore Chambers, Road Town, Tortola, BritishVirgin Islands,</div>
        </div>
        <div class="company_flex" style="border-bottom: 1px solid #A5A5A5;">
            <div class="company_before_sp">事業内容</div>
            <div class="company_after_sp">
                1. Business related to foreign exchange / CFD<br>
                　/ trading on the Internet<br>
                2. Forex / CFD / trading business<br>
                3. Forex / CFD / Trading information service
            </div>
        </div>

    </div>
</div>

@endsection