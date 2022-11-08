<?php get_header(); /*Template Name: Homepage*/ ?>


<div class="loaderScreen">
    <div class="wrapper" style="position: relative;">
        <h2 class="loading h1 font135 fontW800" data-loading-text="Loading..."></h2>
        <div class="progress-bar">
            <span class="bar">
                <span class="progress"></span>
            </span>
        </div>
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
                <p>Sneak peek into our journey towards inventiveness</p>
               <img src="<?php bloginfo('template_directory'); ?>/images/qr-code.png" alt="" class="qrImg">
                <a href="<?php echo site_url('/forms/'); ?>" class="connectCta">Let's Collaborate</a>
            </div>
        </div>
    </header>

    <section class="homeBanner">
        <div class="bannerContent">
            <div class="bannerText">
                <h1 class="h1 font135 fontW800">We aspire to be India’s most inventive company in the creative business</h1>
            </div>
            <div class="bannerVideo">
                <div class="videoBox">
                    <!-- <video id="video" src="<?php bloginfo('template_directory'); ?>/images/tm-video.mp4" controls="true" autoplay="autoplay" loop="true"muted defaultmuted playsinline /></video> -->
                    <video autoplay muted="false" id="video" class="videoOne" loop="">
                        <source src="<?php bloginfo('template_directory'); ?>/images/main-video.mp4" type="video/mp4">
                    </video>
                    <video class="videotwo"  muted="false" loop="" autoplay playsinline>
                        <source src="<?php bloginfo('template_directory'); ?>/images/teaser.mp4" type="video/mp4">
                    </video>
                    <!-- <div id="audio-control" class="muted">Unmute</div> -->
                    <div class="videoHoverBox" id="audio-control"></div>
                </div>
                <!-- <div class="logo">
				<div id="logosAnime">
                <img src="<?php bloginfo('template_directory'); ?>/images/logos.gif" alt="">
				</div>
				
			</div> -->

            </div>
        </div>
    </section>
</div>

<div class="clientSec">
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/acko.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/airtel.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/almarai.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/beauty.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/bloomberg.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/blue-star.webp" alt="">
    </div>
    
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/box-8.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/cadbury.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/cipla.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/coca-cola.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/dineout.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/disney-plus.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/hcl.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/hdfc-bank.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/hexaware.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/hyatt.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/icici.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/idfc.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/iifl.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/iit.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/intermiles.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/itc.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/kotak.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/mahindra-lifespace.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/mahindra-logistic.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/mi.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/minute-maid.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/mondelez.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/mtv.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/navneet.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/orra.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/oyo.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/paytm.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/phoenix.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/shemaroo.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/tata-aig.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/tata-capital.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/tata-cliq.webp" alt="">
    </div>
    <div class="clientLogos">
        <img src="<?php bloginfo('template_directory'); ?>/images/logos/wipro.webp" alt="">
    </div>
</div>

<?php get_footer(); ?>

