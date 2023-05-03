  <div class="startToEndSecond" style="background:<?php
   $value = get_sub_field('dual_background_color');
   if ( $value ) {?>
   <?php echo get_sub_field('dual_background_color')?>">
    <?php } else { ?>
       url(<?php echo get_sub_field('dualimage_image');?>);">
        <?php } ?>
            <div class="startToEndTitle">
            <?php
   $value = get_sub_field('leftdualimagedual_image_data');
   if ( $value ) {?>
            <img src="<?php echo get_sub_field('leftdualimagedual_image_data'); ?>">
         <?php } else { ?>
        <?php echo get_sub_field('svg_link_leftdual');?>   
        <?php } ?>
            </div>
            <div class="startToEndTitle">
            <?php
   $value = get_sub_field('leftdualimagedualimage');
   if ( $value ) {?>
            <img src="<?php echo get_sub_field('leftdualimagedualimage'); ?>">
         <?php } else { ?>
        <?php echo get_sub_field('svg_link_leftdual');?>   
        <?php } ?>
            </div>
            <div class="startToEndTitle" style="<?php echo get_sub_field('font_color_name');   ?>">
            <h2 class="font32 fontW800"><?php echo get_sub_field('leftdualimagetext_heading');?></h2>
    <p class="font20 fontW500"><?php echo get_sub_field('leftdualimagetext_description'); ?></p>
            </div>
            
        </div>



