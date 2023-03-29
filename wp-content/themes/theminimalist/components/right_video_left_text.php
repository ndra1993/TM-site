<section class="templateSection">
    <div class="wrapper">
        <div class="templateHolder">
            <div class="imageRightSliderWithText" style="background-color:<?php echo get_sub_field('right_video_left_text_background_color'); ?>;">
                <div class="imageRightSliderWithTextBox">
                    <div class="imageRightSliderWithTextBoxLeft">
                        <h2 class="font36 fontW500 colorGrey maginBottom"><?php echo get_sub_field('right_video_left_text_heading'); ?></h2>
                        <p class="font18 colorGrey"><?php echo get_sub_field('right_video_left_text_description'); ?></p>
                    </div>
                    <div class="imageRightSliderWithTextBoxRight videoSlider">
                        <iframe width="100%" src="<?php echo get_sub_field('right_video_left_text_embedded_video_link'); ?>"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>