
/* swiper */ 
let appendNumber = 600;
      let prependNumber = 1;
      const swiper = new Swiper('.swiper', {
        slidesPerView: 3,
        centeredSlides: true,
        spaceBetween: 30,
        pagination: {
          el: '.swiper-pagination',
          type: 'fraction',
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        
        },
      );

      document
        .querySelector('.slide-1')
        .addEventListener('click', function (e) {
          e.preventDefault();
          swiper.slideTo(0, 0);
        });

      document
        .querySelector('.slide-4')
        .addEventListener('click', function (e) {
          e.preventDefault();
          swiper.slideTo(3, 0);
        });

      document
        .querySelector('.slide-7')
        .addEventListener('click', function (e) {
          e.preventDefault();
          swiper.slideTo(6, 0);
        });
