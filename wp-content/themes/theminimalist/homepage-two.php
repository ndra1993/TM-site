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
            <a href="http://localhost/projects/TM-site-new/homepage-two/">
                <img src="<?php bloginfo('template_directory'); ?>/images/tm-logo.svg" alt="">
            </a>
        </div>
        <div class="homeBox">
            <!-- <p>Sneak peek into our journey towards inventiveness</p>
                <img src="<?php bloginfo('template_directory'); ?>/images/qr-code.png" alt="" class="qrImg"> -->
            <div class="headerCta">
                <a href="http://localhost/projects/TM-site-new/case-study-listing/" class="connectCtatwo">Case Studies</a>
            </div>
            <div class="headerCta">
                <a href="<?php echo site_url('/forms/'); ?>" class="connectCta">Let's Invent</a>
            </div>
            <div class="hamburgerIcon">
                <button class="menu__button"><span class="top"></span><span class="middle"></span><span class="bottom"></span></button>
                <div class="legalOverlay">
                    <ul class="menu__list">
                        <li class="menu_sub"><a href="#" class="menu__item ">Explore </a>
                        </li>
                        <li class="menu_sub"><a href="#" class="menu__item ">Home </a>
                        </li>
                        <li class="menu_sub"><a href="#" class="menu__item ">Case Studies </a>
                        </li>
                        <li class="menu_sub"><a href="#" class="menu__item ">Services </a>
                        </li>
                        <li class="menu_sub"><a href="#" class="menu__item ">Scope My Project </a>
                        </li>
                        <li class="menu_sub"><a href="#" class="menu__item ">Career </a>
                        </li>
                        <li class="menu_sub"><a href="#" class="menu__item ">Blogs </a>
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


<!-- <div class="clientSec">
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
</div> -->

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