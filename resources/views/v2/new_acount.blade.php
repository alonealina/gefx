@extends('layouts.v2.app')

@section('content')

<div class="div_bg header_margin pb100">
    <img src="{{ asset('img/v2/logo2.png') }}" class="head_logo" alt="">
    <div class="head_title">新規口座開設</div>
    <div class="acount_div">
        <div class="acount_btn_flex">
            <div class="acount_btn indi_btn">個人口座</div>
            <div class="acount_btn corp_btn not">法人口座</div>
        </div>
        <form id="indi_form" name="indi_form" action="{{ route('v2_indi_confirm') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form_item_title">口座設定</div>
            <div class="form_line"></div>
            <div class="form_flex">
                <div class="form_item">
                    <div class="form_item_name">
                        <span class="required">＊</span>口座通貨
                    </div>
                    <select name="basic_information[currency]" required>
                        <option value selected disabled>選択してください</option>
                        <option value="USD">USD</option>
                    </select>
                </div>
                <div class="form_item">
                    <div class="form_item_name">
                        <span class="required">＊</span>取引プラットフォーム
                    </div>
                    <select name="basic_information[platform]" required>
                        <option value selected disabled>選択してください</option>
                        <option value="メタトレーダー4">メタトレーダー 4</option>
                        <option value="アフィリエイト">IB口座</option>
                    </select>
                </div>
            </div>
            <div class="form_item">
                <div class="form_item_name">
                    <span class="required">＊</span>レバレッジ
                </div>
                <select name="basic_information[leverage]" required>
                    <option value selected disabled>選択してください</option>
                    <option value="0">0</option>
                    <option value="100">100</option>
                    <option value="200">200</option>
                </select>
            </div>

            <div class="form_item_title">個人設定</div>
            <div class="form_line"></div>
            <div class="form_item_name">
                <span class="required">＊</span>お名前
            </div>
            <div class="form_flex">
                <div class="form_item">
                    <div class="form_item_name_sub">姓(ローマ字)</div>
                    {{ Form::text('primary_holder[last_name]', old('primary_holder[last_name]'), ['class' => 'form_text', 'maxlength' => 30, 'placeholder' => '半角英字(suzuki)', 'required', 'pattern' => "^[0-9A-Za-z\-]+$" ]) }}
                </div>
                <div class="form_item">
                    <div class="form_item_name_sub">名(ローマ字)</div>
                    {{ Form::text('primary_holder[first_name]', old('primary_holder[first_name]'), ['class' => 'form_text', 'maxlength' => 30, 'placeholder' => '半角英字(taro)', 'required', 'pattern' => "^[0-9A-Za-z\-]+$" ]) }}
                </div>
            </div>
            <div class="form_item">
                <div class="form_item_name">
                    <span class="required">＊</span>身分証番号(パスポート,免許等)
                </div>
                {{ Form::text('primary_holder[from]', old('primary_holder[from]'), ['class' => 'form_text', 'maxlength' => 30, 'placeholder' => '半角英数字(AB12345678)', 'required', 'pattern' => "^[0-9A-Za-z\-]+$"]) }}
            </div>
            <div class="form_flex">
                <div class="form_item">
                    <div class="form_item_name">
                        <span class="required">＊</span>身分証の有効期限
                    </div>
                    <div class="ymd_flex">
                        <select class="select_ymd" name="primary_holder[period_day]" required>
                            @include('select.day')
                        </select>
                        <select class="select_ymd" name="primary_holder[period_month]" required>
                            @include('select.month')
                        </select>
                        <select class="select_ymd" name="primary_holder[period_year]" required>
                            @include('select.period_year')
                        </select>
                    </div>
                </div>
                <div class="form_item">
                    <div class="form_item_name">
                        <span class="required">＊</span>生年月日
                    </div>
                    <div class="ymd_flex">
                        <select class="select_ymd" name="primary_holder[birth_day]" required>
                            @include('select.day')
                        </select>
                        <select class="select_ymd" name="primary_holder[birth_month]" required>
                            @include('select.month')
                        </select>
                        <select class="select_ymd" name="primary_holder[birth_year]" required>
                            @include('select.birth_year')
                        </select>
                    </div>
                </div>
            </div>
            <div class="form_item">
                <div class="form_item_name">
                    <span class="required">＊</span>国籍
                </div>
                <select name="primary_holder[country]" required>
                    @include('select.country')
                </select>
            </div>
            <div class="form_item_name">
                <span class="required">＊</span>お住まい
            </div>
            <div class="form_flex">
                <div class="form_item">
                    <div class="form_item_name_sub">都道府県</div>
                    <input class="form_text" type="text" name="primary_holder[province]" placeholder="半角英字(Tokyo-to)" pattern="^[0-9A-Za-z\-]+$" required>
                </div>
                <div class="form_item">
                    <div class="form_item_name_sub">市区町村</div>
                    <input class="form_text" type="text" name="primary_holder[city]" placeholder="半角英字(minato-ku)" pattern="^[0-9A-Za-z\-, ]+$" required>
                </div>
            </div>
            <div class="form_flex">
                <div class="form_item">
                    <div class="form_item_name_sub">番地</div>
                    <input class="form_text" type="text" name="primary_holder[address]" placeholder="半角英数字(1-2-10)" pattern="^[0-9A-Za-z\-]+$">
                </div>
                <div class="form_item">
                    <div class="form_item_name_sub">郵便番号</div>
                    <input class="form_text" type="text" name="primary_holder[zip_code]" placeholder="半角数字(123-4567)" pattern="^[0-9A-Za-z\-]+$">
                </div>
            </div>
            <div class="form_item">
                <div class="form_item_name">
                    <span class="required">＊</span>電話番号
                </div>
                <input class="form_text" type="text" name="primary_holder[phone]" placeholder="半角数字(08012345678)" pattern="^[0-9A-Za-z\-]+$" required>
            </div>
            <div class="form_item">
                <div class="form_item_name">
                    <span class="required">＊</span>メールアドレス
                </div>
                <input class="form_text" type="text" name="primary_holder[email]" placeholder="半角英数字(taro@fefx.com)" required pattern="^[a-zA-Z0-9_.+-]+@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$">
            </div>

            <div class="form_item_title">その他の情報</div>
            <div class="form_line"></div>
            <div class="form_item">
                <div class="form_item_name">紹介ブローカーコード</div>
                <input id="indi_ib_name" class="form_text" type="text" name="extra_information[ib_name]" pattern="^[0-9A-Za-z\-]+$" value="{{ $ref }}">
            </div>
            <div class="indi_ib_error"></div>
            <div class="form_item_text">米国市民権に関する情報：該当するものにチェックを入れてください</div>
            <div class="form_item_name">
                <span class="required">＊</span>米国市民権・永住権に関して: 
            </div>
            <div class="form_radio_item" style="font-size: 15px;">
                <input type="radio" name="hyouka" value="a" checked> (a) 米国市民権・永住権を保持しています (green card holder/ resident under the substantial presence test)
            </div>
            <div class="form_radio_item" style="font-size: 15px;">
                <input type="radio" name="hyouka" value="b"> (b) 出生は米国ですが市民権を放棄したため現在は米国籍ではありません ( 証明書の添付が必要となります)
            </div>
            <div class="form_radio_item" style="font-size: 15px;">
                <input type="radio" name="hyouka" value="c"> (c) 米国市民権や永住権はありません
            </div>
            <div class="form_item_text">
                必要書類のアップロード　<a href="" class="form_a">提出書類について</a>
            </div>
            <div class="form_flex">
                <div class="form_item">
                    <div class="form_item_name">
                        <span class="required">＊</span>書類の種類
                    </div>
                    <select type="text" name="backend[document_type]" required>
                        <option value="" selected disabled>選択してください</option>
                        <option value="パスポート（推奨）">パスポート（推奨）</option>
                        <option value="運転免許証">運転免許証</option>
                        <option value="身分証明書">身分証明書</option>
                        <option value="マイナンバーカード">マイナンバーカード</option>
                    </select>
                </div>
                <div class="form_item">
                    <div class="form_item_name">
                        <span class="required">＊</span>発行された国
                    </div>
                    <select name="backend[document_country]" required>
                        @include('select.country')
                    </select>
                </div>
            </div>
            <div class="form_flex">
                <div class="form_item">
                    <div class="form_item_name">添付書類選択（表面）</div>
                    <label>
                        <input type="file" id="indi_file1" accept="image/*" name="doc_id_passport" required>ファイルを選択
                    </label>
                    <p class="file_p indi_file_p1">選択されていません</p>
                    <div class="indi_error1"></div>
                </div>
                <div class="form_item">
                    <div class="form_item_name">添付書類選択</div>
                    <label>
                        <input type="file" id="indi_file2" accept="image/*" name="doc_id_residence_permit" required>ファイルを選択
                    </label>
                    <p class="file_p indi_file_p2">選択されていません</p>
                    <div class="indi_error2"></div>
                    <div class="supplement">運転免許証・身分証明書・マイナンバーカードの場合は裏面、パスポートの<br>場合は住所記載ページを添付して下さい</div>
                </div>
            </div>
            <div class="form_item">
                <div class="form_item_name">添付書類選択（裏面）</div>
                <label>
                    <input type="file" id="indi_file3" accept="image/*" name="doc_id_passport_ura" required>ファイルを選択
                </label>
                <p class="file_p indi_file_p3">選択されていません</p>
                <div class="indi_error3"></div>
                <div class="supplement">3か月以内発行の住民票、公共料金の請求書 、銀行明細書等</div>
            </div>

            <div class="check_text">
                <input type="checkbox" id="check_indi" value="1" required>
                <span>利用規則・プライバシーポリシー・リスク同意書を確認し承認した。</span>
            </div>
            <a onclick="clickIndiFormButton()" class="btn_a">
                <div class="btn_purple" style="margin-top:50px;">個人口座を申し込む</div>
            </a>
        </form>

        <form id="corp_form"  name="corp_form" action="{{ route('v2_corp_confirm') }}" method="post" enctype="multipart/form-data" hidden>
        @csrf
            <div class="form_item_title">口座設定</div>
            <div class="form_line"></div>
            <div class="form_flex">
                <div class="form_item">
                    <div class="form_item_name">
                        <span class="required">＊</span>口座通貨
                    </div>
                    <select name="basic_information[currency]" required>
                        <option value selected disabled>選択してください</option>
                        <option value="USD">USD</option>
                    </select>
                </div>
                <div class="form_item">
                    <div class="form_item_name">
                        <span class="required">＊</span>取引プラットフォーム
                    </div>
                    <select name="basic_information[platform]" required>
                        <option value selected disabled>選択してください</option>
                        <option value="メタトレーダー4">メタトレーダー 4</option>
                        <option value="アフィリエイト">IB口座</option>
                    </select>
                </div>
            </div>
            <div class="form_item">
                <div class="form_item_name">
                    <span class="required">＊</span>レバレッジ
                </div>
                <select name="basic_information[leverage]" required>
                    <option value selected disabled>選択してください</option>
                    <option value="0">0</option>
                    <option value="100">100</option>
                    <option value="200">200</option>
                </select>
            </div>

            <div class="form_item_title">法人設定</div>
            <div class="form_line"></div>
            <div class="form_flex">
                <div class="form_item">
                    <div class="form_item_name">
                        <span class="required">＊</span>会社名
                    </div>
                    {{ Form::text('company[name]', old('company[name]'), ['class' => 'form_text', 'maxlength' => 30, 'placeholder' => '半角英字(good enough fx)', 'required', 'pattern' => "^[0-9A-Za-z\-]+$" ]) }}
                </div>
                <div class="form_item">
                    <div class="form_item_name">
                        <span class="required">＊</span>法人形態
                    </div>
                    <select name="company[type_business]" required>
                        <option value="">選択して下さい</option>
                        <option value="Corporative">Corporative</option>
                        <option value="Partnership">Partnership</option>
                        <option value="Limited">Limited</option>
                        <option value="Sole Proprietor">Sole Proprietor</option>
                    </select>
                </div>
            </div>
            <div class="form_flex">
                <div class="form_item">
                    <div class="form_item_name">
                        <span class="required">＊</span>設立日
                    </div>
                    <div class="ymd_flex">
                        <select class="select_ymd" name="company[incorporation][day]" required>
                            @include('select.day')
                        </select>
                        <select class="select_ymd" name="company[incorporation][month]" required>
                            @include('select.month')
                        </select>
                        <select class="select_ymd" name="company[incorporation][year]" required>
                            @include('select.birth_year')
                        </select>
                    </div>
                </div>
                <div class="form_item">
                    <div class="form_item_name">
                        <span class="required">＊</span>登録国
                    </div>
                    <select name="company[incorporation][country]" required>
                        @include('select.country')
                    </select>
                </div>
            </div>
            <div class="form_item_name">
                <span class="required">＊</span>住所
            </div>
            <div class="form_flex">
                <div class="form_item">
                    <div class="form_item_name_sub">都道府県</div>
                    <input class="form_text" type="text" name="company[address1]" placeholder="半角英字(Tokyo-to)" pattern="^[0-9A-Za-z\-]+$" required>
                </div>
                <div class="form_item">
                    <div class="form_item_name_sub">市区町村</div>
                    <input class="form_text" type="text" name="company[address2]" placeholder="半角英字(minato-ku)" pattern="^[0-9A-Za-z\-, ]+$" required>
                </div>
            </div>
            <div class="form_flex">
                <div class="form_item">
                    <div class="form_item_name_sub">番地</div>
                    <input class="form_text" type="text" name="company[address3]" placeholder="半角英数字(1-2-10)" pattern="^[0-9A-Za-z\-]+$">
                </div>
                <div class="form_item">
                    <div class="form_item_name_sub">郵便番号</div>
                    <input class="form_text" type="text" name="company[address4]" placeholder="半角数字(123-4567)" pattern="^[0-9A-Za-z\-]+$">
                </div>
            </div>
            <div class="form_item">
                <div class="form_item_name">
                    <span class="required">＊</span>電話番号
                </div>
                <input class="form_text" type="text" name="company[phone]" placeholder="半角数字(08012345678)" pattern="^[0-9A-Za-z\-]+$" required>
            </div>
            <div class="form_item">
                <div class="form_item_name">
                    <span class="required">＊</span>メールアドレス
                </div>
                <input class="form_text" type="text" name="company[email]" placeholder="半角英数字(taro@fefx.com)" required pattern="^[a-zA-Z0-9_.+-]+@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$">
            </div>

            <div class="form_item_title">役員情報</div>
            <div class="form_line"></div>
            <div class="form_item_name">
                <span class="required">＊</span>お名前
            </div>
            <div class="form_flex">
                <div class="form_item">
                    <div class="form_item_name_sub">姓(ローマ字)</div>
                    {{ Form::text('primary_holder[last_name]', old('primary_holder[last_name]'), ['class' => 'form_text', 'maxlength' => 30, 'placeholder' => '半角英字(suzuki)', 'required']) }}
                </div>
                <div class="form_item">
                    <div class="form_item_name_sub">名(ローマ字)</div>
                    {{ Form::text('primary_holder[first_name]', old('primary_holder[first_name]'), ['class' => 'form_text', 'maxlength' => 30, 'placeholder' => '半角英字(taro)', 'required']) }}
                </div>
            </div>
            <div class="form_item">
                <div class="form_item_name">
                    <span class="required">＊</span>身分証番号(パスポート,免許等)
                </div>
                {{ Form::text('primary_holder[from]', old('primary_holder[from]'), ['class' => 'form_text', 'maxlength' => 30, 'placeholder' => '半角英数字(AB12345678)', 'required']) }}
            </div>
            <div class="form_flex">
                <div class="form_item">
                    <div class="form_item_name">
                        <span class="required">＊</span>身分証の有効期限
                    </div>
                    <div class="ymd_flex">
                        <select class="select_ymd" name="primary_holder[period_day]" required>
                            @include('select.day')
                        </select>
                        <select class="select_ymd" name="primary_holder[period_month]" required>
                            @include('select.month')
                        </select>
                        <select class="select_ymd" name="primary_holder[period_year]" required>
                            @include('select.period_year')
                        </select>
                    </div>
                </div>
                <div class="form_item">
                    <div class="form_item_name">
                        <span class="required">＊</span>生年月日
                    </div>
                    <div class="ymd_flex">
                        <select class="select_ymd" name="primary_holder[birth_day]" required>
                            @include('select.day')
                        </select>
                        <select class="select_ymd" name="primary_holder[birth_month]" required>
                            @include('select.month')
                        </select>
                        <select class="select_ymd" name="primary_holder[birth_year]" required>
                            @include('select.birth_year')
                        </select>
                    </div>
                </div>
            </div>
            <div class="form_item">
                <div class="form_item_name">
                    <span class="required">＊</span>国籍
                </div>
                <select name="primary_holder[country]" required>
                    @include('select.country')
                </select>
            </div>
            <div class="form_item_name">
                <span class="required">＊</span>お住まい
            </div>
            <div class="form_flex">
                <div class="form_item">
                    <div class="form_item_name_sub">都道府県</div>
                    <input class="form_text" type="text" name="primary_holder[province]" placeholder="半角英字(Tokyo-to)" pattern="^[0-9A-Za-z\-]+$" required>
                </div>
                <div class="form_item">
                    <div class="form_item_name_sub">市区町村</div>
                    <input class="form_text" type="text" name="primary_holder[city]" placeholder="半角英字(minato-ku)" pattern="^[0-9A-Za-z\-, ]+$" required>
                </div>
            </div>
            <div class="form_flex">
                <div class="form_item">
                    <div class="form_item_name_sub">番地</div>
                    <input class="form_text" type="text" name="primary_holder[address]" placeholder="半角英数字(1-2-10)" pattern="^[0-9A-Za-z\-]+$">
                </div>
                <div class="form_item">
                    <div class="form_item_name_sub">郵便番号</div>
                    <input class="form_text" type="text" name="primary_holder[zip_code]" placeholder="半角数字(123-4567)" pattern="^[0-9A-Za-z\-]+$">
                </div>
            </div>
            <div class="form_item">
                <div class="form_item_name">
                    <span class="required">＊</span>電話番号
                </div>
                <input class="form_text" type="text" name="primary_holder[phone]" placeholder="半角数字(08012345678)" pattern="^[0-9A-Za-z\-]+$" required>
            </div>
            <div class="form_item">
                <div class="form_item_name">
                    <span class="required">＊</span>メールアドレス
                </div>
                <input class="form_text" type="text" name="primary_holder[email]" placeholder="半角英数字(taro@fefx.com)" required pattern="^[a-zA-Z0-9_.+-]+@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$">
            </div>

            <div class="form_item_title">その他の情報</div>
            <div class="form_line"></div>
            <div class="form_item">
                <div class="form_item_name">紹介ブローカーコード</div>
                {{ Form::text('extra_information[ib_name]', $ref, ['id' => 'corp_ib_name', 'class' => 'form_text', 'maxlength' => 30, 'pattern' => "^[0-9A-Za-z\-]+$" ]) }}
            </div>
            <div class="corp_ib_error"></div>
            <div class="form_item_text">米国市民権に関する情報：該当するものにチェックを入れてください</div>
            <div class="form_item_name">
                <span class="required">＊</span>米国市民権・永住権に関して: 
            </div>
            <div class="form_radio_item" style="font-size: 15px;">
                <input type="radio" name="hyouka" value="a" checked> (a) 米国市民権・永住権を保持しています (green card holder/ resident under the substantial presence test)
            </div>
            <div class="form_radio_item" style="font-size: 15px;">
                <input type="radio" name="hyouka" value="b"> (b) 出生は米国ですが市民権を放棄したため現在は米国籍ではありません ( 証明書の添付が必要となります)
            </div>
            <div class="form_radio_item" style="font-size: 15px;">
                <input type="radio" name="hyouka" value="c"> (c) 米国市民権や永住権はありません
            </div>
            <div class="form_item_text">
                必要書類のアップロード　<a href="" class="form_a">提出書類について</a>
            </div>
            <div class="form_flex">
                <div class="form_item">
                    <div class="form_item_name">
                        <span class="required">＊</span>書類の種類
                    </div>
                    <select type="text" name="backend[document_type]" required>
                        <option value="" selected disabled>選択してください</option>
                        <option value="パスポート（推奨）">パスポート（推奨）</option>
                        <option value="運転免許証">運転免許証</option>
                        <option value="身分証明書">身分証明書</option>
                        <option value="マイナンバーカード">マイナンバーカード</option>
                    </select>
                </div>
                <div class="form_item">
                    <div class="form_item_name">
                        <span class="required">＊</span>発行された国
                    </div>
                    <select name="backend[document_country]" required>
                        @include('select.country')
                    </select>
                </div>
            </div>
            <div class="form_flex">
                <div class="form_item">
                    <div class="form_item_name">法人書類（登記簿謄本）</div>
                    <label>
                        <input type="file" id="corp_file1" accept="image/*" name="doc_id_passport" required>ファイルを選択
                    </label>
                    <p class="file_p indi_file_p1">選択されていません</p>
                    <div class="corp_error1"></div>
                </div>
                <div class="form_item">
                    <div class="form_item_name">役員の現住所確認書類</div>
                    <label>
                        <input type="file" id="corp_file2" accept="image/*" name="doc_id_residence_permit" required>ファイルを選択
                    </label>
                    <p class="file_p indi_file_p2">選択されていません</p>
                    <div class="corp_error2"></div>
                    <div class="supplement">3か月以内発行の住民票、公共料金の請求書 、銀行明細書等</div>
                </div>
            </div>


            <div class="check_text">
                <input type="checkbox" id="check_indi" value="1" required>
                <span>利用規則・プライバシーポリシー・リスク同意書を確認し承認した。</span>
            </div>
            <a onclick="clickCorpFormButton()" class="btn_a">
                <div class="btn_purple" style="margin-top:50px;">法人口座を申し込む</div>
            </a>
        </form>
    </div>
