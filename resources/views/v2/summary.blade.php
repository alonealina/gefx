@extends('layouts.v2.app_user')

@section('content')
<div class="user_content_title">口座設定</div>
<div class="user_item_flex">
    <div class="user_item">
        <div class="user_item_name">口座番号</div>
        <div class="user_item_content">{{$account_number}}</div>
    </div>
    <div class="user_item">
        <div class="user_item_name">口座残高</div>
        <div class="user_item_content">3496.69</div>
    </div>
</div>
<div class="user_item_flex">
    <div class="user_item">
        <div class="user_item_name">有効証拠金</div>
        <div class="user_item_content">3496.69</div>
    </div>
    <div class="user_item">
        <div class="user_item_name">必要証拠金</div>
        <div class="user_item_content">0.00</div>
    </div>
</div>
<div class="user_item_flex">
    <div class="user_item">
        <div class="user_item_name">余剰証拠金</div>
        <div class="user_item_content">3496.69</div>
    </div>
    <div class="user_item">
        <div class="user_item_name">証拠金維持率</div>
        <div class="user_item_content">100</div>
    </div>
</div>
<div class="user_item_flex">
    <div class="user_item">
        <div class="user_item_name">ステータス</div>
        <div class="user_item_content">Active</div>
    </div>
    <div class="user_item">
    </div>
</div>


@endsection




@section('content_sp')

<div class="user_content_title">口座設定</div>

<div class="user_item_sp">
    <div class="user_item_name">口座番号</div>
    <div class="user_item_content_sp">{{$account_number}}</div>
</div>
<div class="user_item_sp">
    <div class="user_item_name">口座残高</div>
    <div class="user_item_content_sp">3496.69</div>
</div>
<div class="user_item_sp">
    <div class="user_item_name">有効証拠金</div>
    <div class="user_item_content_sp">3496.69</div>
</div>
<div class="user_item_sp">
    <div class="user_item_name">必要証拠金</div>
    <div class="user_item_content_sp">0.00</div>
</div>
<div class="user_item_sp">
    <div class="user_item_name">余剰証拠金</div>
    <div class="user_item_content_sp">3496.69</div>
</div>
<div class="user_item_sp">
    <div class="user_item_name">証拠金維持率</div>
    <div class="user_item_content_sp">100</div>
</div>
<div class="user_item_sp">
    <div class="user_item_name">ステータス</div>
    <div class="user_item_content_sp">Active</div>
</div>


@endsection