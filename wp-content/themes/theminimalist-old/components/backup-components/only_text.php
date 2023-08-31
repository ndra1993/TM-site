
<section>
        <div class="sectionThree"   style="background:<?php
   $value = get_sub_field('only_text_background_color');
   if ( $value ) {?>
   <?php echo get_sub_field('only_text_background_color')?>">
    <?php } else { ?>
       url(<?php echo get_sub_field('only_text_background_image');?>);">
        <?php } ?>
            <div class="mobtextThree wow slideInLeft" data-wow-duration="1s">
                <p class="font20 fontW800" style="color:<?php echo get_sub_field('only_text_font_color'); ?>"><?php echo get_sub_field('only_text_heading'); ?></p>
                <h1 class="font60 fontW800" style="color:<?php echo get_sub_field('only_text_font_color'); ?>"><?php echo get_sub_field('only_text_heading_title'); ?></h1>
            </div>
            <div class="mobsubtextThree wow slideInRight" data-wow-duration="1s">
            <?php if (have_rows('only_text_list')) : ?>
                        <?php while (have_rows('only_text_list')) : the_row(); ?>
                <h5 class="font20 fontW500" style="color:<?php echo get_sub_field('only_text_font_color');?>"><?php echo get_sub_field('only_text_paragraph'); ?></h5>
                <?php endwhile; ?>
                    <?php endif; ?>
            </div>
        </div>
    </section>


