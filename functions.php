<?php
/**
 * niwas-resort-hotel functions and definitions
 *
 * 
 * @subpackage niwas-resort-hotel
 * @since 1.0
 */

function niwas_resort_hotel_setup() {
	
	load_theme_textdomain( 'niwas-resort-hotel', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'woocommerce' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-background', $defaults = array(
    'default-color'          => '',
    'default-image'          => '',
    'default-repeat'         => '',
    'default-position-x'     => '',
    'default-attachment'     => '',
    'wp-head-callback'       => '_custom_background_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => ''
	));

	add_image_size( 'niwas-resort-hotel-featured-image', 2000, 1200, true );

	add_image_size( 'niwas-resort-hotel-thumbnail-avatar', 100, 100, true );

	$GLOBALS['content_width'] = 525;
	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'niwas-resort-hotel' ),
	) );

	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Add theme support for Custom Logo.
	add_theme_support( 'custom-logo', array(
		'width'       => 250,
		'height'      => 250,
		'flex-width'  => true,
	) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/*
	 * This theme styles the visual editor to resemble the theme style,
	 * specifically font, colors, and column width.
 	 */
	add_editor_style( array( 'assets/css/editor-style.css', niwas_resort_hotel_fonts_url() ) );

	// Theme Activation Notice
	global $pagenow;

	if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
		add_action( 'admin_notices', 'niwas_resort_hotel_activation_notice' );
	}

}
add_action( 'after_setup_theme', 'niwas_resort_hotel_setup' );

// Notice after Theme Activation
function niwas_resort_hotel_activation_notice() {
	echo '<div class="notice notice-success is-dismissible start-notice">';
	echo '<h3>'. esc_html__( 'Welcome to Luzuk!!', 'niwas-resort-hotel' ) .'</h3>';
	echo '<p>'. esc_html__( 'Thank you for choosing Niwas Resort Hotel theme. It will be our pleasure to have you on our Welcome page to serve you better.', 'niwas-resort-hotel' ) .'</p>';
	echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=niwas_resort_hotel_guide' ) ) .'" class="button button-primary">'. esc_html__( 'GET STARTED', 'niwas-resort-hotel' ) .'</a></p>';
	echo '</div>';
}

