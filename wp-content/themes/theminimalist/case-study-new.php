<?php get_header(); /*Template Name: case studies listing three*/
$homepage_id = get_option( 'page_on_front' );
?>  

<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous"></script> -->
    
<!-- <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
<style type="text/css">
  
/*.slick-vertical {
      top: calc(30% - 105px) !important;
   }*/
   .slick-vertical {
      top: calc(5% + 5px) !important;
   }
   
   /* slide when not active*/ 
.slick-slide[aria-hidden="true"]:not(.slick-cloned) ~ .slick-cloned[aria-hidden="true"] {

}

/* slide when active (when play last to first) */ 
.slick-slide[aria-hidden="true"]:not([tabindex="-1"]) + .slick-cloned[aria-hidden="true"]  {

}
/* slide when active (when play first to last) */ 
.slick-slide[aria-hidden="true"] + .slick-cloned[aria-hidden="true"] {

}
  /*.desktopSection .caseStudycontainer .caseStudycontainerRow .detail-column {
      margin: -100px 85px;
  }*/
</style>
<body>
<div class="desktopSection">
  <div class="caseStudyFilter">
    <ul id="filters">
      <li class="filterLi active"><span class="filter font12 fontW500" data-filter=".experience, .technology, .marketing, .branding, .video, .strategy">All</span></li>
      <li class="filterLi"><span class="filter font12 fontW500" data-filter=".experience">Experience Design</span></li>
      <li class="filterLi"><span class="filter font12 fontW500" data-filter=".technology">Technology</span></li>
      <li class="filterLi"><span class="filter font12 fontW500" data-filter=".marketing">Marketing Solutions</span></li>
      <li class="filterLi"><span class="filter font12 fontW500" data-filter=".branding">Branding</span></li>
      <li class="filterLi"><span class="filter font12 fontW500" data-filter=".video">Video Production</span></li>
      <li class="filterLi"><span class="filter font12 fontW500" data-filter=".strategy">Strategy And Consulting</span></li>
    </ul>
  </div>
  <div class="caseStudycontainer">
    <div class="container-inner">
        <div class="caseStudycontainerRow">
            <div class="img-column">
                <div class="img-grp">

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

                    <div class="img-holder">
                        <a href="https://ixdtm.com/projects/theminimalist-site/case-study-details/"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ) ?>"></a>
                    </div>
               
                     <?php endwhile; ?>
                </div>
            </div>
            <div class="detail-column">
                <div class="content-grp">

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
                                $catname = $term->name;
                                }
                                $tax_links = join( " ", str_replace(' ', '-', $links));
                                $tax = strtolower($tax_links);
                                else :
                                $tax = '';
                                endif;
                            ?>
                          <!-- style="background-color: <?php echo get_field('listing_background_color'); ?>;"-->

      <div class="content-item">
                      <a href="<?php the_permalink();?>">
                        <div class="item-inner">
                            <span class="bar"></span>
                            <p class="font14 fontW800">

                              <?php //echo $catname;
                               the_title(); ?></p>
                            <h2 class="font30 fontW600"><?php the_content(); ?>

                           </h2>
                        </div>
                        </a>
                    </div>

                        <?php endwhile; ?>
                 


                </div>
                <img class="mouseScroll" src="<?php bloginfo('template_directory'); ?>/images/mouse-scroll.svg">
            </div>
        </div>
    </div>
  </div>
 
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
</body>

<?php get_footer(); ?>


<script type="text/javascript">

jQuery(document).ready(function($) {
  
  setTimeout(function() {
    $('#lab-slide-bottom-popup').modal('show');
  }, 5000); 

  $(document).ready(function() {
    $('.lab-slide-up').find('a').attr('data-toggle', 'modal');
    $('.lab-slide-up').find('a').attr('data-target', '#lab-slide-bottom-popup');
  });

});


/*filter js*/
  $(document).ready(function() {
$(".filterLi").click(function () {
    $(".filterLi").removeClass("active");
    $(this).addClass("active");        
});
});


const slider = jQuery(".content-grp");
slider
  .slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    dots: false,
    loop:true, 
    vertical: true,
    asNavFor: '.img-grp',
    verticalSwiping: true,
    centerMode: false,
    cssEase: 'linear',
    adaptiveHeight: true,
    infinite: true,
    swipeToSlide: true,
    touchThreshold: 3,
  });

slider.on('wheel', (function(e) {
  e.preventDefault();

  if (e.originalEvent.deltaY < 0) {
    jQuery(this).slick('slickNext');
  } else {
    jQuery(this).slick('slickPrev');
  }
}));

jQuery(document).ready(function(){
  jQuery('.img-grp').slick(
  {
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: false,
    adaptiveHeight: false,
    infinite: true,
    useTransform: false,
    speed: 400,
});
});

 $('.content-grp .slick-slide').eq(0).addClass('slick-active');
</script>
<script>
/*$(document).ready(function(){
    $(".slick-track").click(function(){
      
        var color = $(this).css("height");
        alert(color);
        if(color == '1054px'){
          $(".slick-track").css("background-color", "yellow");
        }
        //$("#result").html(color);
    });    
});*/
</script>