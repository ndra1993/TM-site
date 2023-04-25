<?php get_header(); /*Template Name: case studies listing Swiper */
$homepage_id = get_option( 'page_on_front' );
?>  
	<style>
		.works-filter {
  /* display: inline-block;
  text-decoration: none;
  transition: all .35s ease; */
}

.works-filter:hover {
  cursor: pointer;
  /* text-decoration: underline;
  transition: all .35s ease; */
}

.works-filter-active {
  /* text-decoration: underline;
  transition: all .35s ease; */
}

.works-filter-active::before {
  content: "X ";
  text-transform: none;
  transition: all .35s ease;
}

.workItem  {
	background-color:red;
	
    /*height: 0%;
    width: 0%;*/
    /*display: none;*/
}
/*.gallery-top .workItem.experience{
    visibility: visible !important;
}
.gallery-top .workItem.technology{
    visibility: visible !important;
}
.gallery-top .workItem.marketing{
    visibility: visible !important;
}
.gallery-top .workItem.branding{
    visibility: visible !important;
}
.gallery-top .workItem.video{
    visibility: visible !important;
}
.gallery-thumbs .workItem.experience{
    visibility: visible !important;
}
.gallery-thumbs .workItem.technology{
    visibility: visible !important;
}
.gallery-thumbs .workItem.marketing{
    visibility: visible !important;
}
.gallery-thumbs .workItem.branding{
    visibility: visible !important;
}
.gallery-thumbs .workItem.video{
    visibility: visible !important;
}*/

.show-workItem {
	background-color:green; 
	/*visibility: collpase;*/
    
 
}
.gallery-top .show-workItemNew {
    background-color:blue; 
    /*visibility: visible;*/
    width: 100%;
    height: auto;

}

	</style>
<div class="desktopSection">
  <div class="caseStudyFilter">
    <ul id="filters">
      <li class="filterLi active"><span class="filter works-filter font12 fontW500 showAll" data-filter="all">All</span></li>
      <li class="filterLi"><span class="filter works-filter font12 fontW500" data-filter="experience">Experience Design</span></li>
      <li class="filterLi"><span class="filter works-filter font12 fontW500" data-filter="technology">Technology</span></li>
      <li class="filterLi"><span class="filter works-filter font12 fontW500" data-filter="marketing">Marketing Solutions</span></li>
      <li class="filterLi"><span class="filter works-filter font12 fontW500" data-filter="branding">Branding</span></li>
      <li class="filterLi"><span class="filter works-filter font12 fontW500" data-filter="video">Video Production</span></li>
      <li class="filterLi"><span class="filter works-filter font12 fontW500" data-filter="strategy">Strategy And Consulting</span></li>
    </ul>
  </div>

<!--swiper-->

<div class="wrap">
    <div class="swiper-container gallery-top">
      <div class="swiper-wrapper">
      <div class="swiper-slide workItem show-workItem experience"><div class="swiper-slide-container"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/phone.png"></a></div></div>
      <div class="swiper-slide workItem show-workItem marketing"><div class="swiper-slide-container"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/phone-two.png"></a></div></div>
      <div class="swiper-slide workItem show-workItem branding"><div class="swiper-slide-container"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/phone.png"></a></div></div>
      <div class="swiper-slide workItem show-workItem video"><div class="swiper-slide-container"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/phone-two.png"></a></div></div>
      <div class="swiper-slide workItem show-workItem technology"><div class="swiper-slide-container"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/phone.png"></a></div></div>
    
    </div>
    </div>
    
    
    <div class="swiper-container gallery-thumbs">
     <div class="swiper-wrapper">
      
     <div class="swiper-slide workItem show-workItem experience"><div class="swiper-slide-container"> 
        <a href="#" class="anchor"><p> EX Strategy And Consulting one</p>
       <h2 class="h2 font30 fontW600 colorBlack">EX Lorem Ipsum is simply dummy text of the printing and typesetting industry. </h2></a>
      </div>
      </div>
      
              <div class="swiper-slide workItem show-workItem  marketing"><div class="swiper-slide-container"> 
        <a href="#" class="fontW600 font30 anchor"><p>Strategy And Consulting one</p>

        <h2 class="h2  font30 fontW600 colorBlack"> marketing Strategy And Consulting one</h2></a>
              </div></div>
      <div class="swiper-slide workItem show-workItem branding"><div class="swiper-slide-container"> 
        <a href="#" class="fontW600 font30 anchor"><p>Strategy And Consulting one</p>

        <h2 class="h2  font30 fontW600 colorBlack">branding Strategy And Consulting one Strategy And Consulting one</h2></a>
              </div></div>
      <div class="swiper-slide workItem show-workItem video"><div class="swiper-slide-container"> 
        <a href="#" class="fontW600 font30 anchor"><p>Strategy And Consulting one</p>

        <h2 class="h2  font30 fontW600 colorBlack"> video  Strategy And Consulting one</h2></a></div></div>
      <div class="swiper-slide workItem show-workItem technology"><div class="swiper-slide-container">
       <a href="#" class="fontW600 font30 anchor"><p>Strategy And Consulting one</p>

        <h2 class="h2  font30 fontW600 colorBlack">technology Strategy And Consulting one</h2></a>
              </div></div>

           


    </div>
   
