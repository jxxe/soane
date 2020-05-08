$(document).ready(function() {
    var imageSlider = $('#image-slider-ul').lightSlider({
        item: 1,
        mode: 'fade',
        loop: true,
        keyPress: true,
        controls: false,
        gallery: false,
        pager: false,
        enableDrag: false,
        onBeforeNextSlide: function() {
            captionSlider.goToNextSlide();
        },
        onBeforePrevSlide: function() {
            captionSlider.goToPrevSlide();
        }
    });

    var captionSlider = $('#caption-slider-ul').lightSlider({
        item: 1,
        mode: 'fade',
        loop: true,
        controls: false,
        gallery: false,
        pager: false,
        enableDrag: false,
        enableTouch: false,
        adaptiveHeight: true
    });

    $('.overlay-left').click(function() {
        imageSlider.goToPrevSlide();
    });

    $('.overlay-right').click(function() {
        imageSlider.goToNextSlide();
    });

    fadeSpeed = 200;

    $('.overlay-center').click(function() {
        $('#slider').fadeOut(fadeSpeed, function() {
            $('#grid').fadeIn(fadeSpeed);
        });
        $('.caption-slider').fadeOut(fadeSpeed, function() {
            $('.copyright').fadeIn(fadeSpeed);
        });
    })

    $('.grid img').click(function() {
        gridSlide = $(this).data('slide');
        imageSlider.goToSlide(gridSlide);
        captionSlider.goToSlide(gridSlide);
        $('#grid').fadeOut(fadeSpeed, function() {
            $('#slider').fadeIn(fadeSpeed);
        });
        $('.copyright').fadeOut(fadeSpeed, function() {
            $('.caption-slider').fadeIn(fadeSpeed);
        });
    })

    if($(window).width() < 700) {
        $('.menus').hide();
    }

    $(".menu-toggle").click(function(){
        $(".menus").slideToggle();
      });
});