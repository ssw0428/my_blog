$(function () {
    $(document).ready(function () {
        $('#fullpage').fullpage({
            scrollBar: true,    
        });
    });
});

$(function () {
    var swiper = new Swiper('.swiper1', {
       
        autoplay: {
            delay: 8500,
            disableOnInteraction: false,
        },
        loop: true,

        pagination: {
            el: '.swiper-pagination',
            type: 'fraction',
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
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
    setTimeout(function() {
        var swiper = new Swiper('.swiper2', {
            slidesPerView: 3,
            slidesPerGroup: 3,
            loop: true,
            loopFillGroupWithBlank: true,
        }, 300);
    });
});
