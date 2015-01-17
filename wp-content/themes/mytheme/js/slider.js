$(document).ready(function() {
    animateTime = 1000;
    delayTime = 6000;
    countSlider = $("#slider-content>.slider-item").length;

    $("#slider-content").css("width", 100*countSlider+"%");
    $(".slider-item").css("width", 100/countSlider+"%");

    setTimeout(function() {
        $(".slider-item:first-child").animate({"margin-left":"-="+100/countSlider+"%"}, animateTime, function(){
            runSlider = setInterval(function() {sliderNext()}, delayTime);
        });
    }, delayTime);

    $(".slider-left").click(function() {
        clearInterval(runSlider);
        sliderNext();
        runSlider = setInterval(function() {sliderNext()}, delayTime);
    });

    $(".slider-right").click(function() {
        clearInterval(runSlider);
        $(".slider-item:last-child").prependTo("#slider-content");
        $(".slider-item:first-child").css("margin-left","-"+100/countSlider+"%");
        $(".slider-item:first-child").animate({"margin-left":"+="+100/countSlider+"%"}, animateTime, function() {
            runSlider = setInterval(function() {sliderNext()}, delayTime);
        });
    });
});

function sliderNext() {
    $(".slider-item:first-child").animate({"margin-left":"-="+100/countSlider+"%"}, animateTime, function() {
        $(this).appendTo("#slider-content");
        $(this).css("margin-left", "0");
    });
}