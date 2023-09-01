<?php get_header(); /*Template Name: Our Clients Two*/ ?>

<section class="ourClientsection">
    <?php if (have_rows('our_clients_layouts')) : ?>
        <?php while (have_rows('our_clients_layouts')) : the_row(); ?>
            <?php if (get_row_layout() == 'four_box_layout') : ?>
                <div class="fourBoxlayout">
                    <?php if (have_rows('clients_logos_layout')) : ?>
                        <?php while (have_rows('clients_logos_layout')) : the_row(); ?>
                            <div class="innerBoxes" style="background: <?php echo get_sub_field('clients_logo_background'); ?>">
                                <?php
                                $fourboxlink = get_sub_field('clients_logo_link');
                                if ($fourboxlink) :
                                    $fourboxlink_url = $fourboxlink['url'];
                                    $fourboxlink_target = $fourboxlink['target'] ? $fourboxlink['target'] : '_blank';
                                ?>
                                    <a href="<?php echo esc_url($fourboxlink_url); ?>" target="<?php echo esc_attr($fourboxlink_target); ?>">
                                        <?php $clientslogoimages = get_sub_field('clients_logo_images');
                                        if (!empty($clientslogoimages)) : ?>
                                            <img src="<?php echo esc_url($clientslogoimages['url']); ?>" loading="lazy" alt="<?php echo esc_attr($clientslogoimages['alt']); ?>" />
                                        <?php endif; ?>
                                    </a>
                                <?php endif; ?>
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
                                    <?php
                                    $smallbxlink = get_sub_field('clients_small_boxes_link');
                                    if ($smallbxlink) :
                                        $smallbxlink_url = $smallbxlink['url'];
                                        $smallbxlink_target = $smallbxlink['target'] ? $smallbxlink['target'] : '_blank';
                                    ?>
                                        <a href="<?php echo esc_url($smallbxlink_url); ?>" target="<?php echo esc_attr($smallbxlink_target); ?>">
                                            <?php $clientssmallboxesimage = get_sub_field('clients_small_boxes_image');
                                            if (!empty($clientssmallboxesimage)) : ?>
                                                <img src="<?php echo esc_url($clientssmallboxesimage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($clientssmallboxesimage['alt']); ?>" />
                                            <?php endif; ?>
                                        </a>
                                    <?php endif; ?>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                    <?php if (have_rows('clients_big_box_layout')) : ?>
                        <?php while (have_rows('clients_big_box_layout')) : the_row(); ?>
                            <div class="bigBox" style="background: <?php echo get_sub_field('clients_big_box_background'); ?>;">
                                <?php
                                $bigbxlink = get_sub_field('clients_big_box_link');
                                if ($bigbxlink) :
                                    $bigbxlink_url = $bigbxlink['url'];
                                    $bigbxlink_target = $bigbxlink['target'] ? $bigbxlink['target'] : '_blank';
                                ?>
                                    <a href="<?php echo esc_url($bigbxlink_url); ?>" target="<?php echo esc_attr($bigbxlink_target); ?>">
                                        <?php $clientsbigboximage = get_sub_field('clients_big_box_image');
                                        if (!empty($clientsbigboximage)) : ?>
                                            <img src="<?php echo esc_url($clientsbigboximage['url']); ?>" loading="lazy" alt="<?php echo esc_attr($clientsbigboximage['alt']); ?>" />
                                        <?php endif; ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>

            <?php elseif (get_row_layout() == 'six_box_layout') : ?>
                <div class="sixBoxlayout">
                    <?php if (have_rows('clients_logos_layout')) : ?>
                        <?php while (have_rows('clients_logos_layout')) : the_row(); ?>
                            <div class="innerBoxes" style="background: <?php echo get_sub_field('clients_logo_background'); ?>;">
                                <?php
                                $sixbxlink = get_sub_field('clients_logo_link');
                                if ($sixbxlink) :
                                    $sixbxlink_url = $sixbxlink['url'];
                                    $sixbxlink_target = $sixbxlink['target'] ? $sixbxlink['target'] : '_blank';
                                ?>
                                    <a href="<?php echo esc_url($sixbxlink_url); ?>" target="<?php echo esc_attr($sixbxlink_target); ?>">
                                        <?php $clientslogoimages = get_sub_field('clients_logo_images');
                                        if (!empty($clientslogoimages)) : ?>
                                            <img src="<?php echo esc_url($clientslogoimages['url']); ?>" loading="lazy" alt="<?php echo esc_attr($clientslogoimages['alt']); ?>" />
                                        <?php endif; ?>
                                    </a>
                                <?php endif; ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>

</section>

<?php get_footer(); ?>