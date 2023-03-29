 <section>
        <div class="sectionSeven
        style="background:<?php
   $value = get_sub_field('image_+_text_Top_Banner_background_color');
   if ( $value ) {?>
   <?php echo get_sub_field('image_+_text_Top_Banner_background_color')?>">
    <?php } else { ?>
       url(<?php echo get_sub_field('slider_background_image');?>);">
        <?php } ?>

        <?php echo get_sub_field('image_blocks_background_color'); ?>">
       
            <div class="sectionSevenBox" style="display:flex;">
                <div class="sectionSevenBoxImg">
                    <img src="<?php echo get_sub_field('image_blocks_card_image'); ?>">
                    
                </div>
                <div class="sectionSevenBoxImg">
                    <img src="<?php echo get_sub_field('image_data'); ?>">

                </div>
                
            </div>
            <div class="sectionSevenBoxOne <?php echo get_sub_field('image_blocks_background_color_two'); ?>">
                <div class="sectionSevenBoxImg" style="display:flex;">
                    <img src="<?php echo get_sub_field('image_blocks_card_image_two'); ?>">
                </div>
                <div class="sectionSevenBoxImg">
                    <img src="<?php echo get_sub_field('image_data_two'); ?>">
                </div>
                
            </div>
            <div class="sectionSevenBoxTwo">
                <div class="sectionSevenBoxText">
                    <h3 class="fontW800 colorWhite font32"><?php echo get_sub_field('image_data_text'); ?> </h3>
                    <p class="fontW500 font16"><?php echo get_sub_field('image_data_paragraph'); ?></p>
                </div>
                <div class="sectionSevenBoxImg">
                    <img src="<?php echo get_sub_field('image_data_three'); ?>">
                </div>
            </div>
            <div class="sectionSevenBoxTwo">
                <div class="sectionSevenBoxImg">
                    <img src="<?php echo get_sub_field('image_data_four'); ?>">
                </div>
                <div class="sectionSevenBoxText">
                    <h3 class="fontW800 colorWhite font32"><?php echo get_sub_field('image_data_text4'); ?></h3>
                    <p class="fontW500 font16"><?php echo get_sub_field('image_data_paragraph4'); ?> </p>
                </div>
                
            </div>
        </div>
    </section>