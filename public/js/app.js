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
  