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
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/site.css">
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-3.3.1.min.js"></script>

	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri();?>/js/jquery.min.js"></script>
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