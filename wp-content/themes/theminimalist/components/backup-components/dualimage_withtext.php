 <div class="startToEnd" style="background:<?php
   $value = get_sub_field('background_colordata');
   if ( $value ) {?>
   <?php echo get_sub_field('background_colordata')?>">
    <?php } else { ?>
       url(<?php echo get_sub_field('background_imagedata');?>);">
        <?php } ?>
            <div class="startToEndTitle">
            <?php
      $value = get_sub_field('dualimageone');
    if ( $value ) {?>
            <img src="<?php echo get_sub_field('dualimageone'); ?>">
         <?php } else { ?>
        <?php echo get_sub_field('svg_link_data');?>   
        <?php } ?>

          
            
            <h4 class="font20 fontW800"><?php echo get_sub_field('Image_headingone'); ?></h4>
            </div>
            <div class="startToEndTitle">
                <h2 class="font32 fontW800"><?php echo get_sub_field('text_heading'); ?></h2>
                <p class="font20 fontW500"><?php echo get_sub_field('text_description'); ?></p>
            </div>
            <div class="startToEndTitle">
           
            <?php
      $value = get_sub_field('dualimagetwo');
    if ( $value ) {?>
           <img src="<?php echo get_sub_field('dualimagetwo'); ?>">
         <?php } else { ?>
        <?php echo get_sub_field('svg_link_data');?>   
        <?php } ?>

            
                <h4 class="font20 fontW800"><?php echo get_sub_field('Image_headingtwo'); ?></h4>
            </div>
        </div>

        