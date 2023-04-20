<?php get_header(); /*Template Name: case studies listing three*/
$homepage_id = get_option( 'page_on_front' );
?>  
<style type="text/css">
  .thumbnail-image
           {
                padding: 20px 0px !important;
                border-bottom: 1px solid #000000;
                cursor: pointer;
            height: 100px;
            display: grid;
           }
  .slider-nav .slick-slide.slick-current .thumbnail-image{
        border-bottom: 5px solid #00FFA3;
    cursor: url(<?php bloginfo('template_directory'); ?>/images/detail-page-cursor.svg) 0 0, auto;
  }
  .slider-nav a  {color:#000; text-decoration: none;}
  .slider-nav .slick-list.draggable{height: auto !important; margin: 0px 0px;}
  /*USE CSS for Slider*/

.vehicle-detail-banner .car-slider-desc {
    max-width: 180px;
    margin: 0 auto;
}
.slider.slider-for {
    max-width: 50%;
    padding-right: 35px;
}
.slider.slider-nav {
    max-width: 50%;
}
.slider.slider-for,
.slider.slider-nav {
    width: 100%;
    float: left;
}
.slider.slider-nav {
    /*height: 610px;*/
    overflow: hidden;

}
.slider-banner-image {
    height: 610px;
}
.slider.slider-nav {
    /*padding: 20px 0 0;*/
}
.slider-nav .slick-slide.thumbnail-image .thumbImg{
    max-width: 178px;
    height: 110px;
    margin: 0 auto;
    border: 1px solid #EBEBEB;
}
.slider-banner-image img,
.slider-nav .slick-slide.thumbnail-image .thumbImg img {
   /* height: 100%;*/
    width:100%;
    object-fit: cover;
}
/*.slick-list.draggable{height: 100% !important; margin: 0px 0px;}*/
.slick-vertical .slick-slide:active,
.slick-vertical .slick-slide:focus,
.slick-arrow:hover,
.slick-arrow:focus {
    border: 0;
    outline: 0;
}
.slider-nav .slick-slide.slick-current.thumbnail-image .thumbImg {
    border: 2px solid #196DB6;
}
.slider-nav .slick-slide.slick-current .thumbnail-image {
  height: 100px;
}
.slider-nav .slick-slide.slick-current h2 {
    font-weight: 800;
    font-size: 40px;
    line-height: 46px;
}
.slider-nav .slick-slide {
   /* text-align: center;*/
}
.slider-nav .slick-slide p {
  font-size: 12px;
    text-transform: uppercase;
    margin-bottom: 5px;
    line-height: 14px;
}
.slider-nav .slick-slide h2 {
        font-size: 20px;
    line-height: 22px;
   
}
/*.slick-arrow {
    width: 100%;
    background-color: transparent;
    border: 0;
    background-position: center;
    background-repeat: no-repeat;
    font-size: 0;
    height: 18px;
    position: absolute;
    left: 0;
    right: 0;
    z-index: 99;
}
.slick-prev {
   top: 0;
}
.slick-next {
   bottom: 0;
   background-color: #fff;
}
.slick-prev.slick-arrow {
    background-image: url(../images/black-up-arrow.png);
}
.slick-next.slick-arrow {
    background-image: url(../images/black-down-arrow.png);
}*/
/*End USE CSS for Slider*/
@media screen and (max-width : 1024px) {
  .slider-nav .slick-slide.slick-current h2 {
    font-size: 30px;
    line-height: 28px;
}
}
@media screen and (max-width : 991px) {

  .slider.slider-for,
  .slider.slider-nav {
      max-width: 100%;
      float: none;
  }
  .slider.slider-for {
    padding-right: 0;
  }
  .slider.slider-nav {
    height: auto;
  }

  .slider-banner-image {
      height: 500px;
  } 
  .slider.slider-nav.thumb-image {
        padding: 10px 30px 0;
  }
  .slider-nav .slick-slide span {
    padding: 5px 0;
  }
  .slick-arrow {
    padding: 0;
      width: 30px;
      height: 30px;
      top: 50%;
      bottom: 0;
      -webkit-transform: translateY(-50%) rotate(-90deg);
      -moz-transform: translateY(-50%) rotate(-90deg);
      -ms-transform: translateY(-50%) rotate(-90deg);
      transform: translateY(-50%) rotate(-90deg);
  }
  .slick-prev {
      left: 0;
      right: unset;
  }
  .slick-next {
      left: unset;
      right: 0;
      background-color: transparent;
  }
  .vehicle-detail-banner .car-slider-desc {
      max-width: 340px;
  }
  .bid-tag {
      padding: 10px 0 15px;
  }
  .slider.slider-nav.thumb-image {
     white-space: nowrap;
  }
  .thumbnail-image.slick-slide {
    padding: 0px 5px;
    min-width: 75px;
    display: inline-block;
    float: none;
  }
}

@media screen and (max-width : 767px) {
  .slider-banner-image {
      height: 400px;
  }
  .slider.slider-nav.thumb-image {
      padding: 0px 20px 0;
      margin: 10px 0px 0;
  }
  .slider-nav .slick-slide.thumbnail-image .thumbImg {
    max-width: 140px;
    height: 80px;
  }
  .slick-prev.slick-arrow {
      background-position: center 10px;
  }
  .slick-next.slick-arrow {
      background-position: center 10px, center;
  }
  .slider-nav .slick-slide span {
      font-size: 12px;
      white-space: normal;
  }
}

@media screen and (max-width: 580px) {
  .slider-banner-image {
      height:340px;
  }
}

@media screen and (max-width : 480px) {
  .slider-banner-image {
      height:280px;
  }
}
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
          <div class="slider slider-for">
                  <div class="slider-banner-image">
                    <a href="">
                      <img src="<?php bloginfo('template_directory'); ?>/images/phone-two.png" alt="Car-Image"></a>
                  </div> 
                  <div class="slider-banner-image">
                     <a href=""> <img src="<?php bloginfo('template_directory'); ?>/images/computer-img-responsive.png" alt="Car-Image"></a>
                  </div> 
                  <div class="slider-banner-image">
                     <a href=""> <img src="<?php bloginfo('template_directory'); ?>/images/case-study-details-1.png" alt="Car-Image"></a>
                  </div> 
                   <div class="slider-banner-image">
                      <a href=""><img src="<?php bloginfo('template_directory'); ?>/images/computer-img-responsive.png" alt="Car-Image"></a>
                  </div> 
                  <div class="slider-banner-image">
                      <a href=""><img src="<?php bloginfo('template_directory'); ?>/images/computer-img-responsive.png" alt="Car-Image"></a>
                  </div> 
                  <div class="slider-banner-image">
                      <a href=""><img src="<?php bloginfo('template_directory'); ?>/images/case-study-details-1.png" alt="Car-Image"></a>
                  </div> 
                   <div class="slider-banner-image">
                      <a href=""><img src="<?php bloginfo('template_directory'); ?>/images/computer-img-responsive.png" alt="Car-Image"></a>
                  </div> 
                  <div class="slider-banner-image">
                      <a href=""><img src="<?php bloginfo('template_directory'); ?>/images/case-study-details-1.png" alt="Car-Image"></a>
                  </div> 
                  <div class="slider-banner-image">
                      <a href=""><img src="<?php bloginfo('template_directory'); ?>/images/digital-currency.png" alt="Car-Image"></a>
                  </div> 
              </div>
            <div class="slider slider-nav thumb-image">
                            <a href=""><div class="thumbnail-image">
                                <p class="fontW800">Strategy And Consulting</p>
                                <h2 class="fontW800">Strategy And Consulting Strategy And Consulting Strategy And Consulting</h2>
                            </div></a>
                            <a href=""><div class="thumbnail-image">
                                <p class="fontW800">Strategy And Consulting</p>
                                <h2 class="fontW800">Strategy And Consulting</h2>
                            </div></a>
                            <a href=""><div class="thumbnail-image">
                                <p class="fontW800">Strategy And Consulting</p>
                                <h2 class="fontW800">Strategy And Consulting</h2>
                            </div></a>
                            <a href=""><div class="thumbnail-image">
                               <p class="fontW800">Strategy And Consulting</p>
                                <h2 class="fontW800">Strategy And Consulting</h2>
                            </div></a>
                            <a href=""><div class="thumbnail-image">
                               <p class="fontW800">Strategy And Consulting</p>
                                <h2 class="fontW800">Strategy And Consulting</h2>
                            </div></a>
                            <a href=""><div class="thumbnail-image">
                               <p class="fontW800">Strategy And Consulting</p>
                                <h2 class="fontW800">Strategy And Consulting</h2>
                            </div></a>
                            <a href=""><div class="thumbnail-image">
                               <p class="fontW800">Strategy And Consulting</p>
                                <h2 class="fontW800">Strategy And Consulting</h2>
                            </div></a>
                            <a href=""><div class="thumbnail-image">
                               <p class="fontW800">Strategy And Consulting</p>
                                <h2 class="fontW800">Strategy And Consulting</h2>
                            </div></a>
                            <a href=""><div class="thumbnail-image">
                               <p class="fontW800">Strategy And Consulting</p>
                                <h2 class="fontW800">Strategy And Consulting</h2>
                            </div></a>
                            
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
<!-- <script src='<?php bloginfo('template_directory'); ?>/case-study-new/slick.min.js'></script> -->
<script  src="<?php bloginfo('template_directory'); ?>/case-study-new/script.js"></script>
<script type="text/javascript">
        $(document).ready(function () {
                     
           $(".thumb-image .draggable").height(256);
           $(".slick-track").height(2142);
              // $(".slick-track").scrollTop($(document).height());
           $(".thumb-image .slick-track").css({"transform": "translate3d(0px, " + -421 + "px, 0px)"});
        // $(".slick-track").translate3d(0, -76, 0);
           
        });

$(document).ready(function(){
  $(".slick-track").click(function(){

    var ab = $(".slick-track").height();
    $(".slick-track").height(874);

    //$(".slick-track").css({"transform": "translate3d(0px, " + -138 + "px, 0px)"});
    alert(ab);
   
  });

});




    </script>

