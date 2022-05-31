function clickContactButton() {
    var input_name = document.querySelector("input[name=name]");
    var input_mail = document.querySelector("input[name=mail]");
    var input_title = document.querySelector("input[name=title]");
    var input_message = document.querySelector("textarea[name=message]");
    var name_value = input_name.value;
    var mail_value = input_mail.value;
    var title_value = input_title.value;
    var message_value = input_message.value;

    if (!name_value) {
        input_name.style.backgroundColor = '#FFDFDF';
    } else {
        input_name.style.backgroundColor = '#FFF';
    }
    if (!mail_value) {
        input_mail.style.backgroundColor = '#FFDFDF';
    } else {
        input_mail.style.backgroundColor = '#FFF';
    }
    if (!title_value) {
        input_title.style.backgroundColor = '#FFDFDF';
    } else {
        input_title.style.backgroundColor = '#FFF';
    }
    if (!message_value) {
        input_message.style.backgroundColor = '#FFDFDF';
    } else {
        input_message.style.backgroundColor = '#FFF';
    }

    if (name_value && mail_value && title_value && message_value) {
        $(".contact_div").empty();
        $(".contact_div").append('<div class="title_orange">CONTACT</div><div class="send_comp">お問い合わせを受け付けました</div>');

    } else {
        document.getElementById("error_message").innerHTML = "不足している項目があります";
    }
}

// 口座種類切り替えについて
let indiBtn = document.querySelector(".indi_btn");
let corpBtn = document.querySelector(".corp_btn");
let indiForm = document.getElementById("indi_form");
let corpForm = document.getElementById("corp_form");

indiBtn.addEventListener("click", function () {
    indiBtn.classList.remove("not");
    corpBtn.classList.add("not");
    indiForm.hidden = false;
    corpForm.hidden = true;
});

corpBtn.addEventListener("click", function () {
    indiBtn.classList.add("not");
    corpBtn.classList.remove("not");
    indiForm.hidden = true;
    corpForm.hidden = false;
});

$('input[name="indi_copy_img1"]').on('change', function () {
    var file = $(this).prop('files')[0];
    $('.indi_file_p1').text(file.name);
});

$('input[name="indi_copy_img2"]').on('change', function () {
    var file = $(this).prop('files')[0];
    $('.indi_file_p2').text(file.name);
});

$('input[name="indi_copy_img3"]').on('change', function () {
    var file = $(this).prop('files')[0];
    $('.indi_file_p3').text(file.name);
});

// 仮処理
function clickIndiFormButton() {
    $(".acount_div").empty();
    $(".acount_div").append('<div class="head_title">ご登録ありがとうございました。</div>');
    $(".acount_div").append('<div class="complete_text">口座申請いただき、誠にありがとうございます。<br>２営業日以内にメールにてご連絡致します</div>');
    $(".acount_div").append('<a href="/" class="btn_a"><div class="btn_purple" style="margin-top:50px;">TOPページ</div></a>');
}

function clickIndiFormButtonSp() {
    $(".acount_div_sp").empty();
    $(".acount_div_sp").append('<div class="head_title">ご登録ありがとうございました。</div>');
    $(".acount_div_sp").append('<div class="complete_text">口座申請いただき、誠にありがとうございます。<br>２営業日以内にメールにてご連絡致します</div>');
    $(".acount_div_sp").append('<a href="/" class="btn_sp_a"><div class="btn_sp" style="margin-top:50px;">TOPページ</div></a>');
}

function clickDemoFormButton() {
    $(".acount_div").empty();
    $(".acount_div").append('<div class="head_title">ご登録ありがとうございました。</div>');
    $(".acount_div").append('<div class="complete_text">デモ口座申請いただき、誠にありがとうございます。<br>２営業日以内にメールにてご連絡致します</div>');
    $(".acount_div").append('<a href="/" class="btn_a"><div class="btn_purple" style="margin-top:50px;">TOPページ</div></a>');
}

function clickDemoFormButtonSp() {
    $(".acount_div_sp").empty();
    $(".acount_div_sp").append('<div class="head_title">ご登録ありがとうございました。</div>');
    $(".acount_div_sp").append('<div class="complete_text">デモ口座申請いただき、誠にありがとうございます。<br>２営業日以内にメールにてご連絡致します</div>');
    $(".acount_div_sp").append('<a href="/" class="btn_sp_a"><div class="btn_sp" style="margin-top:50px;">TOPページ</div></a>');
}

function clickContactFormButton() {
    $(".acount_div").empty();
    $(".acount_div").append('<div class="head_title">お問い合わせを受け付けました。</div>');
    $(".acount_div").append('<div class="complete_text">３営業日以内にメールにてご連絡致します</div>');
    $(".acount_div").append('<a href="/" class="btn_a"><div class="btn_purple" style="margin-top:50px;">TOPページ</div></a>');
}

function clickContactFormButtonSp() {
    $(".acount_div_sp").empty();
    $(".acount_div_sp").append('<div class="head_title">お問い合わせを受け付けました。</div>');
    $(".acount_div_sp").append('<div class="complete_text">３営業日以内にメールにてご連絡致します</div>');
    $(".acount_div_sp").append('<a href="/" class="btn_sp_a"><div class="btn_sp" style="margin-top:50px;">TOPページ</div></a>');
}


