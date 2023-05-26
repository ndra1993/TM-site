<!-- Image Full Width With Heading -->
<section class="fullimgwithHeading" style="background: <?php echo get_sub_field('section_background_color'); ?>;">
  <div class="headingSec fullimghead">
    <?php
    $fullimghead = get_sub_field("heading");
    if ($fullimghead) { ?>
      <h2 class="font36 fontW800" style="color: <?php echo get_sub_field('heading_text_color'); ?>;"><?php echo get_sub_field('heading'); ?></h2>
    <?php } else { ?>
      <style type="text/css">
        .fullimgwithHeading {
          padding: 0px !important;
        }
      </style>
    <?php } ?>
    <p class="font20 fontW500" style="color: <?php echo get_sub_field('description_text_color'); ?>;"><?php echo get_sub_field('description'); ?></p>
  </div>
  <div class="imgDiv">
    <?php if (have_rows('image_options')) : ?>
      <?php while (have_rows('image_options')) : the_row(); ?>
        <?php if (get_row_layout() == 'single_image') : ?>
          <div class="desktopImg  wow fadeInUp" data-wow-duration="4s">
            <?php $singleimagedesktop = get_sub_field('single_image_desktop');
            if (!empty($singleimagedesktop)) : ?>
              <img src="<?php echo esc_url($singleimagedesktop['url']); ?>" alt="<?php echo esc_attr($singleimagedesktop['alt']); ?>" />
            <?php endif; ?>
          </div>
          <?php
          $mobsi = get_sub_field("single_image_mobile");
          if ($mobsi) { ?>
            <div class="mobileImg  wow fadeInUp" data-wow-duration="4s">
              <?php $singleimagemobile = get_sub_field('single_image_mobile');
              if (!empty($singleimagemobile)) : ?>
                <img src="<?php echo esc_url($singleimagemobile['url']); ?>" alt="<?php echo esc_attr($singleimagemobile['alt']); ?>" />
              <?php endif; ?>
            </div>
          <?php } else { ?>
            <div class="mobileImg  wow fadeInUp" data-wow-duration="4s">
              <?php $singleimagedesktop = get_sub_field('single_image_desktop');
              if (!empty($singleimagedesktop)) : ?>
                <img src="<?php echo esc_url($singleimagedesktop['url']); ?>" alt="<?php echo esc_attr($singleimagedesktop['alt']); ?>" />
              <?php endif; ?>
            </div>
          <?php } ?>

        <?php elseif (get_row_layout() == 'single_animation') : ?>
          <div class="<?php if(get_sub_field('single_animation_mobile')){?>desktopImg<?php } else { ?><?php } ?> showBox">
            <?php echo get_sub_field('single_animation_desktop'); ?>
          </div>

          <?php
          $mobileanimationdiv = get_sub_field("single_animation_mobile");
          if ($mobileanimationdiv) { ?>
            <div class="mobileImg">
              <?php echo get_sub_field('single_animation_mobile'); ?>
            </div>
          <?php } else { ?>
            <!-- <style type="text/css">.desktopImg.showBox {display:block;}</style> -->
          <?php } ?>
        <?php endif; ?>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>