function niwas_resort_hotel_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Blog Sidebar', 'niwas-resort-hotel' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'niwas-resort-hotel' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 2', 'niwas-resort-hotel' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'niwas-resort-hotel' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Sidebar 3', 'niwas-resort-hotel' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Add widgets here to appear in your pages and posts', 'niwas-resort-hotel' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<div class="widget_container"><h3 class="widget-title">',
		'after_title'   => '</h3></div>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 1', 'niwas-resort-hotel' ),
		'id'            => 'footer-1',
		'description'   => __( 'Add widgets here to appear in your footer.', 'niwas-resort-hotel' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 2', 'niwas-resort-hotel' ),
		'id'            => 'footer-2',
		'description'   => __( 'Add widgets here to appear in your footer.', 'niwas-resort-hotel' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 3', 'niwas-resort-hotel' ),
		'id'            => 'footer-3',
		'description'   => __( 'Add widgets here to appear in your footer.', 'niwas-resort-hotel' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Footer 4', 'niwas-resort-hotel' ),
		'id'            => 'footer-4',
		'description'   => __( 'Add widgets here to appear in your footer.', 'niwas-resort-hotel' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

}
add_action( 'widgets_init', 'niwas_resort_hotel_widgets_init' );

function niwas_resort_hotel_fonts_url(){
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i';
	$font_family[] = 'Lato:100,100i,300,300i,400,400i,700,700i,900,900i';

	$query_args = array(
		'family'	=> rawurlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

//Enqueue scripts and styles.
function niwas_resort_hotel_scripts() {
	// Add custom fonts, used in the main stylesheet.
	wp_enqueue_style( 'niwas-resort-hotel-fonts', niwas_resort_hotel_fonts_url(), array(), null );
	
	//Bootstarp 
	wp_enqueue_style( 'bootstrap-css', esc_url(get_template_directory_uri()).'/assets/css/bootstrap.css' );
	
	// Theme stylesheet.
	wp_enqueue_style( 'niwas-resort-hotel-basic-style', get_stylesheet_uri() );

	// Load the Internet Explorer 9 specific stylesheet, to fix display issues in the Customizer.
	if ( is_customize_preview() ) {
		wp_enqueue_style( 'niwas-resort-hotel-ie9', get_theme_file_uri( '/assets/css/ie9.css' ), array( 'niwas-resort-hotel-style' ), '1.0' );
		wp_style_add_data( 'niwas-resort-hotel-ie9', 'conditional', 'IE 9' );
	}
	// Load the Internet Explorer 8 specific stylesheet.
	wp_enqueue_style( 'niwas-resort-hotel-ie8', get_theme_file_uri( '/assets/css/ie8.css' ), array( 'niwas-resort-hotel-style' ), '1.0' );
	wp_style_add_data( 'niwas-resort-hotel-ie8', 'conditional', 'lt IE 9' );

	//font-awesome
	wp_enqueue_style( 'font-awesome-css', esc_url(get_template_directory_uri()).'/assets/css/fontawesome-all.css' );

	require get_parent_theme_file_path( '/lz-custom-style.php' );
	wp_add_inline_style( 'niwas-resort-hotel-basic-style',$niwas_resort_hotel_custom_style );

	// Load the html5 shiv.
	wp_enqueue_script( 'html5-js', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
	wp_script_add_data( 'html5-js', 'conditional', 'lt IE 9' );

	wp_enqueue_script( 'niwas-resort-hotel-navigation-jquery', get_theme_file_uri( '/assets/js/navigation.js' ), array( 'jquery' ), '2.1.2', true );
	wp_enqueue_script( 'bootstrap-js', esc_url(get_template_directory_uri()) . '/assets/js/bootstrap.js', array('jquery') );
	wp_enqueue_script( 'jquery-superfish', esc_url(get_template_directory_uri()) . '/assets/js/jquery.superfish.js', array('jquery') ,'',true);

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'niwas_resort_hotel_scripts' );

function niwas_resort_hotel_front_page_template( $template ) {
	return is_home() ? '' : $template;
}
add_filter( 'frontpage_template',  'niwas_resort_hotel_front_page_template' );

function niwas_resort_hotel_sanitize_dropdown_pages( $page_id, $setting ) {
  // Ensure $input is an absolute integer.
  $page_id = absint( $page_id );
  // If $page_id is an ID of a published page, return it; otherwise, return the default.
  return ( 'publish' == get_post_status( $page_id ) ? $page_id : $setting->default );
}

function niwas_resort_hotel_sanitize_choices( $input, $setting ) {
    global $wp_customize; 
    $control = $wp_customize->get_control( $setting->id ); 
    if ( array_key_exists( $input, $control->choices ) ) {
        return $input;
    } else {
        return $setting->default;
    }
}

//footer Link
define('NIWAS_RESORT_HOTEL_LIVE_DEMO',__('https://www.luzukdemo.com/demo/niwas-resort-hotel/','niwas-resort-hotel'));
define('NIWAS_RESORT_HOTEL_PRO_DOCS',__('https://www.luzukdemo.com/docs/niwas-resort-hotel/','niwas-resort-hotel'));
define('NIWAS_RESORT_HOTEL_BUY_NOW',__('https://www.luzuk.com/product/resort-hotel-wordpress-theme/','niwas-resort-hotel'));
define('NIWAS_RESORT_HOTEL_SUPPORT',__('https://wordpress.org/support/theme/niwas-resort-hotel/','niwas-resort-hotel'));
define('NIWAS_RESORT_HOTEL_CREDIT',__('https://www.luzuk.com/themes/free-hotel-wordpress-theme/','niwas-resort-hotel'));

if ( ! function_exists( 'niwas_resort_hotel_credit' ) ) {
	function niwas_resort_hotel_credit(){
		echo "<a href=".esc_url(NIWAS_RESORT_HOTEL_CREDIT)." target='_blank'>".esc_html__('Hotel WordPress Theme','niwas-resort-hotel')."</a>";
	}
}

/* Excerpt Limit Begin */
function niwas_resort_hotel_string_limit_words($string, $word_limit) {
	$words = explode(' ', $string, ($word_limit + 1));
	if(count($words) > $word_limit)
	array_pop($words);
	return implode(' ', $words);
}

// Change number or products per row to 3
add_filter('loop_shop_columns', 'niwas_resort_hotel_loop_columns');
	if (!function_exists('niwas_resort_hotel_loop_columns')) {
		function niwas_resort_hotel_loop_columns() {
	return 3; // 3 products per row
	}
}

function niwas_resort_hotel_sanitize_phone_number( $phone ) {
	return preg_replace( '/[^\d+]/', '', $phone );
}

function niwas_resort_hotel_sanitize_checkbox( $input ) {
	// Boolean check 
	return ( ( isset( $input ) && true == $input ) ? true : false );
}

function niwas_resort_hotel_sanitize_float( $input ) {
    return filter_var($input, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
}

/* Breadcrumb Begin */
function niwas_resort_hotel_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
			echo esc_url(home_url());
		echo '">';
			bloginfo('name');
		echo "</a> ";
		if (is_category() || is_single()) {
			echo "&nbsp;>&nbsp;";
			the_category(', ');
			if (is_single()) {
				echo "&nbsp;>&nbsp;";
				echo " <span>";
					the_title();
				echo "</span>";
			}
		} elseif (is_page()) {
			echo "&nbsp;>&nbsp;";
			echo " <span>";
				the_title();
			echo "</span> ";
		}
	}
}

require get_parent_theme_file_path( '/inc/custom-header.php' );

require get_parent_theme_file_path( '/inc/template-tags.php' );

require get_parent_theme_file_path( '/inc/template-functions.php' );

require get_parent_theme_file_path( '/inc/customizer.php' );

require get_parent_theme_file_path( '/inc/getting-started/getting-started.php' );