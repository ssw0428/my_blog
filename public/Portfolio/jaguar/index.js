
$(function () {
    var swiper = new Swiper('.swiper-1');
});

$(function () {
    var swiper = new Swiper('.swiper-2', {
        slidesPerView: 5,
        spaceBetween: 20,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        loop: true,
      });
});