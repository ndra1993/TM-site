<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TM-Website
 */

get_header();
$homepage_id = get_option( 'page_on_front' );

?>
<a id="button"><img src="<?php bloginfo('template_directory'); ?>/images/back-to-top-arrow.svg"></a>

<div class="csdetailBg <?php echo get_field('main_page_class'); ?>">
<?php if( have_rows('components') ): ?>
    <?php while( have_rows('components') ): the_row();
       
        $layout=get_row_layout();
    ?>
        <?php if( get_row_layout() == 'left_content_right_image' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'left_image_right_content' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'left_heading_right_content' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'image_full_width_with_heading' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'two_images_with_center_heading' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'banner_with_slider' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'banner_with_options' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'bottom_image_with_relatedpost' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'big_left_image_right_content' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'left_content_big_right_image' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>

        <?php elseif( get_row_layout() == 'full_screen_animation' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>
            
            <?php elseif( get_row_layout() == 'full_animation' ): ?>
            <?php
                include(get_template_directory()."/components/".$layout.".php");
            ?>
            
        <?php endif;?>
    <?php endwhile; ?>
<?php endif; ?>
<!-- new component -->

<?php get_footer(); ?>

<script type="text/javascript">
    <?php echo get_field('footer_script_box'); ?>
</script>