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


//Video zoom Js starts
if ($(window).width() > 920) {
  $(".showreel-bg").click(function() {
      $(".showreel-container").toggleClass("fullscreen-video");
      $(".bannerText").toggleClass("textHover");
      if ($(".showreel-container").hasClass("fullscreen-video")) {
          var videoInitWidth = $(".showreel-container ").outerWidth();
          var bodyWidth = ($(window).width() - 100);
          var videoScale = bodyWidth / videoInitWidth;
          $(".showreel-video-block video").prop('muted', false);
          $(".showreel-video-block video").load();
          $("#cursor.showreel-video").attr('data-content', 'Close');
      } else {
          $(".showreel-video-block video").prop('muted', true);
          $("#cursor.showreel-video").attr('data-content', 'Play');
      }
  });
}

//Video zoom Js ends

/*back button and browser back js start*/
window.addEventListener("pageshow", function(event) {
  var historyTraversal = event.persisted || (typeof window.performance != "undefined" && window.performance.navigation.type === 2);
  if (historyTraversal) {
      // Handle page restore.
      //alert('refresh');
      window.location.reload();
  }
});

/*back button and browser back js end*/




// new header
function menuAction(target) {
  if (target.hasClass('opened')) {
    target.removeClass('opened');
  }
  else {
    $('.menu__list li .opened').removeClass('opened');
    target.toggleClass('opened');
  }
}
function buttonAction(target) {
  target.toggleClass('hamburgerIcon--active');
  $('.menu__list').toggleClass('open');
  $('.legalOverlay').toggleClass('openTwo');
}

$(document).ready(function () {
  $('.hamburgerIcon').on('click', function () {
    buttonAction($(this));
  });
  $('.menu__list li a').on('click', function () {
    menuAction($(this));
  });
})