</div>

@endsection




@section('content_sp')

<div class="div_bg_sp header_margin_sp padding_sp">
    <img src="{{ asset('img/v2/logo2.png') }}" class="head_logo" alt="">
    <div class="head_title">新規口座開設</div>
    <div class="acount_div_sp">
        <div class="acount_btn_sp indi_btn">個人口座</div>
        <div class="acount_btn_sp corp_btn not">法人口座</div>
        <form id="indi_form" name="indi_form" action="{{ route('v2_indi_confirm') }}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="form_item_title">口座設定</div>
            <div class="form_line"></div>
            <div class="form_item_sp">
                <div class="form_item_name">
                    <span class="required">＊</span>口座通貨
                </div>
                <select name="basic_information[currency]" required style="width:100%;">
                    <option value selected disabled>選択してください</option>
                    <option value="USD">USD</option>
                </select>
            </div>
            <div class="form_item_sp">
                <div class="form_item_name">
                    <span class="required">＊</span>取引プラットフォーム
                </div>
                <select name="basic_information[platform]" required style="width:100%;">
                    <option value selected disabled>選択してください</option>
                    <option value="メタトレーダー4">メタトレーダー 4</option>
                    <option value="アフィリエイト">IB口座</option>
                </select>
            </div>
            <div class="form_item_sp">
                <div class="form_item_name">
                    <span class="required">＊</span>レバレッジ
                </div>
                <select name="basic_information[leverage]" required style="width:100%;">
                    <option value selected disabled>選択してください</option>
                    <option value="0">0</option>
                    <option value="100">100</option>
                    <option value="200">200</option>
                </select>
            </div>

            <div class="form_item_title">個人設定</div>
            <div class="form_line"></div>
            <div class="form_item_name">
                <span class="required">＊</span>お名前
            </div>
            <div class="form_item_sp">
                <div class="form_item_name_sub">姓(ローマ字)</div>
                {{ Form::text('primary_holder[last_name]', old('primary_holder[last_name]'), ['class' => 'form_text_sp', 'maxlength' => 30, 'placeholder' => '半角英字(suzuki)', 'required', 'pattern' => "^[0-9A-Za-z\-]+$" ]) }}
            </div>
            <div class="form_item_sp">
                <div class="form_item_name_sub">名(ローマ字)</div>
                {{ Form::text('primary_holder[first_name]', old('primary_holder[first_name]'), ['class' => 'form_text_sp', 'maxlength' => 30, 'placeholder' => '半角英字(taro)', 'required', 'pattern' => "^[0-9A-Za-z\-]+$" ]) }}
            </div>
            <div class="form_item_sp">
                <div class="form_item_name">
                    <span class="required">＊</span>身分証番号(パスポート,免許等)
                </div>
                {{ Form::text('primary_holder[from]', old('primary_holder[from]'), ['class' => 'form_text_sp', 'maxlength' => 30, 'placeholder' => '半角英数字(AB12345678)', 'required', 'pattern' => "^[0-9A-Za-z\-]+$" ]) }}
            </div>
            <div class="form_item_name" style="margin-bottom:20px;">
                <div class="form_item_name">
                    <span class="required">＊</span>身分証の有効期限
                </div>
                <div class="ymd_flex">
                    <select class="select_ymd_sp" name="primary_holder[period_day]" required>
                        @include('select.day')
                    </select>
                    <select class="select_ymd_sp" name="primary_holder[period_month]" required>
                        @include('select.month')
                    </select>
                    <select class="select_ymd_sp" name="primary_holder[period_year]" required>
                        @include('select.period_year')
                    </select>
                </div>
            </div>
            <div class="form_item_name" style="margin-bottom:20px;">
                <div class="form_item_name">
                    <span class="required">＊</span>生年月日
                </div>
                <div class="ymd_flex">
                    <select class="select_ymd_sp" name="primary_holder[birth_day]" required>
                        @include('select.day')
                    </select>
                    <select class="select_ymd_sp" name="primary_holder[birth_month]" required>
                        @include('select.month')
                    </select>
                    <select class="select_ymd_sp" name="primary_holder[birth_year]" required>
                        @include('select.birth_year')
                    </select>
                </div>
            </div>
            <div class="form_item_sp">
                <div class="form_item_name">
                    <span class="required">＊</span>国籍
                </div>
                <select name="primary_holder[country]" style="width:100%;" required>
                    @include('select.country')
                </select>
            </div>
            <div class="form_item_name">
                <span class="required">＊</span>お住まい
            </div>
            <div class="form_item_sp">
                <div class="form_item_name_sub">都道府県</div>
                <input class="form_text_sp" type="text" name="primary_holder[province]" placeholder="半角英字(Tokyo-to)" pattern="^[0-9A-Za-z\-]+$" required>
            </div>
            <div class="form_item_sp">
                <div class="form_item_name_sub">市区町村</div>
                <input class="form_text_sp" type="text" name="primary_holder[city]" placeholder="半角英字(minato-ku)" pattern="^[0-9A-Za-z\-, ]+$" required>
            </div>
            <div class="form_item_sp">
                <div class="form_item_name_sub">番地</div>
                <input class="form_text_sp" type="text" name="primary_holder[address]" placeholder="半角英数字(1-2-10)" pattern="^[0-9A-Za-z\-]+$">
            </div>
            <div class="form_item_sp">
                <div class="form_item_name_sub">郵便番号</div>
                <input class="form_text_sp" type="text" name="primary_holder[zip_code]" placeholder="半角数字(123-4567)" pattern="^[0-9A-Za-z\-]+$">
            </div>

            <div class="form_item_sp">
                <div class="form_item_name">
                    <span class="required">＊</span>電話番号
                </div>
                <input class="form_text_sp" type="text" name="primary_holder[phone]" placeholder="半角数字(08012345678)" pattern="^[0-9A-Za-z\-]+$" required>
            </div>
            <div class="form_item_sp">
                <div class="form_item_name">
                    <span class="required">＊</span>メールアドレス
                </div>
                <input class="form_text_sp" type="text" name="primary_holder[email]" placeholder="半角英数字(taro@fefx.com)" required pattern="^[a-zA-Z0-9_.+-]+@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$">
            </div>

            <div class="form_item_title">その他の情報</div>
            <div class="form_line"></div>
            <div class="form_item_sp">
                <div class="form_item_name">紹介ブローカーコード</div>
                <input id="indi_ib_name" class="form_text_sp" type="text" name="extra_information[ib_name]" pattern="^[0-9A-Za-z\-]+$" value="{{ $ref }}">
            </div>
            <div class="indi_ib_error"></div>
            <div class="form_item_name" style="margin-bottom:20px;">米国市民権に関する情報：該当するものにチェックを入れてください</div>
            <div class="form_item_name">
                　<span class="required">＊</span>米国市民権・永住権に関して: 
            </div>
            <div class="form_radio_item_sp">
                <input type="radio" name="hyouka" value="a" checked> (a) 米国市民権・永住権を保持しています (green card holder/ resident under the substantial presence test)
            </div>
            <div class="form_radio_item_sp">
                <input type="radio" name="hyouka" value="b"> (b) 出生は米国ですが市民権を放棄したため現在は米国籍ではありません ( 証明書の添付が必要となります)
            </div>
            <div class="form_radio_item_sp" style="margin-bottom:20px;">
                <input type="radio" name="hyouka" value="c"> (c) 米国市民権や永住権はありません
            </div>
            <div class="form_item_name" style="margin-bottom:30px;">
                必要書類のアップロード<br>
                <a href="" class="form_a">提出書類について</a>
            </div>

            <div class="form_item_sp">
                <div class="form_item_name">
                    <span class="required">＊</span>書類の種類
                </div>
                <select type="text" name="backend[document_type]" required style="width:100%;">
                    <option value="" selected disabled>選択してください</option>
                    <option value="パスポート（推奨）">パスポート（推奨）</option>
                    <option value="運転免許証">運転免許証</option>
                    <option value="身分証明書">身分証明書</option>
                    <option value="マイナンバーカード">マイナンバーカード</option>
                </select>
            </div>
            <div class="form_item_sp">
                <div class="form_item_name">
                    <span class="required">＊</span>発行された国
                </div>
                <select type="text" name="backend[document_country]" required style="width:100%;">
                    @include('select.country')
                </select>
            </div>

            <div class="form_item_sp">
                <div class="form_item_name">添付書類選択（表面）</div>
                <label style="display: block;width: 60%;text-align: center;">
                    <input type="file" id="indi_file1" accept="image/*" name="doc_id_passport" required>ファイルを選択
                </label>
                <p class="file_p indi_file_p1">選択されていません</p>
                <div class="indi_error1"></div>
            </div>
            <div class="form_item_sp">
                <div class="form_item_name">添付書類選択</div>
                <label style="display: block;width: 60%;text-align: center;">
                    <input type="file" id="indi_file2" accept="image/*" name="doc_id_residence_permit" required>ファイルを選択
                </label>
                <p class="file_p indi_file_p2">選択されていません</p>
                <div class="indi_error2"></div>
                <div class="supplement">運転免許証・身分証明書・マイナンバーカードの場合は裏面、パスポートの場合は住所記載ページを添付して下さい</div>
            </div>

            <div class="form_item_sp">
                <div class="form_item_name">添付書類選択（裏面）</div>
                <label style="display: block;width: 60%;text-align: center;">
                    <input type="file" id="indi_file3" accept="image/*" name="doc_id_passport_ura" required>ファイルを選択
                </label>
                <p class="file_p indi_file_p3">選択されていません</p>
                <div class="indi_error3"></div>
                <div class="supplement">3か月以内発行の住民票、公共料金の請求書 、銀行明細書等</div>
            </div>

            <div class="check_text" style="text-indent: -2em;margin-left: 2em;text-align:left;">
                <input type="checkbox" id="check_indi" value="1" required>
                <span>利用規則・プライバシーポリシー・リスク同意書を確認し承認した。</span>
            </div>
            <a onclick="clickIndiFormButton()" class="btn_sp_a">
                <div class="btn_sp" style="margin-top:30px;">個人口座を申し込む</div>
            </a>
        </form>

        <form id="corp_form"  name="corp_form" action="{{ route('v2_corp_confirm') }}" method="post" enctype="multipart/form-data" hidden>
        @csrf
            <div class="form_item_title">口座設定</div>
            <div class="form_line"></div>
            <div class="form_item_sp">
                <div class="form_item_name">
                    <span class="required">＊</span>口座通貨
                </div>
                <select name="basic_information[currency]" required style="width:100%;">
                    <option value selected disabled>選択してください</option>
                    <option value="USD">USD</option>
                </select>
            </div>
            <div class="form_item_sp">
                <div class="form_item_name">
                    <span class="required">＊</span>取引プラットフォーム
                </div>
                <select name="basic_information[platform]" required style="width:100%;">
                    <option value selected disabled>選択してください</option>
                    <option value="メタトレーダー4">メタトレーダー 4</option>
                    <option value="アフィリエイト">IB口座</option>
                </select>
            </div>
            <div class="form_item_sp">
                <div class="form_item_name">
                    <span class="required">＊</span>レバレッジ
                </div>
                <select name="basic_information[leverage]" required style="width:100%;">
                    <option value selected disabled>選択してください</option>
                    <option value="0">0</option>
                    <option value="100">100</option>
                    <option value="200">200</option>
                </select>
            </div>

            <div class="form_item_title">法人設定</div>
            <div class="form_line"></div>
            <div class="form_item_sp">
                <div class="form_item_name">
                    <span class="required">＊</span>会社名
                </div>
                {{ Form::text('company[name]', old('company[name]'), ['class' => 'form_text_sp', 'maxlength' => 30, 'placeholder' => '半角英字(good enough fx)', 'required', 'pattern' => "^[0-9A-Za-z\-]+$" ]) }}
            </div>
            <div class="form_item_sp">
                <div class="form_item_name">
                    <span class="required">＊</span>法人形態
                </div>
                <select name="company[type_business]" required style="width:100%;">
                    <option value="">選択して下さい</option>
                    <option value="Corporative">Corporative</option>
                    <option value="Partnership">Partnership</option>
                    <option value="Limited">Limited</option>
                    <option value="Sole Proprietor">Sole Proprietor</option>
                </select>
            </div>

            <div class="form_item_sp">
                <div class="form_item_name">
                    <span class="required">＊</span>設立日
                </div>
                <div class="ymd_flex">
                    <select class="select_ymd_sp" name="company[incorporation][day]" required>
                        @include('select.day')
                    </select>
                    <select class="select_ymd_sp" name="company[incorporation][month]" required>
                        @include('select.month')
                    </select>
                    <select class="select_ymd_sp" name="company[incorporation][year]" required>
                        @include('select.birth_year')
                    </select>
                </div>
            </div>
            <div class="form_item_sp">
                <div class="form_item_name">
                    <span class="required">＊</span>登録国
                </div>
                <select name="company[incorporation][country]" required style="width:100%;">
                    @include('select.country')
                </select>
            </div>

            <div class="form_item_name">
                <span class="required">＊</span>住所
            </div>
            <div class="form_item_sp">
                <div class="form_item_name_sub">都道府県</div>
                <input class="form_text_sp" type="text" name="company[address1]" placeholder="半角英字(Tokyo-to)" pattern="^[0-9A-Za-z\-]+$" required>
            </div>
            <div class="form_item_sp">
                <div class="form_item_name_sub">市区町村</div>
                <input class="form_text_sp" type="text" name="company[address2]" placeholder="半角英字(minato-ku)" pattern="^[0-9A-Za-z\-]+$" required>
            </div>
            <div class="form_item_sp">
                <div class="form_item_name_sub">番地</div>
                <input class="form_text_sp" type="text" name="company[address3]" placeholder="半角英数字(1-2-10)" pattern="^[0-9A-Za-z\-]+$" required>
            </div>
            <div class="form_item_sp">
                <div class="form_item_name_sub">郵便番号</div>
                <input class="form_text_sp" type="text" name="company[address4]" placeholder="半角数字(123-4567)" pattern="^[0-9A-Za-z\-]+$" required>
            </div>

            <div class="form_item_sp">
                <div class="form_item_name">
                    <span class="required">＊</span>電話番号
                </div>
                <input class="form_text_sp" type="text" name="company[phone]" placeholder="半角数字(08012345678)" pattern="^[0-9A-Za-z\-]+$" required>
            </div>
            <div class="form_item_sp">
                <div class="form_item_name">
                    <span class="required">＊</span>メールアドレス
                </div>
                <input class="form_text_sp" type="text" name="company[email]" placeholder="半角英数字(taro@fefx.com)" required pattern="^[a-zA-Z0-9_.+-]+@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$">
            </div>

            <div class="form_item_title">役員情報</div>
            <div class="form_line"></div>
            <div class="form_item_name">
                <span class="required">＊</span>お名前
            </div>
            <div class="form_item_sp">
                <div class="form_item_name_sub">姓(ローマ字)</div>
                {{ Form::text('primary_holder[last_name]', old('primary_holder[last_name]'), ['class' => 'form_text_sp', 'maxlength' => 30, 'placeholder' => '半角英字(suzuki)', 'required', 'pattern' => "^[0-9A-Za-z\-]+$" ]) }}
            </div>
            <div class="form_item_sp">
                <div class="form_item_name_sub">名(ローマ字)</div>
                {{ Form::text('primary_holder[first_name]', old('primary_holder[first_name]'), ['class' => 'form_text_sp', 'maxlength' => 30, 'placeholder' => '半角英字(taro)', 'required', 'pattern' => "^[0-9A-Za-z\-]+$" ]) }}
            </div>
            <div class="form_item_sp">
                <div class="form_item_name">
                    <span class="required">＊</span>身分証番号(パスポート,免許等)
                </div>
                {{ Form::text('primary_holder[from]', old('primary_holder[from]'), ['class' => 'form_text_sp', 'maxlength' => 30, 'placeholder' => '半角英数字(AB12345678)', 'required', 'pattern' => "^[0-9A-Za-z\-]+$" ]) }}
            </div>
            <div class="form_item_name" style="margin-bottom:20px;">
                <div class="form_item_name">
                    <span class="required">＊</span>身分証の有効期限
                </div>
                <div class="ymd_flex">
                    <select class="select_ymd_sp" name="primary_holder[period_day]" required>
                        @include('select.day')
                    </select>
                    <select class="select_ymd_sp" name="primary_holder[period_month]" required>
                        @include('select.month')
                    </select>
                    <select class="select_ymd_sp" name="primary_holder[period_year]" required>
                        @include('select.period_year')
                    </select>
                </div>
            </div>
            <div class="form_item_name" style="margin-bottom:20px;">
                <div class="form_item_name">
                    <span class="required">＊</span>生年月日
                </div>
                <div class="ymd_flex">
                    <select class="select_ymd_sp" name="primary_holder[birth_day]" required>
                        @include('select.day')
                    </select>
                    <select class="select_ymd_sp" name="primary_holder[birth_month]" required>
                        @include('select.month')
                    </select>
                    <select class="select_ymd_sp" name="primary_holder[birth_year]" required>
                        @include('select.birth_year')
                    </select>
                </div>
            </div>
            <div class="form_item_sp">
                <div class="form_item_name">
                    <span class="required">＊</span>国籍
                </div>
                <select name="primary_holder[country]" style="width:100%;" required>
                    @include('select.country')
                </select>
            </div>
            <div class="form_item_name">
                <span class="required">＊</span>お住まい
            </div>
            <div class="form_item_sp">
                <div class="form_item_name_sub">都道府県</div>
                <input class="form_text_sp" type="text" name="primary_holder[province]" placeholder="半角英字(Tokyo-to)" pattern="^[0-9A-Za-z\-]+$" required>
            </div>
            <div class="form_item_sp">
                <div class="form_item_name_sub">市区町村</div>
                <input class="form_text_sp" type="text" name="primary_holder[city]" placeholder="半角英字(minato-ku)" pattern="^[0-9A-Za-z\-, ]+$" required>
            </div>
            <div class="form_item_sp">
                <div class="form_item_name_sub">番地</div>
                <input class="form_text_sp" type="text" name="primary_holder[address]" placeholder="半角英数字(1-2-10)" pattern="^[0-9A-Za-z\-]+$">
            </div>
            <div class="form_item_sp">
                <div class="form_item_name_sub">郵便番号</div>
                <input class="form_text_sp" type="text" name="primary_holder[zip_code]" placeholder="半角数字(123-4567)" pattern="^[0-9A-Za-z\-]+$">
            </div>

            <div class="form_item_sp">
                <div class="form_item_name">
                    <span class="required">＊</span>電話番号
                </div>
                <input class="form_text_sp" type="text" name="primary_holder[phone]" placeholder="半角数字(08012345678)" pattern="^[0-9A-Za-z\-]+$" required>
            </div>
            <div class="form_item_sp">
                <div class="form_item_name">
                    <span class="required">＊</span>メールアドレス
                </div>
                <input class="form_text_sp" type="text" name="primary_holder[email]" placeholder="半角英数字(taro@fefx.com)" required pattern="^[a-zA-Z0-9_.+-]+@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$">
            </div>

            <div class="form_item_title">その他の情報</div>
            <div class="form_line"></div>
            <div class="form_item_sp">
                <div class="form_item_name">紹介ブローカーコード</div>
                {{ Form::text('extra_information[ib_name]', $ref, ['id' => 'corp_ib_name', 'class' => 'form_text_sp', 'maxlength' => 30, 'pattern' => "^[0-9A-Za-z\-]+$" ]) }}
            </div>
            <div class="corp_ib_error"></div>
            <div class="form_item_name" style="margin-bottom:20px;">米国市民権に関する情報：該当するものにチェックを入れてください</div>
            <div class="form_item_name">
                　<span class="required">＊</span>米国市民権・永住権に関して: 
            </div>
            <div class="form_radio_item_sp">
                <input type="radio" name="hyouka" value="a" checked> (a) 米国市民権・永住権を保持しています (green card holder/ resident under the substantial presence test)
            </div>
            <div class="form_radio_item_sp">
                <input type="radio" name="hyouka" value="b"> (b) 出生は米国ですが市民権を放棄したため現在は米国籍ではありません ( 証明書の添付が必要となります)
            </div>
            <div class="form_radio_item_sp" style="margin-bottom:20px;">
                <input type="radio" name="hyouka" value="c"> (c) 米国市民権や永住権はありません
            </div>
            <div class="form_item_name" style="margin-bottom:30px;">
                必要書類のアップロード<br>
                <a href="" class="form_a">提出書類について</a>
            </div>

            <div class="form_item_sp">
                <div class="form_item_name">
                    <span class="required">＊</span>書類の種類
                </div>
                <select type="text" name="backend[document_type]" required style="width:100%;">
                    <option value="" selected disabled>選択してください</option>
                    <option value="パスポート（推奨）">パスポート（推奨）</option>
                    <option value="運転免許証">運転免許証</option>
                    <option value="身分証明書">身分証明書</option>
                    <option value="マイナンバーカード">マイナンバーカード</option>
                </select>
            </div>
            <div class="form_item_sp">
                <div class="form_item_name">
                    <span class="required">＊</span>発行された国
                </div>
                <select name="backend[document_country]" style="width:100%;">
                    @include('select.country')
                </select>
            </div>

            <div class="form_item_sp">
                <div class="form_item_name">法人書類（登記簿謄本）</div>
                <label style="display: block;width: 60%;text-align: center;">
                    <input type="file" id="corp_file1" accept="image/*" name="doc_id_passport" required>ファイルを選択
                </label>
                <p class="file_p indi_file_p1">選択されていません</p>
                <div class="corp_error1"></div>
            </div>
            <div class="form_item_sp">
                <div class="form_item_name">役員の現住所確認書類</div>
                <label style="display: block;width: 60%;text-align: center;">
                    <input type="file" id="corp_file2" accept="image/*" name="doc_id_residence_permit" required>ファイルを選択
                </label>
                <p class="file_p indi_file_p2">選択されていません</p>
                <div class="corp_error2"></div>
                <div class="supplement">3か月以内発行の住民票、公共料金の請求書 、銀行明細書等</div>
            </div>

            <div class="check_text" style="text-indent: -2em;margin-left: 2em;text-align:left;">
                <input type="checkbox" id="check_indi" value="1" required>
                <span>利用規則・プライバシーポリシー・リスク同意書を確認し承認した。</span>
            </div>
            <a onclick="clickCorpFormButton()" class="btn_sp_a">
                <div class="btn_sp" style="margin-top:30px;">法人口座を申し込む</div>
            </a>
        </form>
    </div>
</div>



@endsection