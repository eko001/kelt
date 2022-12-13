var mySwiper;

$(document).ready(function(){
    mySwiper = new Swiper('.tabSwiper', {
        slidesPerView: 'auto',
        initialSlide: 0,
        freeMode: true
    });

    var yearSwiper = new Swiper('.yearSwiper', {
        slidesPerView: 'auto',
        paginationClickable: true,
        freeMode: true,
        onClick: function(swiper){
            if(swiper.clickedIndex || swiper.clickedIndex == 0){
				console.log("swiper.clickedIndex",swiper.clickedIndex)
                $(".years .year").removeClass("active");
                $(".years .year").eq(swiper.clickedIndex).addClass("active");
                boxSwiper.slideTo(swiper.clickedIndex, 500, false);
            }
        }
    });

    var boxSwiper = new Swiper('.boxSwiper', {
        slidesPerView: 'auto',
        paginationClickable: true,
        freeMode: true,
        scrollbar: '.swiper-scrollbar',
        prevButton:'.swiperPrev',
        nextButton:'.swiperNext',
        scrollbarHide: false,
        centeredSlides: false,
        onTouchMove: function(swiper){
            $(".years .year").removeClass("active");
            $(".years .year").eq(swiper.activeIndex).addClass("active");
        },
        onTransitionEnd: function(swiper){
            $(".years .year").removeClass("active");
            $(".years .year").eq(swiper.activeIndex).addClass("active");
        }
    });

    boxSwiper.params.control = yearSwiper;
});