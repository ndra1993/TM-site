
<section class="sectionSix" style="background:<?php
   $value = get_sub_field('only_Single_image_background_color');
   if ( $value ) {?>
   <?php echo get_sub_field('only_Single_image_background_color')?>">
    <?php } else { ?>
       url(<?php echo get_sub_field('only_single_image_background_image');?>);">
        <?php } ?>
        <div class="sectionSiximg">
    
        <?php
$value = get_sub_field('only_Single_image_desktop_image');
if ( $value ) {?>
         <img src="<?php echo get_sub_field('only_Single_image_desktop_image'); ?>">
      <?php } else { ?>
     <?php echo get_sub_field('svg_link_singleimageslider');?>   
     <?php } ?>


      </div>
        <div class="moreCasestudy">
            <div class="brandLogos">
                <div class="relatedBox relatedBoxone" style="<?php echo get_sub_field('brandlogosone'); ?>">
                    <a href="#"><img src="<?php echo get_sub_field('image_1'); ?>"></a>
                </div>
                <div class="relatedBox relatedBoxtwo" style="<?php echo get_sub_field('brandlogostwo'); ?>">
                    <a href="#"><img src="<?php echo get_sub_field('image_2'); ?>"></a>
                </div>
            </div>
        </div>
    </section>
    

    