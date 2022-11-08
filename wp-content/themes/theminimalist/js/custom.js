$(window).on('load', function () {
  var newdata = sessionStorage.getItem('doNotShow');

  if (newdata != '') {
    console.log("false");
    $(".loaderScreen").css("display", "none");
    $('.loaderScreen').hide();

  }
  else {
    $(".loaderScreen").css("display", "block");
    sessionStorage.setItem('doNotShow', 'true');
    setTimeout(function () {
      $('.loaderScreen').fadeOut();
    }, 1000);

  }

});


$(function () {
  $(".bannercur").mousemove(function (e) {
    $(".bannercursor").show().css({
      "left": e.clientX - 73,
      "top": e.clientY - 73
    });
  }).mouseout(function () {
    $(".bannercursor").hide();
  });
});

$("#videoFrame").html('<iframe src="https://player.vimeo.com/video/749918778?h=c9c936246d&title=0&byline=0&sidedock=0&controls=0&loop=1" width="100%" height="100%" frameborder="0" class="videoOne" id="video" allowfullscreen allow="autoplay; encrypted-media"></iframe>');
$.getScript('https://player.vimeo.com/api/player.js', function (jd) {
  var iframe = document.querySelector('#video');
  var player = new Vimeo.Player(iframe);
  // bind events

  var playButton = document.getElementById("audio-control");
  playButton.addEventListener("click", function () {
    player.play();
  });

  // var pauseButton = if ( document.getElementById("audio-control").classList.contains('removeHover') );
  var pauseButton = document.getElementById("audio-controlTwo");
  pauseButton.addEventListener("click", function () {
    player.pause();
  });
});

$(".videoHoverBox").click(function () {
  if ($(this).hasClass("removeHover")) {
    $(".videoHoverBox").removeClass("removeHover");
    sessionStorage.setItem("pausevid", "removeoffHover");
    $(".bannerVideo").removeClass("vidHover");
    $(".bannerText").removeClass("textHover");
    $(".videoOne").removeClass("videoHoverone");
    $(".videotwo").removeClass("videoHovertwo");
    $(".videoHoverBoxTwo").removeClass("vidactive");
  }
  else {
    $(".videoHoverBox").addClass("removeHover");
    sessionStorage.setItem("pausevid", "removeHover");
    $(".bannerVideo").addClass("vidHover");
    $(".bannerText").addClass("textHover");
    $(".videoOne").addClass("videoHoverone");
    $(".videotwo").addClass("videoHovertwo");
    $(".videoHoverBoxTwo").addClass("vidactive");
  }
});

$(".videoHoverBoxTwo").click(function () {
  if ($(this).hasClass("vidactive")) {
    $(".videoHoverBoxTwo").removeClass("vidactive");
    $(".videoHoverBox").removeClass("removeHover");
    $(".bannerVideo").removeClass("vidHover");
    $(".bannerText").removeClass("textHover");
    $(".videoOne").removeClass("videoHoverone");
    $(".videotwo").removeClass("videoHovertwo");
  }
  else {
    $(".videoHoverBoxTwo").addClass("vidactive");
  }
});






$('.clientSec').slick({
  dots: false,
  infinite: true,
  centerMode: true,
  autoplay: true,
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
  ]
});





$('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 3,
  slidesToScroll: 1,
  infinite: true,
  centerMode: true,
  centerPadding: '0px',
  vertical: true,
  arrows: false,
  asNavFor: '.slider-for',
  dots: false,
  focusOnSelect: true,
  verticalSwiping: true,
  responsive: [{
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
});
