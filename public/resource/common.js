// 토스트 에디어 플러그인 시작
// 유튜브 플러그인 시작
function youtubePlugin() {
    toastui.Editor.codeBlockManager.setReplacer("youtube", function (youtubeId) {
        // Indentify multiple code blocks
        const wrapperId = "yt" + Math.random().toString(36).substr(2, 10);

        // Avoid sanitizing iframe tag
        setTimeout(renderYoutube.bind(null, wrapperId, youtubeId), 0);

        return '<div id="' + wrapperId + '"></div>';
    });
}

function renderYoutube(wrapperId, youtubeId) {
    const el = document.querySelector('#' + wrapperId);

    var urlParams = getUrlParams(youtubeId);

    var width = '100%';
    var height = '100%';

    if (urlParams.width) {
        width = urlParams.width;
    }

    if (urlParams.height) {
        height = urlParams.height;
    }

    var maxWidth = 500;

    if (urlParams['max-width']) {
        maxWidth = urlParams['max-width'];
    }

    var ratio = '16-9';

    if (urlParams['ratio']) {
        ratio = urlParams['ratio'];
    }

    var marginLeft = 'auto';

    if (urlParams['margin-left']) {
        marginLeft = urlParams['margin-left'];
    }

    var marginRight = 'auto';

    if (urlParams['margin-right']) {
        marginRight = urlParams['margin-right'];
    }

    if (youtubeId.indexOf('?') !== -1) {
        var pos = youtubeId.indexOf('?');
        youtubeId = youtubeId.substr(0, pos);
    }

    el.innerHTML = '<div style="max-width:' + maxWidth + 'px; margin-left:' + marginLeft + '; margin-right:' + marginRight + ';" class="ratio-' + ratio + ' relative"><iframe class="abs-full" width="' + width + '" height="' + height + '" src="https://www.youtube.com/embed/' + youtubeId + '" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>';
}
// 유튜브 플러그인 끝

// repl 플러그인 시작
function replPlugin() {
    toastui.Editor.codeBlockManager.setReplacer("repl", function (replUrl) {
        var postSharp = "";
        if (replUrl.indexOf('#') !== -1) {
            var pos = replUrl.indexOf('#');
            postSharp = replUrl.substr(pos);
            replUrl = replUrl.substr(0, pos);
        }

        if (replUrl.indexOf('?') === -1) {
            replUrl += "?dummy=1";
        }

        replUrl += "&lite=true";
        replUrl += postSharp;

        // Indentify multiple code blocks
        const wrapperId = `yt${Math.random().toString(36).substr(2, 10)}`;

        // Avoid sanitizing iframe tag
        setTimeout(renderRepl.bind(null, wrapperId, replUrl), 0);

        return "<div id=\"" + wrapperId + "\"></div>";
    });
}

function renderRepl(wrapperId, replUrl) {
    const el = document.querySelector(`#${wrapperId}`);

    var urlParams = getUrlParams(replUrl);

    var height = 400;

    if (urlParams.height) {
        height = urlParams.height;
    }

    el.innerHTML = '<iframe height="' + height + 'px" width="100%" src="' + replUrl + '" scrolling="no" frameborder="no" allowtransparency="true" allowfullscreen="true" sandbox="allow-forms allow-pointer-lock allow-popups allow-same-origin allow-scripts allow-modals"></iframe>';
}
// repl 플러그인 끝

// codepen 플러그인 시작
function codepenPlugin() {
    toastui.Editor.codeBlockManager.setReplacer("codepen", function (codepenUrl) {
        // Indentify multiple code blocks
        const wrapperId = `yt${Math.random().toString(36).substr(2, 10)}`;

        // Avoid sanitizing iframe tag
        setTimeout(renderCodepen.bind(null, wrapperId, codepenUrl), 0);

        return '<div id="' + wrapperId + '"></div>';
    });
}

