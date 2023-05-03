<!-- Banner With Single Image -->
<section class="bannerSection" style="background: <?php echo get_sub_field('section_background_color'); ?>;">
  <div class="sectionOne">
    <div class="mobtext wow slideInLeft" style="color: <?php echo get_sub_field('text_color'); ?>;">
      <p class="font20 fontW800"><?php echo get_sub_field('sub_heading'); ?></p>
      <h1 class="font60 fontW800"><?php echo get_sub_field('heading'); ?></h1>
      <h5 class="font20 fontW500"><?php echo get_sub_field('description'); ?></h5>
    </div>
    <div class="mobImg">
      <?php $bannerimage = get_sub_field('banner_image');
      if( !empty( $bannerimage ) ): ?>
        <img src="<?php echo esc_url($bannerimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($bannerimage['alt']); ?>" />
      <?php endif; ?>
    </div>
  </div>
</section>