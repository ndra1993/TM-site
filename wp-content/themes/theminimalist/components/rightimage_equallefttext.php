<div class="sectionFiveSecond" style="    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #fff;
    padding: 0px;">
            <div class="mobtextFour wow slideInLeft" data-wow-duration="1s">
            <?php
$value = get_sub_field('right_image_equal_text_image');
if ( $value ) {?>
         <img src="<?php echo get_sub_field('right_image_equal_text_image'); ?>">
      <?php } else { ?>
     <?php echo get_sub_field('svg_link_equaltext');?>   
     <?php } ?>
              
            </div>
            <div class="mobsubtextFour wow slideInRight" data-wow-duration="1s">
                <p class="font20 fontW800 colorBlack"><?php echo get_sub_field('right_image_equal_cta_text'); ?></p>
                <h1 class="font60 fontW800 colorBlack"><?php echo get_sub_field('right_image_equal_text_heading'); ?></h1>
                <h5 class="font20 colorBlack fontW500"><?php echo get_sub_field('right_image_equal__description'); ?></h5>
            </div>
        </div>