<?php get_header(); /*Template Name: case studies details*/
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
                <a href="<?php echo site_url('/case-study-listing/'); ?>" class="connectCta connectCtatwo">Case Studies</a>
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
                        <li class="menu_sub"><a href="<?php echo site_url('/homepage-two/'); ?>" class="menu__item ">Home </a>
                        </li>
                        <li class="menu_sub"><a href="<?php echo site_url('/case-study-listing/'); ?>" class="menu__item ">Case Studies </a>
                        </li>
                        <li class="menu_sub"><a href="#" class="menu__item ">Services </a>
                        </li>
                        <li class="menu_sub"><a href="<?php echo site_url('/forms/'); ?>" class="menu__item ">Scope My Project </a>
                        </li>
                        <li class="menu_sub"><a href="<?php echo site_url('/forms/'); ?>" class="menu__item ">Career </a>
                        </li>
                        <li class="menu_sub"><a href="#" class="menu__item ">Blogs </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>



<div class="casebgdetails">

    <section>
        <div class="sectionOne">
            <div class="mobtext wow slideInLeft">
                <p class="font20 fontW800 colorWhite">One to 11</p>
                <h1 class="font60 fontW800 colorWhite">Disrupting The Online Gaming Industry</h1>
                <h5 class="font20 colorWhite fontW500">India's first fastest growing Social Networking Fantasy Mobile gaming with over 2.2 million users on the
                    platform.</h5>
            </div>
            <div class="wow fadeInUp mobImg" data-wow-duration="4s">
                <img src="<?php bloginfo('template_directory'); ?>/images/phone.png">
            </div>
        </div>
    </section>
    <section>
        <div class="sectionTwo">
            <div class="mobtextTwo">
                <div class="wow slideInLeft" data-wow-duration="2s">
                    <p class="font20 fontW800 colorBlack">insight</p>
                    <h1 class="font60 fontW800 colorBlack">A new experience reflecting the brand’s vision and values</h1>
                    <h5 class="font20 colorBlack fontW500">They aim to Create the biggest Gaming ecosystem in the world with games suiting to every gamers. They have plans to include NFT based Role playing Games with a New Play To Earn model across the platform.</h5>
                </div>
            </div>
            <div class="mobimgTwo wow slideInRight" data-wow-duration="2s">
                <img src="<?php bloginfo('template_directory'); ?>/images/phone-two.png">
            </div>
        </div>
    </section>
    <section>
        <div class="sectionThree">
            <div class="mobtextThree wow slideInLeft" data-wow-duration="2s">
                <p class="font20 fontW800 colorWhite">solutions</p>
                <h1 class="font60 fontW800 colorWhite">Unique experience designed around Gamers life</h1>
            </div>
            <div class="mobsubtextThree wow slideInRight" data-wow-duration="2s">
                <h5 class="font20 colorWhite fontW500">A responsive website that aims to educate users about the NFT market and crypto-currencies. An infographic design with educative content is easier to understand.</h5>
            </div>
        </div>
    </section>
    <section>
        <div class="sectionFour">
            <div class="desktopImg">
                <img src="<?php bloginfo('template_directory'); ?>/images/phone-three.png">
            </div>
            <div class="mobileImg">
                <img src="<?php bloginfo('template_directory'); ?>/images/computer-img-responsive.png">
                <img src="<?php bloginfo('template_directory'); ?>/images/mbl-responsive.png">
            </div>
        </div>
    </section>
    <section>
        <div class="sectionFive">
            <div class="mobtextFour wow slideInLeft" data-wow-duration="2s">
                <p class="font20 fontW800 colorBlack">impact</p>
                <h1 class="font60 fontW800 colorBlack">An immersive Web3 experience for the market tiers</h1>
            </div>
            <div class="mobsubtextFour wow slideInRight" data-wow-duration="2s">
                <h5 class="font20 colorBlack fontW500">The user demographic on this platform are from Tier 2 and Tier 3 cities who do not know much about WEB3 & it’s implications. They wanted an Informative website to educate their users and help them embark on the journey together with Oneto11.</h5>
            </div>
        </div>
    </section>
    <section class="sectionSix">
        <img src="<?php bloginfo('template_directory'); ?>/images/phone-four.png">
    </section>
    <section class="sectionSeven">
        <div class="brandLogos">
            <div class="relatedBox relatedBoxone" style="background: #ec2120;">
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/nykaa-logo.png"></a>
            </div>
            <div class="relatedBox relatedBoxtwo" style="background: #00C859;">
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/nykaa-logo.png"></a>
            </div>
        </div>
    </section>
</div>

<?php get_footer(); ?>

<script>
    wow = new WOW({
        animateClass: 'animated',
        offset: 100,
        callback: function(box) {
            console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
    });
    wow.init();


    $(".relatedBox").hover(function() {
        if ($(this).hasClass("activerelated")) {
            $(".relatedBoxone").removeClass("activerelated");
            $(".relatedBoxone").addClass("deactiverelated");
            $(".relatedBoxtwo").addClass("activerelated");
            $(".relatedBoxtwo").removeClass("deactiverelated");
        } else {
            $(".relatedBoxone").addClass("activerelated");
            $(".relatedBoxone").removeClass("deactiverelated");
            $(".relatedBoxtwo").removeClass("activerelated");
            $(".relatedBoxtwo").addClass("deactiverelated");
        }
    });

    $(".relatedBox").mouseleave(function() {
        if ($(this).hasClass("deactiverelated")) {
            $(".relatedBoxone").removeClass("activerelated");
            $(".relatedBoxtwo").removeClass("activerelated");
            $(".relatedBoxone").removeClass("deactiverelated");
            $(".relatedBoxtwo").removeClass("deactiverelated");
        } else {}
    });
</script>