<section>
        
        <div class="sectionThree">
            <div class="mobtextThree wow slideInLeft" data-wow-duration="1s">
                <p class="font20 fontW800 colorWhite"><?php echo get_sub_field('only_image_heading'); ?></p>
                <h1 class="font60 fontW800 colorWhite"><?php echo get_sub_field('only_image_title'); ?></h1>
            </div>
            <?php if (have_rows('only_text_list')) : ?>
                        <?php while (have_rows('only_text_list')) : the_row(); ?>
            <div class="mobsubtextThree wow slideInRight" data-wow-duration="1s">
                <h5 class="font20 colorWhite fontW500"><?php echo get_sub_field('only_image_paragraph'); ?></h5>
            </div>
            <?php endwhile; ?>
                    <?php endif; ?>
        </div>
        <img src="<?php echo get_sub_field('imagedata'); ?>">
    </section>