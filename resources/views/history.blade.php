@extends('layouts.app_user')

@section('content')
<div class="user_content_title">履 歴</div>
<div class="user_item_flex">
    <img src="{{ asset('img/history.png') }}" class="history_img" alt="">
    <div class="history_item">

        <div class="history_item_name" style="bottom: 360px;">ご入金</div>
        <div class="history_item_content"style="bottom: 320px;">2573.88</div>

        <div class="history_item_name" style="bottom: 280px;">出金額</div>
        <div class="history_item_content"style="bottom: 240px;">-480</div>

        <div class="history_item_name" style="bottom: 200px;">ADJ</div>
        <div class="history_item_content"style="bottom: 160px;">0</div>

        <div class="history_item_name" style="bottom: 120px;">スワップ</div>
        <div class="history_item_content"style="bottom: 80px;">-67.51</div>

        <div class="history_item_name" style="bottom: 40px;">確定損益</div>
        <div class="history_item_content"style="bottom: 0px;">1470.32</div>

    </div>

</div>

<div class="pagenate"><< <span class="page_current">1</span>.2.3 >></div>

@endsection




@section('content_sp')



@endsection