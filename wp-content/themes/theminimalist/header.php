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
		<div class="headerContent wrapper">

			<?php if (is_front_page()) { ?>
				<!-- Homepage Header -->
				<div class="logoBox">
					<a href="<?php echo site_url('/homepage-two/'); ?>">
						<img src="<?php bloginfo('template_directory'); ?>/images/tm-logo.svg" alt="">
					</a>
				</div>
			<?php } else { ?>
				<div class="logoBox titleBox">
					<a class="backArrow" onclick="GoBackWithRefresh();return false;"><img src="<?php bloginfo('template_directory'); ?>/images/arrow-title.svg" alt="Back Arrow"></a>
					<h3 class="fontW800 font30 fontPoppins colorBlack">
						
						<?php echo the_title() ?>
					</h3>
				</div>
			<?php } ?>

			<div class="homeBox">
				<div class="headerCta">
					<a href="<?php echo site_url('/case-study-listing/'); ?>" class=" connectCta connectCtatwo">Case Studies</a>
				</div>
				<div class="headerCta">
					<a href="<?php echo site_url('/forms/'); ?>" class="connectCta">Let's Invent</a>
				</div>
				<div class="hamburgerMenu">
					<input type="checkbox" id="menu" name="menu" class="m-menu__checkbox">
					<label class="m-menu__toggle" for="menu">
						<img src="<?php bloginfo('template_directory'); ?>/images/hamburger-icon.svg">
					</label>


					<div class="m-menu">
						<div class="m-menu__header">
							<span class="font32 fontW800">Explore</span>
							<label class="m-menu__toggle crossMenuicon" for="menu">
								<img src="<?php bloginfo('template_directory'); ?>/images/cross-icon.svg">
							</label>

						</div>
						<ul class="menu__list">
							<li class="menu_sub"><a href="<?php echo site_url('/homepage-two/'); ?>" class="menu__item font80">Home </a>
							</li>
							<li class="menu_sub"><a href="<?php echo site_url('/case-study-listing/'); ?>" class="menu__item font80">Case Studies </a>
							</li>
							<li class="menu_sub"><a href="#" class="menu__item font80">Services </a>
							</li>
							<li class="menu_sub"><a href="<?php echo site_url('/forms/'); ?>" class="menu__item font80">Scope My Project </a>
							</li>
							<li class="menu_sub"><a href="<?php echo site_url('/forms/'); ?>" class="menu__item font80">Career </a>
							</li>
							<li class="menu_sub"><a href="#" class="menu__item font80">Blogs </a>
							</li>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</header>