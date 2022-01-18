// Carousel
$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 4000,
        autoplayHoverPause: true,
        items: 1
    })

    $('.fa-pause').css('visibility', 'visible')
    $('.fa-play').css('visibility', 'hidden')
    $("#btn1").click(function (e) {
        e.preventDefault();
        if ($(".pause-btn").attr('id') == 'btn2') {
            $(".pause-btn").attr('id', 'btn1');
            $('.owl-carousel').trigger('play.owl.autoplay');
            $('.fa-pause').css('visibility', 'visible')
            $('.fa-play').css('visibility', 'hidden')
        } else {
            $(".pause-btn").attr('id', 'btn2');
            $('.owl-carousel').trigger('stop.owl.autoplay');
            $('.fa-pause').css('visibility', 'hidden')
            $('.fa-play').css('visibility', 'visible')
        }
    });
});