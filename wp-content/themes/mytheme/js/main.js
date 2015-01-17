$(document).ready(function() {
    //Goto Top
    $('.gototop').click(function(event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $("body").offset().top
        }, 500);
    });

    $("#checkout-form").submit(function() {
        alert("Đặt hàng thành công! Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất!");
        return true;
    });

    $("#main-contact-form").submit(function() {
        alert("Đã gửi! Chúng tôi sẽ phản hồi trong thời gian sớm nhất!");
        return true;
    });

    setInterval(function() {
        blinkLink();
    }, 500);
});

i = 0;
function blinkLink() {
    if (i == 0) {
        $(".gift-link>a").css("color","#fff");
        i = 1;
    }
    else {
        $(".gift-link>a").css("color","#FF7F00");
        i = 0;
    }
}