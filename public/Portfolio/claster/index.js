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
        loop: true
    });
});

var SideMenuBar__hide = function() {
  $('.side-menu-bar').css('left', ''); 
}

var SideMenuBar__show = function() {
  $('.side-menu-bar').css('left', '0');
}