<?php get_header(); /*Template Name: case studies listing*/
?>


<header>
    <div class="headerContent wrapper">
        <div class="logoBox titleBox">
           
                <a class="backArrow" onclick="GoBackWithRefresh();return false;"><img src="<?php bloginfo('template_directory'); ?>/images/arrow-title.svg" alt="Back Arrow"></a>
            <h3 class="fontW800 font30 fontPoppins colorBlack">Case Study</h3>
            
        </div>
        <div class="homeBox">
            <!-- <p>Sneak peek into our journey towards inventiveness</p>
                <img src="<?php bloginfo('template_directory'); ?>/images/qr-code.png" alt="" class="qrImg"> -->
            <div class="headerCta">
                <a href="<?php echo site_url('/our-clients/'); ?>" class="connectCta connectCtatwo">Our Clients</a>
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


<!-- User this HTML for Slider -->
<section class="casestudyListing">
    <div class="container">
        <div class="banner-slider">
            <div class="slider slider-for">
                <div class="slider-banner-image">
                    <img src="<?php bloginfo('template_directory'); ?>/images/case-study-details-1.png" alt="">
                </div>
                <div class="slider-banner-image">
                    <img src="<?php bloginfo('template_directory'); ?>/images/phone-two.png" alt="">
                </div>
                <div class="slider-banner-image">
                    <img src="<?php bloginfo('template_directory'); ?>/images/case-study-details-1.png" alt="">
                </div>
                <div class="slider-banner-image">
                    <img src="<?php bloginfo('template_directory'); ?>/images/phone-two.png" alt="">
                </div>
                <div class="slider-banner-image">
                    <img src="<?php bloginfo('template_directory'); ?>/images/case-study-details-1.png" alt="">
                </div>
                <div class="slider-banner-image">
                    <img src="<?php bloginfo('template_directory'); ?>/images/phone-two.png" alt="">
                </div>
                <div class="slider-banner-image">
                    <img src="<?php bloginfo('template_directory'); ?>/images/case-study-details-1.png" alt="">
                </div>
                <div class="slider-banner-image">
                    <img src="<?php bloginfo('template_directory'); ?>/images/phone-two.png" alt="">
                </div>
                <div class="slider-banner-image">
                    <img src="<?php bloginfo('template_directory'); ?>/images/case-study-details-1.png" alt="">
                </div>
            </div>
            <div class="slider slider-nav thumb-image">
                <div class="thumbnail-image">
                    <div class="thumbImg">
                        <p class="font14 fontW800">One to 11</p>
                        <h1 class="font30 fontW800 h1">Disrupting the online gaming industry</h1>
                    </div>
                </div>
                <div class="thumbnail-image">
                    <div class="thumbImg">
                        <p class="font14 fontW800">Tata cliq luxury</p>
                        <h1 class="font30 fontW800 h1">Redefining experiences for india’s premier luxury lifestyle platform</h1>
                    </div>
                </div>
                <div class="thumbnail-image">
                    <div class="thumbImg">
                        <p class="font14 fontW800">One to 11</p>
                        <h1 class="font30 fontW800 h1">Disrupting the online gaming industry</h1>
                    </div>
                </div>
                <div class="thumbnail-image">
                    <div class="thumbImg">
                        <p class="font14 fontW800">Tata cliq luxury</p>
                        <h1 class="font30 fontW800 h1">Redefining experiences for india’s premier luxury lifestyle platform</h1>
                    </div>
                </div>
                <div class="thumbnail-image">
                    <div class="thumbImg">
                        <p class="font14 fontW800">One to 11</p>
                        <h1 class="font30 fontW800 h1">Disrupting the online gaming industry</h1>
                    </div>
                </div>
                <div class="thumbnail-image">
                    <div class="thumbImg">
                        <p class="font14 fontW800">Tata cliq luxury</p>
                        <h1 class="font30 fontW800 h1">Redefining experiences for india’s premier luxury lifestyle platform</h1>
                    </div>
                </div>
                <div class="thumbnail-image">
                    <div class="thumbImg">
                        <p class="font14 fontW800">One to 11</p>
                        <h1 class="font30 fontW800 h1">Disrupting the online gaming industry</h1>
                    </div>
                </div>
                <div class="thumbnail-image">
                    <div class="thumbImg">
                        <p class="font14 fontW800">Tata cliq luxury</p>
                        <h1 class="font30 fontW800 h1">Redefining experiences for india’s premier luxury lifestyle platformy</h1>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- End User this HTML for Slider -->


<?php get_footer(); ?>