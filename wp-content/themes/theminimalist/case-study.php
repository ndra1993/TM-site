<?php get_header(); /*Template Name: Case Study*/
$homepage_id = get_option('page_on_front');
?>



<div class="desktopSection" style="display: block;">
	<!-- <div class="filterDiv">
		<div class="caseStudyFilter">
			<div class="heading-div">
				<h2 class="select-filter-heading">Select Filters</h2>
				<div class="cross-btn"><img
						src="https://ixdtm.com/projects/theminimalist-site/wp-content/themes/theminimalist/images/modal-close.svg"
						alt="cross-img" /></div>
			</div>
			<ul id="filters">
				<li class="filterLi active btn countDiv"><span class="filter font12 fontW500 showAll"
						onclick="filterSelection('all')">All</span></li>
				<li class="filterLi btn countDiv"><span class="filter font12 fontW500"
						onclick="filterSelection('experience')">Experience Design</span></li>
				<li class="filterLi btn countDiv"><span class="filter font12 fontW500"
						onclick="filterSelection('technology')">Technology</span></li>
				<li class="filterLi btn countDiv"><span class="filter font12 fontW500"
						onclick="filterSelection('marketing')">Marketing Solutions</span></li>
				<li class="filterLi btn countDiv"><span class="filter font12 fontW500"
						onclick="filterSelection('branding')">Branding</span></li>
				<li class="filterLi btn countDiv"><span class="filter font12 fontW500"
						onclick="filterSelection('video')">Video Production</span></li>
				<li class="filterLi btn countDiv"><span class="filter font12 fontW500"
						onclick="filterSelection('strategy')">Strategy And Consulting</span></li>
			</ul>
		</div>
	</div> -->
	<!-- <div class="filter-btn-mbl">
		<img src="https://ixdtm.com/projects/theminimalist-site/wp-content/themes/theminimalist/images/case-study-filter.svg"
			alt="">
		
	</div> -->
	<div class="casestudyContainerBox">
		<div class="containerinnerBox">
			<div class="csimg">
				<?php
				$args = array('post_type' => 'casestudy', 'posts_per_page' => -1, 'order' => 'DESC');
				$the_query = new WP_Query($args);
				$counter = 1;
				while ($the_query->have_posts()):
					$the_query->the_post();
					?>
					<?php
					$terms = get_the_terms($post->ID, 'casestudy_categories');
					if ($terms && !is_wp_error($terms)):
						$links = array();
						foreach ($terms as $term) {
							$links[] = $term->slug;
						}
						$tax_links = join(" ", str_replace(' ', '-', $links));
						$tax = strtolower($tax_links);
					else:
						$tax = '';
					endif;
					?>
					<?php
					global $post;
					$post_slug = $post->post_name;
					?>
					<div class="hideAnim column csimgBox <?php echo $post_slug ?> <?php echo $tax ?> <?php echo $counter; ?> <?php if ($counter == 1) {
									echo 'showAnim';
								} ?>">
						<a href="<?php the_permalink(); ?>">
						<div class="imgDiv skeltonImgDiv"><img class="skeltonImg" src="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID)) ?>"
								alt=""></div>
						<div class="csheadingsMob skeleton">
							<p class="hide-text">
								<?php the_title(); ?>
							</p>
							<?php the_content(); ?>
						</div>
						</a>
					</div>
					<?php $counter = $counter + 1; endwhile;
				wp_reset_postdata(); ?>
				<!-- <div class="hideAnim column csimgBox tatacliqluxury technology">
					<img src="https://ixdtm.com/projects/theminimalist-site/wp-content/uploads/2023/05/tcl-thumb.jpg" alt="">
					<div class="csheadingsMob">
						<p class="">Tata Cliq Luxury</p>
						<h2 class="">Building thought leadership for Tata CLiQ Luxury</h2>
					</div>
				</div> 
				<div class="hideAnim column csimgBox meesho marketing">
					<img src="https://ixdtm.com/projects/theminimalist-site/wp-content/uploads/2023/05/meesho-thumb.png" alt="">
					<div class="csheadingsMob">
						<p class="">Meesho</p>
						<h2 class="">Beating the clock to launch Meesho's mobile-friendly website</h2>
					</div>
				</div> 
				<div class="hideAnim column csimgBox dozee branding">
					<img src="https://ixdtm.com/projects/theminimalist-site/wp-content/uploads/2023/05/dozee-thumb.png" alt="">
					<div class="csheadingsMob">
						<p class="">DOZEE</p>
						<h2 class="">Adding a dose of Science and technology to Dozee’s design system</h2>
					</div>
				</div> 
				<div class="hideAnim column csimgBox oneto11 video">
					<img src="https://ixdtm.com/projects/theminimalist-site/wp-content/uploads/2023/05/one211-thumb.png" alt="">
					<div class="csheadingsMob">
						<p class="">ONE TO 11</p>
						<h2 class="">Levelling up the web experience for OneTo11</h2>
					</div>
				</div>
				<div class="hideAnim column csimgBox tataaig video">
					<img src="https://ixdtm.com/projects/theminimalist-site/wp-content/uploads/2023/05/tataaig-thumb.png" alt="">
					<div class="csheadingsMob">
						<p class="">Tata AIG</p>
						<h2 class="">Securing the future by simplifying insurance with Tata AIG</h2>
					</div>
				</div>
				<div class="hideAnim column csimgBox taggd strategy">
					<img src="https://ixdtm.com/projects/theminimalist-site/wp-content/uploads/2023/05/taggd-thumb.png" alt="">
					<div class="csheadingsMob">
						<p class="">TAGGD</p>
						<h2 class="">Employing intelligent UX to help Taggd excel at digital recruitment</h2>
					</div>
				</div>  -->
			</div>
			<div class="csheadings" id="style-1">
				<?php
				$args = array('post_type' => 'casestudy', 'posts_per_page' => -1, 'order' => 'DESC');
				$the_query = new WP_Query($args);
				$counter = 1;
				while ($the_query->have_posts()):
					$the_query->the_post();
					?>
					<?php
					$terms = get_the_terms($post->ID, 'casestudy_categories');
					if ($terms && !is_wp_error($terms)):
						$links = array();
						foreach ($terms as $term) {
							$links[] = $term->slug;
						}
						$tax_links = join(" ", str_replace(' ', '-', $links));
						$tax = strtolower($tax_links);
					else:
						$tax = '';
					endif;
					?>
					<?php
					global $post;
					$post_slug = $post->post_name;
					?>
					<div class="animBtn column csheadingsBox <?php echo $tax ?> <?php echo $counter; ?> <?php if ($counter == 1) {
								echo 'showHover';
							} ?>" data-anim="<?php echo $post_slug ?>">
						<a href="<?php the_permalink(); ?>">
							<p class="">
								<?php the_title(); ?>
							</p>
							<h2 class="">
								<?php the_content(); ?>
							</h2>
						</a>
					</div>
					<?php $counter = $counter + 1; endwhile;
				wp_reset_postdata(); ?>
				<!-- <div class="animBtn column csheadingsBox experience showHover" data-anim="almarai">
					<a href="https://ixdtm.com/projects/theminimalist-site/casestudy/almarai/">
						<p class="">Almarai</p>
						<h2 class="">Delivering a seamless Order Management System to Almarai</h2>
					</a>
				</div>
				<div class="animBtn column csheadingsBox technology" data-anim="tatacliqluxury">
					<a href="https://ixdtm.com/projects/theminimalist-site/casestudy/tata-cliq-luxury/">
						<p class="">Tata Cliq Luxury</p>
						<h2 class="">Building thought leadership for Tata CLiQ Luxury</h2>
					</a>
				</div>
				<div class="animBtn column csheadingsBox marketing" data-anim="meesho">
					<a href="https://ixdtm.com/projects/theminimalist-site/casestudy/meesho/">
						<p class="">Meesho</p>
						<h2 class="">Beating the clock to launch Meesho's mobile-friendly website</h2>
					</a>
				</div>
				<div class="animBtn column csheadingsBox branding" data-anim="dozee">
					<a href="https://ixdtm.com/projects/theminimalist-site/casestudy/dozee/">
						<p class="">DOZEE</p>
						<h2 class="">Adding a dose of Science and technology to Dozee’s design system</h2>
					</a>
				</div>
				<div class="animBtn column csheadingsBox video" data-anim="oneto11">
					<a href="https://ixdtm.com/projects/theminimalist-site/casestudy/one-to-11/">
						<p class="">ONE TO 11</p>
						<h2 class="">Levelling up the web experience for OneTo11</h2>
					</a>
				</div>
				<div class="animBtn column csheadingsBox video" data-anim="tataaig">
					<a href="https://ixdtm.com/projects/theminimalist-site/casestudy/tata-aig/">
						<p class="">Tata AIG</p>
						<h2 class="">Securing the future by simplifying insurance with Tata AIG</h2>
					</a>
				</div>
				<div class="animBtn column csheadingsBox strategy" data-anim="taggd">
					<a href="https://ixdtm.com/projects/theminimalist-site/casestudy/taggd/">
						<p class="">TAGGD</p>
						<h2 class="">Employing intelligent UX to help Taggd excel at digital recruitment</h2>
					</a>
				</div> -->
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>

