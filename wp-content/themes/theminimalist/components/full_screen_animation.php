<!-- Full Screen Animation -->
<section class="fullAnimation">
  	<div class="desktopImg showBox">
    	<?php echo get_sub_field('animation_div'); ?>
  	</div>

  	<?php
    $mobileanimationdiv = get_sub_field( "mobile_animation_div" );
    if ( $mobileanimationdiv ) {?>
      <div class="mobileImg">
        <?php echo get_sub_field('mobile_animation_div'); ?>
      </div>
    <?php } else { ?>
      <style type="text/css">.desktopImg.showBox {display:block;}</style>
    <?php } ?>
</section>