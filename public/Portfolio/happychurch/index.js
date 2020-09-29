//메인 슬라이드
$(function () {
    $('.slide-bar .owl-carousel').owlCarousel({
        loop:true,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });
});

//notice-bar 
function NoticeBar__toggle() {
    var $btn = $('.btn-toggle-notice-bar');
    var $SubMenuSideBar = $('.sub-menu-side-bar');
    var $NoticeBarBg = $('.notice-bar-bg');

    if ($btn.hasClass('active')) {
        $btn.removeClass('active');
        $SubMenuSideBar.removeClass('active');
        $NoticeBarBg.removeClass('active');
    } else {
        $btn.addClass('active');
        $SubMenuSideBar.addClass('active');
        $NoticeBarBg.addClass('active');
    }
}

function NoticeBar__init() {
    $('.btn-toggle-notice-bar, .notice-bar-bg').click(NoticeBar__toggle);
}

$(function () {
    NoticeBar__init();
})

//btn-mobile-box-bar
function BtnMobileBoxBar__toggle() {
    var $btn = $('.btn-mobile-box-bar');
    var $SubMenuSideBar = $('.mobile-sub-menu-bar');
    var $NoticeBarBg = $('.mobile-sub-menu-bar-bg');

    if ($btn.hasClass('active')) {
        $btn.removeClass('active');
        $SubMenuSideBar.removeClass('active');
        $NoticeBarBg.removeClass('active');
    } else {
        $btn.addClass('active');
        $SubMenuSideBar.addClass('active');
        $NoticeBarBg.addClass('active');
    }
}

function BtnMobileBoxBar__init() {
    $('.btn-mobile-box-bar, .mobile-sub-menu-bar-bg').click(BtnMobileBoxBar__toggle);

    $('.mobile-sub-menu-bar>.mobile-sub-menu-box>ul>li').click(function() {
        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        }
        else {
            $(this).addClass('active');
        }
    });
    
}

$(function () {
    BtnMobileBoxBar__init();
})

//탭 바 
function TabBox1__init() {
    $('[data-tab-head-item-name-1]').click(function () {
        var $this = $(this);
        var tabName = $this.attr('data-tab-name-1');
        var itemName = $this.attr('data-tab-head-item-name-1');
        // [for]
        // 모든 것을 숨기고
        $('[data-tab-name-1="' + tabName + '"]').removeClass('active');

        $('[data-tab-name-1="' + tabName + '"][data-tab-head-item-name-1="' + itemName + '"]').addClass('active');
        $('[data-tab-name-1="' + tabName + '"][data-tab-body-item-name-1="' + itemName + '"]').addClass('active');
    });
}

$(function () {
    TabBox1__init();
});

function TabBox2__init() {
    $('[data-tab-head-item-name-2]').click(function () {
        var $this = $(this);
        var tabName = $this.attr('data-tab-name-2');
        var itemName = $this.attr('data-tab-head-item-name-2');
        // [for]
        // 모든 것을 숨기고
        $('[data-tab-name-2="' + tabName + '"]').removeClass('active');

        $('[data-tab-name-2="' + tabName + '"][data-tab-head-item-name-2="' + itemName + '"]').addClass('active');
        $('[data-tab-name-2="' + tabName + '"][data-tab-body-item-name-2="' + itemName + '"]').addClass('active');
    });
}

$(function () {
    TabBox2__init();
});

function TabBox3__init() {
    $('[data-tab-head-item-name-3]').click(function () {
        var $this = $(this);
        var tabName = $this.attr('data-tab-name-3');
        var itemName = $this.attr('data-tab-head-item-name-3');
        // [for]
        // 모든 것을 숨기고
        $('[data-tab-name-3="' + tabName + '"]').removeClass('active');

        $('[data-tab-name-3="' + tabName + '"][data-tab-head-item-name-3="' + itemName + '"]').addClass('active');
        $('[data-tab-name-3="' + tabName + '"][data-tab-body-item-name-3="' + itemName + '"]').addClass('active');
    });
}

$(function () {
    TabBox3__init();
});

//사진 슬라이드 
$(function () {
    $('.my-1 > .owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        center: true,
        nav: true,
        stagePadding: 300,
        dots: false,
        responsive: {
            0: {
                items: 3
            }
        }
    });
});

//$('.my-1 > .owl-carousel').trigger('to.owl.carousel', 1, 0);