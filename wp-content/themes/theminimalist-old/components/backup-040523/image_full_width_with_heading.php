<!-- Image Full Width With Heading -->
<section class="fullimgwithHeading" style="background: <?php echo get_sub_field('section_background_color'); ?>;">
  <div class="headingSec">
    <h2 class="font36 fontW800" style="color: <?php echo get_sub_field('heading_text_color'); ?>;"><?php echo get_sub_field('heading'); ?></h2>
    <p class="font20 fontW500" style="color: <?php echo get_sub_field('description_text_color'); ?>;"><?php echo get_sub_field('description'); ?></p>
  </div>
  <div class="imgDiv">
    <div class="desktopImg wow fadeInUp" data-wow-duration="4s">
      <?php $singleimage = get_sub_field('single_image');
      if( !empty( $singleimage ) ): ?>
        <img src="<?php echo esc_url($singleimage['url']); ?>" alt="<?php echo esc_attr($singleimage['alt']); ?>" />
      <?php endif; ?>  
    </div>
    <div class="mobileImg wow fadeInUp" data-wow-duration="4s">
      <?php $mobsingleimage = get_sub_field('mobile_single_image');
      if (!empty($mobsingleimage)) : ?>
        <img src="<?php echo esc_url($mobsingleimage['url']); ?>" alt="<?php echo esc_attr($mobsingleimage['alt']); ?>" />
      <?php endif; ?>
    </div>
  </div>
</section>