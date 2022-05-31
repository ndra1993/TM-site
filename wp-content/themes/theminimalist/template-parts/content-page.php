<?php get_header(); /*Template Name: Homepage*/ ?>

<style type="text/css">
    /*new header */
    /*header{padding-left: 75px;}
    header .headerContent{display: flex;align-items: center;justify-content: space-between;}
    header .logoBox{}
    header .homeBox{display: flex;align-items: center;}
    header .homeBox p{width:200px;font-family: "Poppins", sans-serif;font-weight: 700;font-size: 16px;line-height: 20px;color: #000000;}
    header .homeBox .qrImg{margin: 0px 15px;}
    header .homeBox .connectCta{padding: 80px;background: #00FFA3;text-align: center;display: flex;justify-content: center;text-decoration: none;font-family: "Poppins", sans-serif;font-weight: 800;font-size: 24px;line-height: 24px;text-transform: uppercase;color: #000000;}*/
    /*homepage css */
    /*.homeBanner{height: calc(100vh - 100px);overflow: hidden;margin-top: 100px;}
    .bannerContent{position: relative;height: 100%;}
    .bannerText{width: 70%;position:absolute;top: 0;left: 75px;z-index: 1;transition: .5s all ease-in-out;}
    .bannerText h1{font-size: 140px;}*/
    /*.bannerText.textHover{width: 30%;top:5%;transition: .5s all ease-in-out;}
    .bannerText.textHover h1{font-size: 40px;}*/
    /*.bannerVideo{width: 40%;right: 0;top: 10%;height: auto;position: absolute;margin: auto;transition: .5s all ease-in-out;}*/
    /*.bannerVideo.vidHover{width: 60%;right: 0;top: 0%;transition: .5s all ease-in-out;}*/
    /*.bannerVideo video{width: 100%;height: auto;}
    .bannerVideo .videoHoverBox{background: transparent;width: 100%;height: 100%;position: absolute;top: 0;z-index: 2;}*/
</style>

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
