<?php get_header(); /*Template Name: case studies listing three*/
?>  

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script>
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />

<style type="text/css">
  .caseStudycontainer{border-bottom: 1px solid #000; border-top: 1px solid #000;}
  .row{
    display: flex;
    justify-content: space-between;
    height: calc(100vh - 144px);
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
    animation: progress 3s infinite;
}
@keyframes progress{
    from{
        width:0;
    }
    to{
        width:100%;
    }
}

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
  
  .caseStudyFooter{display: flex; justify-content: space-between; padding: 14px 50px 12px;/*align-items: center;*/ position: fixed; width: 100%;}
  .footerItem2 a{text-decoration: none; color: #000;padding: 0px 5px;}
  

/*meadi query*/
@media (max-width: 1400px) {
  #filters {margin: 5px 0px;}
  #filters li {padding: 5px 10px;}
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
  .caseStudyFooter{padding: 5px 50px 5px;}
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
<div class="filter wrapper">
  <ul id="filters">
    <li class="active"><span class="filter font12 fontW500" data-filter=".experience, .technology, .marketing, .branding, .video, .strategy">All</span></li>
    <li><span class="filter font12 fontW500" data-filter=".experience">Experience Design</span></li>
    <li><span class="filter font12 fontW500" data-filter=".technology">Technology</span></li>
    <li><span class="filter font12 fontW500" data-filter=".marketing">Marketing Solutions</span></li>
    <li><span class="filter font12 fontW500" data-filter=".branding">Branding</span></li>
    <li><span class="filter font12 fontW500" data-filter=".video">Video Production</span></li>
    <li><span class="filter font12 fontW500" data-filter=".strategy">Strategy And Consulting</span></li>
  </ul>
</div>
<div class="caseStudycontainer">
    <div class="container-inner">
        <div class="row">
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


</body>


<?php get_footer(); ?>


<script type="text/javascript">
const slider = $(".content-grp");
slider
  .slick({
    dots: false,
    infinite: true,
    vertical: true,
    asNavFor: '.img-grp',
    infinite: true,
    verticalSwiping: true
  });

slider.on('wheel', (function(e) {
  e.preventDefault();

  if (e.originalEvent.deltaY < 0) {
    $(this).slick('slickNext');
  } else {
    $(this).slick('slickPrev');
  }
}));


/*filter js*/
  $(document).ready(function() {
$("li").click(function () {
    $("li").removeClass("active");
    $(this).addClass("active");        
});
});

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

    $('.content-grp').slick({
        infinite: true,
        arrows: false,
        vertical: true,
        slidesToShow: 4,
        focusOnSelect: false,
        asNavFor: '.img-grp',
        /*verticalSwiping: true,*/
        centerMode: false

    });

});


</script>