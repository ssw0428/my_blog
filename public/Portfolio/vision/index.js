window.addEventListener('load', function (event) {
  AOS.init();
});

// 스크롤 옵셋
function scrollOffset__init() {
  $(".btn-scroll-offset").each(function (index, node) {
    var $node = $(node);

    var offsetTop = $node.offset().top;
    $node.attr("data-AOV-offsetTop", offsetTop);
      
    if (!$node.attr("data-AOV-diff-y")) {
      $node.attr("data-AOV-diff-y", "0");
    }
  });
}

function btnScroll__init(){
    $('.main-menu-bar > .inner > .width-size > ul > li > a > span').click(function(){
        var $this = $(this);
        var $list = $this.closest('li');
        var $listHead = parseInt($list.attr('data-list-head'));
        var $listIndex = parseInt($list.attr('data-list'));
        
        var $section = $('.wrap').find('[data-list-body="'+ $listHead +'"][data-list="'+ $listIndex +'"]');
        var $sectionOffsetTop = parseInt($section.attr('data-AOV-offsetTop'));
        var $sectionDiff = parseInt($section.attr('data-AOV-diff-y'));
        var scrollValue = $sectionOffsetTop + $sectionDiff;
        
        console.log(scrollValue);
        
        $('html,body').stop().animate({
            scrollTop : scrollValue + 'px'
        }, 1000);
    })
}

function click__init(){
    $('.btn-box > ul > li:first-child').click(function(){
        $('.box').css('height', 800 + 'px');
    })
    $('.btn-box > ul > li:last-child').click(function(){
        $('.box').css('height', 300 + 'px');
    })
    
    $('.btn-resize').click(scrollOffset__init);
}

$(function () {
  scrollOffset__init();
  $(window).resize(scrollOffset__init);
  btnScroll__init();
  click__init();
});


function swiper__init() {
  // 메인 슬라이드
  var swiper1 = new Swiper('.main-slide', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });





  //content-2 사진 슬라이드
  var swiper2 = new Swiper(".slide2", {
    slidesPerView: 4,
    spaceBetween: 50,
    autoplay: {
      delay: 9000,
      disableOnInteraction: false,
    },
    speed: 2000,
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
      init: function () {
        console.log('작동중입니다');
        $('.swiper-box .swiper-slide-next').next().addClass('down-ani');
      }
    }
  });

  swiper2.on('slideChange', function () {
    console.log('슬라이드가 바뀌었습니다');
    $('.swiper-box .swiper-slide').removeClass('down-ani');
    setTimeout(function () {
      $('.swiper-box .swiper-slide-next').next().addClass('down-ani');
    }, 100)
  })


}


// content-1 탭박스
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


    var tab3 = tabName == 'box-1' && itemName == '3';
    var tab4 = tabName == 'box-2' && itemName == '2';

    if (tab3) {
      console.log('i am here');
      var swiper3 = new Swiper('.slide1', {
        slidesPerView: 3,
        spaceBetween: 30,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
      });
    }

    if (tab4) {
      console.log('i am here');
      var swiper4 = new Swiper('.slide3', {
        slidesPerView: 5,
        spaceBetween: 30,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
      });
    }

  });
}


$(function () {
  swiper__init();
  TabBox__init();
})

function Pop1__open(client, title, url) {
  $('.pop-1-bg').addClass('active');
  var $pop1 = $('.pop-1');

  $pop1.find('.client').text(client);
  $pop1.find('.title').text(title);
  $pop1.find('.img-boxs').html('<img src="' + url + '" controls="" autoplay="" muted></video>');
}

function Pop1__close() {
  $('.pop-1-bg').removeClass('active');
  var $pop1 = $('.pop-1');

  $pop1.find('.client').text('');
  $pop1.find('.title').text('');
  $pop1.find('.img-boxs').html('');
}

function Pop1__init() {
  $('.pop-1 .btn-close, .pop-1-bg').click(Pop1__close);
}

$(function () {
  Pop1__init();
})

function box__init() {
  $('.hover-box .item').mouseenter(function () {
    var $this = $(this);
    var $boxItem = $this.closest('.hover-box').find('.item');
    $boxItem.removeClass('on');
    $boxItem.addClass('off');
    $this.removeClass('off');
    $this.addClass('on');
  })
}

$(function () {
  box__init();
})