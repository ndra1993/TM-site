<?php get_header(); /*Template Name: case studies listing ref bkup*/
$homepage_id = get_option( 'page_on_front' );
session_start();
$cslider = $_REQUEST['ids'];
for($k=0;$k<10;$k++)
{
if( $cslider == $_SESSION['names'][$k])
{
$kval = $_SESSION['names'][$k];
unset($_SESSION['names'][$k]);
}
}

if($kval != $cslider)
$_SESSION['names'][] = $cslider;
$arrys = array_merge( $_SESSION[ "names" ],explode( ",", $pu) );
$_SESSION[ "names" ] = array_unique($arrys);
$my_arr = array();
$my_arr = $_SESSION['names'];
?>  
<style>
.filter
{
    text-decoration: none;
    color: #000;
}

.active a
{
    text-decoration: none;
    color: #fff;
}
</style>

<div class="desktopSection">
  <div class="caseStudyFilter">

    <ul id="filters">
      <li class="filterLi  active"><a href="#" class="filter font12 fontW500" data-filter=".experience">All</a></li>
      <li class="filterLi  <?php if($my_arr[0] == 'experience' || $my_arr[1] == 'experience' || $my_arr[2] == 'experience' || $my_arr[3] == 'experience' || $my_arr[4] == 'experience' || $my_arr[5] == 'experience' || $my_arr[6] == 'experience' ){?> active <?php } ?>"><a href="case-study-listing-v/?ids=experience" class="filter font12 fontW500" data-filter=".experience">Experience Design</a></li>

      <li class="filterLi <?php if($my_arr[0] == 'technology' || $my_arr[1] == 'technology' || $my_arr[2] == 'technology' || $my_arr[3] == 'technology' || $my_arr[4] == 'technology' || $my_arr[5] == 'technology' || $my_arr[6] == 'technology'){?> active <?php } ?>"><a href="case-study-listing-v/?ids=technology" class="filter font12 fontW500 " data-filter=".technology" >Technology</a></li>


      <li class="filterLi <?php if($my_arr[0] == 'marketing' || $my_arr[1] == 'marketing' || $my_arr[2] == 'marketing' || $my_arr[3] == 'marketing' || $my_arr[4] == 'marketing' || $my_arr[5] == 'marketing' || $my_arr[6] == 'marketing' ){?> active <?php } ?>"><a href="case-study-listing-v/?ids=marketing" class="filter font12 fontW500" data-filter=".marketing">Marketing Solutions</a></li>

      <li class="filterLi <?php if($my_arr[0] == 'branding' || $my_arr[1] == 'branding' || $my_arr[2] == 'branding' || $my_arr[3] == 'branding' || $my_arr[4] == 'branding' || $my_arr[5] == 'branding' || $my_arr[6] == 'branding'){?> active <?php } ?>"><a href="case-study-listing-v/?ids=branding" class="filter font12 fontW500" data-filter=".branding">Branding</a></li>

      <li class="filterLi <?php if($my_arr[0] == 'video' || $my_arr[1] == 'video' || $my_arr[2] == 'video' || $my_arr[3] == 'video' || $my_arr[4] == 'video' || $my_arr[5] == 'video' || $my_arr[6] == 'video'){?> active <?php } ?>"><a href="case-study-listing-v/?ids=video" class="filter font12 fontW500" data-filter=".video">Video Production</a></li>

      <li class="filterLi <?php if($my_arr[0] == 'strategy' || $my_arr[1] == 'strategy' || $my_arr[2] == 'strategy' || $my_arr[3] == 'strategy' || $my_arr[4] == 'strategy' || $my_arr[5] == 'strategy' || $my_arr[6] == 'strategy' ){?> active <?php } ?>"><a href="case-study-listing-v/?ids=strategy" class="filter font12 fontW500" data-filter=".strategy">Strategy And Consulting</a></li>
    </ul>
  </div>

<!--swiper-->