function renderCodepen(wrapperId, codepenUrl) {
    const el = document.querySelector(`#${wrapperId}`);

    var urlParams = getUrlParams(codepenUrl);

    var height = 400;

    if (urlParams.height) {
        height = urlParams.height;
    }

    var width = '100%';

    if (urlParams.width) {
        width = urlParams.width;
    }

    if (!isNaN(width)) {
        width += 'px';
    }

    if (codepenUrl.indexOf('#') !== -1) {
        var pos = codepenUrl.indexOf('#');
        codepenUrl = codepenUrl.substr(0, pos);
    }

    el.innerHTML = '<iframe height="' + height + '" style="width: ' + width + ';" scrolling="no" title="" src="' + codepenUrl + '" frameborder="no" allowtransparency="true" allowfullscreen="true"></iframe>';
}
// repl 플러그인 끝
// 토스트 에디어 플러그인 시작

// lib 시작
String.prototype.replaceAll = function (org, dest) {
    return this.split(org).join(dest);
}

function getUrlParams(url) {
    url = url.trim();
    url = url.replaceAll('&amp;', '&');
    if (url.indexOf('#') !== -1) {
        var pos = url.indexOf('#');
        url = url.substr(0, pos);
    }

    var params = {};

    url.replace(/[?&]+([^=&]+)=([^&]*)/gi, function (str, key, value) {
        params[key] = value;
    });
    return params;
}
// lib 끝

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

$(function () {
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

//top btn
$(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $('#MOVE_TOP_BTN').fadeIn();
        } else {
            $('#MOVE_TOP_BTN').fadeOut();
        }
    });

    $("#MOVE_TOP_BTN").click(function () {
        $('html, body').animate({
            scrollTop: 0
        }, 400);
        return false;
    });
});
/*
//스크롤 내릴 때 한페이지씩 나오게 하기
window.onload = function () {
    var elm = ".box";
    $(elm).each(function (index) {
        // 개별적으로 Wheel 이벤트 적용
        $(this).on("mousewheel DOMMouseScroll", function (e) {
            e.preventDefault();
            var delta = 0;
            if (!event) event = window.event;
            if (event.wheelDelta) {
                delta = event.wheelDelta / 120;
                if (window.opera) delta = -delta;
            } 
            else if (event.detail)
                delta = -event.detail / 3;
            var moveTop = $(window).scrollTop();
            var elmSelecter = $(elm).eq(index);
            // 마우스휠을 위에서 아래로
            if (delta < 0) {
                if ($(elmSelecter).next() != undefined) {
                    try{
                        moveTop = $(elmSelecter).next().offset().top;
                    }catch(e){}
                }
            // 마우스휠을 아래에서 위로
            } else {
                if ($(elmSelecter).prev() != undefined) {
                    try{
                        moveTop = $(elmSelecter).prev().offset().top;
                    }catch(e){}
                }
            }
             
            // 화면 이동 0.8초(800)
            $("html,body").stop().animate({
                scrollTop: moveTop + 'px'
            }, {
                duration: 800, complete: function () {
                }
            });
        });
    });
};
*/

//그리드
var $grid = $('.grid');

$grid.masonry({
    itemSelector: 'li'
});

$grid.imagesLoaded().progress(function () {
    $grid.masonry('layout');
});

$(function () {
    AOS.init();
});


//스크롤

var $window = $(window);
var $html = $('html');

function Window__init() {
    $window.scroll(function () {
        var scrollTop = $window.scrollTop();

        if (scrollTop > 0) {
            $html.addClass('scroll-top-0-up');
        } else {
            $html.removeClass('scroll-top-0-up');
        }
    });
}

$(function () {
    Window__init();
});

//블로그 첫화면 나올 때 쓰는 엑티브
$(function () {
    setTimeout(function () {
        $('.main-logo').addClass('active');
    }, 1000);

    setTimeout(function () {
        $('.main-logo').addClass('active-1');
    }, 1100);

    setTimeout(function () {
        $('.top-bar>div>.menu-box-1').addClass('active');
    }, 1100);
});
