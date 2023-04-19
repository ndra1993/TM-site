$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
});

const slider = jQuery(".slider-nav");
slider.slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: false,
  centerMode: false,
  adaptiveHeight: true,
  infinite:true,
  vertical:true,
  verticalSwiping:true,
  focusOnSelect: true
});

slider.on('wheel', (function(e) {
  e.preventDefault();

  if (e.originalEvent.deltaY < 0) {
    jQuery(this).slick('slickNext');
  } else {
    jQuery(this).slick('slickPrev');
  }
}));






/*



$('.slider-nav').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    vertical:true,
    asNavFor: '.slider-for',
    dots: false,
    focusOnSelect: true,
    verticalSwiping:true,
    responsive: [
    {
        breakpoint: 992,
        settings: {
          vertical: false,
        }
    },
    {
      breakpoint: 768,
      settings: {
        vertical: false,
      }
    },
    {
      breakpoint: 580,
      settings: {
        vertical: false,
        slidesToShow: 3,
      }
    },
    {
      breakpoint: 380,
      settings: {
        vertical: false,
        slidesToShow: 2,
      }
    }
    ]
});*/