<section class="templateSection">
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
                                    <img src="<?php echo get_sub_field('image_right_slider_with_text_images'); ?>">
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