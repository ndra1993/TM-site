<!-- Left Content Right Image -->
<section class="lefttext-rightImg" style="background: <?php echo get_sub_field('section_background_color'); ?>;">
  <div class="sectionTwo">
    <div class="mobtextTwo wow slideInLeft" data-wow-duration="1s" style="background: <?php echo get_sub_field('text_box_background_color'); ?>;">
      <div class="innerContent" style="color: <?php echo get_sub_field('text_color'); ?>;">
        <h5 class="font20 fontW800"><?php echo get_sub_field('sub_heading'); ?></h5>
        <h2 class="font60 fontW800"><?php echo get_sub_field('heading'); ?></h2>
        <p class="font20 fontW500"><?php echo get_sub_field('description'); ?></p>
      </div>
    </div>

    <div class="mobimgTwo wow slideInRight" data-wow-duration="1s" style="background: <?php echo get_sub_field('image_box_background_color'); ?>;">
      <?php if (have_rows('right_image_options')) : ?>
        <?php while (have_rows('right_image_options')) : the_row(); ?>
          <?php if (get_row_layout() == 'right_image_box') : ?>
            <?php $rightimage = get_sub_field('right_image');
            if (!empty($rightimage)) : ?>
              <img src="<?php echo esc_url($rightimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($rightimage['alt']); ?>" />
            <?php endif; ?>

          <?php elseif (get_row_layout() == 'right_animation_box') : ?>
            <?php echo get_sub_field('right_animation'); ?>
          <?php endif; ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>