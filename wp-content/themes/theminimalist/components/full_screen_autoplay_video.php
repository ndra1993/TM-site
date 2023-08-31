<!-- Full Screen Autoplay Video -->
<section class="fullautoplayvideo">
  	<div class="<?php if(get_sub_field('mobile_video_div')){?>desktopImg<?php } else { ?><?php } ?> showBox">
        <video width="100%" height="100%" autoplay muted loop playsinline preload="metadata">
            <source src="<?php echo get_sub_field('banner_video'); ?>" type="video/mp4">
        </video>
    </div>
    <div class="mobileImg">
        <video width="100%" height="100%" autoplay muted loop playsinline preload="metadata">
            <source src="<?php echo get_sub_field('mobile_video_div'); ?>" type="video/mp4">
        </video>
    </div>
      
</section>