 <section>
        <div class="sectionTwo" style="background:<?php
   $value = get_sub_field('right_image_left_text_background_color');
   if ( $value ) {?>
   <?php echo get_sub_field('right_image_left_text_background_color')?>">
    <?php } else { ?>
       url(<?php echo get_sub_field('right_image_left_text_background_image');?>);">
        <?php } ?>
            <div class="mobtextTwo wow slideInLeft" data-wow-duration="1s" style="background-color:<?php echo get_sub_field('text_background_color'); ?>;">
            
                    <p class="font20 fontW800"  style="color:<?php echo get_sub_field('text_font_color'); ?>;"><?php echo get_sub_field('right_image_left_text_heading'); ?></p>
                    <h1 class="font60 fontW800" style="color:<?php echo get_sub_field('text_font_color'); ?>;"><?php echo get_sub_field('right_image_left_text_cta_text'); ?></h1>
                    <h5 class="font20 fontW500" style="color:<?php echo get_sub_field('text_font_color'); ?>;"><?php echo get_sub_field('right_image_left_text_description'); ?></h5>
                </div>
            
            <div class="mobimgTwo wow slideInRight" data-wow-duration="1s">
            <?php
   $value = get_sub_field('right_image_left_text_image');
   if ( $value ) {?>
            <img src="<?php echo get_sub_field('right_image_left_text_image'); ?>">
         <?php } else { ?>
        <?php echo get_sub_field('right_image_left_svg');?>   
        <?php } ?>
             
            </div>
        </div>
    </section>

    
