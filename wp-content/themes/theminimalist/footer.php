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
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.2/lottie.min.js"></script> -->
<script src="<?php echo get_template_directory_uri(); ?>/js/plugins.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/form.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/2.3.11/js/app.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.10.2/lottie.min.js"></script>


<script language="javascript" type="text/javascript">
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



var $filters = $('.works-filter'); // find the filters
var $works = $('.workItem'); // find the portfolio items
var showAll = $('.showAll'); // identify the "show all" button

var cFilter, cFilterData; // declare a variable to store the filter and one for the data to filter by
var filtersActive = []; // an array to store the active filters

$filters.click(function(){ // if filters are clicked
    cFilter = $(this);
    cFilterData = cFilter.attr('data-filter'); // read filter value

    highlightFilter();        
    applyFilter();    
         
});

$(".filterLi").on("click", function () {
  $(this).toggleClass("active2");
});
/*$(".works-filter").on("click", function () {
  $(this).toggleClass("active3");
});*/


function highlightFilter () {
    var filterClass = 'works-filter-active';
    if (cFilter.hasClass(filterClass)) {
        cFilter.removeClass(filterClass);
        removeActiveFilter(cFilterData);
    } else if (cFilter.hasClass('showAll')) {
        $filters.removeClass(filterClass);
        filtersActive = []; // clear the array
        cFilter.addClass(filterClass);
    } else {
        showAll.removeClass(filterClass);
        cFilter.addClass(filterClass);
        filtersActive.push(cFilterData);
    }
}

function applyFilter() {
    // go through all portfolio items and hide/show as necessary
    $works.each(function(){
        var i;
        var classes = $(this).attr('class').split(' ');
        if (cFilter.hasClass('showAll') || filtersActive.length == 0) { // makes sure we catch the array when its empty and revert to the default of showing all items
            $works.addClass('show-workItem').attr('style', 'display: block !important;'); //show them all
        } else {
            $(this).removeClass('show-workItem').attr('style', 'display: none !important;');
            for (i = 0; i < classes.length; i++) {
                if (filtersActive.indexOf(classes[i]) > -1) {
                    $(this).addClass('show-workItem').attr('style', 'display: block !important;');
                }
            }
        } 
    });
}

// remove deselected filters from the ActiveFilter array
function removeActiveFilter(item) {
    var index = filtersActive.indexOf(item);
    if (index > -1) {
        filtersActive.splice(index, 1);
    }
}


});
</script>

<?php wp_footer(); ?>

</body>

</html>