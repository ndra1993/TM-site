<?php get_header(); /*Template Name: Homepage*/ ?>
<?php session_start();
echo $_SESSION['showloader'];
if($_SESSION['showloader'] == ''){ $_SESSION['showloader'] = 'loaded'; }
else{  ?>
  <style>
  .loaderScreen {display:none; }
  </style>
  <?php }?>

<style>
	.bannerVideo .videoBox iframe{position: absolute !important;width: 100%;height: 100%;opacity: 0;visibility: hidden;}
	.bannerVideo .videoBox .videotwo{position:relative;transition:1s all ease-in-out;}
/* 	.bannerVideo .videoBox .videoHoverBox{cursor: url(<?php bloginfo('template_directory'); ?>/images/banner-cursor.png),auto;} */
	.bannerVideo .videoBox .videoHoverBoxTwo{position:absolute;top:0;width:100%;height:100%;background:transparent;z-index:2;display:none;}
	.bannerVideo .videoBox .videoHoverBoxTwo.vidactive{display:block;}
	.bannercursor {position: absolute;width: 140px;height: 140px;top:-140px;left: -280px;pointer-events: none;}
	#audio-control{cursor: url(https://ixdtm.com/projects/theminimalist-site/wp-content/themes/theminimalist/images/testimonial-play.png;) 30 30, auto;}
	#audio-controlTwo{cursor: url(https://ixdtm.com/projects/theminimalist-site/wp-content/themes/theminimalist/images/testimonial-stop.png;) 30 30, auto;}
	.cursor {position: absolute;width: 140px;height: 140px;top:-140px;left: -280px;cursor: none;pointer-events: none;}
	.fade-in-text {animation: fadeIn 6s; -webkit-animation: fadeIn 6s; -moz-animation: fadeIn 6s; -o-animation: fadeIn 6s; -ms-animation: fadeIn 6s;}
@keyframes fadeIn {0% { opacity: 0; } 100% { opacity: 1; }}
@-moz-keyframes fadeIn {0% { opacity: 0; } 100% { opacity: 1; }}
@-webkit-keyframes fadeIn {0% { opacity: 0; } 100% { opacity: 1; }}
@-o-keyframes fadeIn {0% { opacity: 0; } 100% { opacity: 1; }}
@-ms-keyframes fadeIn {0% { opacity: 0; } 100% { opacity: 1; }}
</style>

<div class="loaderScreen">
    <div class="wrapper" style="position: relative;">
<!--         <h2 class="loading h1 font135 fontW800" data-loading-text="Loading..."></h2>
        <div class="progress-bar">
            <span class="bar">
                <span class="progress"></span>
            </span>
        </div> -->
    </div>
</div>

<div class="wrapper">
    <header>
        <div class="headerContent">
            <div class="logoBox">
                <a href="<?php echo site_url(); ?>">
                    <img src="<?php bloginfo('template_directory'); ?>/images/tm-logo.svg" alt="">
                </a>
            </div>
            <div class="homeBox">
                <!-- <p>Sneak peek into our journey towards inventiveness</p> -->
               <!-- <img src="<?php bloginfo('template_directory'); ?>/images/qr-code.png" alt="" class="qrImg">-->
                <a href="<?php echo site_url('/forms/'); ?>" class="connectCta">Let's Collaborate</a>
            </div>
        </div>
    </header>
    <section class="homeBanner">
        <div class="bannerContent">
            <div class="bannerText">
                <h1 class="h1 fade-in-text font135 fontW800">We aspire to be India’s most inventive company in the creative business</h1>
            </div>
            <div class="bannerVideo" style="cursor:none;">
                <div class="videoBox" style="cursor:none;">
					<div class="videoDiv" id="videoFrame" style="cursor:none;"></div>
                    <video class="videotwo" muted loop="" autoplay playsinline style="cursor:none;">
                        <source src="<?php bloginfo('template_directory'); ?>/images/teaser.mp4" type="video/mp4">
                    </video>
                    <div class="videoHoverBox bannercur" id="audio-control"></div>
<!-- 					<img src="https://ixdtm.com/projects/theminimalist-site/wp-content/themes/theminimalist/images/testimonial-play.png" alt="Cursor" class="bannercursor"/> -->
					<div class="videoHoverBoxTwo" id="audio-controlTwo"></div>
                </div>
            </div>
        </div>
    </section>
</div>

<div class="clientSec">
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/acko.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/airtel.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/almarai.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/beauty.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/bloomberg.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/blue-star.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/box-8.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/cadbury.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/cipla.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/coca-cola.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/dineout.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/disney-plus.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/hcl.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/hdfc-bank.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/hexaware.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/hyatt.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/icici.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/idfc.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/iifl.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/iit.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/intermiles.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/itc.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/kotak.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/mahindra-lifespace.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/mahindra-logistic.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/mi.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/minute-maid.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/mondelez.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/mtv.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/navneet.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/orra.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/oyo.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/paytm.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/phoenix.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/shemaroo.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/tata-aig.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/tata-capital.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/tata-cliq.png" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/wipro.png" alt="">
    </div>
</div>

<?php get_footer(); ?>