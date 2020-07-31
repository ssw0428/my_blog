$(function () {
    $(document).ready(function () {
        $('#fullpage').fullpage({
            scrollBar: true,
            navigation: true,

        });
    });
});

$(function () {
    var swiper = new Swiper('.swiper1', {
        autoplay: {
            delay: 8500,
            disableOnInteraction: false,
        },
        slidesPerView: 1,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
    });

    swiper.on('mousewheel', 'swiper-stage', function (e) {
        e.preventDefault();

        if (swiper) {
            return;
        }

        swiper = true;

        var deltaY = e.deltaY;

        if (deltaY == undefined) {
            deltaY = e.originalEvent.wheelDelta;
        }

        if (deltaY < 0) {
            owl.trigger('next.owl');
        } else {
            owl.trigger('prev.owl');
        }

        setTimeout(function () {
            swiper = false;
        }, slidingDuration);
    });

    $('.control-box > .nav-box > span').click(function () {
        var $clicked = $(this);

        if ($clicked.is(':last-child')) {
            alert('우');
        } else {
            alert('좌');
        }
    });
});

var SideMenuBar__hide = function () {
    $('.side-menu-bar').css('left', '');
}

var SideMenuBar__show = function () {
    $('.side-menu-bar').css('left', '0');
}

$(function () {
    var swiper = new Swiper('.swiper2', {
        slidesPerView: 3,
        slidesPerGroup: 3,
        loop: true,
        loopFillGroupWithBlank: true,
    });
});
