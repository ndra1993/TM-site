<!-- Two Images With Center Heading -->
<section class="twoImgsides-headingmiddle" style="background: <?php echo get_sub_field('section_background_color'); ?>;">
  <div class="imageHeadingmain">
    <div class="imgDivmain wow slideInLeft">
      <?php $firstimage = get_sub_field('first_image');
      if( !empty( $firstimage ) ): ?>
        <img src="<?php echo esc_url($firstimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($firstimage['alt']); ?>" />
      <?php endif; ?>
    </div>
    <div class="headingDiv">
      <h2 class="font36 fontW700" style="color: <?php echo get_sub_field('heading_text_color'); ?>;"><?php echo get_sub_field('heading'); ?></h2>
      <p class="font20 fontW400" style="color: <?php echo get_sub_field('description_text_color'); ?>;"><?php echo get_sub_field('description'); ?></p>
    </div>
    <div class="imgDivmain wow slideInRight">
      <?php $secondimage = get_sub_field('second_image');
      if( !empty( $secondimage ) ): ?>
        <img src="<?php echo esc_url($secondimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($secondimage['alt']); ?>" />
      <?php endif; ?>
    </div>
  </div>
</section>