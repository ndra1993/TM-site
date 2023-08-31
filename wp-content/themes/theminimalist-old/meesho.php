<?php get_header(); /*Template Name: meesho*/
$homepage_id = get_option('page_on_front');

?>

<a id="button"><img src="<?php bloginfo('template_directory'); ?>/images/back-to-top-arrow.svg"></a>

<div class="csdetailBg" style="background: linear-gradient(158.47deg, #070707 4.94%, #101010 53.55%, #070707 58.48%, #020202 65.02%, #131313 77.34%);">
    <!-- Banner Section -->
    <section class="bannerSection" style="background: linear-gradient(158.47deg, #070707 4.94%, #101010 53.55%, #070707 58.48%, #020202 65.02%, #131313 77.34%);">
        <div class="sectionOne">
            <div class="mobtext wow slideInLeft">
                <p class="font20 fontW800 colorWhite">Meesho </p>
                <h1 class="font60 fontW800 colorWhite">Beating the clock to launch Meesho's mobile-friendly website</h1>
                <h5 class="font20 colorWhite fontW500">Meesho is the biggest and most reliable online marketplace in India for resellers that conduct their business over Facebook and WhatsApp. It is democratising e-commerce for all, thanks to its tech-first philosophy.</h5>
            </div>
            <div class="mobImg wow fadeInUp" data-wow-duration="4s">
                <img src="<?php bloginfo('template_directory'); ?>/images/meesho-banner-new.png">
            </div>
        </div>
    </section>

    
   
    <!-- lefttext-rightimg -->
    <section class="lefttext-rightImg" style="background: #fff;">
        <div class="sectionTwo">
            <div class="mobtextTwo wow slideInLeft" data-wow-duration="1s" style="background: #fff;">
                <div class="innerContent">
                    <p class="font20 fontW800 colorBlack">Objective </p>
                    <h1 class="font60 fontW800 colorBlack">Making Meesho accessible via Mobile </h1>
                    <h5 class="font20 colorBlack fontW500">Meesho intended to create a mobile version of their existing website, to improve UX and increase visibility for SEO under a time constraint.</h5>
                </div>
            </div>
            <div class="mobimgTwo wow slideInRight mobileImg" data-wow-duration="1s">
                <img src="<?php bloginfo('template_directory'); ?>/images/meesho1.png">
            </div>
        </div>
    </section>
    <!-- leftheading-rightText -->
    <section class="leftheading-rightText" style="background: linear-gradient(158.47deg, #070707 4.94%, #101010 53.55%, #070707 58.48%, #020202 65.02%, #131313 77.34%);">
        <div class="sectionThree">
            <div class="mobtextThree wow slideInLeft" data-wow-duration="1s">
                <div class="innerContianer">
                    <p class="font20 fontW800 colorWhite">Solutions </p>
                    <h1 class="font60 fontW800 colorWhite">Optimizing for success</h1>
                </div>
            </div>
            <div class="mobsubtextThree wow slideInRight" data-wow-duration="1s">
                <div class="innerContianertwo">
                    <h5 class="font20 colorWhite fontW500">To achieve true performance optimization, all 3D elements were recomposed, and animations were tailored to fit the mobile screen for ease of navigation, minimal load time, and an easy call to action.</h5>
                </div>
            </div>
        </div>
    </section>
    
    <section class="fullscreenBigimg">
        <div id="meesho-beforeafter"></div>
    </section>

    <!-- leftimg-righttext -->
    <section class="lefttext-rightImg leftimg-rightText" style="background: #fff;">
        <div class="sectionTwo">
            <div class="mobtextTwo wow slideInRight" data-wow-duration="1s" style="background: none;">
                <div class="innerContent">
                    <p class="font20 fontW800 colorBlack">Impact  </p>
                    <h1 class="font60 fontW800 colorBlack">The delightful user experience delivered before time  </h1>
                    <h5 class="font20 colorBlack fontW500">All assets were successfully delivered ahead of schedule, giving the client the luxury of time to get internal approvals and move assets into development for their mobile website launch.</h5>
                </div>
            </div>
            <div class="mobimgTwo wow slideInLeft mobileImg" data-wow-duration="1s">
                <img src="<?php bloginfo('template_directory'); ?>/images/meesho2.png">
            </div>
        </div>
    </section>
   
    <section class="fullscreenBigimg" style="background: #000;">
        <div id="animation-container" class="desktopImg"></div>
        <div id="meesho-mobileslider" class="mobileImg"></div>
    </section>

    <section class="fullscreenBigimg" style="background: #fff;">
        <div class="wow fadeInUp" data-wow-duration="4s">
            <img src="<?php bloginfo('template_directory'); ?>/images/meesho-mobile-1.png">
        </div>
    </section>
    
    <section class="sectionSix bottomimgLogos">
        <div class="sectionSiximg wow fadeInUp" data-wow-duration="4s"><img src="<?php bloginfo('template_directory'); ?>/images/meesho4.png"></div>
        <div class="moreCasestudy">
            <div class="brandLogos">
                <div class="relatedBox relatedBoxone" style="background: #ffffff;">
                    <a href="<?php echo site_url('/dozee/'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/dozee-logo.png"></a>
                </div>
                <div class="relatedBox relatedBoxtwo" style="background: #194690;">
                    <a href="<?php echo site_url('/tata-aig/'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/tata-aig-logo.png"></a>
                </div>
            </div>
        </div>
    </section>
</div>



<?php get_footer(); ?>
<script type="text/javascript">
var animation = bodymovin.loadAnimation({
  container: document.getElementById('animation-container'),
  path: site_url+'/wp-content/themes/theminimalist/js/json/meeshoSlider.json', // Required
  renderer: 'svg', // or 'canvas', 'html'
  loop: true,
  autoplay: true
});

var animation = bodymovin.loadAnimation({
  container: document.getElementById('meesho-beforeafter'),
  path: site_url+'/wp-content/themes/theminimalist/js/json/meeshoBeforeafter.json',renderer: 'svg', // or 'canvas', 'html'
  loop: true,
  autoplay: true
});

var animation = bodymovin.loadAnimation({
  container: document.getElementById('meesho-mobileslider'),
  path: site_url+'/wp-content/themes/theminimalist/js/json/meeshoSlidermobile.json',renderer: 'svg', // or 'canvas', 'html'
  loop: true,
  autoplay: true
});
</script>