<script>
	$(document).ready(function () {
		if (window.matchMedia('(min-width: 1024px)').matches) {
			$(".animBtn").hover(function (e) {
				var animid = $(this).data('anim');
				$('.animBtn').removeClass('showHover');
				$(this).addClass('showHover');
				$(".hideAnim").removeClass('showAnim');
				$("." + animid).addClass('showAnim');
			});
		};
	});

	const renderSkeltons = () => {
	document.querySelectorAll(".csheadingsMob").forEach((i) => {
		i.classList.remove("skeleton");
        i.querySelectorAll(".hide-text").forEach((el) => el.classList.remove("hide-text"));
	});
	document.querySelectorAll(".imgDiv").forEach((el)=>{
		el.classList.remove("skeltonImgDiv");
		el.querySelectorAll(".skeltonImg").forEach((el)=> el.classList.remove("skeltonImg"));
	})
  }

  setTimeout(() => {
    renderSkeltons()
  }, 5000)



	$(".countDiv").click(function () {
		// var numItems = $('.show-workItem').length;
		// alert(numItems);
		$(".animBtn.show").removeClass('showHover');
		$(".animBtn.show:first").addClass('showHover');
		$(".animBtn.show a").css("border-bottom", "1px solid #000000");
		$(".animBtn.show:last a").css("border-bottom", "0px");
		$(".csimg .hideAnim.show").css("border-bottom", "1px solid #000000");
		$(".csimg .hideAnim.show:last").css("border-bottom", "0px");
		// $(".animBtn.show-workItem:first a").css( "border-bottom", "10px solid #00FFA3" );
		$(".hideAnim.show").removeClass('showAnim');
		$(".hideAnim.show:first").addClass('showAnim');
	});
