 <div class="startToEnd" style="background:<?php
   $value = get_sub_field('background_color');
   if ( $value ) {?>
   <?php echo get_sub_field('background_color')?>">
    <?php } else { ?>
       url(<?php echo get_sub_field('background_image');?>);">
        <?php } ?>
            <div class="startToEndTitle">
            <img src="<?php echo get_sub_field('dualimage'); ?>">
                <h4 class="font20 fontW800"><?php echo get_sub_field('Image_heading1'); ?></h4>
            </div>
            <div class="startToEndTitle">
                <h2 class="font32 fontW800"><?php echo get_sub_field('text_heading'); ?></h2>
                <p class="font20 fontW500"><?php echo get_sub_field('text_description'); ?></p>
            </div>
            <div class="startToEndTitle">
           
            <img src="<?php echo get_sub_field('dual_image_data'); ?>">
                <h4 class="font20 fontW800"><?php echo get_sub_field('Image_heading2'); ?></h4>
            </div>
        </div>

        