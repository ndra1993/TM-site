<?php
/**
 * TM-Website functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package TM-Website
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function tm_website_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on TM-Website, use a find and replace
		* to change 'tm-website' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'tm-website', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'tm-website' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'tm_website_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'tm_website_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function tm_website_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'tm_website_content_width', 640 );
}
add_action( 'after_setup_theme', 'tm_website_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function tm_website_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'tm-website' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'tm-website' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'tm_website_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function tm_website_scripts() {
	wp_enqueue_style( 'tm-website-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'tm-website-style', 'rtl', 'replace' );
	
	
	
	wp_enqueue_script( 'tm-website-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'tm_website_scripts' );

/*function load_stylesheets()
{
wp_register_style('main', get_template_directory_uri().'/scss/main.css', array(), 1, 'all');
wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_stylesheets');
add_action('wp_enqueue_scripts', 'add_tm_js');
function add_tm_js()
{
wp_register_script('jquery-min', get_template_directory_uri().'/js/jquery-3.3.1.min.js', array(), 1, 1, 1);
wp_enqueue_script('jquery-min');
wp_register_script('form-js', get_template_directory_uri().'/js/form.js', array(), 1, 1, 1);
wp_enqueue_script('form-js');
}*/
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

//This function prints the JavaScript to the footer
add_action( 'wp_footer', 'redirect_cf7' );
 
function redirect_cf7() {
?>
<script type="text/javascript">
document.addEventListener( 'wpcf7mailsent', function( event ) {
       location = 'http://localhost/wp-tm-site/thank-you/';
}, false );
</script>
<?php
}

//rks
// Custom Post Case Study
register_post_type( 'casestudy', array('labels' => array('name' => __( 'Case Study' ),
	  	'singular_name' => __( 'Case Study' )),
	 	'public' => true,
	 	'has_archive' => true,
	 	'menu_icon' => 'dashicons-format-image',
	 	'type' => 'select',
		'supports'=> array( 'title', 'thumbnail', 'page-attributes', 'editor'),
	)
);


// create custom taxnomies
add_action( 'init', 'create_custom_taxonomy');
function create_custom_taxonomy() {
	$labels = array(
    	'name'              => __( 'Casestudy Categories'),
	    'singular_name'     => __( 'Casestudy'),
	    'search_items'      => __( 'Search CasestudyCategories'),
	    'all_items'         => __( 'All Casestudy Categories'),
	    'parent_item'       => __( 'Parent Casestudy Categories'),
	    'edit_item'         => __( 'Edit Casestudy Categories'),
	    'update_item'       => __( 'Update Casestudy Categories'),
	    'add_new_item'      => __( 'Add New Casestudy Categories'),
	    'new_item_name'     => __( 'New casestudy Categories Name'),
	    'menu_name'         => __( 'Casestudy Categories'),
  	);

  	register_taxonomy('casestudy_categories',array('casestudy'), array(
  		'hierarchical'  => true,
		'show_admin_column' => true,
    	'labels'        => $labels,
    	'show_ui'       => true,
    	'query_var'     => true,
    	'rewrite'       => array( 'slug' => 'casestudy_categories' ),
  	));

	// create custom taxnomies of Hall of Fame
	


}


