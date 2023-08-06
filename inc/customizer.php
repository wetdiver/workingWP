<?php
/**
 * niwas-resort-hotel: Customizer
 *
 * @subpackage niwas-resort-hotel
 * @since 1.0
 */

function niwas_resort_hotel_customize_register( $wp_customize ) {

	$wp_customize->add_setting('niwas_resort_hotel_logo_padding',array(
		'sanitize_callback'	=> 'esc_html'
	));
	$wp_customize->add_control('niwas_resort_hotel_logo_padding',array(
		'label' => __('Logo Padding','niwas-resort-hotel'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('niwas_resort_hotel_logo_top_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'niwas_resort_hotel_sanitize_float'
	));
	$wp_customize->add_control('niwas_resort_hotel_logo_top_padding',array(
		'type' => 'number',
		'description' => __('Top','niwas-resort-hotel'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('niwas_resort_hotel_logo_bottom_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'niwas_resort_hotel_sanitize_float'
	));
	$wp_customize->add_control('niwas_resort_hotel_logo_bottom_padding',array(
		'type' => 'number',
		'description' => __('Bottom','niwas-resort-hotel'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('niwas_resort_hotel_logo_left_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'niwas_resort_hotel_sanitize_float'
	));
	$wp_customize->add_control('niwas_resort_hotel_logo_left_padding',array(
		'type' => 'number',
		'description' => __('Left','niwas-resort-hotel'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('niwas_resort_hotel_logo_right_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'niwas_resort_hotel_sanitize_float'
	));
	$wp_customize->add_control('niwas_resort_hotel_logo_right_padding',array(
		'type' => 'number',
		'description' => __('Right','niwas-resort-hotel'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('niwas_resort_hotel_show_site_title',array(
		'default' => true,
		'sanitize_callback'	=> 'niwas_resort_hotel_sanitize_checkbox'
	));
	$wp_customize->add_control('niwas_resort_hotel_show_site_title',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Title','niwas-resort-hotel'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('niwas_resort_hotel_site_title_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'niwas_resort_hotel_sanitize_float'
	));
	$wp_customize->add_control('niwas_resort_hotel_site_title_font_size',array(
		'type' => 'number',
		'label' => __('Site Title Font Size','niwas-resort-hotel'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_setting('niwas_resort_hotel_show_tagline',array(
		'default' => true,
		'sanitize_callback'	=> 'niwas_resort_hotel_sanitize_checkbox'
	));
	$wp_customize->add_control('niwas_resort_hotel_show_tagline',array(
		'type' => 'checkbox',
		'label' => __('Show / Hide Site Tagline','niwas-resort-hotel'),
		'section' => 'title_tagline'
	));

	$wp_customize->add_setting('niwas_resort_hotel_site_tagline_font_size',array(
		'default' => '',
		'sanitize_callback'	=> 'niwas_resort_hotel_sanitize_float'
	));
	$wp_customize->add_control('niwas_resort_hotel_site_tagline_font_size',array(
		'type' => 'number',
		'label' => __('Site Tagline Font Size','niwas-resort-hotel'),
		'section' => 'title_tagline',
	));

	$wp_customize->add_panel( 'niwas_resort_hotel_panel_id', array(
		'priority' => 10,
		'capability' => 'edit_theme_options',
		'theme_supports' => '',
		'title' => __( 'Theme Settings', 'niwas-resort-hotel' ),
		'description' => __( 'Description of what this panel does.', 'niwas-resort-hotel' ),
	) );

	$wp_customize->add_section( 'niwas_resort_hotel_theme_options_section', array(
    	'title'      => __( 'General Settings', 'niwas-resort-hotel' ),
		'priority'   => 30,
		'panel' => 'niwas_resort_hotel_panel_id'
	) );

	// Add Settings and Controls for Layout
	$wp_customize->add_setting('niwas_resort_hotel_theme_options',array(
		'default' => 'Right Sidebar',
		'sanitize_callback' => 'niwas_resort_hotel_sanitize_choices'	        
	));

	$wp_customize->add_control('niwas_resort_hotel_theme_options',array(
		'type' => 'radio',
		'label' => __('Do you want this section','niwas-resort-hotel'),
		'section' => 'niwas_resort_hotel_theme_options_section',
		'choices' => array(
		   'Left Sidebar' => __('Left Sidebar','niwas-resort-hotel'),
		   'Right Sidebar' => __('Right Sidebar','niwas-resort-hotel'),
		   'One Column' => __('One Column','niwas-resort-hotel'),
		   'Three Columns' => __('Three Columns','niwas-resort-hotel'),
		   'Four Columns' => __('Four Columns','niwas-resort-hotel'),
		   'Grid Layout' => __('Grid Layout','niwas-resort-hotel')
		),
	));

	// Top Bar
	$wp_customize->add_section( 'niwas_resort_hotel_contact_details', array(
    	'title'      => __( 'Top Bar', 'niwas-resort-hotel' ),
		'priority'   => null,
		'panel' => 'niwas_resort_hotel_panel_id'
	) );

	$wp_customize->add_setting('niwas_resort_hotel_hide_show_topbar',array(
    	'default' => false,
    	'sanitize_callback'	=> 'niwas_resort_hotel_sanitize_checkbox'
	));
	$wp_customize->add_control('niwas_resort_hotel_hide_show_topbar',array(
   	'type' => 'checkbox',
   	'label' => __('Show / Hide Topbar','niwas-resort-hotel'),
   	'section' => 'niwas_resort_hotel_contact_details',
	));

	$wp_customize->add_setting('niwas_resort_hotel_welcome',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('niwas_resort_hotel_welcome',array(
		'label'	=> __('Welcome Text','niwas-resort-hotel'),
		'section'=> 'niwas_resort_hotel_contact_details',
		'setting'=> 'niwas_resort_hotel_welcome',
		'type'=> 'text'
	));

	$wp_customize->add_setting('niwas_resort_hotel_call',array(
		'default'=> '',
		'sanitize_callback'	=> 'niwas_resort_hotel_sanitize_phone_number'
	));	
	$wp_customize->add_control('niwas_resort_hotel_call',array(
		'label'	=> __('Call us:','niwas-resort-hotel'),
		'section'=> 'niwas_resort_hotel_contact_details',
		'setting'=> 'niwas_resort_hotel_call',
		'type'=> 'text'
	));

	$wp_customize->add_setting('niwas_resort_hotel_mail',array(
		'default'=> '',
		'sanitize_callback'	=> 'sanitize_email'
	));	
	$wp_customize->add_control('niwas_resort_hotel_mail',array(
		'label'	=> __('Email Address','niwas-resort-hotel'),
		'section'=> 'niwas_resort_hotel_contact_details',
		'setting'=> 'niwas_resort_hotel_mail',
		'type'=> 'text'
	));	

	//social icons
	$wp_customize->add_section('niwas_resort_hotel_topbar_header',array(
		'title'	=> __('Social Icons','niwas-resort-hotel'),
		'description'	=> __('<b>Note :</b> Add Header Content here','niwas-resort-hotel'),
		'priority'	=> null,
		'panel' => 'niwas_resort_hotel_panel_id',
	));

	$wp_customize->add_setting('niwas_resort_hotel_facebook_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('niwas_resort_hotel_facebook_url',array(
		'label'	=> __('Add Facebook link','niwas-resort-hotel'),
		'section'	=> 'niwas_resort_hotel_topbar_header',
		'setting'	=> 'niwas_resort_hotel_facebook_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('niwas_resort_hotel_twitter_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('niwas_resort_hotel_twitter_url',array(
		'label'	=> __('Add Twitter link','niwas-resort-hotel'),
		'section'	=> 'niwas_resort_hotel_topbar_header',
		'setting'	=> 'niwas_resort_hotel_twitter_url',
		'type'	=> 'url'
	));
	
	$wp_customize->add_setting('niwas_resort_hotel_insta_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('niwas_resort_hotel_insta_url',array(
		'label'	=> __('Add Instagram link','niwas-resort-hotel'),
		'section'	=> 'niwas_resort_hotel_topbar_header',
		'setting'	=> 'niwas_resort_hotel_insta_url',
		'type'	=> 'url'
	));

	$wp_customize->add_setting('niwas_resort_hotel_linkedin_url',array(
		'default'	=> '',
		'sanitize_callback'	=> 'esc_url_raw'
	));	
	$wp_customize->add_control('niwas_resort_hotel_linkedin_url',array(
		'label'	=> __('Add Linkedin link','niwas-resort-hotel'),
		'section'	=> 'niwas_resort_hotel_topbar_header',
		'setting'	=> 'niwas_resort_hotel_linkedin_url',
		'type'	=> 'url'
	));

	//home page slider
	$wp_customize->add_section( 'niwas_resort_hotel_slider_section' , array(
    	'title' => __( 'Slider Settings', 'niwas-resort-hotel' ),
		'priority' => null,
		'panel' => 'niwas_resort_hotel_panel_id'
	) );

	$wp_customize->add_setting('niwas_resort_hotel_slider_hide_show',array(
    	'default' => false,
    	'sanitize_callback'	=> 'niwas_resort_hotel_sanitize_checkbox'
	));
	$wp_customize->add_control('niwas_resort_hotel_slider_hide_show',array(
   	'type' => 'checkbox',
   	'label' => __('Show / Hide slider','niwas-resort-hotel'),
   	'section' => 'niwas_resort_hotel_slider_section',
	));

	for ( $count = 1; $count <= 4; $count++ ) {
		$wp_customize->add_setting( 'niwas_resort_hotel_slider' . $count, array(
			'default'           => '',
			'sanitize_callback' => 'niwas_resort_hotel_sanitize_dropdown_pages'
		) );
		$wp_customize->add_control( 'niwas_resort_hotel_slider' . $count, array(
			'label'    => __( 'Select Slide Image Page', 'niwas-resort-hotel' ),
			'section'  => 'niwas_resort_hotel_slider_section',
			'type'     => 'dropdown-pages'
		) );
	}

	$wp_customize->add_setting('niwas_resort_hotel_slider_excerpt_length',array(
		'default' => '30',
		'sanitize_callback'	=> 'niwas_resort_hotel_sanitize_float'
	));
	$wp_customize->add_control('niwas_resort_hotel_slider_excerpt_length',array(
		'type' => 'number',
		'label' => __('Slider Excerpt Length','niwas-resort-hotel'),
		'section' => 'niwas_resort_hotel_slider_section',
	));

	//	Our Services
	$wp_customize->add_section('niwas_resort_hotel_facilities',array(
		'title'	=> __('Our Facilities','niwas-resort-hotel'),
		'description'=> __('Note : This section will appear below the slider.','niwas-resort-hotel'),
		'panel' => 'niwas_resort_hotel_panel_id',
	));
	
	$wp_customize->add_setting('niwas_resort_hotel_our_facilities_title',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('niwas_resort_hotel_our_facilities_title',array(
		'label'	=> __('Section Title','niwas-resort-hotel'),
		'section'	=> 'niwas_resort_hotel_facilities',
		'setting'	=> 'niwas_resort_hotel_our_facilities_title',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('niwas_resort_hotel_facilities_subtitle',array(
		'default'	=> '',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('niwas_resort_hotel_facilities_subtitle',array(
		'label'	=> __('Section Subtitle','niwas-resort-hotel'),
		'section'	=> 'niwas_resort_hotel_facilities',
		'setting'	=> 'niwas_resort_hotel_facilities_subtitle',
		'type'		=> 'text'
	));

	$categories = get_categories();
	$cats = array();
	$i = 0;
	$cat_pst[]= 'select';
	foreach($categories as $category){
		if($i==0){
			$default = $category->slug;
			$i++;
		}
		$cat_pst[$category->slug] = $category->name;
	}

	$wp_customize->add_setting('niwas_resort_hotel_category_setting',array(
		'default'	=> 'select',
		'sanitize_callback' => 'niwas_resort_hotel_sanitize_choices',
	));
	$wp_customize->add_control('niwas_resort_hotel_category_setting',array(
		'type'    => 'select',
		'choices' => $cat_pst,
		'label' => __('Select Category to display Post','niwas-resort-hotel'),
		'description' => __('Image Size ( 300px x 300px )','niwas-resort-hotel'),
		'section' => 'niwas_resort_hotel_facilities',
	));

	$wp_customize->add_setting('niwas_resort_hotel_facility_section_padding',array(
      'default' => '',
      'sanitize_callback'	=> 'niwas_resort_hotel_sanitize_float'
   ));
   $wp_customize->add_control('niwas_resort_hotel_facility_section_padding',array(
      'type' => 'number',
      'label' => __('Section Top Bottom Padding','niwas-resort-hotel'),
      'section' => 'niwas_resort_hotel_facilities',
   ));

	//Footer
   $wp_customize->add_section( 'niwas_resort_hotel_footer', array(
    	'title'      => __( 'Footer Text', 'niwas-resort-hotel' ),
		'priority'   => null,
		'panel' => 'niwas_resort_hotel_panel_id'
	) );

	$wp_customize->add_setting('niwas_resort_hotel_show_back_totop',array(
 		'default' => true,
   	'sanitize_callback'	=> 'niwas_resort_hotel_sanitize_checkbox'
	));
	$wp_customize->add_control('niwas_resort_hotel_show_back_totop',array(
   	'type' => 'checkbox',
   	'label' => __('Show / Hide Back to Top','niwas-resort-hotel'),
   	'section' => 'niwas_resort_hotel_footer'
	));

   $wp_customize->add_setting('niwas_resort_hotel_footer_copy',array(
		'default'	=> 'Hotel WordPress Theme By Luzuk',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('niwas_resort_hotel_footer_copy',array(
		'label'	=> __('Footer Text','niwas-resort-hotel'),
		'section'	=> 'niwas_resort_hotel_footer',
		'setting'	=> 'niwas_resort_hotel_footer_copy',
		'type'		=> 'text'
	));
 
	$wp_customize->add_setting('niwas_resort_hotel_footer_copylink',array(
		'default'	=> 'https://www.luzuk.com/themes/free-hotel-wordpress-theme/',
		'sanitize_callback'	=> 'sanitize_text_field'
	));	
	$wp_customize->add_control('niwas_resort_hotel_footer_copylink',array(
		'label'	=> __('Footer Link','niwas-resort-hotel'),
		'section'	=> 'niwas_resort_hotel_footer',
		'setting'	=> 'niwas_resort_hotel_footer_copylink',
		'type'		=> 'text'
	));

	$wp_customize->add_setting('niwas_resort_hotel_copyright_padding',array(
		'default' => '',
		'sanitize_callback'	=> 'niwas_resort_hotel_sanitize_float'
 	));
 	$wp_customize->add_control('niwas_resort_hotel_copyright_padding',array(
		'type' => 'number',
		'label' => __('Copyright Top Bottom Padding','niwas-resort-hotel'),
		'section' => 'niwas_resort_hotel_footer',
	));

	$wp_customize->get_setting( 'blogname' )->transport          = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport   = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport  = 'postMessage';

	$wp_customize->selective_refresh->add_partial( 'blogname', array(
		'selector' => '.site-title a',
		'render_callback' => 'niwas_resort_hotel_customize_partial_blogname',
	) );
	$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
		'selector' => '.site-description',
		'render_callback' => 'niwas_resort_hotel_customize_partial_blogdescription',
	) );
}
add_action( 'customize_register', 'niwas_resort_hotel_customize_register' );

function niwas_resort_hotel_customize_partial_blogname() {
	bloginfo( 'name' );
}

function niwas_resort_hotel_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

function niwas_resort_hotel_is_static_front_page() {
	return ( is_front_page() && ! is_home() );
}

function niwas_resort_hotel_is_view_with_layout_option() {
	// This option is available on all pages. It's also available on archives when there isn't a sidebar.
	return ( is_page() || ( is_archive() && ! is_active_sidebar( 'sidebar-1' ) ) );
}

/**
 * Singleton class for handling the theme's customizer integration.
 *
 * @since  1.0.0
 * @access public
 */
final class Niwas_Resort_Hotel_Customize {

	/**
	 * Returns the instance.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return object
	 */
	public static function get_instance() {

		static $instance = null;

		if ( is_null( $instance ) ) {
			$instance = new self;
			$instance->setup_actions();
		}

		return $instance;
	}

	/**
	 * Constructor method.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function __construct() {}

	/**
	 * Sets up initial actions.
	 *
	 * @since  1.0.0
	 * @access private
	 * @return void
	 */
	private function setup_actions() {

		// Register panels, sections, settings, controls, and partials.
		add_action( 'customize_register', array( $this, 'sections' ) );

		// Register scripts and styles for the controls.
		add_action( 'customize_controls_enqueue_scripts', array( $this, 'enqueue_control_scripts' ), 0 );
	}

	/**
	 * Sets up the customizer sections.
	 *
	 * @since  1.0.0
	 * @access public
	 * @param  object  $manager
	 * @return void
	 */
	public function sections( $manager ) {

		// Load custom sections.
		load_template( trailingslashit( get_template_directory() ) . '/inc/section-pro.php' );

		// Register custom section types.
		$manager->register_section_type( 'Niwas_Resort_Hotel_Customize_Section_Pro' );

		// Register sections.
		$manager->add_section(
			new Niwas_Resort_Hotel_Customize_Section_Pro(
				$manager,
				'niwas_resort_hotel_example_1',
				array(
					'priority' => 9,
					'title'    => esc_html__( 'Hotel Pro Theme', 'niwas-resort-hotel' ),
					'pro_text' => esc_html__( 'Go Pro','niwas-resort-hotel' ),
					'pro_url'  => esc_url( 'https://www.luzuk.com/product/resort-hotel-wordpress-theme/' ),
				)
			)
		);
	}

	/**
	 * Loads theme customizer CSS.
	 *
	 * @since  1.0.0
	 * @access public
	 * @return void
	 */
	public function enqueue_control_scripts() {

		wp_enqueue_script( 'niwas-resort-hotel-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/js/customize-controls.js', array( 'customize-controls' ) );

		wp_enqueue_style( 'niwas-resort-hotel-customize-controls', trailingslashit( esc_url(get_template_directory_uri()) ) . '/assets/css/customize-controls.css' );
	}
}

// Doing this customizer thang!
Niwas_Resort_Hotel_Customize::get_instance();