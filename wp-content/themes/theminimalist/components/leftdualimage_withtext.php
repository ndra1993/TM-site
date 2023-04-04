<div class="startToEndSecond">
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
<div class="startToEndTitle">
    <h2 class="font32 fontW800"><?php echo get_sub_field('leftdualimagetext_heading');?></h2>
    <p class="font20 fontW500"><?php echo get_sub_field('leftdualimagetext_description'); ?></p>
</div>

</div>

<!-- <div class="startToEndSecond">
            <div class="startToEndTitle">
                <img src="<?php bloginfo('template_directory'); ?>/images/vehicle-map.png">
            </div>
            <div class="startToEndTitle">
                <img src="<?php bloginfo('template_directory'); ?>/images/vehicle-map1.png">
            </div>
            <div class="startToEndTitle">
                <h2 class="font32 fontW800">Real-time stats</h2>
                <p class="font20 fontW500">To gauge data and make informed decisions</p>
            </div>
            
        </div> -->