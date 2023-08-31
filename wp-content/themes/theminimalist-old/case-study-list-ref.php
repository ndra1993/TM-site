<?php get_header(); /*Template Name: case studies listing ref */
$homepage_id = get_option( 'page_on_front' );
error_reporting(0);
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
$cnt = count($my_arr);

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
   
   <li class="filterLi><span class="filter font12 fontW500" data-filter=".experience, .technology, .marketing, .branding, .video, .strategy">All</span></li>
            <?php
            $terms = get_terms("casestudy_categories");
            $count = count($terms);
            if ( $count > 0 ){
                foreach ( $terms as $y => $term ) {
                    $termname = $term->name;
                    $termslug = strtolower($term->slug);

                    $valarr = array_search($termslug,$my_arr,true);

            ?>
            
            <li class="filterLi <?php if ($valarr!='') {echo 'active';}?>">
            <a href="case-study-ref/?ids=<?php echo $termslug ?>"  class="filter font12 fontW500" ><?php echo $termslug ?> </a>
                </li>
           
                    
            <?php
                    }
                }
            ?>
  
  
  
      </ul>

  </div>

<!--swiper-->

<div class="wrap">
    <div class="swiper-container gallery-top">
      <div class="swiper-wrapper">

 <?php 
$groupID = 'case_study';
    $custom_query_args = array('post_type' => 'casestudy','posts_per_page' => 9,'order' => 'DESC','post_status' => 'publish');
                        $custom_query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
$custom_query = new WP_Query( $custom_query_args );
                    $count = $custom_query->found_posts;
               
                    $i=0;
                     while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
                            <?php 
                            $id_data= $_SESSION['ids'][$i];
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

                                  $valarr = array_search($tax,$my_arr,true);

                            ?> 




<?php if ($valarr!='') {?>

      <div class="swiper-slide"><div class="swiper-slide-container"><a href="#"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ) ?>" width="100%"></a></div></div>
      <?php //} ?>
<?php } ?>

<?php
      $i++;
    endwhile; ?>



      </div>
    </div>
    
    
    <div class="swiper-container gallery-thumbs">
     <div class="swiper-wrapper">


<?php
$groupID = 'case_study';
    $custom_query_args = array('post_type' => 'casestudy','posts_per_page' => 9,'order' => 'DESC','post_status' => 'publish');
                        $custom_query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
$custom_query = new WP_Query( $custom_query_args );
                    $count = $custom_query->found_posts;
                     $j = 0;

                     while ($custom_query->have_posts()) 
                     {
                        $custom_query->the_post(); 
                        
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


                                $valarr = array_search($tax,$my_arr,true);

                            ?>   



<?php if ($valarr!='') {

  ?>
<div class="swiper-slide"><div class="swiper-slide-container"> 
        <a href="#" class="anchor"><p><?php  echo $my_arr[$valarr];?>-<?php  the_title(); ?></p>

        <h2 class="h2 font30 fontW600 colorBlack"> <?php $text = str_replace('<p>','', the_content());
echo $text = str_replace('</p>','',$text); ?></h2></a>
              </div></div>

<?php } ?>





   <?php
    
    $j++;

     }
     ?>


      
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