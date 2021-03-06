@extends('layouts.v2.app')

@section('content')

<div class="div_bg header_margin pb100">
    <img src="{{ asset('img/v2/logo2.png') }}" class="head_logo" alt="">
    <div class="head_title">お問い合わせ</div>
    <div class="acount_div">
        <form id="contact_form" name="contact_form" action="{{ route('v2_contact_confirm') }}" method="post">
        @csrf
            <div class="form_flex">
                <div class="form_item">
                    <div class="form_item_name">
                        <span class="required">＊</span>お名前
                    </div>
                    {{ Form::text('name', old('name'), ['class' => 'form_text', 'maxlength' => 30, 'placeholder' => '', 'required']) }}
                </div>
                <div class="form_item">
                    <div class="form_item_name">
                        <span class="required">＊</span>お名前（ローマ字）
                    </div>
                    {{ Form::text('name_romazi', old('name_romazi'), ['class' => 'form_text', 'maxlength' => 30, 'required', 'pattern' => "^[0-9A-Za-z\-\s]+$" ]) }}
                </div>
            </div>
            <div class="form_flex">
                <div class="form_item">
                    <div class="form_item_name">
                        <span class="required">＊</span>メールアドレス
                    </div>
                    {{ Form::text('email', old('email'), ['class' => 'form_text', 'maxlength' => 30, 'placeholder' => '半角英数字(taro@fefx.com)', 'required', 'pattern' => "^[a-zA-Z0-9_.+-]+@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$" ]) }}
                </div>
                <div class="form_item">
                    <div class="form_item_name">
                        <span class="required">＊</span>お問い合わせジャンル
                    </div>
                    <select name="category" required>
                        <option value="">選択してください</option>
                        <option value="口座開設について">口座開設について</option>
                        <option value="入出金について">入出金について</option>
                        <option value="登録情報変更について">登録情報変更について</option>
                        <option value="システムについて">システムについて</option>
                        <option value="口座解約について">口座解約について</option>
                        <option value="ログインID・パスワードについて">ログインID・パスワードについて</option>
                        <option value="その他">その他</option>
                    </select>
                </div>
            </div>

            <div class="form_item_name">
                <span class="required">＊</span>お問い合わせ内容
            </div>
            <textarea name="message" required></textarea>

            <a onclick="clickContactFormButton()" class="btn_a">
                <div class="btn_purple" style="margin-top:50px;">送信する</div>
            </a>
        </form>
   </div>
</div>

@endsection




@section('content_sp')

<div class="div_bg_sp header_margin_sp padding_sp">
    <img src="{{ asset('img/v2/logo2.png') }}" class="head_logo" alt="">
    <div class="head_title">お問い合わせ</div>
    <div class="acount_div_sp">
        <form id="contact_form" name="contact_form" action="{{ route('v2_contact_confirm') }}" method="post">
        @csrf
            <div class="form_item_sp">
                <div class="form_item_name">
                    <span class="required">＊</span>お名前
                </div>
                {{ Form::text('name', old('name'), ['class' => 'form_text_sp', 'maxlength' => 30, 'required']) }}
            </div>
            <div class="form_item_sp">
                <div class="form_item_name">
                    <span class="required">＊</span>お名前（ローマ字）
                </div>
                {{ Form::text('name_romazi', old('name_romazi'), ['class' => 'form_text_sp', 'maxlength' => 30, 'required', 'pattern' => "^[0-9A-Za-z\-\s]+$" ]) }}
            </div>

            <div class="form_item_sp">
                <div class="form_item_name">
                    <span class="required">＊</span>メールアドレス
                </div>
                {{ Form::text('email', old('email'), ['class' => 'form_text_sp', 'maxlength' => 30, 'placeholder' => '半角英数字(taro@fefx.com)', 'required', 'pattern' => "^[a-zA-Z0-9_.+-]+@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$" ]) }}
            </div>
            <div class="form_item_sp">
                <div class="form_item_name">
                    <span class="required">＊</span>お問い合わせジャンル
                </div>
                <select name="category" style="width:100%;" required>
                    <option value="">選択してください</option>
                    <option value="口座開設について">口座開設について</option>
                    <option value="入出金について">入出金について</option>
                    <option value="登録情報変更について">登録情報変更について</option>
                    <option value="システムについて">システムについて</option>
                    <option value="口座解約について">口座解約について</option>
                    <option value="ログインID・パスワードについて">ログインID・パスワードについて</option>
                    <option value="その他">その他</option>
                </select>
            </div>

            <div class="form_item_name">
                <span class="required">＊</span>お問い合わせ内容
            </div>
            <textarea name="message" style="width: 100%;" required></textarea>


            <a onclick="clickContactFormButton()" class="btn_sp_a">
                <div class="btn_sp" style="margin-top:50px;">送信する</div>
            </a>
        </form>
   </div>
</div>


@endsection