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
          slidesPerView: 2
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


  $(function () {
      var swiper = new Swiper('.swiper3', {
          autoplay: {
              delay: 2500,
              disableOnInteraction: false,
          },
          slidesPerView: 2
      });
  });

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