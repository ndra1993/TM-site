
<section>
        <div class="sectionFour" style="background:<?php
   $value = get_sub_field('only_image_background_color');
   if ( $value ) {?>
   <?php echo get_sub_field('only_image_background_color')?>">
    <?php } else { ?>
       url(<?php echo get_sub_field('only_image_background_image');?>);">
        <?php } ?>
        
          <h2 class="font32 fontW800"   style="text-align: <?php echo get_sub_field('only_image_heading_align'); ?>;"><?php echo get_sub_field('only_image_heading'); ?></h2>
            <p class="font20 fontW500"  style="text-align: <?php echo get_sub_field('only_image_heading_align'); ?>;"><?php echo get_sub_field('only_image_sub_heading'); ?></p>
              
              
   <div  class="desktopImg">
           
                <?php
   $value = get_sub_field('only_image_desktop_image');
   if ( $value ) {?>
            <img src="<?php echo get_sub_field('only_image_desktop_image'); ?>">
         <?php } else { ?>
        <?php echo get_sub_field('only_image_svg');?>   
        <?php } ?>
            </div>
           
        </div>
    </section>


    