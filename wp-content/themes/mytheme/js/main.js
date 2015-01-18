$(document).ready(function() {

    // count down
//    $("#clock").countdown("2015/02/18 12:00:00", function(event) {
//        var $this = $(this).html(event.strftime(
//            '<li class="day-wrapper"><p>%D</p><p>Ngày</p></li>'
//                + '<li class="hour-wrapper"><p>%H</p><p>Giờ</p></li>'
//                + '<li class="minute-wrapper"><p>%M</p><p>Phút</p></li>'
//                + '<li class="second-wrapper"><p>%S</p><p>Giây</p></li>'
//                + '<div style="clear: both"></div>'
//        ));
//    });

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