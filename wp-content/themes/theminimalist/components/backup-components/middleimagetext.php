<section class="sectionEasyThree" style="background:<?php
   $value = get_sub_field('background_color');
   if ( $value ) {?>
   <?php echo get_sub_field('background_color')?>">
    <?php } else { ?>
       url(<?php echo get_sub_field('background_image');?>);">
        <?php } ?>
        
        <div class="sectionThree">
            <div class="mobtextThree wow slideInLeft" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: slideInLeft;">
                <p class="font20 fontW800 colorBlack"><?php echo get_sub_field('image_paraone'); ?></p>
                <h1 class="font60 fontW800 colorBlack"><?php echo get_sub_field('title'); ?></h1>
            </div>
            <div class="mobsubtextThree wow slideInRight" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: slideInRight;">
                <h5 class="font20 colorBlack fontW500"><?php echo get_sub_field('image_headingone'); ?></h5>
            </div>
        </div>
        <div class="sectionFourMap">
            <h2 class="font32 fontW800"><?php echo get_sub_field('image_headingtwo'); ?></h2>
            <p class="font20 fontW500"><?php echo get_sub_field('image_paratwo'); ?></p>
           <?php
      $value = get_sub_field('dualimage_one');
    if ( $value ) {?>
            <img src="<?php echo get_sub_field('dualimage_one'); ?>">
         <?php } else { ?>
        <?php echo get_sub_field('svg_link_data');?>   
        <?php } ?>

        </div>
        <div class="sectionFourMap">
            <h2 class="font32 fontW800"><?php echo get_sub_field('image_headingthree'); ?></h2>
            <p class="font20 fontW500"><?php echo get_sub_field('image_parathree'); ?></p>
           <?php
      $value = get_sub_field('dualimage_two');
    if ( $value ) {?>
            <img src="<?php echo get_sub_field('dualimage_two'); ?>">
         <?php } else { ?>
        <?php echo get_sub_field('svg_link_data');?>   
        <?php } ?>

        </div>
        <div class="sectionFourMap">
            <h2 class="font32 fontW800"><?php echo get_sub_field('image_headingfour'); ?></h2>
            <p class="font20 fontW500"><?php echo get_sub_field('image_parafour'); ?></p>
           <?php
      $value = get_sub_field('dualimage_three');
    if ( $value ) {?>
            <img src="<?php echo get_sub_field('dualimage_three'); ?>">
         <?php } else { ?>
        <?php echo get_sub_field('svg_link_data');?>   
        <?php } ?>

        </div>
    </section>