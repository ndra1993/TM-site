<?php get_header(); /*Template Name: case studies listing Swiper */
$homepage_id = get_option( 'page_on_front' );
?>


<div class="desktopSection">
    <div class="caseStudyFilter">
        <ul id="filters">
            
            
            
           <li class="filterLi active" id="all">
                <span class="filter font12 fontW500" data-filter="experience,technology,marketing,branding,video,strategy">All</span>
            </li>
            <?php
            $terms = get_terms("casestudy_categories");
            $count = count($terms);
            if ( $count > 0 ){
                foreach ( $terms as $y => $term ) {
                    $termname = $term->name;
                    $termslug = strtolower($term->slug);
            ?>
            <li class="filterLi checklist">
                <span class="filter font12 fontW500" data-filter="<?php echo $termslug ?>"><?php echo $termslug ?></span>
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
            </div>
        </div>
        <div class="swiper-container gallery-thumbs">
            <div class="swiper-wrapper">
            </div>
        </div>
    </div>
    <!--swiper-->
</div>

<div class="mobileSection">
    <?php 
$groupID = 'case_study';
    $custom_query_args = array('post_type' => 'casestudy','posts_per_page' => 50,'order' => 'DESC','post_status' => 'publish');
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
                    <button type="button" class="close" data-dismiss="modal"><img
                            src="<?php bloginfo('template_directory'); ?>/images/modal-close.svg"></button>
                    <div class="filterList">
                        <h2 class="fontW800">Select Filters</h2>
                        <ul>
                            <li class="active fontW500">Experience Design <img
                                    src="<?php bloginfo('template_directory'); ?>/images/modal-close.svg"></li>
                            <li class="active fontW500">Technology <img
                                    src="<?php bloginfo('template_directory'); ?>/images/modal-close.svg"></li>
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

<!-- <script src="<?php bloginfo('template_directory'); ?>/newswiper/script.js"></script> -->

<script>

let sliders = [
     <?php 
$groupID = 'case_study';
    $custom_query_args = array('post_type' => 'casestudy','posts_per_page' => 50,'order' => 'DESC','post_status' => 'publish');
                        $custom_query_args['paged'] = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;
$custom_query = new WP_Query( $custom_query_args );
                    $count = $custom_query->found_posts;
          
                     while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
    <?php                       $terms = get_the_terms( $post->ID, 'casestudy_categories' );
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
    {
        title: '<?php echo get_the_title(); ?>',
        desc: '<?php echo rtrim(get_the_content());?>',
        type: '<?php echo $tax_links; ?>',
        image: '<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ) ?>'
    },
   <?php
      $i++;
    endwhile; ?>
]
const setSliderContent = (sliders) => {
    // sliders
    let sliderDiv = $('.gallery-thumbs .swiper-wrapper');
    sliderDiv.html("");
    sliders.map((row, index) => {
        let rowData = `
        <div class="swiper-slide">
            <div class="swiper-slide-container">
                <a href="#" class="fontW600 font30 anchor" id="fidata">
                    <p>` + row.title + `</p>
                    <h2 class="h2  font30 fontW600 colorBlack">` + row.desc + `</h2>
                </a>
            </div>
        </div>
        `;
        sliderDiv.append(rowData)
    })

}
const setSliderImages = (sliders) => {
    // sliders
    let imagesDiv = $('.gallery-top .swiper-wrapper');
    imagesDiv.html("");
    sliders.map((row, index) => {
        let rowData = `
        <div class="swiper-slide" style="margin-bottom: 50px;">
            <div class="swiper-slide-container">
              <a href="#"  id="fidata">
                <img src="` + row.image + `" >
              </a>
            </div>
        </div>
        `;
        imagesDiv.append(rowData)
    })
}

function callSlider() {
    var count = $(".swiper-wrapper #fidata").length;
    var cntone = count/2;
     var galleryTop = new Swiper('.gallery-top', {
     spaceBetween: 50,
      loop: true,
       speed: 600,
      loopedSlides: cntone,
    //   effect: 'fade' // show fade and Overlap image 
                  });
    var galleryThumbs = new Swiper('.gallery-thumbs', {
        spaceBetween: 50,
        centeredSlides: false,
        slidesPerView: 'auto',
        mousewheel: true,
        loop: true,
        speed: 600,
        loopedSlides:cntone,
        direction: 'vertical',
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
         mousewheel: {
    invert: true,
    sensitivity: 2
  },
        //autoplay: {
        // delay: 8000,
        //},
    });
    galleryTop.controller.control = galleryThumbs;
    galleryThumbs.controller.control = galleryTop;
}

const getActiveLi = async ()=>{
    let appliedFilter = []; 
    $("#filters li.active").find('span').each(function() {
            if($(this).text()!='All'){
                appliedFilter.push($(this).attr('data-filter')); 
            }
    });
    if(appliedFilter.length==0){
        appliedFilter = ['experience','technology','marketing','branding','video','strategy']
    }
    return appliedFilter
}
$(document).ready(function() {
    setSliderContent(sliders)
    setSliderImages(sliders)
    callSlider()
    
    
    $("#filters .checklist").click(async function() {
       
      $(this).toggleClass("active");
      checkCAtlist();
        let appliedFilter = await getActiveLi()
        var newSliders = sliders.filter(function (el) {
            return appliedFilter.includes(el.type);
        });
        setSliderContent(newSliders)
        setSliderImages(newSliders)
        callSlider()
        
    });
});



// });

function  checkCAtlist()
{
    let count = $("#filters .active").find("*").length;
    
    if(count == 6){
       $("#all").toggleClass("active");
    }else{
       $("#all").removeClass("active");
    }
}

</script>