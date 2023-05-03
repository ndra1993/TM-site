<section class="templateSection" style="background:<?php
   $value = get_sub_field('image_right_background_color');
   if ( $value ) {?>
   <?php echo get_sub_field('image_right_background_color')?>">
    <?php } else { ?>
       url(<?php echo get_sub_field('right_image');?>);">
        <?php } ?>
    <div class="wrapper">
        <div class="templateHolder">
            <div class="imageRightSliderWithText" style="background-color:<?php echo get_sub_field('image_right_slider_with_text_background_color'); ?>;">
                <h2 class="font30 fontW500 colorGrey" style="text-align: <?php echo get_sub_field('image_right_slider_with_text_heading_align'); ?>;"><?php echo get_sub_field('image_right_slider_with_text_heading'); ?></h2>
                <div class="imageRightSliderWithTextBox">
                    <div class="imageRightSliderWithTextBoxLeft">
                        <p class="font18"><?php echo get_sub_field('image_right_slider_with_text_description'); ?></p>
                    </div>
                    <div class="imageRightSliderWithTextBoxRight">
                        <ul class="imageTextSlider">
                            <?php if (have_rows('image_right_slider_with_text_list')) : ?>
                            <?php while (have_rows('image_right_slider_with_text_list')) : the_row(); ?>
                                <li>
                                  

                                    <?php
   $value = get_sub_field('image_right_slider_with_text_images');
   if ( $value ) {?>
            <img src="<?php echo get_sub_field('image_right_slider_with_text_images'); ?>">
         <?php } else { ?>
        <?php echo get_sub_field('svg_link_rightslider');?>   
        <?php } ?>
                                </li>
                            <?php endwhile; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>