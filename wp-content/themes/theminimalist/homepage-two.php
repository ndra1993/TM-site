<?php get_header(); /*Template Name: Homepage Two*/ ?>




<div class="loaderScreen">
    <!-- <div class="wrapper" style="position: relative;">
        <h2 class="loading h1 font135 fontW800" data-loading-text="Loading..."></h2>
        <div class="progress-bar">
            <span class="bar">
                <span class="progress"></span>
            </span>
        </div>
    </div> -->
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

<script>
    $(window).on('load', function(){
      setTimeout(function(){
          $('.loaderScreen').fadeOut();
          $('.logoBox').addClass('expandnew');
        $('.homeBox').addClass('expandnewOne');
        $('.bannerText').addClass('expand');
        $('.showreel-container').addClass('expandnewOne');
          // $(".bodyHolder").fadeIn("slow");
      }, 100);
      /*$(document).ready(function () {
        $('.logoBox').addClass('expandnew');
        $('.homeBox').addClass('expandnewOne');
        $('.bannerText').addClass('expand');
        $('.showreel-container').addClass('expandnewOne');
    });*/
});
</script>