<div class="wrap">
    <div class="swiper-container gallery-top">
      <div class="swiper-wrapper">
        <?php if($my_arr[0] == 'experience' || $my_arr[1] == 'experience' || $my_arr[2] == 'experience' || $my_arr[3] == 'experience' || $my_arr[4] == 'experience' || $my_arr[5] == 'experience' || $my_arr[6] == 'experience' ){?>
      <div class="swiper-slide"><div class="swiper-slide-container"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/phone.png"></a></div></div>
      <?php } ?>



        <?php if($my_arr[0] == 'technology' || $my_arr[1] == 'technology' || $my_arr[2] == 'technology' || $my_arr[3] == 'technology' || $my_arr[4] == 'technology' || $my_arr[5] == 'technology' || $my_arr[6] == 'technology' ){?>
      <div class="swiper-slide"><div class="swiper-slide-container"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/phone-two.png"></a></div></div>
      <?php } ?>



        <?php if($my_arr[0] == 'marketing' || $my_arr[1] == 'marketing' || $my_arr[2] == 'marketing' || $my_arr[3] == 'marketing' || $my_arr[4] == 'marketing' || $my_arr[5] == 'marketing' || $my_arr[6] == 'marketing' ){?>
      <div class="swiper-slide"><div class="swiper-slide-container"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/phone.png"></a></div></div>
      <?php } ?>



        <?php if($my_arr[0] == 'branding' || $my_arr[1] == 'branding' || $my_arr[2] == 'branding' || $my_arr[3] == 'branding' || $my_arr[4] == 'branding' || $my_arr[5] == 'branding' || $my_arr[6] == 'branding' ){?>
      <div class="swiper-slide"><div class="swiper-slide-container"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/phone-two.png"></a></div></div>
      <?php } ?>



        <?php if($my_arr[0] == 'video' || $my_arr[1] == 'video' || $my_arr[2] == 'video' || $my_arr[3] == 'video' || $my_arr[4] == 'video' || $my_arr[5] == 'video' || $my_arr[6] == 'video' ){?>
      <div class="swiper-slide"><div class="swiper-slide-container"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/phone.png"></a></div></div>
<?php } ?>

 <?php if($my_arr[0] == 'strategy' || $my_arr[1] == 'strategy' || $my_arr[2] == 'strategy' || $my_arr[3] == 'strategy' || $my_arr[4] == 'strategy' || $my_arr[5] == 'strategy' || $my_arr[6] == 'strategy' ){?>
      <div class="swiper-slide"><div class="swiper-slide-container"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/phone.png"></a></div></div>

<?php } ?>



<?php if($my_arr[0] == 'all' || $my_arr[1] == 'all' || $my_arr[2] == 'all' || $my_arr[3] == 'all' || $my_arr[4] == 'all' || $my_arr[5] == 'all' || $my_arr[6] == 'all' ){?>
      <div class="swiper-slide"><div class="swiper-slide-container"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/phone.png"></a></div></div>
       <div class="swiper-slide"><div class="swiper-slide-container"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/phone.png"></a></div></div>
        <div class="swiper-slide"><div class="swiper-slide-container"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/phone.png"></a></div></div>
         <div class="swiper-slide"><div class="swiper-slide-container"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/phone.png"></a></div></div>
          <div class="swiper-slide"><div class="swiper-slide-container"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/phone.png"></a></div></div>

<?php } ?>




      </div>
    </div>
    
    
    <div class="swiper-container gallery-thumbs">
     <div class="swiper-wrapper">

   <?php if($my_arr[0] == 'experience' || $my_arr[1] == 'experience' || $my_arr[2] == 'experience' || $my_arr[3] == 'experience' || $my_arr[4] == 'experience' || $my_arr[5] == 'experience' ){?>
       <div class="swiper-slide"><div class="swiper-slide-container"> 
        <a href="#" class="anchor"><p>Experience 1</p>

        <h2 class="h2 font30 fontW600 colorBlack">Lorem Ipsum is simply dummy text of the printing and typesetting. </h2></a>
              </div></div>

            


            
<?php } ?>



       <?php if($my_arr[0] == 'technology' || $my_arr[1] == 'technology' || $my_arr[2] == 'technology' || $my_arr[3] == 'technology' || $my_arr[4] == 'technology' || $my_arr[5] == 'technology' ){?>
       <div class="swiper-slide"><div class="swiper-slide-container"> 
        <a href="#" class="anchor"><p>Technology Strategy And Consulting one</p>

        <h2 class="h2 font30 fontW600 colorBlack">Lorem Ipsum is simply dummy text of the printing and typesetting. </h2></a>
              </div></div>
<?php } ?>


 <?php if($my_arr[0] == 'marketing' || $my_arr[1] == 'marketing' || $my_arr[2] == 'marketing' || $my_arr[3] == 'marketing' || $my_arr[4] == 'marketing' || $my_arr[5] == 'marketing' ){?>
       <div class="swiper-slide"><div class="swiper-slide-container"> 
        <a href="#" class="anchor"><p>Marketing I Strategy And Consulting one</p>

        <h2 class="h2 font30 fontW600 colorBlack">Lorem Ipsum is simply dummy text of the printing and typesetting. </h2></a>
              </div></div>

             
<?php } ?>

