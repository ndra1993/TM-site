<?php get_header(); /*Template Name: meesho*/
$homepage_id = get_option('page_on_front');

?>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick-theme.min.css">
<style type="text/css">
 
/* Default slide */
.center-slider .slick-slide{
  /*background-color: #b32532;*/
  color: #FFF;
  height: 500px;
  margin: 0 15px 0 0;
  display: flex;
  align-items: center;
  justify-content: center;
  transform: scale(0.8);
  transition: all 0.4s ease-in-out;
  /*background: url(<?php bloginfo('template_directory'); ?>/images/meesho-slider-bg.png) no-repeat center center fixed;*/
}
.center-slider .slick-slide,
.center-slider .slick-slide[aria-hidden="true"]:not(.slick-cloned) ~ .slick-cloned[aria-hidden="true"] {
  transform: scale(0.8, 0.8);
  transition: all 0.4s ease-in-out;
}

/* Active center slide (You can change anything here for cenetr slide)*/
.center-slider .slick-center,
.center-slider .slick-slide[aria-hidden="true"]:not([tabindex="-1"]) + .slick-cloned[aria-hidden="true"] {
  transform: scale(1.1);
  /*background: url(<?php bloginfo('template_directory'); ?>/images/meesho-slider-bg.png) no-repeat center center fixed;*/
}
.center-slider .slick-current.slick-active{
  transform: scale(1.1);
  /*background-image: url("<?php bloginfo('template_directory'); ?>/images/meesho-slider-bg.png") no-repeat center center fixed;*/
  background: url(<?php bloginfo('template_directory'); ?>/images/meesho-slider-bg.png) no-repeat center center fixed;
  background-size: 100%;
  width: 500px;
  height: 500px;
  overflow: hidden;
}
.abc{
   background: url(<?php bloginfo('template_directory'); ?>/images/meesho-slider-bg.png) no-repeat center center fixed;
  background-size: 100%; 
  width: 500px;
  height: 500px;
  overflow: hidden;
}
.slick-next, .slick     -prev{
  z-index: 5;
}
.slick-next{
  right: 15px;
}
.slick-prev{
  left: 15px;
}
.slick-next:before, .slick-prev:before{
  color: #000;
  font-size: 26px;
}
</style>
<a id="button"><img src="<?php bloginfo('template_directory'); ?>/images/back-to-top-arrow.svg"></a>

