/*$(window).on('load', function(){
  setTimeout(function(){
      $('.loaderScreen').fadeOut();
      $('.logoBox').addClass('expandnew');
    $('.homeBox').addClass('expandnewOne');
    $('.bannerText').addClass('expand');
    $('.showreel-container').addClass('expandnewOne');
      // $(".bodyHolder").fadeIn("slow");
  }, 100);
  $(document).ready(function () {
    $('.logoBox').addClass('expandnew');
    $('.homeBox').addClass('expandnewOne');
    $('.bannerText').addClass('expand');
    $('.showreel-container').addClass('expandnewOne');
});
 
      

});*/
/*$(document).ready(function() {
    $(window).load(function() {
     
        if ( ! sessionStorage.getItem( 'doNotShow' ) ) {
            sessionStorage.setItem( 'doNotShow', 'true' );
           $(".loaderScreen"). css("display", "block");
        } else {
           $ ('.loader, .preloader').hide();
        }
    });
});
*/

/*
$(window).on('load', function () {
  var newdata = sessionStorage.getItem('doNotShow');

  if (newdata != '') {
    // console.log("false");
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
*/


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






/*jQuery('.clientSec').slick({
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





jQuery('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
jQuery('.slider-nav').slick({
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
});*/


//Video zoom Js starts
if ($(window).width() > 1024) {
  $(".showreel-bg").click(function () {
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
function GoBackWithRefresh(event) {
  if ('referrer' in document) {
    window.location = document.referrer;
    /* OR */
    //location.replace(document.referrer);
  } else {
    window.history.back();
  }
}

var perfEntries = performance.getEntriesByType("navigation");

if (perfEntries[0].type === "back_forward") {
  location.reload(true);
}

/*back button and browser back js end*/







// wow js
if ($(window).width() > 1024) {
  wow = new WOW({
    animateClass: 'animated',
    offset: 100,
    // callback: function(box) {
    //     console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
    // }
  });
  wow.init();

}



// active menu js
$(document).ready(function () {
  $('.menu__list li').click(function () {
    $('.menu__list li').removeClass("active");
    $(this).addClass("active");
  });
});



// active class for case study details last section js starts

if ($(window).width() > 1024) {
  $(document).ready(function () {
    $('.relatedBoxone').hover(function () {
      $(".relatedBoxone").toggleClass("active");
    });
  });
  
  $(document).ready(function () {
    $('.relatedBoxtwo').hover(function () {
      $(".relatedBoxtwo").toggleClass("activeTwo");
    });
  });
}

// active class for case study details last section js ends


// service page tabs toggle js starts

const buttons = document.querySelectorAll("button");
const sections = document.querySelectorAll(".content");


buttons.forEach((btn) => {
  btn.addEventListener("click", () => {
    buttons.forEach((btn) => {
      btn.classList.remove("active");
    });
    btn.classList.add("active");
    const id = btn.id;
    sections.forEach((section) => {
      section.classList.remove("active");
    });
    const req = document.getElementsByClassName(`content${id}`);
    req[0].classList.add("active");
  })
})

// service page tabs toggle js ends


// service page tab shrink on scroll js starts

$(function () {
  //the shrinkHeader variable is where you tell the scroll effect to start.
  var shrinkHeader = 1;
  $(window).scroll(function () {
    var scroll = getCurrentScroll();
    if (scroll >= shrinkHeader) {
      $('header').addClass('header-up');
      $('.tabs').addClass('smaller');
      $('.content').addClass('smallertwo');
      
    } else {
      $('header').removeClass('header-up');
      $('.tabs').removeClass('smaller');
      $('.content').removeClass('smallertwo');

    }
  });

  function getCurrentScroll() {
    return window.pageYOffset || document.documentElement.scrollTop;
  }
});
  // service page tab shrink on scroll js ends


  // top btn js for mbl
if ($(window).width() < 1024) {
  var btn = $('#button');

  $(window).scroll(function () {
    if ($(window).scrollTop() > 100) {
      btn.addClass('show');
    } else {
      btn.removeClass('show');
    }
  });

  btn.on('click', function (e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: 0 }, '100');
  });
}

//pankaj new js start//
//case study details js //
$.fn.isInViewport = function () {
  var elementTop = $(this).offset().top;
  var elementBottom = elementTop + $(this).outerHeight();

  var viewportTop = $(window).scrollTop();
  var viewportBottom = viewportTop + $(window).height();

  return elementBottom > viewportTop && elementTop < viewportBottom;
};
$(window).on('resize scroll', function() {
  if($('.sectionSix').length){
    if ($('.sectionSix').isInViewport()) {
      setTimeout(() => {
        $('.moreCasestudy').addClass('circleAnimShow');
      }, 1500);
    }else{
      $('.moreCasestudy').removeClass('circleAnimShow');
    }
  }
});

//header menu active state js//
$('.headerActive').hover(
  function(){ 
    $(".headerActive.active").addClass('inactive').removeClass('active');
  },
  function(){ 
    $(".headerActive.inactive").addClass('active').removeClass('inactive'); 
  }
);

/*blog details mobile slider start*/
jQuery(document).ready(function() {
    jQuery(".relatedBlogsSlider").slick({
      arrows: false,
      dots: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: false,
      speed: 900,
      autoplaySpeed: 700,
      responsive: [
        {
          breakpoint: 920,
          settings: {
            slidesToShow: 2
          }
        },
        {
          breakpoint: 575,
          settings: {
            slidesToShow: 1
          }
        }
      ]
    });
});
/*blog details mobile slider end*/

/*our cliets js*/
jQuery('.clientSlider').slick({ 
    autoplay: true,
    autoplaySpeed: 1000,
    arrows: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    cssEase: 'linear',
  dots: true
  });

  $(".accordion_tab").click(function(){
    $(".accordion_tab").each(function(){
      $(this).parent().removeClass("active");
      $(this).removeClass("active");
    });
    $(this).parent().addClass("active");
    $(this).addClass("active");
});

  $(document).ready(function(){
  $('.brandIconsInfo').mouseover(function() {
      myvar = this.id;
      $("div.brandDetailsBox").hide();
      $('#div'+myvar).show();
  });
});
/*our cliets js end*/