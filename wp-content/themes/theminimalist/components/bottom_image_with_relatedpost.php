<!-- bottom logo section-->
<section class="bottomimgLogos" style="background: #fff">
  <div class="sectionSiximg">
    <?php $bottomfooterimage = get_sub_field('bottom_footer_image');
    if (!empty($bottomfooterimage)) : ?>
      <img src="<?php echo esc_url($bottomfooterimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($bottomfooterimage['alt']); ?>" />
    <?php endif; ?>
  </div>
  <div class="moreCasestudy">
    <div class="brandLogos">
      <?php if (have_rows('related_post_one')) : ?>
        <?php while (have_rows('related_post_one')) : the_row(); ?>
          <div class="relatedBox relatedBoxone" style="background: <?php echo get_sub_field('background_color'); ?>;">
            <a href="<?php echo get_sub_field('related_post_link'); ?>">
              <?php $relatedpostimage = get_sub_field('related_post_image');
              if (!empty($relatedpostimage)) : ?>
                <img src="<?php echo esc_url($relatedpostimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($relatedpostimage['alt']); ?>" />
              <?php endif; ?>
            </a>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
      <?php if (have_rows('related_post_two')) : ?>
        <?php while (have_rows('related_post_two')) : the_row(); ?>
          <div class="relatedBox relatedBoxtwo" style="background: <?php echo get_sub_field('background_color'); ?>;">
            <a href="<?php echo get_sub_field('related_post_link'); ?>">
              <?php $relatedpostimage = get_sub_field('related_post_image');
              if (!empty($relatedpostimage)) : ?>
                <img src="<?php echo esc_url($relatedpostimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($relatedpostimage['alt']); ?>" />
              <?php endif; ?>
            </a>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</section>