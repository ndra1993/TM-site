  $(document).ready(function () {
    $(".videoHoverBox").hover(
      function () {
        $(".bannerVideo").addClass("vidHover");
        $(".bannerText").addClass("textHover");
        $(".videoOne").addClass("videoHoverone");
        $(".videotwo").addClass("videoHovertwo");
        
      },
      function () {
        $(".bannerVideo").removeClass("vidHover");
        $(".bannerText").removeClass("textHover");
        $(".videoOne").removeClass("videoHoverone");
        $(".videotwo").removeClass("videoHovertwo");
      }
    );
  });










$(document).on('mouseover', '.videoHoverBox', function() { //selecting the document 1st will grab new content
  $(".videoOne").get(0).play(); 
}); 

//pause video on mouse leave
$(document).on('mouseleave', '.videoHoverBox', function() { 
  $(".videoOne").get(0).pause(); 
});





$('#audio-control').mouseover(function () {
  if ($("#video").prop('muted')) {
    $("#video").prop('muted', false);
    // $(this).text('Mute');
    // or toggle class, style it with a volume icon sprite, change background-position
  } else {
    $("#video").prop('muted', true);
    // $(this).text('Unmute');
  }
});





$('.clientSec').slick({
  dots: false,
  infinite: true,
  centerMode: true,
  autoplay:true,
  autoplaySpeed: 0,
  speed: 8000,
  pauseOnHover: false,
  cssEase: 'linear',
  slidesToShow: 14,
  slidesToScroll: 1,
  variableWidth: true,
  responsive: [
    {
      breakpoint: 1600,
      settings: {
        slidesToShow: 12,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 1280,
      settings: {
        slidesToShow: 10,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 6,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 560,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});



// $('#audio-control').mouseover(function(){
//   if( $("#myVideo").prop('muted') ) {
//         $("#myVideo").prop('muted', false);
//         // $(this).text('Mute');
//   } else {
//     $("#myVideo").prop('muted', true);
//     // $(this).text('Unmute');
//   }
// });


$(window).on('load', function(){
  setTimeout(function(){
      $('.loaderScreen').fadeOut();
      // $(".bodyHolder").fadeIn("slow");
  }, 5000);
});