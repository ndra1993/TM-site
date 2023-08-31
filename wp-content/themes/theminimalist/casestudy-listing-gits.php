<?php get_header(); /*Template Name: casestudy listing Gits*/
$homepage_id = get_option('page_on_front');
?>

<style>
	::-webkit-scrollbar {
		width: 0;
		/* Remove scrollbar space */
		background: transparent;
		/* Optional: just make scrollbar invisible */
	}

	/* Optional: show position indicator in red */
	::-webkit-scrollbar-thumb {
		background: #FF0000;
	}

	#style-1::-webkit-scrollbar-track {
		background-color: #ffffff !important;
		-webkit-box-shadow: none !important;
	}

	.csheadingsBox.showHover a {
		border-bottom: none !important;
	}

	.csheadingsBox.showHover a h2 {
		font-weight: 800;
	}

	.csheadingsBox.showHover a p {
		font-weight: 800;
	}

	.desktopSection .casestudyContainerBox .containerinnerBox .csheadings .animBtn a:hover {
		border-bottom: none !important;
	}

	.casestudyContainerBox {
		height: calc(100vh - 210px);
		overflow: hidden;
	}

	.containerinnerBox {
		display: flex;
		flex-flow: wrap;
		height: 100%;
	}

	.hideAnim {
		opacity: 0;
		transition: all .5s ease-in-out;
	}

	.showAnim {
		opacity: 1;
		transition: all .8s ease-in-out;
	}

	.csimg {
		position: relative;
		width: 50%;
		height: 100%;
	}

	.csheadings {
		position: relative;
		width: 50%;
		height: 100%;
		overflow-y: scroll;
	}

	#style-1::-webkit-scrollbar-track {
		-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
		border-radius: 0px;
		background-color: #F5F5F5;
	}

	#style-1::-webkit-scrollbar {
		width: 8px;
		background-color: #00FFA3;
	}

	#style-1::-webkit-scrollbar-thumb {
		border-radius: 10px;
		-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
		background-color: #00FFA3;
	}

	.csheadingsBox {
		transition: 0.5s all ease-in-out;
		position: relative;
	}

	.csheadingsBox a {
		text-decoration: none;
		display: block;
		position: relative;
		padding: 35px 0px;
		margin: 0px 85px;
		border-bottom: 1px solid #000000;
	}

	.csheadingsBox:last-child a{
		border-bottom: 0px;
	}
		
	.csheadingsBox p {
		font-size: 14px;
		line-height: 14px;
		letter-spacing: 0.05em;
		text-transform: uppercase;
		color: #000000;
		font-weight: 600;
		margin-bottom: 15px;
	}

	.csheadingsBox h2 {
		font-weight: 600;
		font-size: 24px;
		line-height: 30px;
		color: #000000;
	}

	.csheadingsBox.showHover {
		border-bottom: 10px solid #00FFA3;
	}

	.csheadingsBox.showHover a {
		padding-top: 50px;
		padding-bottom: 50px;
		transition: 0.5s all ease-in-out;
		border-bottom: 0px;
	}

	.csheadingsBox.showHover p {
		font-size: 14px;
		transition: 0.5s all ease-in-out;
		line-height: 14px !important;
	}

	.csheadingsBox.showHover h2 {
		font-size: 30px;
		line-height: 36px;
		transition: 0.5s all ease-in-out;
	}

	.csimgBox {
		position: absolute;
		width: 100%;
		height: 100%;
	}

	.csimgBox img {
		width: 100%;
		height: 100%;
		object-fit: cover;
		object-position: center;
	}

	.csheadingsMob {
		display: none;
	}

	.caseStudyFilter #filters li {
		padding: 7px 15px;
		background: #EEEEEE;
		border-radius: 10px;
		margin-right: 10px;
		font-size: 12px;
		color: #000;
	}

	.works-filter {
		display: inline-block;
		text-decoration: none;
		transition: all .35s ease;
	}

	.works-filter:hover {
		cursor: pointer;
		transition: all .35s ease;
	}

	#filters li.selected {
		background: #000 !important;
		color: #fff !important;
	}

	.filter-btn-mbl {
		display: none;
	}

	close-active {
		color: white;
	}

	.workItem {
		display: none;
	}

	.show-workItem {
		display: block;
		transition: all .35s ease;
	}

	.filter {
		text-decoration: none;
	}

	.heading-div {
		display: none;
	}

	/* .active .filter{background: #000;color: #EEEEEE;} */

	.column {
		display: none;
	}

	.show {
		display: block;
	}

	@media screen and (max-width: 1800px) {
		.csheadingsBox a {
			padding: 32px 0px;
			margin: 0px 75px;
		}

		.csheadingsBox p {
			font-size: 12px;
			line-height: 12px;
		}

		.csheadingsBox h2 {
			font-size: 20px;
			line-height: 26px;
		}

		.csheadingsBox.showHover a {
			padding-top: 40px;
			padding-bottom: 40px;
		}

		.csheadingsBox.showHover h2 {
			font-size: 26px;
			line-height: 32px;
		}
	}

	@media screen and (max-width: 1600px) {
		.casestudyContainerBox {
			height: calc(100vh - 192px);
		}

		.csheadingsBox a {
			padding: 28px 0px;
			margin: 0px 65px;
		}

		.csheadingsBox.showHover a {
			padding-top: 35px;
			padding-bottom: 35px;
		}
	}

	@media screen and (max-width: 1400px) {
		.casestudyContainerBox {
			height: calc(100vh - 165px);
		}

		.csheadingsBox a {
			padding: 24px 0px;
			margin: 0px 55px;
		}

		.csheadingsBox h2 {
			font-size: 18px;
			line-height: 24px;
		}

		.csheadingsBox.showHover a {
			padding-top: 35px;
			padding-bottom: 35px;
		}

		.csheadingsBox.showHover h2 {
			font-size: 24px;
			line-height: 30px;
		}
	}

	@media screen and (max-width: 1024px) {

		.csimgBox .imgDiv.skeltonImgDiv {
			background: #e2e2e2;
			width: 100%;
			height: 400px;
		}

		.csimgBox .imgDiv.skeltonImgDiv .skeltonImg {
			display: none;
		}

		.csimgBox .imgDiv.skeltonImgDiv::after {
			content: "";
			position: relative;
			z-index: 10;
			background: #e2e2e2;
		}

		.csheadingsMob.skeleton .hide-text {
			background: #e2e2e2;
			color: transparent;
			position: relative;
			overflow: hidden;
		}

		.csheadingsMob.skeleton .hide-text::before {
			content: "";
			position: absolute;
			left: 0%;
			top: 0;
			height: 100%;
			width: 50px;
			background: linear-gradient(to right, #e2e2e2 25%, #d5d5d5 50%, #e2e2e2 100%);
			animation-name: gradient-animation;
			animation-duration: 2s;
			animation-iteration-count: infinite;
			filter: blur(5px);
		}

		.hideAnim a {
			text-decoration: none;
		}
		
		.caseStudyFilter.active {
			transition: 0.5s all ease-in-out;
			bottom: 0;
		}

		.desktopSection {
			position: relative;
		}

		header.overlay::after {
			content: "";
			display: block;
			position: fixed;
			width: 100%;
			height: 100%;
			top: 0;
			bottom: 0;
			background-color: black;
			opacity: 0.5;
			transition: 0.5s all ease-in-out;
		}

		.desktopSection.overlay::after {
			content: "";
			display: block;
			position: fixed;
			width: 100%;
			height: 100%;
			top: 0;
			bottom: 0;
			background-color: black;
			opacity: 0.5;
			transition: 0.5s all ease-in-out;
		}

		/* .caseStudyFilter .overlayWhite {
			background-color: transparent;
		} */

		.heading-div .select-filter-heading {
			font-size: 24px;
			line-height: 30px;
		}

		.csheadingsMob p {
			text-decoration: none;
			color: black;
		}

		.csheadingsMob h2 {
			text-decoration: none;
			color: black;
		}

		.caseStudyFilter {
			position: fixed;
			width: 100%;
			transition: 1s all ease-in-out;
			bottom: -100%;
			z-index: 10;
			background: #fff;
		}

		.caseStudyFilter #filters {
			display: flex;
			flex-flow: wrap;
		}

		.heading-div {
			display: flex;
			margin-bottom: 10px;
		}

		.caseStudyFilter .heading-div .cross-btn {
			float: right;
			border: none;
			background: transparent;
			margin-left: auto;

		}

		.desktopSection .caseStudyFilter #filters li {
			padding: 15px 20px;
		}

		.desktopSection .caseStudyFilter #filters li {
			border-radius: 40px;
		}

		.desktopSection .caseStudyFilter {
			padding: 28px 24px;
		}

		.caseStudyFilter #filters li {
			margin: 16px 4px;
		}


		.filter-btn-mbl {
			display: block;
			position: fixed;
			bottom: 0;
			right: 10px;
			cursor: pointer;
			z-index: 1;
		}

		.filter-btn-mbl .badge {
			background: #00FFA3;
			border-radius: 50%;
			padding: 3px;
			font-size: 10px;
			line-height: 11px;
			text-align: center;
			position: absolute;
			right: 25px;
			top: 10px;
			font-weight: 600;
		}

		.casestudyContainerBox {
			height: auto;
			overflow: scroll;
		}

		.csimg {
			width: 100%;
		}

		.csimgBox {
			position: relative;
			opacity: 1;
			padding: 25px;

		}

		.imgDiv {
			margin-bottom: 20px;
			height: 100%;
			width: 100%;
		}

		.csimgBox:not(:last-child) {
			border-bottom: 1px solid #000000;
		}

		.csheadingsMob {
			display: block;
		}

		.csheadingsMob p {
			margin-bottom: 10px;
		}

		.csheadings {
			display: none;
		}

		.csheadingsMob p {
			font-weight: 800;
			font-size: 13px;
		}

		.csheadingsMob h2 {
			font-weight: 800;
			font-size: 24px;
		}
	}

	@media screen and (max-width:680px) {
		.csimgBox .imgDiv.skeltonImgDiv {
			height: 364px;
		}
		.caseStudyFilter #filters li {
			margin: 10px 4px;
		}

		/* .csheadingsMob p {
			font-weight: 800;
			font-size: 13px;
		}

		.csheadingsMob h2 {
			font-weight: 800;
			font-size: 24px;
		} */
	}
</style>

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

   // The PerformanceTiming interface represents timing-related performance information for the given page.
	var perfData = window.performance.timing, 
    EstimatedTime = -(perfData.loadEventEnd - perfData.navigationStart),
    time = parseInt((EstimatedTime/1000)%60)*100;
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
  }, time)



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