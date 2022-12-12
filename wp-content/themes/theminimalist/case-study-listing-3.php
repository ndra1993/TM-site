<?php get_header(); /*Template Name: case studies listing three*/
?>  

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->

<style type="text/css">
  .mobileSection{display: none;}
  .desktopSection{display: block;}
  .caseStudycontainer{border-bottom: 1px solid #000; border-top: 1px solid #000;}
  .caseStudycontainerRow{
    display: flex;
    justify-content: space-between;
    height: calc(100vh - 200px);
    overflow: hidden;}
  .img-column{width: 50%;}
  .detail-column{width: 42%;position: relative;margin: 0 85px;}
  .content-grp{display: block;}
 
.img-holder span{
    display: block;
   /* box-shadow: 0 5px 10px rgb(0 0 0 / .1);*/
}
.img-holder img{
    max-width: 100%;
}

.item-inner{
    position: relative;
    overflow:hidden;
    transition: .5s ease;
    text-align: left;
    margin: 0 auto;
    border-bottom: 1px solid #000;
    padding:42px 99px 52px 0px;
   
    
}
.item-inner p{text-transform: uppercase;}
span.bar{
    display:block;
    height:10px;
    width: 100%;
    background: #00FFA3;
    position:absolute;
    left: 0;
    bottom:0;
  visibility: hidden
}
span.bar::after{
    content:"";
    position:absolute;
    width: 100%;
    height: 100%;
    background: #00FFA3;
    /*animation: progress 3s infinite;*/
}
/*@keyframes progress{
    from{
        width:0;
    }
    to{
        width:100%;
    }
}*/

.mouseScroll{
  position: absolute;
  bottom: 10px;
  right: 0;
  /*width: 25px;
  height: 40px;*/
  cursor: pointer;
}

.slick-current.current-item{
    padding: 15px;
}
/*.slick-current .item-inner{
    max-height: unset;
    box-shadow: 0 5px 10px rgb( 0 0 0 / .1);
    border-radius: 5px;
}*/
.slick-current span.bar{
    visibility: visible;
}
.slick-vertical .slick-slide.content-item:not(.slick-current) .item-inner{
    border-bottom: 1px solid #000000;
}
.slick-vertical .slick-slide.content-item.slick-current .item-inner{
  border-bottom: 1px solid transparent; 
  padding: 99px 65px 99px 0px;
}
.slick-vertical .slick-slide.content-item.slick-current .item-inner p{font-size: 20px;}
.slick-vertical .slick-slide.content-item.slick-current .item-inner h1{
   font-weight: 800;
  font-size: 64px;
  line-height: 72px;
}
.slick-vertical .slick-slide.content-item.slick-current .item-inner{cursor: url(<?php bloginfo('template_directory'); ?>/images/detail-page-cursor.svg) 0 0, auto;}

.detail-column .slick-list.draggable{
    height: auto !important;
}

/*filter css*/
#filters {
  margin: 15px 0px 17px;
  display: inline-flex;
  padding:0;
  list-style:none;
}

  #filters li {
    padding: 7px 15px;
    background: #EEEEEE;
    border-radius: 10px;
    margin-right: 10px;
    font-size: 12px;
    color: #000;
  }
  #filters li.active {
    background: #000;
    color:#fff;
  }
  
  #filters li span {
    display: block;
    text-decoration:none;
    cursor: pointer;
  }
  
  .caseStudyFooter{display: flex; justify-content: space-between; padding: 14px 50px 12px; position: fixed; bottom: 0; width: 100%; align-items: center;}
  .footerItem2 a{text-decoration: none; color: #000;padding: 0px 5px;}
  /*mobile section css*/
.filterList{padding: 28px 24px;}
.filterList h2{font-size: 24px; line-height: 30px;}
.filterList ul li{list-style: none; display: inline-flex;margin: 16px 16px 0px 0px;font-size: 13px;line-height: 14px;border: 1px solid #000000;border-radius: 100px;padding: 10px 15px;}
.filterList ul li img{margin-left: 10px;}
.filterList ul .active{background: #00FFA3;}
.filterSelectSection .applyBtn{padding: 20px 0px; text-align: center;background: #00FFA3;}
.filterSelectSection .applyBtn a{text-decoration: none;font-size: 13px; line-height: 14px;color: #000;}

.modal {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1050;
    display: none;
    overflow: hidden;
    -webkit-overflow-scrolling: touch;
    outline: 0;
}
.fade.in {
    opacity: 1;
}
.modal-open .modal {
    overflow-x: hidden;
    overflow-y: auto;
}
.close {
    float: right;
    border: none;
    background: transparent;
    margin-top: 20px;
    margin-right: 20px;
}
.modal.fade.in .lab-modal-body {
  bottom: 0;
  opacity: 1;
}

.modal-open .modal{background: rgba(0, 0, 0, 0.5);}

.lab-modal-body {
  position: fixed;
  max-width: 100%;
  height: auto;
  background-color: rgb(248, 250, 247);
  opacity: 0;
  -webkit-transition: opacity 0.3s ease-out, bottom 0.9s ease-out;
  -moz-transition: opacity 0.3s ease-out, bottom 0.9s ease-out;
  -o-transition: opacity 0.3s ease-out, bottom 0.9s ease-out;
  transition: opacity 0.3s ease-out, bottom 0.9s ease-out;
}

.popup-button {
  margin-top: 70px;
}


/*meadi query*/
@media (max-width: 1400px) {
  #filters {margin: 0px 0px 5px;}
  #filters li {padding: 5px 10px;}
  .caseStudycontainerRow{height: calc(100vh - 150px);}
  .detail-column{width: 45%; margin: 0px 35px}
  .item-inner{padding: 20px 0px;}
  .slick-vertical .slick-slide.content-item.slick-current .item-inner{
      padding: 25px 0px 25px 0px;
    }
  .slick-vertical .slick-slide.content-item.slick-current .item-inner h1{
    font-size: 35px;
    line-height: 40px;
  }
  .slick-vertical .slick-slide.content-item.slick-current .item-inner p{font-size: 16px;}
  .mouseScroll{width: 20px; height: 30px;}
  .caseStudyFooter{padding: 0px 50px 5px;}
}

@media (max-width: 920px) {
  .desktopSection{display: none;}
  .mobileSection{display: block;}
  .caseStudyDetailsSection{padding: 24px;border-bottom: 1px solid #000000;}
  .caseStudyDetailsSection img{max-width: 100%; width: 100%;margin-bottom: 17px;}
  .caseStudyDetailsSection p{margin-bottom: 8px;line-height: 14px;font-size: 14px;}
  .caseStudyDetailsSection h1{line-height: 30px;font-size: 24px;}
  .mobileFilter{position: fixed;bottom: 0;right: 10px;cursor: pointer;}
  .filterimg{position: relative;}
  .badge{
    background: #00FFA3;
    border-radius: 50%;
    padding: 3px;
    font-size: 10px;
    line-height: 11px;
    text-align: center;
    position: absolute;
    right: 25px;
    top: 10px;
  }
}
</style>

<body>
<div class="wrapper">
    <header>
        <div class="headerContent">
            <div class="logoBox">
                <a href="<?php echo site_url(); ?>">
                    <img src="<?php bloginfo('template_directory'); ?>/images/tm-logo.svg" alt="">
                </a>
            </div>
            <div class="homeBox">
                <!-- <p>Sneak peek into our journey towards inventiveness..</p> -->
                <!-- <img src="<?php bloginfo('template_directory'); ?>/images/qr-code.png" alt="" class="qrImg">-->
                <a href="<?php echo site_url('/forms/'); ?>" class="connectCta">Let's Collaborate</a>
            </div>
        </div>
    </header>
</div>

<div class="desktopSection">
  <div class="filter wrapper">
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
                        <span><img src="<?php bloginfo('template_directory'); ?>/images/phone.png"></span>
                    </div>
                    <div class="img-holder">
                        <span><img src="<?php bloginfo('template_directory'); ?>/images/phone-two.png"></span>
                    </div>
                    <div class="img-holder">
                        <span><img src="<?php bloginfo('template_directory'); ?>/images/phone-three.png"></span>
                    </div><!--img-holder-->
                    <div class="img-holder">
                        <span><img src="<?php bloginfo('template_directory'); ?>/images/case-study-details-1.png"></span>
                    </div>
                </div>
            </div>
            <div class="detail-column">
                <div class="content-grp">
                    <div class="content-item">
                        <div class="item-inner">
                            <span class="bar"></span>
                            <p class="font14 fontW800">One to 11</p>
                            <h1 class="font30 fontW600">Disrupting the online gaming industry</h1>
                        </div>
                    </div><!--content-item-->
                    <div class="content-item">
                        <div class="item-inner">
                            <span class="bar"></span>
                            <p class="font14 fontW800">Tata cliq luxury</p>
                            <h1 class="font30 fontW600">Redefining experiences for india’s premier luxury lifestyle platform</h1>
                        </div>
                    </div><!--content-item-->
                    <div class="content-item">
                        <div class="item-inner">
                            <span class="bar"></span>
                            <p class="font14 fontW800">One to 11</p>
                            <h1 class="font30 fontW600">Disrupting the online gaming industry</h1>
                        </div>
                    </div><!--content-item-->
                    <div class="content-item">
                        <div class="item-inner">
                            <span class="bar"></span>
                            <p class="font14 fontW800">Tata cliq luxury</p>
                            <h1 class="font30 fontW600">Redefining experiences for india’s premier luxury lifestyle platform</h1>
                        </div>
                    </div><!--content-item-->
                </div>
                <img class="mouseScroll" src="<?php bloginfo('template_directory'); ?>/images/mouse-scroll.svg">
            </div>
        </div>
    </div>
  </div>
  <div class="caseStudyFooter">
    <div class="footerItem1">
      <p class="font14 fontW500">© All Rights Reserved, Minimalist Solutions Private Limited</p>
    </div>
    <div class="footerItem2">
      <a href="#" class="font14 fontW700">Privacy Policy</a>
      <span class="font14 fontW700 partion">|</span>
      <a href="#" class="font14 fontW700">Terms of Use</a>
    </div>
  </div>
</div>

<div class="mobileSection">
  <div class="caseStudyDetailsSection">
    <img src="<?php bloginfo('template_directory'); ?>/images/case-study-mobile.svg">
    <div class="description">
      <p class="fontW800">ONE TO 11</p>
      <h1 class="fontW800">Disrupting the online gaming industry</h1>
    </div>
  </div>
  <div class="caseStudyDetailsSection">
    <img src="<?php bloginfo('template_directory'); ?>/images/case-study-mobile.svg">
    <div class="description">
      <p class="fontW800">TATA CLIQ LUXURY</p>
      <h1 class="fontW800">Redefining experiences for india’s premier luxury lifestyle platform</h1>
    </div>
  </div>
  <div class="caseStudyDetailsSection">
    <img src="<?php bloginfo('template_directory'); ?>/images/case-study-mobile.svg">
    <div class="description">
      <p class="fontW800">ONE TO 11</p>
      <h1 class="fontW800">Disrupting the online gaming industry</h1>
    </div>
  </div>
  <div class="caseStudyDetailsSection">
    <img src="<?php bloginfo('template_directory'); ?>/images/case-study-mobile.svg">
    <div class="description">
      <p class="fontW800">TATA CLIQ LUXURY</p>
      <h1 class="fontW800">Redefining experiences for india’s premier luxury lifestyle platform</h1>
    </div>
  </div>
  <div class="mobileFilter">
    <div class="filterimg" data-toggle="modal" data-target="#lab-slide-bottom-popup">
      <img src="<?php bloginfo('template_directory'); ?>/images/case-study-filter.svg">
      <div class="badge fontW600">2</div>
    </div>
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
  <!-- <div class="filterSelectSection">
    <div class="filterList">
      <h2 class="fontW800">Select Filters</h2>
      <ul>
        <li class="fontW500">Experience Design</li>
        <li class="fontW500">Technology</li>
        <li class="fontW500">Marketing Solutions</li>
        <li class="fontW500">Video Production</li>
        <li class="fontW500">Branding</li>
        <li class="fontW500">Strategy And Consulting</li>
      </ul>
    </div>
    <div class="applyBtn">
      <a href="#" class="fontW800">APPLY</a>
    </div>
  </div> -->

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
    infinite: true,
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
   
    $('.img-grp').slick({
        infinite: true,
        slidesToShow:1,
        fade: true,
        arrows: false,
        autoplay: false,
        autoplaySpeed: 3000,
        pauseOnHover: false,
        asNavFor: '.content-grp'
    });

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

});


</script>