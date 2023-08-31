<!-- Left Content Right Image -->
<section class="lefttext-rightImg" style="background: <?php echo get_sub_field('section_background_color'); ?>;">
  <div class="sectionTwo">
    <div class="mobtextTwo wow slideInLeft" data-wow-duration="1s" style="background: <?php echo get_sub_field('text_box_background_color'); ?>;">
      <div class="innerContent">
        <h5 class="font20 fontW800" style="color: <?php echo get_sub_field('subhead_text_color'); ?>;"><?php echo get_sub_field('sub_heading'); ?></h5>
        <h2 class="font60 fontW800" style="color: <?php echo get_sub_field('heading_text_color'); ?>;"><?php echo get_sub_field('heading'); ?></h2>
        <p class="font20 fontW500" style="color: <?php echo get_sub_field('description_text_color'); ?>;"><?php echo get_sub_field('description'); ?></p>
      </div>
    </div>

    <div class="mobimgTwo wow slideInRight" data-wow-duration="1s" style="background: <?php echo get_sub_field('image_box_background_color'); ?>;">
      <?php if (have_rows('right_image_options')) : ?>
        <?php while (have_rows('right_image_options')) : the_row(); ?>
          <?php if (get_row_layout() == 'right_image_box') : ?>
            <div class="desktopImg">
              <?php $rightimage = get_sub_field('right_image');
              if (!empty($rightimage)) : ?>
                <img src="<?php echo esc_url($rightimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($rightimage['alt']); ?>" />
              <?php endif; ?>
            </div>

            <?php
            $mobrightimg = get_sub_field( "mobile_right_image" );
            if ( $mobrightimg ) {?>
              <div class="mobileImg">
                <?php $mobrightimage = get_sub_field('mobile_right_image');
                if (!empty($mobrightimage)) : ?>
                  <img src="<?php echo esc_url($mobrightimage['url']); ?>" alt="<?php echo esc_attr($mobrightimage['alt']); ?>" />
                <?php endif; ?>
              </div>
            <?php } else { ?>
              <div class="mobileImg">
                <?php $rightimage = get_sub_field('right_image');
                if( !empty( $rightimage ) ): ?>
                  <img src="<?php echo esc_url($rightimage['url']); ?>" alt="<?php echo esc_attr($rightimage['alt']); ?>" />
                <?php endif; ?>  
              </div>
            <?php } ?>

          <?php elseif (get_row_layout() == 'right_animation_box') : ?>

            <div class="<?php if(get_sub_field('mobile_right_animation')){?>desktopImg<?php } else { ?><?php } ?>  showBox">
              <?php echo get_sub_field('right_animation'); ?>
            </div>

            <?php
            $mobilerightanimation = get_sub_field( "mobile_right_animation" );
            if ( $mobilerightanimation ) {?>
              <div class="mobileImg">
                <?php echo get_sub_field('mobile_right_animation'); ?>
              </div>
            <?php } else { ?>
              <!-- <style type="text/css">.desktopImg.showBox {display:block;}</style> -->
            <?php } ?>

          <?php endif; ?>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>