// Script for getting academy posts
add_action('wp_ajax_my_ajax_filter_academy', 'my_ajax_filter_academy_callback');
add_action('wp_ajax_nopriv_my_ajax_filter_academy', 'my_ajax_filter_academy_callback');
function my_ajax_filter_academy_callback() {
    
    $academy_search 	= sanitize_text_field($_POST['academy_search']);
    $academy 			= sanitize_text_field($_POST['academy']);
    $paged 				= sanitize_text_field($_POST['paged']);
	$cur_page 			= $paged;
	$paged -= 1;
	$per_page 	= 9;
	$previous_btn = true;
	$next_btn = true;
	$start = $paged * $per_page;


    if($academy != ''){
    	$tax_query[] = array(
            'taxonomy' => 'casestudy_categories',
            'field' => 'slug',
            'terms' => $academy
        );
    }
    if(empty($academy)){
    	$args = array(
	        'post_type' => 'casestudy',
	        'post_status' => 'publish',
	        'posts_per_page' => $per_page, 
	        'offset' => $start,
	        's' => $academy_search
	    );
	    $all_postb = new WP_Query( array( 'post_type' => 'casestudy', 's' => $academy_search, 'post_status' => 'publish', 'posts_per_page' => -1) );
    }else{
    	$args = array(
	        'post_type' => 'casestudy',
	        'post_status' => 'publish',
	        'posts_per_page' => $per_page, 
	        'offset' => $start,
	        's' => $academy_search,
	        'tax_query' => $tax_query
	    );
	    $all_postb = new WP_Query( array( 'post_type' =>'casestudy', 's' => $academy_search, 'post_status' => 'publish', 'posts_per_page' => -1, 'tax_query' => $tax_query) );
    }
    
	while ( $all_postb->have_posts() ){ 
		$all_postb->the_post();
	}
	
    $academy_query = new WP_Query( $args );
    if ( $academy_query->have_posts() ) {
		?>
		<div class="grid" id="librarCardHolder">
			<?php
			while ( $academy_query->have_posts() ) { 
				$academy_query->the_post();
				?>
				<div class="work-one grid-item">
					<a href="<?php the_permalink();?>">
						<div class="fliterBg" style="background-color: <?php echo get_field('listing_background_color'); ?>;">
							<div class="image-container">
								<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ) ?>" class="speaker_new">
							</div>
							<div class="des">
								<img src="<?php bloginfo('template_directory'); ?>/images/play_icon_new.png" class="play_icon_new">
							</div>
						</div>
						<div class="label-text">
							<p class="font24 fontW500 colorGrey"><?php the_title(); ?></p>
							<span class="font16 fontW400 colorLightGrey"><?php echo get_field('course_duration'); ?></span>
						</div>
					</a>
				</div>
				<?php
			}

			$no_of_paginations = ceil($all_postb->post_count / $per_page);
			if ($cur_page >= 4) {
				$start_loop = $cur_page - 1;
				if ($no_of_paginations > $cur_page + 1)
					$end_loop = $cur_page + 1;
				else if ($cur_page <= $no_of_paginations && $cur_page > $no_of_paginations - 6) {
					$start_loop = $no_of_paginations - 6;
					$end_loop = $no_of_paginations;
				} else {
					$end_loop = $no_of_paginations;
				}
			} else {
				$start_loop = 1;
				if ($no_of_paginations > 4)
					$end_loop = 4;
				else
					$end_loop = $no_of_paginations;
			}
			?>
		</div>
		<?php
		// Pagination Buttons
		if($no_of_paginations != 1){    
		$pag_container = "
		<div class='academy-pagination-link' id='pagination'>
			<ul>";
				if ($previous_btn && $cur_page > 1) {
					$pre = $cur_page - 1;
					if($pre > 1){
						$pag_container .= "<li p='1' class='active'><a href='javascript:void(0)'><<</a></li>";
					}
					$pag_container .= "<li p='$pre' class='active'><a href='javascript:void(0)'><</a></li>";
					
				} else if ($previous_btn) {
					if($pre == 1){
						
						$pag_container .= "<li p='$pre' class='active'><a href='javascript:void(0)'><</a></li>";
					}
				}
				for ($i = $start_loop; $i <= $end_loop; $i++) {
				if ($cur_page == $i)
					$pag_container .= "<li p='$i' class = 'selected' ><a href='javascript:void(0)'>{$i}</a></li>";
				else
					$pag_container .= "<li p='$i' class='active'><a href='javascript:void(0)'>{$i}</a></li>";
				}
				if ($next_btn && $cur_page < $no_of_paginations) {
					$nex = $cur_page + 1;
					$pag_container .= "<li p='$nex' class='active'><a href='javascript:void(0)'>></a></li>";
					if($pre < ($no_of_paginations-2)){
						$pag_container .= "<li p='$no_of_paginations' class='active'><a href='javascript:void(0)'>>></a></li>";
					}

				} else if ($»_btn) {
					$pag_container .= "<li class='inactive'><a href='javascript:void(0)'>></a></li>";
				}
					$pag_container = $pag_container . "
			</ul>
		</div>";
			echo '<div class = "pagination-nav">' . $pag_container . '</div>';
		}
    	wp_reset_query();
    }else{
    	?>
    	<!-- Search Text Error -->
    	<div class="no_contet"><h3 class="font36 fontW500 colorGrey">Uh, oh! There are no results matching your search.</h3></div>
    	<?php
    }
    wp_die();
}
//rks