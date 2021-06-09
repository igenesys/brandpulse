<?php
/**
 * brandpulse functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package brandpulse
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'brandpulse_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function brandpulse_setup() {
		add_image_size('3-col', 487,268);

		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on brandpulse, use a find and replace
		 * to change 'brandpulse' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'brandpulse', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'brandpulse' ),
				'menu-2' => esc_html__( 'Footer menu', 'brandpulse' ),
				'menu-3' => esc_html__( 'Footer menu 2', 'brandpulse' ),
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
				'brandpulse_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'brandpulse_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function brandpulse_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'brandpulse_content_width', 640 );
}
add_action( 'after_setup_theme', 'brandpulse_content_width', 0 );
add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'my_css_attributes_filter', 100, 1);
function my_css_attributes_filter($var) {
	return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
}

function get_custom_category($post_id, $cat) {
	$terms = get_the_terms( $post_id, $cat );
	$term = array_shift( $terms );
    return $term->name;
}
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function brandpulse_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'brandpulse' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'brandpulse' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'brandpulse_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function brandpulse_scripts() {
	wp_enqueue_style( 'brandpulse-style', get_stylesheet_uri(), array(), _S_VERSION );
	
	wp_register_style( 'main-style', get_template_directory_uri() .'/css/style.css', array(), _S_VERSION);
	wp_enqueue_style( 'main-style' ); 

	wp_register_style( 'owl-css', get_template_directory_uri() .'/css/owl.carousel.min.css', array(), _S_VERSION);
	wp_enqueue_style( 'owl-css' );  
	
	wp_style_add_data( 'brandpulse-style', 'rtl', 'replace' );

	wp_enqueue_script('jquery');

	wp_enqueue_script( 'brandpulse-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'brandpulse-custom', get_template_directory_uri() . '/js/custom.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'brandpulse-owl', get_template_directory_uri() . '/js/owl.carousel.min.js', array(), _S_VERSION, false );
	wp_enqueue_script( 'brandpulse-aos', get_template_directory_uri() . '/js/aos.js', array(), _S_VERSION, true );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'brandpulse_scripts' );

/**
 * Page builder output
 * Must be called within the loop
*/
function brandpulse_page_builder() {
    if ( have_rows( 'flexible_content' ) ) {
        while (have_rows('flexible_content')) {
            the_row();

            switch (get_row_layout()) {
                case 'bp1_intro_block':
                    get_template_part('template-parts/components/bp1_intro_block');
                    break;
                case 'bp2_latest_cases':
                    get_template_part('template-parts/components/bp2_latest_cases');
                    break;
                case 'bp3_services':
                    get_template_part('template-parts/components/bp3_services');
                    break;
                case 'bp4_image_with_content':
                    get_template_part('template-parts/components/bp4_image_with_content');
					break;
				case 'bp5_3_column_content':
					get_template_part('template-parts/components/bp5_3_column_content');
					break;
				case 'bp6_quote':
					get_template_part('template-parts/components/bp6_quote');
					break;
				case 'bp7_fixed_width_column_images':
					get_template_part('template-parts/components/bp7_fixed_width_column_images');
					break;
				case 'bp8_full_width_column_images':
					get_template_part('template-parts/components/bp8_full_width_column_images');
					break;
				case 'bp9_image_grid':
					get_template_part('template-parts/components/bp9_image_grid');
					break;
				case 'bp10_floating_image':
					get_template_part('template-parts/components/bp10_floating_image');
					break;
				case 'bp11_carousel_slider':
					get_template_part('template-parts/components/bp11_carousel_slider');
					break;
				case 'bp12_intro_column':
					get_template_part('template-parts/components/bp12_intro_column');
					break;
                case 'bp13_fact_block':
					get_template_part('template-parts/components/bp13_fact_block');
					break;
                case 'bp14_cta':
					get_template_part('template-parts/components/bp14_cta');
					break;
					
				case 'bp16_newsletter_from':
					get_template_part('template-parts/components/bp16_newsletter_from');
					break;
                
                case 'bp17_object_image':
					get_template_part('template-parts/components/bp17_object_image');
					break;
					
				case 'bp16_4_column_caption_image':
					get_template_part('template-parts/components/bp16_4_column_caption_image');
					break;
				
				case 'bp17_spacer':
					get_template_part('template-parts/components/bp17_spacer');
					break;
		
            }
        }
    }
}

if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}
if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_sub_page(array(
        'page_title' 	=> 'Cases Listing Page',
		'menu_title'	=> 'Cases Listing Page',
		'menu_slug' 	=> 'cases-listing-page',
        'parent_slug'    => 'edit.php?post_type=cases',
    ));
    
    acf_add_options_sub_page(array(
        'page_title' 	=> 'Nieuws Listing Page',
		'menu_title'	=> 'Nieuws Listing Page',
		'menu_slug' 	=> 'nieuws-listing-page',
        'parent_slug'    => 'edit.php',
	));
	
	acf_add_options_sub_page(array(
        'page_title' 	=> 'Services Listing Page',
		'menu_title'	=> 'Services Listing Page',
		'menu_slug' 	=> 'services-listing-page',
        'parent_slug'    => 'edit.php?post_type=services',
    ));
	acf_add_options_sub_page(array(
        'page_title' 	=> 'Vacancy Listing Page',
		'menu_title'	=> 'Vacancy Listing Page',
		'menu_slug' 	=> 'Vacancy-listing-page',
        'parent_slug'    => 'edit.php?post_type=vacancy',
    ));

}

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

// include post types

include_once 'inc/post-types/people.php';
include_once 'inc/post-types/cases.php';
include_once 'inc/post-types/services.php';
include_once 'inc/post-types/vacancy.php';
include_once 'inc/taxonomies/case-tag.php';
include_once 'inc/taxonomies/case-type.php';
include_once 'inc/taxonomies/vacancy-type.php';

/* Gravity Form Disable Jumping */
add_filter( 'gform_confirmation_anchor', '__return_false' );


/* Gravity Form Error message */

add_filter( 'gform_validation_message', 'change_message', 10, 2 );
function change_message( $message, $form ) {
    return "<div class='validation_error'>Oeps! </br> Het lijkt er op dat nog niet alle gegevens compleet zijn</div>";
}

/* Gravity Form Loade Icon */
add_filter( 'gform_ajax_spinner_url', 'spinner_url', 10, 2 );
function spinner_url( $image_src, $form ) {
		return get_template_directory_uri()."/images/loader.svg";
}
