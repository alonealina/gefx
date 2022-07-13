let bankBtn2 = document.querySelector(".bank_btn2");
let cryptoBtn2 = document.querySelector(".crypto_btn2");
let bankDiv2 = document.getElementById("bank_div2");
let cryptoDiv2 = document.getElementById("crypto_div2");

bankBtn2.addEventListener("click", function () {
    bankBtn2.classList.remove("not");
    cryptoBtn2.classList.add("not");
    bankDiv2.hidden = false;
    cryptoDiv2.hidden = true;
});

cryptoBtn2.addEventListener("click", function () {
    bankBtn2.classList.add("not");
    cryptoBtn2.classList.remove("not");
    bankDiv2.hidden = true;
    cryptoDiv2.hidden = false;
});

function clickCryptoFormButton2() {
    $("#crypto_div").empty();
    $("#crypto_div").append('<div class="head_title">入金を受け付けました。</div>');
    $("#crypto_div").append('<div class="complete_text">３営業日以内に残高へ反映を致します。</div>');
    $("#crypto_div").append('<a href="/v2/" class="btn_a"><div class="btn_purple" style="margin-top:50px;">マイページTOP</div></a>');
}

function clickCryptoFormButton2Sp() {
    $("#crypto_div").empty();
    $("#crypto_div").append('<div class="head_title_sp">入金を受け付けました。</div>');
    $("#crypto_div").append('<div class="complete_text">３営業日以内に残高へ反映を致します。</div>');
    $("#crypto_div").append('<a href="/v2/" class="btn_a_sp"><div class="btn_purple_sp" style="margin-top:50px;">マイページTOP</div></a>');
}

function clickCryptoPaymentFormButton() {
    document.forms.crypto_payment_form.submit();
}

function clickTxidButton() {
    document.forms.txid_form.submit();
}


function clickBankWithdrawFormButton() {
    document.forms.bank_withdraw_form.submit();
}

function clickCryptoWithdrawFormButton() {
    document.forms.crypto_withdraw_form.submit();
}