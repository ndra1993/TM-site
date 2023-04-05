

<?php
$value = get_sub_field('signle_image_banner');
if ( $value ) {?>
       <img class="sectionFiveBanner" src="<?php echo get_sub_field('signle_image_banner'); ?>">
      <?php } else { ?>
     <?php echo get_sub_field('svg_link_singleimage');?>   
     <?php } ?>
  
