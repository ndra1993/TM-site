<!-- Left Image Right Content -->
<section class="lefttext-rightImg leftimg-rightText" style="background: <?php echo get_sub_field('section_background_color'); ?>;">
  <div class="sectionTwo">
    <div class="mobtextTwo wow slideInRight" data-wow-duration="1s" style="background: <?php echo get_sub_field('text_box_background_color'); ?>;">
      <div class="innerContent">
        <h5 class="font20 fontW800" style="color: <?php echo get_sub_field('subhead_text_color'); ?>;"><?php echo get_sub_field('sub_heading'); ?></h5>
        <h2 class="font60 fontW800" style="color: <?php echo get_sub_field('heading_text_color'); ?>;"><?php echo get_sub_field('heading'); ?></h2>
        <p class="font20 fontW500" style="color: <?php echo get_sub_field('description_text_color'); ?>;"><?php echo get_sub_field('description'); ?></p>
      </div>
    </div>
    
    <div class="mobimgTwo wow slideInLeft" data-wow-duration="1s" style="background: <?php echo get_sub_field('image_box_background_color'); ?>;">
      <?php if (have_rows('left_image_options')) : ?>
        <?php while (have_rows('left_image_options')) : the_row(); ?>
          <?php if (get_row_layout() == 'left_image_box') : ?>
            <div class="desktopImg">
              <?php $leftimage = get_sub_field('left_image');
              if (!empty($leftimage)) : ?>
                <img src="<?php echo esc_url($leftimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($leftimage['alt']); ?>" />
              <?php endif; ?>
            </div>

            <?php
            $mobleftimg = get_sub_field( "mobile_left_image" );
            if ( $mobleftimg ) {?>
              <div class="mobileImg">
                <?php $mobleftimage = get_sub_field('mobile_left_image');
                if (!empty($mobleftimage)) : ?>
                  <img src="<?php echo esc_url($mobleftimage['url']); ?>" alt="<?php echo esc_attr($mobleftimage['alt']); ?>" />
                <?php endif; ?>
              </div>
            <?php } else { ?>
              <div class="mobileImg">
                <?php $leftimage = get_sub_field('left_image');
                if( !empty( $leftimage ) ): ?>
                  <img src="<?php echo esc_url($leftimage['url']); ?>" alt="<?php echo esc_attr($leftimage['alt']); ?>" />
                <?php endif; ?>  
              </div>
            <?php } ?>

          <?php elseif (get_row_layout() == 'left_animation_box') : ?>
            <div class="<?php if(get_sub_field('mobile_left_animation')){?>desktopImg<?php } else { ?><?php } ?> showBox">
              <?php echo get_sub_field('left_animation'); ?>
            </div>

            <?php
            $mobilelefttanimation = get_sub_field( "mobile_left_animation" );
            if ( $mobilelefttanimation ) {?>
              <div class="mobileImg">
                <?php echo get_sub_field('mobile_left_animation'); ?>
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