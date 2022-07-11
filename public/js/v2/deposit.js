// 入出金切り替えについて
let bankBtn = document.querySelector(".bank_btn");
let cryptoBtn = document.querySelector(".crypto_btn");
let withdrawBtn = document.querySelector(".withdraw_btn");
let bankDiv = document.getElementById("bank_div");
let cryptoDiv = document.getElementById("crypto_div");
let withdrawDiv = document.getElementById("withdraw_div");

let crypto1 = document.getElementById("crypto1");
let crypto2 = document.getElementById("crypto2");

let bankBtn2 = document.querySelector(".bank_btn2");
let cryptoBtn2 = document.querySelector(".crypto_btn2");
let bankDiv2 = document.getElementById("bank_div2");
let cryptoDiv2 = document.getElementById("crypto_div2");


bankBtn.addEventListener("click", function () {
    bankBtn.classList.remove("not");
    cryptoBtn.classList.add("not");
    withdrawBtn.classList.add("not");
    bankDiv.hidden = false;
    cryptoDiv.hidden = true;
    withdrawDiv.hidden = true;
});

cryptoBtn.addEventListener("click", function () {
    bankBtn.classList.add("not");
    cryptoBtn.classList.remove("not");
    withdrawBtn.classList.add("not");
    bankDiv.hidden = true;
    cryptoDiv.hidden = false;
    withdrawDiv.hidden = true;
});

withdrawBtn.addEventListener("click", function () {
    bankBtn.classList.add("not");
    cryptoBtn.classList.add("not");
    withdrawBtn.classList.remove("not");
    bankDiv.hidden = true;
    cryptoDiv.hidden = true;
    withdrawDiv.hidden = false;
});

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



function clickCryptoFormButton1() {
    crypto1.hidden = true;
    crypto2.hidden = false;
}

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


function clickBankFormButton() {
    $("#bank_div2").empty();
    $("#bank_div2").append('<div class="head_title">出金を受け付けました。</div>');
    $("#bank_div2").append('<div class="complete_text">３営業日以内に残高へ反映を致します。</div>');
    $("#bank_div2").append('<a href="/v2/" class="btn_a"><div class="btn_purple" style="margin-top:50px;">マイページTOP</div></a>');
}

function clickBankFormButtonSp() {
    $("#bank_div2").empty();
    $("#bank_div2").append('<div class="head_title_sp">出金を受け付けました。</div>');
    $("#bank_div2").append('<div class="complete_text">３営業日以内に残高へ反映を致します。</div>');
    $("#bank_div2").append('<a href="/v2/" class="btn_a_sp"><div class="btn_purple_sp" style="margin-top:50px;">マイページTOP</div></a>');
}

function clickCryptoFormButton3() {
    $("#crypto_div2").empty();
    $("#crypto_div2").append('<div class="head_title">出金を受け付けました。</div>');
    $("#crypto_div2").append('<div class="complete_text">３営業日以内に残高へ反映を致します。</div>');
    $("#crypto_div2").append('<a href="/v2/" class="btn_a"><div class="btn_purple" style="margin-top:50px;">マイページTOP</div></a>');
}

function clickCryptoFormButton3Sp() {
    $("#crypto_div2").empty();
    $("#crypto_div2").append('<div class="head_title_sp">出金を受け付けました。</div>');
    $("#crypto_div2").append('<div class="complete_text">３営業日以内に残高へ反映を致します。</div>');
    $("#crypto_div2").append('<a href="/v2/" class="btn_a_sp"><div class="btn_purple_sp" style="margin-top:50px;">マイページTOP</div></a>');
}
