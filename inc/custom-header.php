<?php
/**
 * Custom header implementation
 */

function niwas_resort_hotel_custom_header_setup() {

	add_theme_support( 'custom-header', apply_filters( 'niwas_resort_hotel_custom_header_args', array(

		'default-text-color'     => 'fff',
		'header-text' 			 =>	false,
		'width'                  => 1600,
		'height'                 => 400,
		'wp-head-callback'       => 'niwas_resort_hotel_header_style',
	) ) );
}

add_action( 'after_setup_theme', 'niwas_resort_hotel_custom_header_setup' );

if ( ! function_exists( 'niwas_resort_hotel_header_style' ) ) :
/**
 * Styles the header image and text displayed on the blog
 *
 * @see niwas_resort_hotel_custom_header_setup().
 */
add_action( 'wp_enqueue_scripts', 'niwas_resort_hotel_header_style' );
function niwas_resort_hotel_header_style() {
	//Check if user has defined any header image.
	if ( get_header_image() ) :
	$custom_css = "
        .page-template-custom-home-page #header,
        #header{
			background-image:url('".esc_url(get_header_image())."');
			background-position: center top;
		}";
	   	wp_add_inline_style( 'niwas-resort-hotel-basic-style', $custom_css );
	endif;
}
endif; // niwas_resort_hotel_header_style