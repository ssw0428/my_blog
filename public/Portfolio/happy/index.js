// $(function () {
//         alert("경고창이 발생하였습니다.");
// });

//메인 슬라이드
$(function () {
    $('.slide-bar .owl-carousel').owlCarousel({
        loop: true,
        nav: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
});

//content-1 행복소식
function TabBox__init() {
    $('[data-tab-head-item-name]').click(function () {
        var $this = $(this);
        var tabName = $this.attr('data-tab-name');
        var itemName = $this.attr('data-tab-head-item-name');
        // [for]
        // 모든 것을 숨기고
        $('[data-tab-name="' + tabName + '"]').removeClass('active');

        $('[data-tab-name="' + tabName + '"][data-tab-head-item-name="' + itemName + '"]').addClass('active');
        $('[data-tab-name="' + tabName + '"][data-tab-body-item-name="' + itemName + '"]').addClass('active');
    });
}
$(function () {
    TabBox__init();
})

//content-2-2 알림
$(function () {
    var swiper = new Swiper('.content-2-2 .swiper-container', {
        pagination: {
          el: '.swiper-pagination',
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        slidesPerView: 2,
          loop: true
      });
});

//content-5 사진
$(function () {
    var swiper = new Swiper(".content-5 .swiper-container", {
        slidesPerView: 4,
        spaceBetween: 50,
              autoplay: {
            delay: 9000,
            disableOnInteraction: false,
          },
        speed : 2000,
        pagination: {
            el: ".swiper-pagination",
            clickable: true
        },
        navigation: {
            nextEl: '.slide-arrows .swiper-button-next',
            prevEl: '.slide-arrows .swiper-button-prev'
        },
        loop: true,
        on: {
            init: function(){
                console.log('작동중입니다');
                $('.swiper-box .swiper-slide-next').next().addClass('down-ani');
            }
        }
    });
    
    swiper.on('slideChange',function(){
        console.log('슬라이드가 바뀌었습니다');
        $('.swiper-box .swiper-slide').removeClass('down-ani');
        setTimeout(function(){
            $('.swiper-box .swiper-slide-next').next().addClass('down-ani');
        }, 100)
    })
    
})