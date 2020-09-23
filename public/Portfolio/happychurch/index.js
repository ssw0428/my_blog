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
// Testing media queries with jQuery
// Using matchMedia
// By Ravenous - July, 2014

(function($) {

	function mediaSize() {
		if (window.matchMedia("(max-width: 767px)").matches) {
			/* Changes when we reach the min-width  */
            $('.my-1 > .owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                center: true,
                nav: true,
                stagePadding: 100,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    }
                }
            });
		} else {
			/* Reset for CSS changes – Still need a better way to do this! */
			$("body, strong").removeAttr("style");
		}
	}

	/* Call the function */
	mediaSize();
	/* Attach the function to the resize event listener */
	window.addEventListener("resize", mediaSize, false);
})(jQuery);


//$('.my-1 > .owl-carousel').trigger('to.owl.carousel', 1, 0);