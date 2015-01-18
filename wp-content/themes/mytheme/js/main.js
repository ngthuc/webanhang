$(document).ready(function() {

    // active menu
    page_url = window.location;
    if (page_url == site_url + '/') $("#main-menu>ul>li:first-child").addClass('active');
    else $('#main-menu ul>li>a[href="' + page_url + '"]').parent("li").addClass('active');

    // count down
    $("#clock").countdown("2015/02/18 12:00:00", function(event) {
        var $this = $(this).html(event.strftime(
            '<li class="day-wrapper"><p>%D</p><p>Ngày</p></li>'
                + '<li class="hour-wrapper"><p>%H</p><p>Giờ</p></li>'
                + '<li class="minute-wrapper"><p>%M</p><p>Phút</p></li>'
                + '<li class="second-wrapper"><p>%S</p><p>Giây</p></li>'
                + '<div style="clear: both"></div>'
        ));
    });

    // blink gift title
    i = 0;
    setInterval(function () {
        myBlink();
    }, 500);

    // Goto Top
    $('.gototop').click(function(event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $("body").offset().top
        }, 500);
    });

    // checkout form
    $("#checkout-form").submit(function() {
        alert("Đặt hàng thành công! Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất!");
        return true;
    });

    // contact form
    $("#main-contact-form").submit(function() {
        alert("Đã gửi! Chúng tôi sẽ phản hồi trong thời gian sớm nhất!");
        return true;
    });
});

// function define
function myBlink() {
    if (i == 0) {
        i = 1;
        $(".gift-link>a").css("color", "#fff");
    }
    else {
        i = 0;
        $(".gift-link>a").css("color", "#ff7f00");
    }
}