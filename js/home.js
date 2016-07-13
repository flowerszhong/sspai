(function ($,undefined) {
    $(function () {
        var mySwiper = $('.swiper-container').swiper({
            autoplay: 5000,
            speed: 700,
            loop: true,
            slidesPerView: 'auto',
            loopedSlides: 5,
            watchActiveIndex: true,
            centeredSlides: true,
            // paginationClickable: true,
            resizeReInit: true,
            preventClicks: false,
            // grabCursor: true,
            nextButton: '.saya .swiper-next',
            prevButton: '.saya .swiper-prev'
        });
    })
})(jQuery);