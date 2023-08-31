<!-- Big Left Image Right Content -->
<section class="twoImgtogether-headinglast" style="background: <?php echo get_sub_field('section_background_color'); ?>;">
  <div class="imageHeadingmain">
    <div class="imgDivmain wow slideInLeft" data-wow-duration="1s">
      <?php $leftimage = get_sub_field('left_image');
      if( !empty( $leftimage ) ): ?>
        <img src="<?php echo esc_url($leftimage['url']); ?>" alt="<?php echo esc_attr($leftimage['alt']); ?>" />
      <?php endif; ?>
    </div>
    <div class="headingDiv wow slideInRight" data-wow-duration="1s" style="color: <?php echo get_sub_field('text_color'); ?>;">
      <h2 class="font36 colorBlack fontW700"><?php echo get_sub_field('sub_heading'); ?></h2>
      <p class="font20 fontW400"><?php echo get_sub_field('heading'); ?></p>
    </div>
  </div>
</section>