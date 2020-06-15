function MobileSideBar__toggle() {
    var $btn = $('.btn-toggle-mobile-side-bar');

    if ( $btn.hasClass('active') ) {
        $btn.removeClass('active');
        $('.side-menu-box-1').removeClass('active');
    }
    else {
        $btn.addClass('active');
        $('.side-menu-box-1').addClass('active');
    }
}

function MobileSideBar__init() {
    $('.btn-toggle-mobile-side-bar').click(MobileSideBar__toggle);
}

$(function() {
    MobileSideBar__init();
}); 
