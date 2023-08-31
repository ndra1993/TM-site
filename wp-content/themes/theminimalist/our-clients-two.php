<?php get_header(); /*Template Name: Our Clients Two*/ ?>

<section class="ourClientsection">
    <!-- <div class="fourBoxlayout">
        <div class="innerBoxes" style="background: #EC1E30;">
            <a href="#">
                <img src="<?php bloginfo('template_directory'); ?>/images/logos-two/kotak.png" alt="">
            </a>
        </div>
        <div class="innerBoxes" style="background: linear-gradient(180deg, #12184A 0%, #152A6C 100%);">
            <a href="#">
                <img src="<?php bloginfo('template_directory'); ?>/images/logos-two/disney-hotstar.png" alt="">
            </a>
        </div>
        <div class="innerBoxes" style="background: #F4F4F4;">
            <a href="#">
                <img src="<?php bloginfo('template_directory'); ?>/images/logos-two/wipro.png" alt="">
            </a>
        </div>
        <div class="innerBoxes" style="background: #FFF;">
            <a href="#">
                <img src="<?php bloginfo('template_directory'); ?>/images/logos-two/mtv.png" alt="">
            </a>
        </div>
    </div> -->
    <!-- <div class="fiveBoxlayout">
        <div class="smallboxes">
            <div class="innerBoxes" style="background: #212121;">
                <a href="#">
                    <img src="<?php bloginfo('template_directory'); ?>/images/logos-two/tata-cliq.png" alt="">
                </a>
            </div>
            <div class="innerBoxes" style="background: #ECECEC;">
                <a href="#">
                    <img src="<?php bloginfo('template_directory'); ?>/images/logos-two/paytm.png" alt="">
                </a>
            </div>
            <div class="innerBoxes" style="background: #FFFFFF;">
                <a href="#">
                    <img src="<?php bloginfo('template_directory'); ?>/images/logos-two/tata-aig.png" alt="">
                </a>
            </div>
            <div class="innerBoxes" style="background: #F4F4F4;">
                <a href="#">
                    <img src="<?php bloginfo('template_directory'); ?>/images/logos-two/hdfc-bank.png" alt="">
                </a>
            </div>
        </div>
        <div class="bigBox" style="background: #FC8019;">
            <a href="#">
                <img src="<?php bloginfo('template_directory'); ?>/images/logos-two/swiggy.png" alt="">
            </a>
        </div>
    </div> -->
    <!-- <div class="sixBoxlayout">
        <div class="innerBoxes" style="background: #E61D2A;">
            <a href="#">
                <img src="<?php bloginfo('template_directory'); ?>/images/logos-two/cocacola.png" alt="">
            </a>
        </div>
        <div class="innerBoxes" style="background: #F4F4F4;">
            <a href="#">
                <img src="<?php bloginfo('template_directory'); ?>/images/logos-two/google.png" alt="">
            </a>
        </div>
        <div class="innerBoxes" style="background: #3E2774;">
            <a href="#">
                <img src="<?php bloginfo('template_directory'); ?>/images/logos-two/cadbury.png" alt="">
            </a>
        </div>
        <div class="innerBoxes" style="background: #F4F4F4;">
            <a href="#">
                <img src="<?php bloginfo('template_directory'); ?>/images/logos-two/schwarzkopf.png" alt="">
            </a>
        </div>
        <div class="innerBoxes" style="background: #FFF;">
            <a href="#">
                <img src="<?php bloginfo('template_directory'); ?>/images/logos-two/fractal.png" alt="">
            </a>
        </div>
        <div class="innerBoxes" style="background: #F4F4F4;">
            <a href="#">
                <img src="<?php bloginfo('template_directory'); ?>/images/logos-two/razorpay.png" alt="">
            </a>
        </div>
    </div> -->

    <?php if (have_rows('our_clients_layouts')) : ?>
        <?php while (have_rows('our_clients_layouts')) : the_row(); ?>
            <?php if (get_row_layout() == 'four_box_layout') : ?>
                <div class="fourBoxlayout">
                    <?php if (have_rows('clients_logos_layout')) : ?>
                        <?php while (have_rows('clients_logos_layout')) : the_row(); ?>
                            <div class="innerBoxes" style="background: <?php echo get_sub_field('clients_logo_background'); ?>">
                                <a href="<?php echo get_sub_field('clients_logo_link'); ?>">
                                    <?php $clientslogoimages = get_sub_field('clients_logo_images');
                                    if (!empty($clientslogoimages)) : ?>
                                        <img src="<?php echo esc_url($clientslogoimages['url']); ?>" loading="lazy" alt="<?php echo esc_attr($clientslogoimages['alt']); ?>" />
                                    <?php endif; ?>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

            <?php elseif (get_row_layout() == 'five_box_layout') : ?>
                <div class="fiveBoxlayout">
                    <div class="smallboxes">
                        <?php if (have_rows('clients_small_box_layout')) : ?>
                            <?php while (have_rows('clients_small_box_layout')) : the_row(); ?>
                                <div class="innerBoxes" style="background: <?php echo get_sub_field('clients_small_boxes_background'); ?>">
                                    <a href="<?php echo get_sub_field('clients_small_boxes_link'); ?>">
                                        <?php $clientssmallboxesimage = get_sub_field('clients_small_boxes_image');
                                        if (!empty($clientssmallboxesimage)) : ?>
                                            <img src="<?php echo esc_url($clientssmallboxesimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($clientssmallboxesimage['alt']); ?>" />
                                        <?php endif; ?>
                                    </a>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <?php if (have_rows('clients_big_box_layout')) : ?>
                        <?php while (have_rows('clients_big_box_layout')) : the_row(); ?>
                            <div class="bigBox" style="background: <?php echo get_sub_field('clients_big_box_background'); ?>;">
                                <a href="<?php echo get_sub_field('clients_big_box_link'); ?>">
                                    <?php $clientsbigboximage = get_sub_field('clients_big_box_image');
                                    if (!empty($clientsbigboximage)) : ?>
                                        <img src="<?php echo esc_url($clientsbigboximage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($clientsbigboximage['alt']); ?>" />
                                    <?php endif; ?>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

            <?php elseif (get_row_layout() == 'six_box_layout') : ?>
                <div class="sixBoxlayout">
                    <?php if (have_rows('clients_logos_layout')) : ?>
                        <?php while (have_rows('clients_logos_layout')) : the_row(); ?>
                            <div class="innerBoxes" style="background: <?php echo get_sub_field('clients_logo_background'); ?>;;">
                                <a href="<?php echo get_sub_field('clients_logo_link'); ?>">
                                    <?php $clientslogoimages = get_sub_field('clients_logo_images');
                                    if (!empty($clientslogoimages)) : ?>
                                        <img src="<?php echo esc_url($clientslogoimages['url']); ?>" loading="lazy" alt="<?php echo esc_attr($clientslogoimages['alt']); ?>" />
                                    <?php endif; ?>
                                </a>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>

</section>

<?php get_footer(); ?>