<div class="casebgdetails">

    <section>
        <div class="meeshobg sectionOne">
            <div class="mobtext wow slideInLeft">
                <p class="font20 fontW800 colorWhite">Meesho </p>
                <h1 class="font60 fontW800 colorWhite">Beating the clock to launch Meesho's mobile-friendly website</h1>
                <h5 class="font20 colorWhite fontW500">Meesho is the biggest and most reliable online marketplace in India for resellers that conduct their business over Facebook and WhatsApp. It is democratising e-commerce for all, thanks to its tech-first philosophy.</h5>
            </div>
            <div class="wow fadeInUp mobImg" data-wow-duration="4s">
                <img src="<?php bloginfo('template_directory'); ?>/images/meesho-banner.svg">
            </div>
        </div>
    </section>
    <section>
        <div class="sectionTwo">
            <div class="mobtextTwo wow slideInLeft" data-wow-duration="1s">
                <div class="">
                    <p class="font20 fontW800 colorBlack">Objective </p>
                    <h1 class="font60 fontW800 colorBlack">Making Meesho accessible via Mobile </h1>
                    <h5 class="font20 colorBlack fontW500">Meesho intended to create a mobile version of their existing website, to improve UX and increase visibility for SEO under a time constraint</h5>
                </div>
            </div>
            <div class="mobimgTwo wow slideInRight" data-wow-duration="1s">
                <img src="<?php bloginfo('template_directory'); ?>/images/meesho1.png">
            </div>
        </div>
    </section>
    <section>
        <div class="meeshobg sectionThree">
            <div class="mobtextThree wow slideInLeft" data-wow-duration="1s">
                <p class="font20 fontW800 colorWhite">Solutions </p>
                <h1 class="font60 fontW800 colorWhite">Optimizing for success</h1>
            </div>
            <div class="mobsubtextThree wow slideInRight" data-wow-duration="1s">
                <h5 class="font20 colorWhite fontW500">To achieve true performance optimization, all 3D elements were recomposed, and animations were tailored to fit the mobile screen for ease of navigation, minimal load time, and an easy call to action.</h5>
            </div>
        </div>
        
    </section>
    <section>
        <div class="meeshobg sectionFour">
            <div class="desktopImg">
                <img src="<?php bloginfo('template_directory'); ?>/images/computer-img-responsive.png">
            </div>
            <!-- <div class="mobileImg">
                <img src="<?php bloginfo('template_directory'); ?>/images/computer-img-responsive.png">
                <img src="<?php bloginfo('template_directory'); ?>/images/mbl-responsive.png">
            </div> -->
        </div>
    </section>
    <section>
        <div class="sectionTwo">
            <div class="mobimgTwo wow slideInLeft" data-wow-duration="1s">
                <img src="<?php bloginfo('template_directory'); ?>/images/meesho2.png">
            </div>
            <div class="mobtextTwo wow slideInRight" data-wow-duration="1s">
                <div class="">
                    <p class="font20 fontW800 colorBlack">Impact  </p>
                    <h1 class="font60 fontW800 colorBlack">The delightful user experience delivered before time  </h1>
                    <h5 class="font20 colorBlack fontW500">All assets were successfully delivered ahead of schedule, giving the client the luxury of time to get internal approvals and move assets into development for their mobile website launch.</h5>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="meeshobg sectionFive">
            <div class="mobtextFour wow slideInLeft" data-wow-duration="1s">
                <p class="font20 fontW800 colorWhite">Solutions </p>
                <h1 class="font60 fontW800 colorWhite">Optimizing for success</h1>
            </div>
            <div class="mobsubtextFour wow slideInRight" data-wow-duration="1s">
                <h5 class="font20 colorWhite fontW500">To achieve true performance optimization, all 3D elements were recomposed, and animations were tailored to fit the mobile screen for ease of navigation, minimal load time, and an easy call to action.</h5>
            </div>
        </div>
    </section>
    <section>
        <div class="sectionFourMeesho">
            <div class="desktopImg">
                <img src="<?php bloginfo('template_directory'); ?>/images/meesho3.png">
            </div>
        </div>
    </section>
    <section>
        <div class="sectionFive">
            <div class="mobtextFour wow slideInLeft" data-wow-duration="1s">
                <p class="font20 fontW800 colorBlack">Solutions </p>
                <h1 class="font60 fontW800 colorBlack">Optimizing for success</h1>
            </div>
            <div class="mobsubtextFour wow slideInRight" data-wow-duration="1s">
                <h5 class="font20 colorBlack fontW500">To achieve true performance optimization, all 3D elements were recomposed, and animations were tailored to fit the mobile screen for ease of navigation, minimal load time, and an easy call to action.</h5>
            </div>
        </div>
    </section>
    <section style="background: #000000; padding: 80px 75px;">
        <div class="center-slider">
            <div>
               <div class="abc">
                   Slide 1
               </div> 
            </div>
            <div>Slide 2</div>
            <div>Slide 3</div>
            <div>Slide 4</div>
            <div>Slide 5</div>
            <div>Slide 6</div>
        </div>
    </section>
    <section>
        <div class="sectionFive">
            <div class="mobtextFour wow slideInLeft" data-wow-duration="1s">
                <p class="font20 fontW800 colorBlack">Impact </p>
                <h1 class="font60 fontW800 colorBlack">Content that educates the users & design that reflects the brand’s values</h1>
            </div>
            <div class="mobsubtextFour wow slideInRight" data-wow-duration="1s">
                <h5 class="font20 colorBlack fontW500">The user demographic  on this platform are from Tier 2 and Tier 3 cities who do not know much about WEB3 & it’s implications. They wanted an Informative website to educate their users and help them embark on the journey together with Oneto11.</h5>
            </div>
        </div>
    </section>
    <section>
        <div class="sectionFourMeesho">
            <div class="desktopImg">
                <img src="<?php bloginfo('template_directory'); ?>/images/meesho4.png">
            </div>
        </div>
    </section>
    <section class="sectionSix">
        <div class="sectionSiximg"><img src="<?php bloginfo('template_directory'); ?>/images/meesho-footer.png"></div>
        <div class="moreCasestudy">
            <div class="brandLogos">
                <div class="relatedBox relatedBoxone" style="background: #ec2120;">
                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/bizongo-logo.png"></a>
                </div>
                <div class="relatedBox relatedBoxtwo" style="background: #00C859;">
                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/bizongo-logo.png"></a>
                </div>
            </div>
        </div>
    </section>
</div>



<?php get_footer(); ?>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
      $('.center-slider').slick({
        slidesToShow: 5,
        slidesToScroll: 1,
        centerMode: true,
        arrows: true,
        dots: false,
        speed: 300,
        centerPadding: '20px',
        infinite: true,
        autoplaySpeed: 5000,
        autoplay: false
      });
    });
</script>