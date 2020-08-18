
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
//여기서부터
function TabBox__a(){
  $('.tab-box > .head > ul > li').click(function() {
      var $clickedLi = $(this);
      var index = $clickedLi.index();
      
      $clickedLi.siblings('.active').removeClass('active');
      $clickedLi.addClass('active');
      
      var $tabBox = $clickedLi.closest('.tab-box');
      
      $tabBox.find('.body > ul > li').removeClass('active');
      $tabBox.find('.body > ul > li').eq(index).addClass('active');
  });
  
}

$(function(){
  TabBox__a(); 
})


function Silder__a(){
$('.carousel-1 > .slider-box').owlCarousel({
  navSpeed:150,
  loop:false,
  margin:10,
  nav:true,
  dots:false,
  slideBy:4,
  mouseDrag:false,
  navText:['<div class="left-btn"></div>', '<div class="right-btn"></div>'],
  responsive:{
      0:{
          items:4
      }
  }
}); 
}

$(function(){
 Silder__a(); 
})