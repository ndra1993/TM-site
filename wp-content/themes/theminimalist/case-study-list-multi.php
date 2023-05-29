<?php get_header(); /*Template Name: casestudy listing Gits*/
$homepage_id = get_option( 'page_on_front' );
?>

<style>
	.casestudyContainerBox{height: calc(100vh - 210px);overflow:hidden;}
	.containerinnerBox{display:flex;flex-flow:wrap;height:100%;}
	.hideAnim {opacity: 0;transition: all .5s ease-in-out;}
	.showAnim {opacity: 1;transition: all .8s ease-in-out;}
	.csimg{position:relative;width:50%;height: 100%;}
	.csheadings{position:relative;width:50%;padding:0px 85px;height: 100%;overflow-y: scroll;}
	#style-1::-webkit-scrollbar-track{-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3);border-radius: 0px;background-color: #F5F5F5;}
	#style-1::-webkit-scrollbar{width: 8px;background-color: #00FFA3;}
	#style-1::-webkit-scrollbar-thumb{border-radius: 10px;-webkit-box-shadow: inset 0 0 6px rgba(0,0,0,.3);background-color: #00FFA3;}
	.csheadingsBox{padding: 42px 0px;border-bottom: 1px solid #000000; transition: 0.5s all ease-in-out;padding-right: 20px;}
	.csheadingsBox a{text-decoration: none;display: block;}
	.csheadingsBox p{font-size: 14px;line-height: 14px;letter-spacing: 0.05em;text-transform: uppercase;color: #000000;font-weight: 800;margin-bottom: 15px;}
	.csheadingsBox h2{font-weight: 600;font-size: 30px;line-height: 36px;color: #000000;}
	.csheadingsBox.showHover{padding: 85px 0px; transition: 0.5s all ease-in-out;border-bottom: 10px solid #00FFA3;}
	.csheadingsBox.showHover p{font-weight: 800;font-size: 20px;}
	.csheadingsBox.showHover h2{font-weight: 800;font-size: 64px;line-height: 72px;}
	.csimgBox{position: absolute;width: 100%;height: 100%;}
	.csimgBox img{max-width: 100%;}

	.works-filter {
  display: inline-block;
  text-decoration: none;
  transition: all .35s ease;
}

.works-filter:hover {
  cursor: pointer;
  transition: all .35s ease;
}

.works-filter-active {
  transition: all .35s ease;
	background-color:#00FFA3;
	color:black;

}
	close-active
	{
		color:white;
	}
.works-filter-active::after {
  content: "X ";
  text-transform: none;
  transition: all .35s ease;
	color:black;
	margin-left:10px;
}
.workItem {
  display: none;
}

.show-workItem {
  display: block;
  transition: all .35s ease;
}
.filter
{
    text-decoration: none;
}

.active a
{
    text-decoration: none;
    color: #fff;
}

	@media screen and (max-width: 1800px) {
		.csheadings{padding:0px 65px;}
		.csheadingsBox{padding: 36px 0px;padding-right: 15px;}
		.csheadingsBox.showHover{padding: 70px 0px;}
	}
	@media screen and (max-width: 1600px) {
		.casestudyContainerBox {height: calc(100vh - 190px);}
		.csheadings{padding:0px 55px;}
		.csheadingsBox{padding: 30px 0px;}
		.csheadingsBox p{font-size: 12px;line-height: 12px;margin-bottom: 12px;}
		.csheadingsBox h2{font-size: 26px;line-height: 32px;}
		.csheadingsBox.showHover{padding: 60px 0px;border-bottom: 8px solid #00FFA3;}
		.csheadingsBox.showHover p{font-size: 18px;}
		.csheadingsBox.showHover h2{font-size: 60px;line-height: 66px;}
	}
	@media screen and (max-width: 1440px) {
		.casestudyContainerBox {height: calc(100vh - 160px);}
		.csheadings{padding:0px 40px;}
		.csheadingsBox{padding: 25px 0px;}
		.csheadingsBox h2{font-size: 24px;line-height: 30px;}
		.csheadingsBox.showHover{padding: 50px 0px;}
		.csheadingsBox.showHover p{font-size: 16px;}
		.csheadingsBox.showHover h2{font-size: 54px;line-height: 60px;}
	}
	@media screen and (max-width: 1280px) {
		.csheadings{padding:0px 35px;}
		.csheadingsBox{padding: 20px 0px;}
		.csheadingsBox h2{font-size: 22px;line-height: 28px;}
		.csheadingsBox.showHover{padding: 40px 0px;}
		.csheadingsBox.showHover p{font-size: 14px;}
		.csheadingsBox.showHover h2{font-size: 48px;line-height: 54px;}
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
	<div class="casestudyContainerBox">
    	<div class="containerinnerBox">
			<div class="csimg">
				<div class="hideAnim csimgBox almarai showAnim workItem show-workItem experience">
					<img src="https://ixdtm.com/projects/theminimalist-site/wp-content/uploads/2023/04/Almarai.png" alt="">
				</div> 
				<div class="hideAnim csimgBox tatacliqluxury workItem show-workItem technology">
					<img src="https://ixdtm.com/projects/theminimalist-site/wp-content/uploads/2023/04/hackthon-tcl-img-3.png" alt="Car-Image">
				</div> 
				<div class="hideAnim csimgBox meesho workItem show-workItem marketing">
					<img src="https://ixdtm.com/projects/theminimalist-site/wp-content/uploads/2023/05/meesho-banner-new.png" alt="Car-Image">
				</div> 
				<div class="hideAnim csimgBox dozee workItem show-workItem branding">
					<img src="https://ixdtm.com/projects/theminimalist-site/wp-content/uploads/2023/05/dozee-banner2.png" alt="Car-Image">
				</div> 
				<div class="hideAnim csimgBox oneto11 workItem show-workItem video">
					<img src="https://ixdtm.com/projects/theminimalist-site/wp-content/uploads/2023/05/detail-page-format_final.png" alt="Car-Image">
				</div>
				<div class="hideAnim csimgBox tataaig workItem show-workItem video">
					<img src="https://ixdtm.com/projects/theminimalist-site/wp-content/uploads/2023/04/TATA-AIG_Final_Case_Study-V2.png" alt="Car-Image">
				</div>
				<div class="hideAnim csimgBox taggd workItem show-workItem strategy">
					<img src="https://ixdtm.com/projects/theminimalist-site/wp-content/uploads/2023/05/TaggdCase-Study.png" alt="Car-Image">
				</div>  
			</div>
			<div class="csheadings" id="style-1 workItem show-workItem experience">
				<div class="animBtn csheadingsBox showHover" data-anim="almarai">
					<a href="https://ixdtm.com/projects/theminimalist-site/casestudy/almarai/">
						<p class="">Almarai</p>
						<h2 class="">Delivering a seamless Order Management System to Almarai</h2>
					</a>
				</div>
				<div class="animBtn csheadingsBox workItem show-workItem technology" data-anim="tatacliqluxury">
					<a href="https://ixdtm.com/projects/theminimalist-site/casestudy/tata-cliq-luxury/">
						<p class="">Tata Cliq Luxury</p>
						<h2 class="">Building thought leadership for Tata CLiQ Luxury</h2>
					</a>
				</div>
				<div class="animBtn csheadingsBox workItem show-workItem marketing" data-anim="meesho">
					<a href="https://ixdtm.com/projects/theminimalist-site/casestudy/meesho/">
						<p class="">Meesho</p>
						<h2 class="">Beating the clock to launch Meesho's mobile-friendly website</h2>
					</a>
				</div>
				<div class="animBtn csheadingsBox workItem show-workItem branding" data-anim="dozee">
					<a href="https://ixdtm.com/projects/theminimalist-site/casestudy/dozee/">
						<p class="">DOZEE</p>
						<h2 class="">Adding a dose of Science and technology to Dozee’s design system</h2>
					</a>
				</div>
				<div class="animBtn csheadingsBox workItem show-workItem video" data-anim="oneto11">
					<a href="https://ixdtm.com/projects/theminimalist-site/casestudy/one-to-11/">
						<p class="">ONE TO 11</p>
						<h2 class="">Levelling up the web experience for OneTo11</h2>
					</a>
				</div>
				<div class="animBtn csheadingsBox workItem show-workItem video" data-anim="tataaig">
					<a href="https://ixdtm.com/projects/theminimalist-site/casestudy/tata-aig/">
						<p class="">Tata AIG</p>
						<h2 class="">Securing the future by simplifying insurance with Tata AIG</h2>
					</a>
				</div>
				<div class="animBtn csheadingsBox workItem show-workItem strategy" data-anim="taggd">
					<a href="https://ixdtm.com/projects/theminimalist-site/casestudy/taggd/">
						<p class="">TAGGD</p>
						<h2 class="">Employing intelligent UX to help Taggd excel at digital recruitment</h2>
					</a>
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


  <div class="caseStudyDetailsSection workItem show-workItem <?php echo $tax ?>">
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
      <div class="badge fontW600"  id="test1">0</div>   
    </div>
    <div class="modal fade" id="lab-slide-bottom-popup" data-keyboard="false" data-backdrop="false">
  <div class="lab-modal-body">
    <div class="filterSelectSection">
      <button type="button" class="close" data-dismiss="modal"><img src="<?php bloginfo('template_directory'); ?>/images/modal-close.svg" class="close_data"></button>
      <div class="filterList">
        <h2 class="fontW800">Select Filters</h2>
        <ul class="filters">
			<span class="text-right works-filter flex-grow-1 w-sm-100 my-2 showAll" data-filter="all" style="display:none;">All Projects</span>
                <?php
                $terms = get_terms("casestudy_categories");
                $count = count($terms);
                if ( $count > 0 ){
                    foreach ( $terms as $y => $term ) {
                        $termname = $term->name;
                        $termslug = strtolower($term->slug);
                ?>
                
                 <li class="fontW500 works-filter filter checklist" data-filter="<?php echo $termslug ?>"><?php echo $termname ?>

</li>
                    
                <?php
                        }
                    }
                ?>
      
        
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
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script>
$(document).ready(function(){
       
	
	  var fruits = [];
	  $( ".checklist" ).on('click',function() {
          var dataAttr = $(this).data('filter');
		  
           
		  if(fruits.includes(dataAttr)){
				 fruits = fruits.filter(function(item) {
					return item !== dataAttr
				});
			 }else{
				 fruits.push(dataAttr);
			 }

			//console.log(fruits)
		  
		
            $('#test1').show();
           var daa= $("#test1").text(fruits.length);
          
		  
      });
	
	  function functionFilterCount(){
		   var count = $('.filters .works-filter-active').length;
		 
		  
	  } 
	

// 	 $( ".close_data" ).click(function() {
//     location.reload();
//       });
	 $( ".applyBtn" ).click(function() {
    $('#lab-slide-bottom-popup').hide();
    });
 
	  
	$( ".filterimg").click(function() {
    $('#lab-slide-bottom-popup').show();	
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
            } else {
                $(this).removeClass('show-workItem');
                for (i = 0; i < classes.length; i++) {
                    if (filtersActive.indexOf(classes[i]) > -1) {
                        $(this).addClass('show-workItem');
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

	$(".animBtn").hover(function(e) {
    var animid=$(this).data('anim');
    $('.animBtn').removeClass('showHover');
    $(this).addClass('showHover');
    $(".hideAnim").removeClass('showAnim');
	$("."+animid).addClass('showAnim');
});

});




</script>

<script  src="<?php bloginfo('template_directory'); ?>/newswiper/script.js"></script>
