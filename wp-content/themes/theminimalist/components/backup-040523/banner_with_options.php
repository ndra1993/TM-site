<!-- Banner With Single Image -->
<section class="bannerSection" style="background: <?php echo get_sub_field('section_background_color'); ?>;">
  <div class="sectionOne">
    <div class="mobtext wow slideInLeft" style="color: <?php echo get_sub_field('text_color'); ?>;">
      <h5 class="font20 fontW800"><?php echo get_sub_field('sub_heading'); ?></h5>
      <h1 class="font60 fontW800"><?php echo get_sub_field('heading'); ?></h1>
      <p class="font20 fontW500"><?php echo get_sub_field('description'); ?></>
    </div>

    <?php if (have_rows('banner_option')) : ?>
      <?php while (have_rows('banner_option')) : the_row(); ?>

        <?php if (get_row_layout() == 'banner_image_box') : ?>
          <div class="mobImg desktopImg">
            <?php $bannerimage = get_sub_field('banner_image');
            if (!empty($bannerimage)) : ?>
              <img src="<?php echo esc_url($bannerimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($bannerimage['alt']); ?>" />
            <?php endif; ?>
          </div>

          <div class="mobImg mobileImg">
            <?php
            $value = get_sub_field( "mobile_banner_image" );
            if ( $value ) {?>
              <?php $mobbannerimage = get_sub_field('mobile_banner_image');
              if (!empty($mobbannerimage)) : ?>
                <img src="<?php echo esc_url($mobbannerimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($mobbannerimage['alt']); ?>" />
              <?php endif; ?>
            
            <?php } else { ?>
              <style type="text/css">.mobileImg {display:none !important;} .desktopImg{display: block !important;}</style>
            <?php } ?>
          </div>

        <?php elseif (get_row_layout() == 'banner_animation_box') : ?>
          <div class="bannerAnimeimg desktopImg">
            <?php echo get_sub_field('banner_animation'); ?>
          </div>

          <div class="bannerAnimeimg mobileImg">
            <?php
            $anim = get_sub_field( "mobile_banner_animation" );
            if ( $anim ) {?>
              <?php echo get_sub_field('mobile_banner_animation'); ?>
            <?php } else { ?>
              <style type="text/css">.mobileImg {display:none !important;} .desktopImg{display: block !important;}</style>
            <?php } ?>
          </div>

         <?php elseif (get_row_layout() == 'banner_video_box') : ?>
          <div class="mobImg wow fadeInUp" data-wow-duration="4s">
            <video class="desktopImg" playsinline="playsinline" muted="muted" preload="yes" autoplay="autoplay" loop="loop" id="vjs_video_739_html5_api" class="video-js" data-setup='{"autoplay":"any"}'>
              <source src="<?php echo get_sub_field('banner_video'); ?>" type="video/mp4">
            </video>
            <?php
            $vid = get_sub_field( "mobile_banner_video" );
            if ( $vid ) {?>
              <video class="mobileImg" playsinline="playsinline" muted="muted" preload="yes" autoplay="autoplay" loop="loop" id="vjs_video_739_html5_api" class="video-js" data-setup='{"autoplay":"any"}'>
                <source src="<?php echo get_sub_field('mobile_banner_video'); ?>" type="video/mp4">
              </video>
            <?php } else { ?>
              <video class="mobileImg" playsinline="playsinline" muted="muted" preload="yes" autoplay="autoplay" loop="loop" id="vjs_video_739_html5_api" class="video-js" data-setup='{"autoplay":"any"}'>
                <source src="<?php echo get_sub_field('banner_video'); ?>" type="video/mp4">
              </video>
            <?php } ?>
          </div>

        <?php endif; ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>