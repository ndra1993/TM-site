<?php get_header(); /*Template Name: case studies listing three*/
?>  

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script> -->
    
<!-- <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->

<body>
<div class="desktopSection">
  <div class="caseStudyFilter">
    <ul id="filters">
      <li class="filterLi active"><span class="filter font12 fontW500" data-filter=".experience, .technology, .marketing, .branding, .video, .strategy">All</span></li>
      <li class="filterLi"><span class="filter font12 fontW500" data-filter=".experience">Experience Design</span></li>
      <li class="filterLi"><span class="filter font12 fontW500" data-filter=".technology">Technology</span></li>
      <li class="filterLi"><span class="filter font12 fontW500" data-filter=".marketing">Marketing Solutions</span></li>
      <li class="filterLi"><span class="filter font12 fontW500" data-filter=".branding">Branding</span></li>
      <li class="filterLi"><span class="filter font12 fontW500" data-filter=".video">Video Production</span></li>
      <li class="filterLi"><span class="filter font12 fontW500" data-filter=".strategy">Strategy And Consulting</span></li>
    </ul>
  </div>
  <div class="caseStudycontainer">
    <div class="container-inner">
        <div class="caseStudycontainerRow">
            <div class="img-column">
                <div class="img-grp">
                    <div class="img-holder">
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/phone.png"></a>
                    </div>
                    <div class="img-holder">
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/phone-two.png"></a>
                    </div>
                    <div class="img-holder">
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/phone-three.png"></a>
                    </div><!--img-holder-->
                    <div class="img-holder">
                        <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/case-study-details-1.png"></a>
                    </div>
                </div>
            </div>
            <div class="detail-column">
                <div class="content-grp">
                    <div class="content-item">
                      <a href="#">
                        <div class="item-inner">
                            <span class="bar"></span>
                            <p class="font14 fontW800">One to 11</p>
                            <h2 class="font30 fontW600">Disrupting the online gaming industry</h2>
                        </div>
                        </a>
                    </div>
                    <div class="content-item">
                      <a href="#">
                        <div class="item-inner">
                            <span class="bar"></span>
                            <p class="font14 fontW800">Tata cliq luxury</p>
                            <h2 class="font30 fontW600">Redefining experiences for india’s premier luxury lifestyle platform</h2>
                        </div>
                      </a>
                    </div>
                    <div class="content-item">
                      <a href="#">
                        <div class="item-inner">
                            <span class="bar"></span>
                            <p class="font14 fontW800">One to 11</p>
                            <h2 class="font30 fontW600">Disrupting the online gaming industry</h2>
                        </div>
                      </a>
                    </div>
                    <div class="content-item">
                      <a href="#">
                        <div class="item-inner">
                            <span class="bar"></span>
                            <p class="font14 fontW800">Tata cliq luxury</p>
                            <h2 class="font30 fontW600">Redefining experiences for india’s premier luxury lifestyle platform</h2>
                        </div>
                      </a>
                    </div>
                </div>
                <img class="mouseScroll" src="<?php bloginfo('template_directory'); ?>/images/mouse-scroll.svg">
            </div>
        </div>
    </div>
  </div>
 
</div>

