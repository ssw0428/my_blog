//마우스 내릴 때 메뉴 바
var $window = $(window);
var $html = $('html');

function Window__init() {
  $window.scroll(function() {
    var scrollTop = $window.scrollTop();
    
    if ( scrollTop > 0 ) {
      $html.addClass('scroll-top-0-up');
    }
    else {
      $html.removeClass('scroll-top-0-up');
    }
  });
}

function TopBar__init() {
  var $menuBar = $('.menu-bar');
  
  $menuBar.find(' > .menu-bar ul > li').mouseenter(function() {
    var $this = $(this);
    var $subMenuBox = $this.find(' > div');
    $subMenuBox.slideDown(100);
  });
  
  $menuBar.find(' > .menu-bar ul > li').mouseleave(function() {
    var $this = $(this);
    var $subMenuBox = $this.find(' > div');
    $subMenuBox.slideUp(100);
  });
}

$(function() {
  Window__init();
  TopBar__init();
});


$(function () {
  var swiper = new Swiper('.swiper-1',{
    loop: true,
  });
  
});

$(function () {
  var swiper = new Swiper('.swiper-2', {
    slidesPerView: 5,
    spaceBetween: 20,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    loop: true,
  });
});

//두개 연동 슬라이드
function Carousel1__onTranslated() {
  $('.carousel-1 > .owl-carousel').trigger('play.owl.autoplay');

  $('.carousel-1').data('carousel-1-autoplay-status', 'Y');

  var no = $('.carousel-1 .owl-item.active > .item').attr('data-no') * 1;

  $('.carousel-2 > .owl-carousel').trigger('to.owl.carousel', [no - 1, 100]);

  $('.carousel-2 .owl-item > .item.active').removeClass('active');
  $('.carousel-2 .owl-item > .item[data-no="' + no + '"]').addClass('active');
}

function Carousel1__init() {
  // 데이터 개수 적어두기
  var totalItemNo = $('.carousel-1 .item').length;
  $('.carousel-1').data('total-items', totalItemNo);

  // 각 아이템에 번호 매기기
  $('.carousel-1 .item').each(function (index, node) {
    $(node).attr('data-no', index + 1);
  });

  $('.carousel-1 > .owl-carousel').owlCarousel({
    autoplay: false, // 오토 플레이
    loop: true, // 끝에서 다시 처음으로 시작
    dots: false,
    margin: 0,
    stagePadding: 0,
    nav: true,
    navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
    responsive: {
      0: {
        items: 1
      }
    },
    autoplayHoverPause: false,
    /* 필수 */
    onTranslated: Carousel1__onTranslated,
  });

  $('.carousel-1 .play').on('click', function () {
    $('.carousel-1 > .owl-carousel').trigger('play.owl.autoplay');

    $('.carousel-1').data('carousel-1-autoplay-status', 'Y');
  });

  $('.carousel-1 .stop').on('click', function () {
    $('.carousel-1 > .owl-carousel').trigger('stop.owl.autoplay');

    $('.carousel-1').data('carousel-1-autoplay-status', 'N');
  });
}
$(function () {
  Carousel1__init();
});

/* 캐러셀 2 */
function Carousel2__itemClicked(el) {
  var $el = $(el);

  var no = $el.attr('data-no') * 1;

  $('.carousel-2 > .owl-carousel').trigger('to.owl.carousel', [no - 1, 100]);

  var currentNo = $('.carousel-1 .owl-item.active > .item').attr('data-no') * 1;

  console.log('no : ' + no);
  console.log('currentNo : ' + currentNo);

  if (no != currentNo) {
    $('.carousel-1 > .owl-carousel').trigger('to.owl.carousel', [no - 1, 100]);
  }
}

function Carousel2__onTranslated() {
  $('.carousel-2 > .owl-carousel').trigger('play.owl.autoplay');

  $('.carousel-2').data('carousel-2-autoplay-status', 'Y');
}

function Carousel2__init() {
  // 데이터 개수 적어두기
  var totalItemNo = $('.carousel-2 .item').length;
  $('.carousel-2').data('total-items', totalItemNo);

  // 각 아이템에 번호 매기기
  $('.carousel-2 .item').each(function (index, node) {
    $(node).attr('data-no', index + 1);
  });

  $('.carousel-2 > .owl-carousel').owlCarousel({
    autoplay: false, // 오토 플레이
    loop: true, // 끝에서 다시 처음으로 시작
    margin: 0,
    dots: false,
    nav: false,
    center: true,
    navText: ['<i class="fas fa-angle-left"></i>', '<i class="fas fa-angle-right"></i>'],
    responsive: {
      0: {
        items: 4
      }
    },
    autoplayHoverPause: false,
    /* 필수 */
    onTranslated: Carousel2__onTranslated,
  });

  $('.carousel-2 .play').on('click', function () {
    $('.carousel-2 > .owl-carousel').trigger('play.owl.autoplay');

    $('.carousel-2').data('carousel-2-autoplay-status', 'Y');
  });

  $('.carousel-2 .stop').on('click', function () {
    $('.carousel-2 > .owl-carousel').trigger('stop.owl.autoplay');

    $('.carousel-2').data('carousel-2-autoplay-status', 'N');
  });
}
$(function () {
  Carousel2__init();
})

//여기서부터
function TabBox__a() {
  $('.tab-box > .head > ul > li').click(function () {
    var $clickedLi = $(this);
    var index = $clickedLi.index();

    $clickedLi.siblings('.active').removeClass('active');
    $clickedLi.addClass('active');

    var $tabBox = $clickedLi.closest('.tab-box');

    $tabBox.find('.body > ul > li').removeClass('active');
    $tabBox.find('.body > ul > li').eq(index).addClass('active');
  });

}

$(function () {
  TabBox__a();
})


function Silder__a() {
  $('body .carousel-3 > .slider-box').owlCarousel({
    navSpeed: 150,
    loop: false,
    margin: 10,
    nav: true,
    dots: false,
    slideBy: 2,
    mouseDrag: false,
    navText: ['<div class="left-btn"></div>', '<div class="right-btn"></div>'],
    responsive: {
      0: {
        items: 3
      }
    }
  });
}

$(function () {
  Silder__a();
})

//더 알아보기 슬라이드
$(function () {
  var swiper = new Swiper('.swiper-3', {
    slidesPerView: 3,
    spaceBetween: 20,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    loop: true,
  });
});
