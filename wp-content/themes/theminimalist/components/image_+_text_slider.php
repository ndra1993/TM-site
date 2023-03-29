
<section>
<div class="sectionOne"  style="background:<?php
   $value = get_sub_field('image_+_text_Top_Banner_background_color');
   if ( $value ) {?>
   <?php echo get_sub_field('image_+_text_Top_Banner_background_color')?>">
    <?php } else { ?>
       url(<?php echo get_sub_field('slider_background_image');?>);">
        <?php } ?>
            <div class="mobtext wow slideInLeft">
           
           
                <p class="font20 fontW800" style="color:<?php echo get_sub_field('image_+_text_Top_Banner_font_color')?>"><?php echo get_sub_field('image_+_text_Top Banner_heading'); ?></p>
                <h1 class="font60 fontW800" style="color:<?php echo get_sub_field('image_+_text_Top_Banner_font_color')?>"><?php echo get_sub_field('image_+_text_Top_Banner_title'); ?></h1>
                <h5 class="font20 fontW500" style="color:<?php echo get_sub_field('image_+_text_Top_Banner_font_color')?>"><?php echo get_sub_field('Image_+_Text_Top_Banner_discription'); ?></h5>
            </div>
            <div class="mobImg">
            <?php
   $value = get_sub_field('Image_+_Text_Top_Banner_Image');
   if ( $value ) {?>
            <img src="<?php echo get_sub_field('Image_+_Text_Top_Banner_Image'); ?>">
         <?php } else { ?>
        <?php echo get_sub_field('svg_link_path');?>   
        <?php } ?>

        </div>
        </div>
    </section>


 