<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TM-Website
 */

?>

<footer>
    <?php if (is_front_page()) { ?>
		<!-- Homepage Header -->
	<div class="ftbutton">
        <div class="footerCta">
            <a href="<?php echo site_url('/case-study-listing/'); ?>" class=" connectCta connectCtatwo">Case Studies</a>
        </div>
        <div class="footerCta">
            <a href="<?php echo site_url('/forms/'); ?>" class="connectCta">Let's Invent</a>
        </div>
    </div>
    <div class="footerLinks">
        <div class="ftPara">
            <p class="colorBlack fontW600 font14 fontPoppins copyRight"><span class="font20 fontW600">&#169;</span> All Rights Reserved, Minimalist Solutions Private Limited</p>
        </div>
        <div class="linksFt">
            <a href="<?php echo site_url('/privacy-policy/'); ?>" class="fontPoppins fontW600 font14 colorBlack">Privacy Policy</a>
            <span>|</span>
            <a href="#" class="fontPoppins fontW600 font14 colorBlack">Terms Of Use</a>
        </div>
    </div>
	<?php } else { ?>
    <div class="footerLinks">
        <div class="ftPara">
            <p class="colorBlack fontW600 font14 fontPoppins copyRight"><span class="font20 fontW600">&#169;</span> All Rights Reserved, Minimalist Solutions Private Limited</p>
        </div>
        <div class="linksFt">
            <a href="<?php echo site_url('/privacy-policy/'); ?>" class="fontPoppins fontW600 font14 colorBlack">Privacy Policy</a>
            <span>|</span>
            <a href="#" class="fontPoppins fontW600 font14 colorBlack">Terms Of Use</a>
        </div>
    </div>
	<?php } ?>

    
    
</footer>

<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/form.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<?php wp_footer(); ?>

</body>

</html>