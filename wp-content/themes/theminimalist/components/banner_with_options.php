<!-- Banner With Single Image -->
<section class="bannerSection" style="background: <?php echo get_sub_field('section_background_color'); ?>;">
  <div class="sectionOne">
    <div class="mobtext wow slideInLeft" style="color: <?php echo get_sub_field('text_color'); ?>;">
      <h5 class="font20 fontW800"><?php echo get_sub_field('sub_heading'); ?></h5>
      <h1 class="font60 fontW800"><?php echo get_sub_field('heading'); ?></h1>
      <p class="font20 fontW500"><?php echo get_sub_field('description'); ?></>
    </div>

    <?php if (have_rows('banner_option')) : ?>
      <?php while (have_rows('banner_option')) : the_row(); ?>

        <?php if (get_row_layout() == 'banner_image_box') : ?>
          <div class="mobImg">
            <?php $bannerimage = get_sub_field('banner_image');
            if (!empty($bannerimage)) : ?>
              <img src="<?php echo esc_url($bannerimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($bannerimage['alt']); ?>" />
            <?php endif; ?>
          </div>

        <?php elseif (get_row_layout() == 'banner_animation_box') : ?>
          <div class="bannerAnimeimg">
            <?php echo get_sub_field('banner_animation'); ?>
          </div>
          
        <?php endif; ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>