<?php get_header(); /*Template Name: Blogs*/
?>


<a id="button"><img src="<?php bloginfo('template_directory'); ?>/images/back-to-top-arrow.svg"></a>

<div class="blogs">

    <section class="blogBanner">
        <div class="blogBannerImg">
            <img src="<?php bloginfo('template_directory'); ?>/images/blogs-bg.png">
        </div>
        <div class="blogBannerContent">
            <h1 class="font60 fontW600 colorWhite">News and Media</h1>
            <div class="bolgFeatured">
                <img src="<?php bloginfo('template_directory'); ?>/images/blog-featured.png" class="blogFeaturedImg">
                <div class="blogFeaturedContent">
                    <h4 class="font16 fontW700 colorBlack">featured news</h4>
                    <h2 class="font60 fontW600 colorBlack">Warburg Pincus Sets up Oona Insurance </h2>
                    <p class="para font16 fontW500 colorBlack">Digital financial services in SEA have been flourishing during COVID, with a permanent shift towards digital channels across payments, lending, and insurance. Digital financial services in SEA have been flourishing during COVID, with a permanent shift towards digital channels across payments, lending, and insurance...</p>
                    <div class="blogCtaBox">
                        <a href="#" class="font16 fontW600 colorBlack ctaBtn">Read More</a>
                        <div class="blogDate">
                            <img src="<?php bloginfo('template_directory'); ?>/images/calendor.png">
                            <p class="font20 fontW500 colorGrey">12th  December, 2022</p>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section class="filterBlogSection">
        <div class="filtersBlog">
            <ul id="filters" class="clearfix">
              <li><span class="active font20 fontW600 colorGrey filter" data-filter=".Finance, .Insurance, .Economics, .Global, .Healthcare">All</span></li>
              <li><span class="font20 fontW600 colorGrey filter" data-filter=".Finance">Finance</span></li>
              <li><span class="font20 fontW600 colorGrey filter" data-filter=".Insurance">Insurance</span></li>
              <li><span class="font20 fontW600 colorGrey filter" data-filter=".Economics">Economics</span></li>
              <li><span class="font20 fontW600 colorGrey filter" data-filter=".Global">Global</span></li>
              <li><span class="font20 fontW600 colorGrey filter" data-filter=".Healthcare">Healthcare</span></li>
                </ul>
            <h2 class="font60 fontW600 colorBlack">Latest news</h2>
            <div class="blogFilter" id="gallery">
                <a class="blogFilterBox Economics" href="#" data-cat="Economics">
                    <div class="inside">
                        <img src="<?php bloginfo('template_directory'); ?>/images/blog-filter-img.png" class="">
                        <div class="details">
                            <p class="font20 fontW600 colorWhite">MAPFRE concede a Siemens su premio de Inclusión Responsable por su comprom...</p>
                        </div>
                    </div>
                </a>
                
                <a class="blogFilterBox Economics" href="#" data-cat="Economics">
                  <div class="inside">
                    <img src="<?php bloginfo('template_directory'); ?>/images/blog-filter-img.png" class="">
                        <div class="details">
                            <p class="font20 fontW600 colorWhite">MAPFRE concede a Siemens su premio de Inclusión Responsable por su comprom...</p>
                        </div>
                  </div>
                </a>
                
                <a class="blogFilterBox Global" href="#" data-cat="Global">
                    <div class="inside">
                        <img src="<?php bloginfo('template_directory'); ?>/images/blog-filter-img.png" class="">
                        <div class="details">
                            <p class="font20 fontW600 colorWhite">MAPFRE concede a Siemens su premio de Inclusión Responsable por su comprom...</p>
                        </div>
                    </div>
                </a>
                
                <a class="blogFilterBox Finance" href="#" data-cat="Finance">
                  <div class="inside">
                    <img src="<?php bloginfo('template_directory'); ?>/images/blog-filter-img.png" class="">
                    <div class="details">
                        <p class="font20 fontW600 colorWhite">MAPFRE concede a Siemens su premio de Inclusión Responsable por su comprom...</p>
                    </div>
                  </div>
                </a>
                
                <a class="blogFilterBox Insurance Healthcare" href="#" data-cat="Insurance Healthcare">
                  <div class="inside">
                    <img src="<?php bloginfo('template_directory'); ?>/images/blog-filter-img.png" class="">
                    <div class="details">
                        <p class="font20 fontW600 colorWhite">MAPFRE concede a Siemens su premio de Inclusión Responsable por su comprom...</p>
                    </div>
                  </div>
                </a>
                
                <a class="blogFilterBox Insurance Global Finance" href="#" data-cat="Insurance Global Finance">
                  <div class="inside">
                    <img src="<?php bloginfo('template_directory'); ?>/images/blog-filter-img.png" class="">
                    <div class="details">
                        <p class="font20 fontW600 colorWhite">MAPFRE concede a Siemens su premio de Inclusión Responsable por su comprom...</p>
                    </div>
                  </div>
                </a>
                
                <a class="blogFilterBox Global Healthcare" href="#" data-cat="Global Healthcare">
                  <div class="inside">
                    <img src="<?php bloginfo('template_directory'); ?>/images/blog-filter-img.png" class="">
                    <div class="details">
                        <p class="font20 fontW600 colorWhite">MAPFRE concede a Siemens su premio de Inclusión Responsable por su comprom...</p>
                    </div>
                  </div>
                </a>
                
                <a class="blogFilterBox Insurance" href="#" data-cat="Insurance">
                  <div class="inside">
                    <img src="<?php bloginfo('template_directory'); ?>/images/blog-filter-img.png" class="">
                    <div class="details">
                        <p class="font20 fontW600 colorWhite">MAPFRE concede a Siemens su premio de Inclusión Responsable por su comprom...</p>
                    </div>
                  </div>
                </a>
                
                <a class="blogFilterBox Global Insurance" href="#" data-cat="Global Insurance">
                  <div class="inside">
                    <img src="<?php bloginfo('template_directory'); ?>/images/blog-filter-img.png" class="">
                    <div class="details">
                        <p class="font20 fontW600 colorWhite">MAPFRE concede a Siemens su premio de Inclusión Responsable por su comprom...</p>
                    </div> 
                  </div>
                </a>
                  
            </div>
            
        </div>
    </section>

   
</div>


<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mixitup/2.1.11/jquery.mixitup.min.js"></script>


<script type="text/javascript">
    $(function () {
        
    var filterList = {
    
        init: function () {
        
            // https://mixitup.kunkalabs.com/
            $('#gallery').mixItUp({
                selectors: {
              target: '.blogFilterBox',
              filter: '.filter' 
          },
          load: {
              filter: '.Finance, .Insurance, .Economics, .Global' // show all items on page load.
            }     
            });                             
        
        }

    };
    
    // Filter ALL the things
    filterList.init();
    
});
</script>
<?php get_footer(); ?>

