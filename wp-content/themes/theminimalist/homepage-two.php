<?php get_header(); /*Template Name: Homepage Two*/ ?>


<style>
    .expand{
    -webkit-animation: 1s ease 0s normal forwards 1 fadein;
    animation: 1s ease 0s normal forwards 1 fadein;
}

.expandnew{
    -webkit-animation: 2s ease 0s normal forwards 1 fadein;
    animation: 2s ease 0s normal forwards 1 fadein;
}
.expandnewOne{
    -webkit-animation: 3s ease 0s normal forwards 1 fadein;
    animation: 3s ease 0s normal forwards 1 fadein;
}

@keyframes fadein{
    0% { opacity:0; }
    66% { opacity:0; }
    100% { opacity:1; }
}

@-webkit-keyframes fadein{
    0% { opacity:0; }
    66% { opacity:0; }
    100% { opacity:1; }
}
</style>

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

