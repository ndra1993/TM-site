<?php get_header(); /*Template Name: Homepage Two*/ ?>


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


<header>
    <div class="headerContent wrapper">
        <div class="logoBox">
            <a href="<?php echo site_url('/homepage-two/'); ?>">
                <img src="<?php bloginfo('template_directory'); ?>/images/tm-logo.svg" alt="">
            </a>
        </div>
        <div class="homeBox">
            <!-- <p>Sneak peek into our journey towards inventiveness</p>
                <img src="<?php bloginfo('template_directory'); ?>/images/qr-code.png" alt="" class="qrImg"> -->
            <div class="headerCta">
                <a href="<?php echo site_url('/case-study-listing/'); ?>" class=" connectCta connectCtatwo">Case Studies</a>
            </div>
            <div class="headerCta">
                <a href="<?php echo site_url('/forms/'); ?>" class="connectCta">Let's Invent</a>
            </div>
            
            <div class="hamburgerIcon">
                <button class="menu__button"><span class="top"></span><span class="middle"></span><span class="bottom"></span></button>
                <div class="legalOverlay">
                    <h5 class="font32">Explore</h5>
                    <ul class="menu__list">
                        <li class="menu_sub"><a href="<?php echo site_url('/homepage-two/'); ?>" class="menu__item font80">Home </a>
                        </li>
                        <li class="menu_sub"><a href="<?php echo site_url('/case-study-listing/'); ?>" class="menu__item font80">Case Studies </a>
                        </li>
                        <li class="menu_sub"><a href="#" class="menu__item font80">Services </a>
                        </li>
                        <li class="menu_sub"><a href="<?php echo site_url('/forms/'); ?>" class="menu__item font80">Scope My Project </a>
                        </li>
                        <li class="menu_sub"><a href="<?php echo site_url('/forms/'); ?>" class="menu__item font80">Career </a>
                        </li>
                        <li class="menu_sub"><a href="#" class="menu__item font80">Blogs </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>

<section class="homeBanner wrapper">
    <div class="bannerContent">
        <div class="bannerText">
            <h1 class="h1 font135 fontW800">We aspire to be India’s most inventive company in the creative business</h1>
        </div>
        <div class="showreel-container" style="opacity: 1; visibility: inherit;">
            <div class="showreel-video-block">
                <video autoplay="" loop="" muted="" playsinline="" cursor-class="showreel-video">
                    <source src="<?php bloginfo('template_directory'); ?>/images/main-video.mp4" type="video/mp4">
                </video>

                <!-- <span class="showreel-text">Showreel 2022</span> -->
            </div>
            <div class="showreel-bg"></div>
        </div>
    </div>
</section>




<?php get_footer(); ?>

<footer>
    <div class="footerLinks">
        <div>
            <p class="colorBlack fontW600 font14 fontPoppins copyRight">
                <span class="font20 fontW600">&#169;</span>
                All Rights Reserved, Minimalist Solutions Private Limited
            </p>
        </div>
        <div class="linksFt">
            <a href="#" class="fontPoppins fontW600 font14 colorBlack">Privacy Policy</a>
            <span>|</span>
            <a href="#" class="fontPoppins fontW600 font14 colorBlack">Terms Of Use 
            </a>
        </div>
</footer>