</script>

<script>
	filterSelection("all") // Execute the function and show all columns
	function filterSelection(c) {
		var x, i;
		x = document.getElementsByClassName("column");
		if (c == "all") c = "";
		// Add the "show" class (display:block) to the filtered elements, and remove the "show" class from the elements that are not selected
		for (i = 0; i < x.length; i++) {

			w3RemoveClass(x[i], "show");
			if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
		}
	}

	// Show filtered elements
	function w3AddClass(element, name) {
		var i, arr1, arr2;
		arr1 = element.className.split(" ");
		arr2 = name.split(" ");
		for (i = 0; i < arr2.length; i++) {
			if (arr1.indexOf(arr2[i]) == -1) {
				element.className += " " + arr2[i];
			}
		}
	}

	// Hide elements that are not selected
	function w3RemoveClass(element, name) {
		var i, arr1, arr2;
		arr1 = element.className.split(" ");
		arr2 = name.split(" ");
		for (i = 0; i < arr2.length; i++) {
			while (arr1.indexOf(arr2[i]) > -1) {
				arr1.splice(arr1.indexOf(arr2[i]), 1);
			}
		}
		element.className = arr1.join(" ");
	}

	// Add active class to the current button (highlight it)

	var $li = $('#filters li').click(function () {
		$(".countDiv").first().removeClass("active");
		$li.removeClass('selected');
		$(this).addClass('selected');
	});

	//filter js 
	$(document).ready(function () {
		$('.filter-btn-mbl').click(function () {
			$('.caseStudyFilter').addClass("active");
			$('.desktopSection').addClass('overlay');
			$('header').addClass('overlay');
		});
		$('.cross-btn').click(function () {
			$('.caseStudyFilter').removeClass("active");
			$('.desktopSection').removeClass('overlay');
			$('header').removeClass('overlay');
		});
		$('.filterLi').click(function () {
			$('.caseStudyFilter').removeClass("active");
			$('.desktopSection').removeClass('overlay');
			$('header').removeClass('overlay');
		});
	});
</script>