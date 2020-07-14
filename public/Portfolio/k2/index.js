$(function () {
    $('.main-slider > .side-bars > div').click(function () {
        var $clickedBtn = $(this);
        var $slider = $clickedBtn.closest('.main-slider');
        var isLeft = $clickedBtn.index() == 0;

        var $currnet = $slider.find('.slides > .active');
        var $post = null;

        if (isLeft) {
            $post = $currnet.prev();
        } else {
            $post = $currnet.next();
        }

        if ($post.length == 0) {
            if (isLeft) {
                $post = $slider.find('.slides > div:last-child');
            } else {
                $post = $slider.find('.slides > div:first-child');
            }
        }

        $currnet.removeClass('active');
        $post.addClass('active');
    });
});

$(function () {
    function ProdBox1__init() {
        $('.prod-box-1 > .owl-carousel').owlCarousel({
            responsive: {
                0: {
                    items: 4
                }
            },
            margin: 30,
            loop: true,
            dots: false,
            nav: true,
            navText: ['좌', '우']
        });
    }
    ProdBox1__init();

});

$(function () {
    /* 전역변수 */
    // 페이지들
    var Page__$pages;
    // 페이지 개수
    var Page__pagesCount;

    /* 초기화 함수들 */
    // 페이지 관련 요소들을 초기화 한다.
    function Page__init() {
        Page__initVars();
        Page__initElAttrs();
        Page__initSideBarMenu1Item();
        Page__initMouseWheel();
        Page__initKeyUp();
    }

    // 필수적인 전역변수들을 초기화 한다.
    function Page__initVars() {
        Page__$pages = $('.pages-box > div');
        Page__pagesCount = Page__$pages.length;
    }

    // 필수적인 엘리먼트 속성들을 초기화한다.
    function Page__initElAttrs() {
        Page__setCurrentIndex(0);
    }

    // 사이바 메뉴1 아이템을 초기화한다.
    function Page__initSideBarMenu1Item() {
        $('.side-bar > .menu-1 > ul > li').click(function () {
            var index = $(this).index();
            Page__moveTo(index);
        });
    }
    /* 휠로 움직이는 거!!!!
        function Page__initMouseWheel() {
            $('body').bind("mousewheel DOMMouseScroll", function (e) {
                var isUp = true;

                if (e.originalEvent.wheelDelta < 0) {
                    isUp = false;
                }

                if (isUp) {
                    Page__movePrev();
                } else {
                    Page__moveNext();
                }
            });
        }
    */
    function Page__initKeyUp() {
        $(window).keyup(function (e) {
            if (e.keyCode == 37 || e.keyCode == 38) {
                Page__movePrev();
            } else if (e.keyCode == 39 || e.keyCode == 40) {
                Page__moveNext();
            }
        });
    }

    /* 게터, 세터 */
    function Page__getCurrentIndex() {
        var index = $('body').attr('data-current-page-index');
        index = parseInt(index);

        return index;
    }

    function Page__setCurrentIndex(index) {
        $('body').attr('data-current-page-index', index);
    }

    function Page__getPositionLeft() {
        var pageIndex = Page__getCurrentIndex();

        return pageIndex * -100 + '%';
    }

    /* 갱신함수 */
    function Page__updateSideBarMenu1Item() {
        var pageIndex = Page__getCurrentIndex();

        $('.side-bar > .menu-1 > ul > li.active').removeClass('active');
        $('.side-bar > .menu-1 > ul > li').eq(pageIndex).addClass('active');
    }

    function Page__updatePositionLeft() {
        var newPositionLeft = Page__getPositionLeft();


        $('.pages-box').stop().animate({
            left: newPositionLeft
        }, 500);
    }

    /* 사용자 이벤트 함수 */
    function Page__moveNext() {
        var index = Page__getCurrentIndex();

        Page__moveTo(index + 1);
    }

    function Page__movePrev() {
        var index = Page__getCurrentIndex();

        Page__moveTo(index - 1);
    }

    /* 코어로직 */
    function Page__moveTo(pageIndex) {
        if (pageIndex < 0) {
            pageIndex = 0;
        } else if (pageIndex >= Page__pagesCount) {
            pageIndex = Page__pagesCount - 1;
        }

        Page__setCurrentIndex(pageIndex);

        Page__updateSideBarMenu1Item();
        Page__updatePositionLeft();
    }

    /* 초기화 실행 */
    Page__init();
});

$(function () {
    function chgVideo(yt_id) {
        $('.main_vod .player').empty().append('<iframe src="https://www.youtube.com/embed/' + yt_id + '?rel=0;amp;autoplay=1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
        $('.main_vod .button').hide();
    }
});