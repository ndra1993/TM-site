var galleryTop = new Swiper('.gallery-top', {
      spaceBetween: 50,
      loop: true,
      loopedSlides: 5,
      effect: 'fade',
    });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 0,
      centeredSlides: false,
      slidesPerView: 'auto',
      touchRatio: 0.2,
      mousewheel: true,
      loop: true,
      loopedSlides: 5,
      direction: 'vertical',
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      //autoplay: {
      // delay: 8000,
      //},
    });
    galleryTop.controller.control = galleryThumbs;
    galleryThumbs.controller.control = galleryTop;