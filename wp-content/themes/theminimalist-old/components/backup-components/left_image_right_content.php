<!-- Left Image Right Content -->
<section class="lefttext-rightImg leftimg-rightText" style="background: <?php echo get_sub_field('section_background_color'); ?>;">
  <div class="sectionTwo">
    <div class="mobtextTwo wow slideInRight" data-wow-duration="1s" style="background: <?php echo get_sub_field('text_box_background_color'); ?>;">
      <div class="innerContent" style="color: <?php echo get_sub_field('text_color'); ?>;">
        <p class="font20 fontW800"><?php echo get_sub_field('sub_heading'); ?></p>
        <h1 class="font60 fontW800"><?php echo get_sub_field('heading'); ?></h1>
        <h5 class="font20 fontW500"><?php echo get_sub_field('description'); ?></h5>
      </div>
    </div>
    <div class="mobimgTwo wow slideInLeft" data-wow-duration="1s" style="background: <?php echo get_sub_field('image_box_background_color'); ?>;">
      <?php $leftimage = get_sub_field('left_image');
      if( !empty( $leftimage ) ): ?>
        <img src="<?php echo esc_url($leftimage['url']); ?>" alt="<?php echo esc_attr($leftimage['alt']); ?>" />
      <?php endif; ?>
    </div>
  </div>
</section>