<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package TM-Website
 */

get_header();
$homepage_id = get_option('page_on_front');

?>
<style>
    .preloader-wrap {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        bottom: 0;
        background: #fff;
        z-index: 10;
    }

    .container {
        padding: 50px 0;
        border-radius: 8px;
        background: #fff;
    }

    .circular-progress {
        position: relative;
        height: 180px;
        width: 180px;
        border-radius: 50%;
        background: conic-gradient(#00FFA3 3.6deg, #ededed 0deg);
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .circular-progress::before {
        content: "";
        position: absolute;
        height: 160px;
        width: 160px;
        border-radius: 50%;
        background-color: #fff;
    }

    .progress-value {
        position: relative;
        font-size: 40px;
        font-weight: 600;
        color: #000000;
    }

    .text {
        font-size: 30px;
        font-weight: 500;
        color: #606060;
    }

    @media all and (max-width:1024px) {
        .circular-progress {
            height: 120px;
            width: 120px;
            background: conic-gradient(#00FFA3 3.6deg, #ededed 0deg);
        }

        .circular-progress::before {
            height: 100px;
            width: 100px;
        }

        .progress-value {
        font-size: 30px;
        font-weight: 600;
    }
    }
</style>
<div class="preloader-wrap">
    <div class="container">
        <div class="circular-progress">
            <span class="progress-value">0%</span>
        </div>
    </div>
</div>

<a id="button"><img src="<?php bloginfo('template_directory'); ?>/images/back-to-top-arrow.svg"></a>
<div class="csdetailBg <?php echo get_field('main_page_class'); ?>">
    <?php if (have_rows('components')): ?>
        <?php while (have_rows('components')):
            the_row();

            $layout = get_row_layout();
            ?>
            <?php if (get_row_layout() == 'left_content_right_image'): ?>
                <?php
                include(get_template_directory() . "/components/" . $layout . ".php");
                ?>

            <?php elseif (get_row_layout() == 'left_image_right_content'): ?>
                <?php
                include(get_template_directory() . "/components/" . $layout . ".php");
                ?>

            <?php elseif (get_row_layout() == 'left_heading_right_content'): ?>
                <?php
                include(get_template_directory() . "/components/" . $layout . ".php");
                ?>

            <?php elseif (get_row_layout() == 'image_full_width_with_heading'): ?>
                <?php
                include(get_template_directory() . "/components/" . $layout . ".php");
                ?>

            <?php elseif (get_row_layout() == 'two_images_with_center_heading'): ?>
                <?php
                include(get_template_directory() . "/components/" . $layout . ".php");
                ?>

            <?php elseif (get_row_layout() == 'banner_with_slider'): ?>
                <?php
                include(get_template_directory() . "/components/" . $layout . ".php");
                ?>

            <?php elseif (get_row_layout() == 'banner_with_options'): ?>
                <?php
                include(get_template_directory() . "/components/" . $layout . ".php");
                ?>

            <?php elseif (get_row_layout() == 'bottom_image_with_relatedpost'): ?>
                <?php
                include(get_template_directory() . "/components/" . $layout . ".php");
                ?>

            <?php elseif (get_row_layout() == 'big_left_image_right_content'): ?>
                <?php
                include(get_template_directory() . "/components/" . $layout . ".php");
                ?>

            <?php elseif (get_row_layout() == 'left_content_big_right_image'): ?>
                <?php
                include(get_template_directory() . "/components/" . $layout . ".php");
                ?>

            <?php elseif (get_row_layout() == 'full_screen_animation'): ?>
                <?php
                include(get_template_directory() . "/components/" . $layout . ".php");
                ?>

            <?php elseif (get_row_layout() == 'full_animation'): ?>
                <?php
                include(get_template_directory() . "/components/" . $layout . ".php");
                ?>
            <?php elseif (get_row_layout() == 'full_screen_video'): ?>
                <?php
                include(get_template_directory() . "/components/" . $layout . ".php");
                ?>
            <?php elseif (get_row_layout() == 'full_screen_autoplay_video'): ?>
                <?php
                include(get_template_directory() . "/components/" . $layout . ".php");
                ?>    

            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
    <!-- new component -->

    <?php get_footer(); ?>
    <script type="text/javascript">
        <?php echo get_field('footer_script_box'); ?>
    </script>

    <script>
        let circularProgress = document.querySelector(".circular-progress"),
            progressValue = document.querySelector(".progress-value");
        let progressStartValue = 0,
            progressEndValue = 100,
            speed = 65;

        document.addEventListener('readystatechange', function (ev) {
            let progress = setInterval(() => {
            progressStartValue++;
            progressValue.textContent = `${progressStartValue}%`
            circularProgress.style.background = `conic-gradient(#00FFA3 ${progressStartValue * 3.6}deg, #ededed 0deg)`
            if (progressStartValue == progressEndValue) {
                clearInterval(progress);
            }
        }, speed);
        })
        document.addEventListener("DOMContentLoaded", function (ev) {
            let progress = setInterval(() => {
            progressStartValue++;
            if (progressStartValue >= 100) {
                $(".preloader-wrap").hide();
            }
        }, speed);
        });
    </script>