<?php if($my_arr[0] == 'branding' || $my_arr[1] == 'branding' || $my_arr[2] == 'branding' || $my_arr[3] == 'branding' || $my_arr[4] == 'branding' || $my_arr[5] == 'branding' ){?>
       <div class="swiper-slide"><div class="swiper-slide-container"> 
        <a href="#" class="anchor"><p>Branding I Strategy And Consulting one</p>

        <h2 class="h2 font30 fontW600 colorBlack">Lorem Ipsum is simply dummy text of the printing and typesetting. </h2></a>
              </div></div>


<?php } ?>

<?php if($my_arr[0] == 'video' || $my_arr[1] == 'video' || $my_arr[2] == 'video' || $my_arr[3] == 'video' || $my_arr[4] == 'video' || $my_arr[5] == 'video' ){?>       <div class="swiper-slide"><div class="swiper-slide-container"> 
        <a href="#" class="anchor"><p>Video Strategy And Consulting one</p>

        <h2 class="h2 font30 fontW600 colorBlack">Lorem Ipsum is simply dummy text of the printing and typesetting. </h2></a>
              </div></div>


<?php } ?>

<?php if($my_arr[0] == 'strategy' || $my_arr[1] == 'strategy' || $my_arr[2] == 'strategy' || $my_arr[3] == 'strategy' || $my_arr[4] == 'strategy' || $my_arr[5] == 'strategy' ){?>
       <div class="swiper-slide"><div class="swiper-slide-container"> 
        <a href="#" class="anchor"><p>Strategy And Consulting one</p>

        <h2 class="h2 font30 fontW600 colorBlack">Lorem Ipsum is simply dummy text of the printing and typesetting. </h2></a>
              </div></div>


<?php } ?>







<?php if($my_arr[0] == 'all' || $my_arr[1] == 'all' || $my_arr[2] == 'all' || $my_arr[3] == 'all' || $my_arr[4] == 'all' || $my_arr[5] == 'all' || $my_arr[6] == 'all' ){?>


 <div class="swiper-slide"><div class="swiper-slide-container"> 
        <a href="#" class="anchor"><p>Experience 1</p>

        <h2 class="h2 font30 fontW600 colorBlack">Lorem Ipsum is simply dummy text of the printing and typesetting. </h2></a>
              </div></div>

      
      <div class="swiper-slide"><div class="swiper-slide-container"> 
        <a href="#" class="anchor"><p>Marketing I Strategy And Consulting one</p>

        <h2 class="h2 font30 fontW600 colorBlack">Lorem Ipsum is simply dummy text of the printing and typesetting. </h2></a>
              </div></div>
       
       
        <div class="swiper-slide"><div class="swiper-slide-container"> 
        <a href="#" class="anchor"><p>Branding I Strategy And Consulting one</p>

        <h2 class="h2 font30 fontW600 colorBlack">Lorem Ipsum is simply dummy text of the printing and typesetting. </h2></a>
              </div></div>

        <div class="swiper-slide"><div class="swiper-slide-container"> 
         <a href="#" class="anchor"><p>Video Strategy And Consulting one</p>

        <h2 class="h2 font30 fontW600 colorBlack">Lorem Ipsum is simply dummy text of the printing and typesetting. </h2></a>
              </div></div>
        
         <div class="swiper-slide"><div class="swiper-slide-container"> 
        <a href="#" class="anchor"><p>Strategy And Consulting one</p>

        <h2 class="h2 font30 fontW600 colorBlack">Lorem Ipsum is simply dummy text of the printing and typesetting. </h2></a>
              </div></div>

<?php } ?>















      
     </div>
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