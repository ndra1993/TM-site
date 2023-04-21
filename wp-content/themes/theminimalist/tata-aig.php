<?php get_header(); /*Template Name: tata aig*/
$homepage_id = get_option('page_on_front');

?>
<a id="button"><img src="<?php bloginfo('template_directory'); ?>/images/back-to-top-arrow.svg"></a>

<div class="csdetailBg" style="background: #fff;">
    <!-- banner slider section -->
    <section class="bannerSlidermain" style="background:#fff">
        <div class="bannerInnerDiv">
            <div class="bannerslidePara">
                <p class="font20 fontW800 colorBlack">One to 11</p>
                <h1 class="font60 fontW800 colorBlack">Disrupting The Online Gaming Industry</h1>
                <h5 class="font20 colorBlack fontW500" style="color:rgba(17, 0, 17, 0.5)">India's first fastest growing
                    Social Networking Fantasy Mobile gaming with over 2.2 million users on the
                    platform.</h5>
            </div>
            <div class="bannerSlider">
                <div class="bannerSliderSection">
                    <div class="bannerSliderimg">
                        <img src="<?php bloginfo('template_directory'); ?>/images/four-wheel-tata.png" alt="" class="desktopImg">
                        <img src="<?php bloginfo('template_directory'); ?>/images/tata-mblbanner-1.png" alt="" class="mobileImg">
                    </div>
                </div>
                <div class="bannerSliderSection">
                    <div class="bannerSliderimg">
                        <img src="<?php bloginfo('template_directory'); ?>/images/two-wheel-tata.png" alt="" class="desktopImg">
                        <img src="<?php bloginfo('template_directory'); ?>/images/tata-mblbanner-2.png" alt="" class="mobileImg">
                    </div>
                </div>
                <div class="bannerSliderSection">
                    <div class="bannerSliderimg">
                        <img src="<?php bloginfo('template_directory'); ?>/images/travel-tata.png" alt="" class="desktopImg">
                        <img src="<?php bloginfo('template_directory'); ?>/images/tata-mblbanner-3.png" alt="" class="mobileImg">
                    </div>
                </div>
                <div class="bannerSliderSection">
                    <div class="bannerSliderimg">
                        <img src="<?php bloginfo('template_directory'); ?>/images/health-tata.png" alt="" class="desktopImg">
                        <img src="<?php bloginfo('template_directory'); ?>/images/tata-mblbanner-4.png" alt="" class="mobileImg">
                    </div>
                </div>
            </div>
            <div class="awardSec">
                <h5 class="font20 fontW800">Awards Earned over the years</h5>
                <div class="awardMaindiv">
                    <div class="awardDivbx">
                        <img src="<?php bloginfo('template_directory'); ?>/images/award-icon.png">
                        <h5 class="font20 fontW700">DOD Awards, 2020</h5>
                        <p class="font16 fontW500">Best UX Website</p>
                    </div>
                    <div class="awardDivbx">
                        <img src="<?php bloginfo('template_directory'); ?>/images/award-icon.png">
                        <h5 class="font20 fontW700">DOD Awards, 2020</h5>
                        <p class="font16 fontW500">Best UX Website</p>
                    </div>
                    <div class="awardDivbx">
                        <img src="<?php bloginfo('template_directory'); ?>/images/award-icon.png">
                        <h5 class="font20 fontW700">DOD Awards, 2020</h5>
                        <p class="font16 fontW500">Best UX Website</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>



<?php get_footer(); ?>

<script>
    // lottie animation js starts
    var animation = bodymovin.loadAnimation({
        container: document.getElementById('animationmblmoving'),
        path: site_url + '/wp-content/themes/theminimalist/js/json/mblAnime.json', // Required
        renderer: 'svg', // or 'canvas', 'html'
        loop: true,
        autoplay: true
    });
    // lottie animation js ends
</script>