<div class="mobileSection">
  <div class="caseStudyDetailsSection">
    <a href="#">
      <img src="<?php bloginfo('template_directory'); ?>/images/case-study-mobile.svg">
      <div class="description">
        <p class="fontW800">ONE TO 11</p>
        <h2 class="fontW800">Disrupting the online gaming industry</h2>
      </div>
    </a>
  </div>
  <div class="caseStudyDetailsSection">
    <a href="#">
      <img src="<?php bloginfo('template_directory'); ?>/images/case-study-mobile.svg">
      <div class="description">
        <p class="fontW800">TATA CLIQ LUXURY</p>
        <h2 class="fontW800">Redefining experiences for india’s premier luxury lifestyle platform</h2>
      </div>
  </a>
  </div>
  <div class="caseStudyDetailsSection">
    <a href="#">
      <img src="<?php bloginfo('template_directory'); ?>/images/case-study-mobile.svg">
      <div class="description">
        <p class="fontW800">ONE TO 11</p>
        <h2 class="fontW800">Disrupting the online gaming industry</h2>
      </div>
    </a>
  </div>
  <div class="caseStudyDetailsSection">
    <a href="#">
      <img src="<?php bloginfo('template_directory'); ?>/images/case-study-mobile.svg">
      <div class="description">
        <p class="fontW800">TATA CLIQ LUXURY</p>
        <h2 class="fontW800">Redefining experiences for india’s premier luxury lifestyle platform</h2>
      </div>
    </a>
  </div>
  <div class="mobileFilter">
    <div class="filterimg" data-toggle="modal" data-target="#lab-slide-bottom-popup">
      <img src="<?php bloginfo('template_directory'); ?>/images/case-study-filter.svg">
      <div class="badge fontW600">2</div>
    </div>
    <div class="modal fade" id="lab-slide-bottom-popup" data-keyboard="false" data-backdrop="false">
  <div class="lab-modal-body">
    <div class="filterSelectSection">
      <button type="button" class="close" data-dismiss="modal"><img src="<?php bloginfo('template_directory'); ?>/images/modal-close.svg"></button>
      <div class="filterList">
        <h2 class="fontW800">Select Filters</h2>
        <ul>
          <li class="active fontW500">Experience Design <img src="<?php bloginfo('template_directory'); ?>/images/modal-close.svg"></li>
          <li class="active fontW500">Technology <img src="<?php bloginfo('template_directory'); ?>/images/modal-close.svg"></li>
          <li class="fontW500">Marketing Solutions</li>
          <li class="fontW500">Video Production</li>
          <li class="fontW500">Branding</li>
          <li class="fontW500">Strategy And Consulting</li>
        </ul>
      </div>
      <div class="applyBtn">
        <a href="#" class="fontW800">APPLY</a>
      </div>
    </div>
  </div>
</div>
  </div>
</div>
</body>

<?php get_footer(); ?>


<script type="text/javascript">

jQuery(document).ready(function($) {
  
  setTimeout(function() {
    $('#lab-slide-bottom-popup').modal('show');
  }, 5000); 

  $(document).ready(function() {
    $('.lab-slide-up').find('a').attr('data-toggle', 'modal');
    $('.lab-slide-up').find('a').attr('data-target', '#lab-slide-bottom-popup');
  });

});


/*filter js*/
  $(document).ready(function() {
$(".filterLi").click(function () {
    $(".filterLi").removeClass("active");
    $(this).addClass("active");        
});
});


const slider = $(".content-grp");
slider
  .slick({
    dots: false,
    infinite: true,
    vertical: true,
    asNavFor: '.img-grp',
    verticalSwiping: true,
    centerMode: false,
    adaptiveHeight: true,
    swipeToSlide: true,
    touchThreshold: 3,
  });

slider.on('wheel', (function(e) {
  e.preventDefault();

  if (e.originalEvent.deltaY < 0) {
    $(this).slick('slickNext');
  } else {
    $(this).slick('slickPrev');
  }
}));

jQuery(document).ready(function(){
   
   /* $('.img-grp').slick({
        infinite: true,
        slidesToShow:1,
        fade: true,
        arrows: false,
        autoplay: false,
        autoplaySpeed: 3000,
        pauseOnHover: false,
        asNavFor: '.content-grp'
    });*/

   /* $('.content-grp').slick({
        infinite: true,
        arrows: false,
        vertical: true,
        slidesToShow: 4,
        focusOnSelect: false,
        asNavFor: '.img-grp',
        verticalSwiping: true,
        centerMode: false

    });*/

  $('.img-grp').slick(
{
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: false,
    adaptiveHeight: true,
    infinite: true,
    useTransform: true,
    speed: 400,
});

/*$('.content-grp').slick(
{
    slidesToShow: 9,
    slidesToScroll: 1,
    asNavFor: '.img-grp',
    dots: false,
    arrows: false,
    centerMode: true,
    focusOnSelect: true,
    vertical: true
});*/

});


</script>