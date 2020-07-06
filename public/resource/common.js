function MobileSideBar__toggle() {
    var $btn = $('.btn-toggle-mobile-side-bar');
    var $mobileSideBar = $('.mobile-side-bar');
    var $mobileSideBarBg = $('.mobile-side-bar-bg');
    var $html = $('html');

    if ($btn.hasClass('active')) {
        // 모바일 사이드 바 끄기
        $btn.removeClass('active');
        $mobileSideBar.removeClass('active');
        $mobileSideBarBg.removeClass('active');
        $html.removeClass('mobile-side-bar-actived');
    } else {
        // 모바일 사이드 바 끄기
        $btn.addClass('active');
        $mobileSideBar.addClass('active');
        $mobileSideBarBg.addClass('active');
        $html.addClass('mobile-side-bar-actived');
    }
}

$('.top-bar .menu-box-1').mouseenter(function () {
    $('.menu-box-1').css('background-color', 'white');
    $('.menu-box-1').css('color', 'black');
});

$('.menu-box-1').mouseleave(function () {
    $('.top-bar').css('background-color', '');
    $('.top-bar').css('color', '');
});

function MobileSideBar__init() {
    $('.btn-toggle-mobile-side-bar, .mobile-side-bar-bg').click(MobileSideBar__toggle);

    $('.mobile-side-bar ul > li').click(function (e) {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).addClass('active');
        }

        e.stopPropagation();
    });
}

$(function () {
    MobileSideBar__init();
});

//슬라이더 

$(function () {
    $(".main-slider > .side-bars > div").click(function () {
        var $clickedBtn = $(this);
        var $slider = $clickedBtn.parent().parent();

        var $current = $slider.find('.slides > .active');
        var $post = null;

        var isLeft = $clickedBtn.index() == 0;

        if (isLeft) {
            $post = $current.prev();
        } else {
            $post = $current.next();
        }

        if ($post.length == 0) {
            if (isLeft) {
                $post = $slider.find('.slides > div:last-child');
            } else {
                $post = $slider.find('.slides > div:first-child');
            }
        }
        $current.removeClass('active');
        $post.addClass('active');
    });


});
/*
function slideBar__move() {
    function a() {
        $('.main-slider .side-bars > div:last-child').click();
    }

    setInterval(a,4000);

}
*/

$(function() {
    slideBar__move();
});

/* 좋은 예, 시작 */
/*
$(function () {
    $('.top-bar div .menu-box-1 ul').mouseenter (function() {
        $('.top-bar > div').addClass('active');
      });
      
      $('.top-bar').mouseleave (function() {
        $('.top-bar > div').removeClass('active');
      });
});
*/

$(function() {
    $(window).scroll(function() {
        if ($(this).scrollTop() > 500) {
            $('#MOVE_TOP_BTN').fadeIn();
        } else {
            $('#MOVE_TOP_BTN').fadeOut();
        }
    });
    
    $("#MOVE_TOP_BTN").click(function() {
        $('html, body').animate({
            scrollTop : 0
        }, 400);
        return false;
    });
});



