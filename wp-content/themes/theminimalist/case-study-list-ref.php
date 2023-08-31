<?php get_header(); /*Template Name: case studies listing ref */
$homepage_id = get_option( 'page_on_front' );
session_start();
/*$pageWasRefreshed = isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] === 'max-age=0';

if($pageWasRefreshed ) {
  //do something because page was refreshed;
} */

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
if($cnt<=2 && $cslider != 'all')
{
  session_destroy();
  header("location:case-study-listing-v/?ids=all");
}
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
 <?php
            $terms = get_terms("casestudy_categories");
            $count = count($terms);
            $cmnt = $count+2;
            ?>

 <ul id="filters">
   
   <li class="filterLi <?php if($cslider=='all' || $cmnt<=$cnt || $cnt<=1){?>active<?php } ?>">

    <a href="<?php if($cslider=='all' || $count<$cnt || $cnt<=1){?>#<?php }else{?>case-study-listing-v/?ids=all<?php } ?>"  class="filter font12 fontW500 " >All </a>
   

  </li>
           
           <?php if ( $count > 0 ){
                foreach ( $terms as $y => $term ) {
                    $termname = $term->name;
                    $termslug = strtolower($term->slug);

                    $valarr = array_search($termslug,$my_arr,true);

            ?>
            
            <li class="filterLi <?php if ($valarr!='' ) {echo 'active';}?>">
            <a href="case-study-listing-v/?ids=<?php echo $termslug ?>"  class="filter font12 fontW500" ><?php echo $termslug ?> </a>
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
                            $j=0;
                            while ($custom_query->have_posts()) { $custom_query->the_post(); ?>
                            <?php 
                            //$id_data= $_SESSION['ids'][$i];
                                $terms = get_the_terms( $post->ID, 'casestudy_categories' );
                                if ( $terms && ! is_wp_error( $terms ) ) :
                                $links = array();
                                foreach ( $terms as $term ) { $links[] = $term->slug; }
                                $tax_links = join( " ", str_replace(' ', '-', $links));
                                $tax = strtolower($tax_links);
                                else :
                                $tax = '';
                                endif;
                                $valarrimg = array_search($tax,$my_arr,true);
                            ?> 
     <?php if ($valarrimg!='' && $cslider!='all' && $cnt > 1 ) {$j=$j-1;?>
      <div class="swiper-slide"><div class="swiper-slide-container"><a href="<?php the_permalink();?>"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ) ?>" width="100%"></a></div></div>
     <?php } ?>
<?php //$cslider=='all' &&
if ( $valarrimg =='' && $cnt <= 1 || $cslider=='all' ) {?>
<div class="swiper-slide"><div class="swiper-slide-container"><a href="<?php the_permalink();?>"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ) ?>" width="100%"></a></div></div>
<?php } $j++;} ?>




<!--data 5-->
<?php $valtoseeimg = $count-$j;
if($valtoseeimg<=3 && $cslider!='all' ){
$newcnt = 5-$valtoseeimg+$valtoseeimg;
  for($i=0;$i<=$newcnt;$i++)
{
  ?>
<?php      while ($custom_query->have_posts()) { $custom_query->the_post(); ?>
                            <?php 
                            //$id_data= $_SESSION['ids'][$i];
                                $terms = get_the_terms( $post->ID, 'casestudy_categories' );
                                if ( $terms && ! is_wp_error( $terms ) ) :
                                $links = array();
                                foreach ( $terms as $term ) { $links[] = $term->slug; }
                                $tax_links = join( " ", str_replace(' ', '-', $links));
                                $tax = strtolower($tax_links);
                                else :
                                $tax = '';
                                endif;
                                $valarrimg = array_search($tax,$my_arr,true);
                            ?> 
      <?php if ($valarrimg!='' && $cslider!='all' && $cnt > 1 ) {?>
      <div class="swiper-slide"><div class="swiper-slide-container"><a href="<?php the_permalink();?>"><img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ) ?>" width="100%"></a></div></div>
    <?php } } }?>


 <?php } ?>
<!--data 5-->

      </div>
    </div>
    
 <!--imageend-->   
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
                                 $varcnt =$varcnt+ $valarr;
        ?>   



<?php if ($valarr!='' && $cslider!='all' && $cnt > 1 ) {$j=$j-1;$arv[] = $myarr[$valarr];?>
<div class="swiper-slide">
<div class="swiper-slide-container"> 
      <a href="<?php the_permalink();?>" class="anchor"><p><?php  the_title(); ?></p>
        <h2 class="h2 font30 fontW600 colorBlack"> 
        <?php $text = str_replace('<p>','', the_content());echo $text = str_replace('</p>','',$text); ?>
        </h2>
      </a>
</div>
</div>
<?php } ?>


<?php //$cslider=='all' &&
if ( $valarr=='' && $cnt <= 1 || $cslider=='all' ) {?>
<div class="swiper-slide">
<div class="swiper-slide-container"> 
      <a href="<?php the_permalink();?>" class="anchor"><p><?php  the_title(); ?></p>
        <h2 class="h2 font30 fontW600 colorBlack"> 
        <?php $text = str_replace('<p>','', the_content());echo $text = str_replace('</p>','',$text); ?>
        </h2>
      </a>
</div>
</div>
<?php } ?>

 <?php $j++;} ?>


<!--data 5-->
<?php $valtosee = $count-$j;
if($valtosee<=3 && $cslider!='all' )
{
   $newcnt = 5-$valtosee+$valtosee;
  for($i=0;$i<=$newcnt;$i++)
{
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
                                $valarrm = array_search($tax,$my_arr,true);
                                 $varcnt =$varcnt+ $valarr;
                                 


        ?>   



<?php 
if ($valarrm!='' && $cslider!='all' && $cnt > 1 ) {?>
<div class="swiper-slide">
<div class="swiper-slide-container"> 
      <a href="<?php the_permalink();?>" class="anchor"><p><?php  the_title(); ?></p>
        <h2 class="h2 font30 fontW600 colorBlack"> 
        <?php $text = str_replace('<p>','', the_content());echo $text = str_replace('</p>','',$text); ?>
        </h2>
      </a>
</div>
</div>
<?php } } }?>



 <?php }  ?>

<!--data 5-->














      
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
    <a href="<?php the_permalink();?>">
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