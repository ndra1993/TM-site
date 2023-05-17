<!-- Image Full Width With Heading -->
<section class="fullimgwithHeading" style="background: <?php echo get_sub_field('section_background_color'); ?>;">
  <div class="headingSec fullimghead">
    <?php
    $fullimghead = get_sub_field( "heading" );
    if ( $fullimghead ) {?>
      <h2 class="font36 fontW800" style="color: <?php echo get_sub_field('heading_text_color'); ?>;"><?php echo get_sub_field('heading'); ?></h2>
    <?php } else { ?>
      <style type="text/css">.fullimghead {display:none !important;} .fullimgwithHeading{padding: 0px !important;}</style>
    <?php } ?>
    <p class="font20 fontW500" style="color: <?php echo get_sub_field('description_text_color'); ?>;"><?php echo get_sub_field('description'); ?></p>
  </div>
  <div class="imgDiv">
    <div class="desktopImg  wow fadeInUp" data-wow-duration="4s">
      <?php $singleimage = get_sub_field('single_image');
      if( !empty( $singleimage ) ): ?>
        <img src="<?php echo esc_url($singleimage['url']); ?>" alt="<?php echo esc_attr($singleimage['alt']); ?>" />
      <?php endif; ?>  
    </div>
    <?php
    $mobsi = get_sub_field( "mobile_single_image" );
    if ( $mobsi ) {?>
      <div class="mobileImg  wow fadeInUp" data-wow-duration="4s">
        <?php $mobsingleimage = get_sub_field('mobile_single_image');
        if (!empty($mobsingleimage)) : ?>
          <img src="<?php echo esc_url($mobsingleimage['url']); ?>" alt="<?php echo esc_attr($mobsingleimage['alt']); ?>" />
        <?php endif; ?>
      </div>
    <?php } else { ?>
      <div class="mobileImg  wow fadeInUp" data-wow-duration="4s">
        <?php $singleimage = get_sub_field('single_image');
        if( !empty( $singleimage ) ): ?>
          <img src="<?php echo esc_url($singleimage['url']); ?>" alt="<?php echo esc_attr($singleimage['alt']); ?>" />
        <?php endif; ?>  
      </div>
    <?php } ?>
  </div>
</section>