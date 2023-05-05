<!-- Banner With Slider -->
<section class="bannerSlidermain" style="background: <?php echo get_sub_field('section_background_color'); ?>;">
  <div class="bannerInnerDiv">
    <div class="bannerslidePara">
      <h5 class="font20 fontW800" style="color: <?php echo get_sub_field('subhead_text_color'); ?>;"><?php echo get_sub_field('sub_heading'); ?></h5>
      <h1 class="font60 fontW800" style="color: <?php echo get_sub_field('heading_text_color'); ?>;"><?php echo get_sub_field('heading'); ?></h1>
      <p class="font20 fontW500" style="color: <?php echo get_sub_field('description_text_color'); ?>;"><?php echo get_sub_field('description'); ?></p>
    </div>
    <div class="bannerSlider">
      <?php if (have_rows('banner_slider')) : ?>
        <?php while (have_rows('banner_slider')) : the_row(); ?>
          <div class="bannerSliderSection">
            <div class="bannerSliderimg">
              <div class="desktopImg">
                <?php $sliderimage = get_sub_field('slider_image');
                if (!empty($sliderimage)) : ?>
                  <img src="<?php echo esc_url($sliderimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($sliderimage['alt']); ?>" />
                <?php endif; ?>
              </div>

              <?php
              $mobsliimg = get_sub_field("mobile_slider_image");
              if ($mobsliimg) { ?>
                <div class="mobImg mobileImg">
                  <?php $mobsliderimage = get_sub_field('mobile_slider_image');
                  if (!empty($mobsliderimage)) : ?>
                    <img src="<?php echo esc_url($mobsliderimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($mobsliderimage['alt']); ?>" />
                  <?php endif; ?>
                </div>
              <?php } else { ?>
                <div class="mobImg mobileImg">
                  <?php $sliderimage = get_sub_field('slider_image');
                  if (!empty($sliderimage)) : ?>
                    <img src="<?php echo esc_url($sliderimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($sliderimage['alt']); ?>" />
                  <?php endif; ?>
                </div>
              <?php } ?>

            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
    <div class="awardSec">
      <h5 class="font20 fontW800">Awards Earned over the years</h5>
      <div class="awardMaindiv">
        <div class="awardDivbx">
          <img src="<?php bloginfo('template_directory'); ?>/images/award-icon.png">
          <h5 class="font20 fontW700">DOD Awards, 2020</h5>
          <p class="font16 fontW500">Best UX Website</p>
        </div>
        <div class="awardDivbx">
          <img src="<?php bloginfo('template_directory'); ?>/images/award-icon.png">
          <h5 class="font20 fontW700">DOD Awards, 2020</h5>
          <p class="font16 fontW500">Best UX Website</p>
        </div>
        <div class="awardDivbx">
          <img src="<?php bloginfo('template_directory'); ?>/images/award-icon.png">
          <h5 class="font20 fontW700">DOD Awards, 2020</h5>
          <p class="font16 fontW500">Best UX Website</p>
        </div>
      </div>
    </div>
  </div>
</section>