<!-- Full Screen Animation -->
<section class="fullAnimation">
  	<div class="<?php if(get_sub_field('mobile_animation_div')){?>desktopImg<?php } else { ?><?php } ?> showBox">
    	<?php echo get_sub_field('animation_div'); ?>
  	</div>
  	
      <div class="mobileImg">
        <?php echo get_sub_field('mobile_animation_div'); ?>
      </div>
</section>