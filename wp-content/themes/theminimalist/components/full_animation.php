<!-- Full Screen Animation -->
<section class="fullAnimation">
    <div class="<?php if(get_sub_field('mobile_animation_div_one')){?>desktopImg<?php } else { ?>desktopImg0<?php } ?> showBox">
   	<?php 
   		$desktop_data= get_sub_field('animation_div_one');
     	echo $desktop_data;
  	?>
  	</div> 
	<div class="mobileImg">
		<?php if(get_sub_field('mobile_animation_div_one')){
			echo get_sub_field('mobile_animation_div_one');    
		} ?>
	</div>
</section>

<!-- <script>
$( document ).ready(function() {
    var numItems = $('.fullAnimation').length;
   	console.log(numItems);
});
</script> -->