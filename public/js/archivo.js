$(document).ready(function() {
    var autoplaySlider = $('#carrusel').lightSlider({
        auto: false,
        loop: false,
        pauseOnHover: true,
        autoWidth: true,
        adaptiveHeight: false,
        slideMargin: 50,
        onBeforeSlide: function(el) {
            $('#current').text(el.getCurrentSlideCount());
        }
    });
    $('#total').text(autoplaySlider.getTotalSlideCount());
});

$(function() {
    $(window).on("scroll", function() {
        if ($(window).scrollTop() > 50) {
            $(".header-container").addClass("cambio");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
            $(".header-container").removeClass("cambio");
        }
    });
});