</div>


<!--swiper-->


</div>

<div class="mobileSection">

 
<?php 
$groupID = 'case_study';
    $custom_query_args = array('post_type' => 'casestudy','posts_per_page' => 9,'order' => 'DESC','post_status' => 'publish');
                        $custom_query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
$custom_query = new WP_Query( $custom_query_args );
                    $count = $custom_query->found_posts;
          
                     while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
                            <?php 
                                $terms = get_the_terms( $post->ID, 'casestudy_categories' );
                                if ( $terms && ! is_wp_error( $terms ) ) :
                                $links = array();
                                foreach ( $terms as $term ) {
                                $links[] = $term->slug;
                                }
                                $tax_links = join( " ", str_replace(' ', '-', $links));
                                $tax = strtolower($tax_links);
                                else :
                                $tax = '';
                                endif;
                            ?>


  <div class="caseStudyDetailsSection">
    <a href="#">
       <?php echo the_post_thumbnail( 'medium' ); ?>
     <!-- <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ) ?>">-->
      <div class="description">
        <p class="fontW800"><?php the_title(); ?></p>
        <h2 class="fontW800"><?php $text = str_replace('<p>','', the_content());
echo $text = str_replace('</p>','',$text); ?></h2>
      </div>
    </a>
  </div>
  <?php endwhile; ?>







  <div class="mobileFilter">
    <div class="filterimg" data-toggle="modal" data-target="#lab-slide-bottom-popup">
      <img src="<?php bloginfo('template_directory'); ?>/images/case-study-filter.svg">
      <div class="badge fontW600">2</div>
    </div>
    <div class="modal fade" id="lab-slide-bottom-popup" data-keyboard="false" data-backdrop="false">
  <div class="lab-modal-body">
    <div class="filterSelectSection">
      <button type="button" class="close" data-dismiss="modal"><img src="<?php bloginfo('template_directory'); ?>/images/modal-close.svg"></button>
      <div class="filterList">
        <h2 class="fontW800">Select Filters</h2>
        <ul>
          <li class="active fontW500">Experience Design <img src="<?php bloginfo('template_directory'); ?>/images/modal-close.svg"></li>
          <li class="active fontW500">Technology <img src="<?php bloginfo('template_directory'); ?>/images/modal-close.svg"></li>
          <li class="fontW500">Marketing Solutions</li>
          <li class="fontW500">Video Production</li>
          <li class="fontW500">Branding</li>
          <li class="fontW500">Strategy And Consulting</li>
        </ul>
      </div>
      <div class="applyBtn">
        <a href="#" class="fontW800">APPLY</a>
      </div>
    </div>
  </div>
</div>
  </div>
</div>


<?php get_footer(); ?>

<script  src="<?php bloginfo('template_directory'); ?>/newswiper/script.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script>
  $(document).ready(function(){

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
            $works.addClass('show-workItem'); //show them all
            $works.addClass('show-workItemNew');
            $works.removeClass('workItem');
        } else {
            $(this).removeClass('show-workItem');
            $(this).removeClass('show-workItemNew');
            for (i = 0; i < classes.length; i++) {
                if (filtersActive.indexOf(classes[i]) > -1) {
                    $(this).addClass('show-workItem');
                    $(this).addClass('show-workItemNew');
                    $(this).removeClass('workItem');
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