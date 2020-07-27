  $(function () {
      var swiper = new Swiper('.swiper1', {
          autoplay: {
              delay: 2500,
              disableOnInteraction: false,
          },
          pagination: {
              el: '.swiper-pagination',
              type: 'progressbar',
          },
          navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
          },
          slidesPerView: 2,
          loop: true
      });
  });

  $(function () {
      $(document).ready(function () {
          // Swiper: Slider
          new Swiper('.swiper2', {
              autoplay: {
                  delay: 2500,
                  disableOnInteraction: false,
              },

              loop: true,
              nextButton: '.swiper-button-next',
              prevButton: '.swiper-button-prev',
              slidesPerView: 5,
              paginationClickable: true,
              spaceBetween: 20,
              breakpoints: {
                  1920: {
                      slidesPerView: 5,
                      spaceBetween: 30
                  },
                  1028: {
                      slidesPerView: 2,
                      spaceBetween: 30
                  },
                  480: {
                      slidesPerView: 1,
                      spaceBetween: 10
                  }
              }
          });
      });
  });

  //swiper 슬라이더 3
  $(function () {
      var swiper = new Swiper('.swiper3', {
          autoplay: {
              delay: 2500,
              disableOnInteraction: false,
          },
          slidesPerView: 2,
          loop: true
      });
  });

  //swiper 슬라이더 4
  $(function () {
      $(document).ready(function () {
          // Swiper: Slider
          new Swiper('.swiper4', {
              autoplay: {
                  delay: 2500,
                  disableOnInteraction: false,
              },

              loop: true,
              nextButton: '.swiper-button-next',
              prevButton: '.swiper-button-prev',
              slidesPerView: 4,
              paginationClickable: true,
              spaceBetween: 20,
              breakpoints: {
                  1920: {
                      slidesPerView: 4,
                      spaceBetween: 30
                  },
                  1028: {
                      slidesPerView: 2,
                      spaceBetween: 30
                  },
                  480: {
                      slidesPerView: 1,
                      spaceBetween: 10
                  }
              }
          });
      });
  });

  //swiper 슬라이더 5
  $(function () {
      var swiper = new Swiper('.swiper5', {
          autoplay: {
              delay: 2500,
              disableOnInteraction: false,
          },
          loop: true,
          slidesPerView: 3,
          paginationClickable: true
      });
  });

  //슬릭 슬라이더
  $(function () {
      $('.slider-single').slick({
          slidesToShow: 1,
          slidesToScroll: 1,
          arrows: true,
          fade: false,
          adaptiveHeight: true,
          infinite: false,
          useTransform: true,
          speed: 400,
          cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
      });

      $('.slider-nav')
          .on('init', function (event, slick) {
              $('.slider-nav .slick-slide.slick-current').addClass('is-active');
          })
          .slick({
              slidesToShow: 7,
              slidesToScroll: 7,
              dots: false,
              focusOnSelect: false,
              infinite: false,
              responsive: [{
                  breakpoint: 1024,
                  settings: {
                      slidesToShow: 5,
                      slidesToScroll: 5,
                  }
              }, {
                  breakpoint: 640,
                  settings: {
                      slidesToShow: 4,
                      slidesToScroll: 4,
                  }
              }, {
                  breakpoint: 420,
                  settings: {
                      slidesToShow: 3,
                      slidesToScroll: 3,
                  }
              }]
          });

      $('.slider-single').on('afterChange', function (event, slick, currentSlide) {
          $('.slider-nav').slick('slickGoTo', currentSlide);
          var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
          $('.slider-nav .slick-slide.is-active').removeClass('is-active');
          $(currrentNavSlideElem).addClass('is-active');
      });

      $('.slider-nav').on('click', '.slick-slide', function (event) {
          event.preventDefault();
          var goToSingleSlide = $(this).data('slick-index');

          $('.slider-single').slick('slickGoTo', goToSingleSlide);
      });
  });

  $(function () {
      $(document).ready(function () {
          // Swiper: Slider
          new Swiper('.swiper6', {
              autoplay: {
                  delay: 2500,
                  disableOnInteraction: false,
              },

              loop: true,
              nextButton: '.swiper-button-next',
              prevButton: '.swiper-button-prev',
              slidesPerView: 3,
              paginationClickable: true,
              spaceBetween: 20,
              breakpoints: {
                  1920: {
                      slidesPerView: 3,
                      spaceBetween: 30
                  },
                  1028: {
                      slidesPerView: 2,
                      spaceBetween: 30
                  },
                  480: {
                      slidesPerView: 1,
                      spaceBetween: 10
                  }
              }
          });
      });
  });


  $(function () {
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

      function TopBar__init() {
          var $topBar = $('.top-menu-box');

          $topBar.find(' > .inner > ul > li').mouseenter(function () {
              var $this = $(this);
              var $subMenuBox = $this.find(' > .inner3');
              $subMenuBox.slideDown(100);
          });

          $topBar.find(' > .inner > ul > li').mouseleave(function () {
              var $this = $(this);
              var $subMenuBox = $this.find(' > .inner3');
              $subMenuBox.slideUp(100);
          });
      }

      $(function () {
          Window__init();
          TopBar__init();
      });
  });