<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TM-Website
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>The Minimalist</title>
	<link href="<?php echo get_template_directory_uri(); ?>/scss/main.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
	<!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/site.css"> -->
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js"></script>

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css'>
	<script src="<?php echo get_template_directory_uri(); ?>/js/WOW.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/form.js"></script>
	<script type="text/javascript">
		var site_url = "<?php echo get_site_url(); ?>";
	</script>


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>


	

	<header>
		<div class="headerContent">
			

			<?php if (is_front_page()) { ?>
				<!-- Homepage Header -->
				<div class="logoBox">
					<a href="<?php echo site_url('/homepage-two/'); ?>">
						<img src="<?php bloginfo('template_directory'); ?>/images/tm-logo.svg" alt="">
					</a>
				</div>
			<?php } elseif (is_page('enquiries-careers')) { ?>
				<!-- Form Page Header -->
				<div class="logoBox">
					<a href="<?php echo site_url(''); ?>">
						<img src="<?php bloginfo('template_directory'); ?>/images/tm-logo.svg" alt="">
					</a>
				</div>
			<?php } elseif (is_page ('blogs')||is_page('case-study')||is_page('case-study-details')||is_page('privacy-policy')||is_page('our-clients')) { ?>
				<div class="logoBox titleBox">
					<a class="backArrow" onclick="GoBackWithRefresh();return false;"><img src="<?php bloginfo('template_directory'); ?>/images/arrow-title.svg" alt="Back Arrow"></a>
					<h3 class="fontW800 font30 fontPoppins colorBlack" style="text-transform:capitalize;"><?php the_title(); ?></h3>
				</div>
			<?php } else{ ?>
			<div class="logoBox titleBox">
				<a class="backArrow" onclick="GoBackWithRefresh();return false;"><img src="<?php bloginfo('template_directory'); ?>/images/arrow-title.svg" alt="Back Arrow"></a>
				<h3 class="fontW800 font30 fontPoppins colorBlack" style="text-transform:capitalize;">
					<!-- <?php
                            $terms = get_the_category( $post->ID, 'categories' );
                            $links = array();
                            foreach ( $terms as $term ) {
                                $links[] = $term->slug;
                            }
                            
                            
                             $tax_links = str_replace('-', ' ', $links[0]);
//                             echo $links[0];
                           echo $tax_links;
                        ?> -->
				</h3>
			</div>

			<?php } ?>

			<div class="homeBox">
<!-- 				<div class="headerCta headerActive">
					<a href="<?php echo site_url('/case-study-listing/'); ?>" class="connectCta connectCtatwo">Case Studies</a>
				</div> -->
				<div class="headerCta headerActive active">
					<a href="<?php echo site_url('/enquiries-careers/'); ?>" class="connectCta">Let's Invent</a>
				</div>
				<div class="hamburgerMenu headerActive">
					<input type="checkbox" id="menu" name="menu" class="m-menu__checkbox">
					<label class="m-menu__toggle" for="menu">
						<img src="<?php bloginfo('template_directory'); ?>/images/hamburger-icon.svg">
					</label>


					<div class="m-menu">
						<div class="m-menu__header">
							<a class="homeIcon" href="<?php echo site_url('/homepage-two/'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/home-icon.png"></a>
							<label class="m-menu__toggle crossMenuicon" for="menu">
								<img src="<?php bloginfo('template_directory'); ?>/images/cross-icon.svg">
							</label>

						</div>
						<ul class="menu__list">
							<li class="menu_sub"><a href="<?php echo site_url('/case-study-listing/'); ?>" class="menu__item font64">Case Studies </a>
							</li>
							<li class="menu_sub"><a href="<?php echo site_url('/service/'); ?>" class="menu__item font64">Services </a>
							</li> 
							<li class="menu_sub"><a href="<?php echo site_url('/enquiries-careers/?signup-tab-content'); ?>" class="menu__item font64">Scope My Project </a>
							</li>
							<li class="menu_sub"><a href="<?php echo site_url('/enquiries-careers/?login-tab-content'); ?>" class="menu__item font64">Careers </a>
							</li>
							<li class="menu_sub"><a href="<?php echo site_url('/homepage-two/'); ?>" class="menu__item font64">Culture </a>
							</li>
							<li class="menu_sub"><a href="<?php echo site_url('/blogs/'); ?>" class="menu__item font64">Blogs </a>
							</li>

						</ul>
<!-- 						<div class="footerLinksmbl">
							<div class="Linksmblft">
								<a href="<?php echo site_url('/privacy-policy/'); ?>" class="fontPoppins fontW600 font14 colorBlack">Privacy Policy</a>
							</div>
							<div class="Linksmblft">
								<a href="#" class="fontPoppins fontW600 font14 colorBlack">Terms Of Use</a>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
	</header>

	