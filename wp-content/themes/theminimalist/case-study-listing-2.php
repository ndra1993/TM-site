<?php get_header(); /*Template Name: case studies listing two*/
?>

<body>
  <!-- Swiper -->

  <div class="swiperNew">
    <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff" class="swiper mySwiper2">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://swiperjs.com/demos/images/nature-10.jpg" />
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    <div thumbsSlider="" class="swiper mySwiper">
      <div class="swiper-wrapper swiper-list-right">
        <div class="swiper-slide">
        <h1 class="font30 fontW800 colorBlack h1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae veniam, dicta velit ut dolores perspiciatis accusamus aperiam pariatur cupiditate corporis.</h1>
        </div>
        <div class="swiper-slide">
          <h1 class="font30 fontW800 colorBlack h1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae veniam, dicta velit ut dolores perspiciatis accusamus aperiam pariatur cupiditate corporis.</h1>
        </div>
        <div class="swiper-slide">
          <h1 class="font30 fontW800 colorBlack h1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae veniam, dicta velit ut dolores perspiciatis accusamus aperiam pariatur cupiditate corporis.</h1>
        </div>
        <div class="swiper-slide">
          <h1 class="font30 fontW800 colorBlack h1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae veniam, dicta velit ut dolores perspiciatis accusamus aperiam pariatur cupiditate corporis.</h1>
        </div>
        <div class="swiper-slide">
          <h1 class="font30 fontW800 colorBlack h1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae veniam, dicta velit ut dolores perspiciatis accusamus aperiam pariatur cupiditate corporis.</h1>
        </div>
        <div class="swiper-slide">
          <h1 class="font30 fontW800 colorBlack h1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae veniam, dicta velit ut dolores perspiciatis accusamus aperiam pariatur cupiditate corporis.</h1>
        </div>
        <div class="swiper-slide">
          <h1 class="font30 fontW800 colorBlack h1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae veniam, dicta velit ut dolores perspiciatis accusamus aperiam pariatur cupiditate corporis.</h1>
        </div>
        <div class="swiper-slide">
          <h1 class="font30 fontW800 colorBlack h1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae veniam, dicta velit ut dolores perspiciatis accusamus aperiam pariatur cupiditate corporis.</h1>
        </div>
        <div class="swiper-slide">
          <h1 class="font30 fontW800 colorBlack h1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae veniam, dicta velit ut dolores perspiciatis accusamus aperiam pariatur cupiditate corporis.</h1>
        </div>
        <div class="swiper-slide">
          <h1 class="font30 fontW800 colorBlack h1">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae veniam, dicta velit ut dolores perspiciatis accusamus aperiam pariatur cupiditate corporis.</h1>
        </div>
      </div>
    </div>
  </div>



  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
      
    });

    var swiper2 = new Swiper(".mySwiper2", {
      spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      thumbs: {
        swiper: swiper,
      },
    });
  </script>
</body>

<?php get_footer(); ?>