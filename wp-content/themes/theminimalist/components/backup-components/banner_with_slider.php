<!-- Banner With Slider -->
<section class="bannerSlidermain" style="background: <?php echo get_sub_field('section_background_color'); ?>;">
  <div class="bannerInnerDiv">
    <div class="bannerslidePara" style="color: <?php echo get_sub_field('text_color'); ?>;">
      <p class="font20 fontW800"><?php echo get_sub_field('sub_heading'); ?></p>
      <h1 class="font60 fontW800"><?php echo get_sub_field('heading'); ?></h1>
      <h5 class="font20 fontW500"><?php echo get_sub_field('description'); ?></h5>
    </div>
    <div class="bannerSlider">
      <?php if( have_rows('banner_slider') ): ?>
        <?php while( have_rows('banner_slider') ): the_row(); ?>
          <div class="bannerSliderSection">
            <div class="bannerSliderimg">
              <?php $sliderimage = get_sub_field('slider_image');
              if( !empty( $sliderimage ) ): ?>
                <img src="<?php echo esc_url($sliderimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($sliderimage['alt']); ?>" />
              <?php endif; ?>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>