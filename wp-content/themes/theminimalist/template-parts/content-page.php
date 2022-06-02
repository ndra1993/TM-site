<?php get_header(); /*Template Name: Homepage*/ ?>

<div class="wrapper">
<header>
    <div class="headerContent">
        <div class="logoBox">
            <a href="<?php echo site_url();?>" target="_blank">
                <img src="<?php bloginfo('template_directory');?>/images/logo.png" alt="">
            </a>
        </div>
        <div class="homeBox">
            <p>*This is strictly work in progress but here are some signs.</p>
            <img src="<?php bloginfo('template_directory');?>/images/qr-code.png" alt="" class="qrImg">
            <a href="<?php echo site_url('/forms/');?>" class="connectCta">LETS TALK</a>
        </div>
    </div>
</header>
<section class="homeBanner">
    <div class="bannerContent">
        <div class="bannerText">
            <h1 class="h1">We aspire to be India’s most inventive company in the creative business</h1>
        </div>
        <div class="bannerVideo">
            <div class="videoBox">
                <video id="video" src="<?php bloginfo('template_directory');?>/images/butterfly_nectar_feeding_moth_beak_689.mp4" controls="true" autoplay="autoplay" loop="true"muted defaultmuted playsinline /></video>
                <div class="videoHoverBox"></div>
            </div>
            <div class="logos">
                <div class="logoImg">
                    <img src="<?php bloginfo('template_directory');?>/images/coca-cola-logo.png" alt="" />
                </div>
                <div class="logoImg">
                    <img src="<?php bloginfo('template_directory');?>/images/mondelez-logo.png" alt="" />
                </div>
                <div class="logoImg">
                    <img src="<?php bloginfo('template_directory');?>/images/tata-logo.png" alt="" />
                </div>
                <div class="logoImg">
                    <img src="<?php bloginfo('template_directory');?>/images/airtel-logo.png" alt="" />
                </div>
                <div class="logoImg">
                    <img src="<?php bloginfo('template_directory');?>/images/mtv-logo.png" alt="" />
                </div>
            </div>
            <!-- <div class="logoSlider">
                
            </div> -->
        </div>
    </div>
</section>
</div>
    <!-- <section class="videoSec">
        <div class="textVideo">
            <div class="textLarge">
                <h1 class="h1">
                    We aspire to be India’s most inventive company in the creative business
                </h1>
            </div>
            <div class="videoLogos">
                <div class="hoverDiv"></div>
                <div class="mainVideo">
                    <video id="video" src="<?php bloginfo('template_directory');?>/images/butterfly_nectar_feeding_moth_beak_689.mp4" controls="true" autoplay="autoplay" loop="true"muted defaultmuted playsinline /></video>
                    
                </div>
                <div class="logos">
                    <div class="logoImg">
                        <img src="<?php bloginfo('template_directory');?>/images/coca-cola-logo.png" alt="" />
                    </div>
                    <div class="logoImg">
                        <img src="<?php bloginfo('template_directory');?>/images/mondelez-logo.png" alt="" />
                    </div>
                    <div class="logoImg">
                        <img src="<?php bloginfo('template_directory');?>/images/tata-logo.png" alt="" />
                    </div>
                    <div class="logoImg">
                        <img src="<?php bloginfo('template_directory');?>/images/airtel-logo.png" alt="" />
                    </div>
                    <div class="logoImg">
                        <img src="<?php bloginfo('template_directory');?>/images/mtv-logo.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section> -->

<?php get_footer(); ?>
<script type="text/javascript">
    $(document).ready(function () {
        $(".videoHoverBox").hover(
            function () {
                $(".bannerVideo").addClass("vidHover");
                $(".bannerText").addClass("textHover");
            },
            function () {
                $(".bannerVideo").removeClass("vidHover");
                $(".bannerText").removeClass("textHover");
            }
        );
    });
</script>
