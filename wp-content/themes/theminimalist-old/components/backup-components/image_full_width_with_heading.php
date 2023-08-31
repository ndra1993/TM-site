<!-- Image Full Width With Heading -->
<section class="fullimgwithHeading" style="background: <?php echo get_sub_field('section_background_color'); ?>;">
  <div class="headingSec" style="color: <?php echo get_sub_field('text_color'); ?>;">
    <h2 class="font36 fontW800"><?php echo get_sub_field('heading'); ?></h2>
    <p class="font20 fontW500"><?php echo get_sub_field('description'); ?></p>
  </div>
  <div class="imgDiv">
    <?php $singleimage = get_sub_field('single_image');
    if( !empty( $singleimage ) ): ?>
      <img src="<?php echo esc_url($singleimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($singleimage['alt']); ?>" />
    <?php endif; ?>
  </div>
</section>