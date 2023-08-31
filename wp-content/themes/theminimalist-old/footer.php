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
        <!-- <div class="footerCta">
            <a href="<?php echo site_url('/case-study-listing/'); ?>" class=" connectCta connectCtatwo">Case Studies</a>
        </div> -->
        <div class="footerCta">
            <a href="<?php echo site_url('/enquiries-careers/'); ?>" class="connectCta">Let's Invent</a>
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.4/lottie.min.js"></script>
<script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
<script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/smooth-scrollbar/8.5.2/smooth-scrollbar.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/debug.addIndicators.js"></script> -->
<script src="<?php echo get_template_directory_uri(); ?>/js/animation.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/form.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js'></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/js/app.js"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js"></script>


<!-- <script language="javascript" type="text/javascript">
jQuery(document).ready(function() {
  jQuery("#select_three").change(function() {
alert("okk");
    var selectedCountry = jQuery(".country option:selected").text();
    if (selectedCountry == "India") {
      alert("You have selected the language - Hindi");
    } else if (selectedCountry == "Nepal") {
      alert("You have selected the language - Nepali");
    }
  });




</script> -->

<?php wp_footer(); ?>

</body>

</html>