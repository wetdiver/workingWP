<?php 

	$niwas_resort_hotel_custom_style = '';

	// Logo Size
	$niwas_resort_hotel_logo_top_padding = get_theme_mod('niwas_resort_hotel_logo_top_padding');
	$niwas_resort_hotel_logo_bottom_padding = get_theme_mod('niwas_resort_hotel_logo_bottom_padding');
	$niwas_resort_hotel_logo_left_padding = get_theme_mod('niwas_resort_hotel_logo_left_padding');
	$niwas_resort_hotel_logo_right_padding = get_theme_mod('niwas_resort_hotel_logo_right_padding');

	if( $niwas_resort_hotel_logo_top_padding != '' || $niwas_resort_hotel_logo_bottom_padding != '' || $niwas_resort_hotel_logo_left_padding != '' || $niwas_resort_hotel_logo_right_padding != ''){
		$niwas_resort_hotel_custom_style .=' .logo {';
			$niwas_resort_hotel_custom_style .=' padding-top: '.esc_attr($niwas_resort_hotel_logo_top_padding).'px; padding-bottom: '.esc_attr($niwas_resort_hotel_logo_bottom_padding).'px; padding-left: '.esc_attr($niwas_resort_hotel_logo_left_padding).'px; padding-right: '.esc_attr($niwas_resort_hotel_logo_right_padding).'px;';
		$niwas_resort_hotel_custom_style .=' }';
	}

	// service section padding
	$niwas_resort_hotel_facility_section_padding = get_theme_mod('niwas_resort_hotel_facility_section_padding');

	if( $niwas_resort_hotel_facility_section_padding != ''){
		$niwas_resort_hotel_custom_style .=' #our-facility {';
			$niwas_resort_hotel_custom_style .=' padding-top: '.esc_attr($niwas_resort_hotel_facility_section_padding).'px; padding-bottom: '.esc_attr($niwas_resort_hotel_facility_section_padding).'px;';
		$niwas_resort_hotel_custom_style .=' }';
	}

	// Site Title Font Size
	$niwas_resort_hotel_site_title_font_size = get_theme_mod('niwas_resort_hotel_site_title_font_size');
	if( $niwas_resort_hotel_site_title_font_size != ''){
		$niwas_resort_hotel_custom_style .=' .logo h1.site-title, .logo p.site-title {';
			$niwas_resort_hotel_custom_style .=' font-size: '.esc_attr($niwas_resort_hotel_site_title_font_size).'px;';
		$niwas_resort_hotel_custom_style .=' }';
	}

	// Site Tagline Font Size
	$niwas_resort_hotel_site_tagline_font_size = get_theme_mod('niwas_resort_hotel_site_tagline_font_size');
	if( $niwas_resort_hotel_site_tagline_font_size != ''){
		$niwas_resort_hotel_custom_style .=' .logo p.site-description {';
			$niwas_resort_hotel_custom_style .=' font-size: '.esc_attr($niwas_resort_hotel_site_tagline_font_size).'px;';
		$niwas_resort_hotel_custom_style .=' }';
	}

	// Copyright padding
	$niwas_resort_hotel_copyright_padding = get_theme_mod('niwas_resort_hotel_copyright_padding');

	if( $niwas_resort_hotel_copyright_padding != ''){
		$niwas_resort_hotel_custom_style .=' .site-info {';
			$niwas_resort_hotel_custom_style .=' padding-top: '.esc_attr($niwas_resort_hotel_copyright_padding).'px; padding-bottom: '.esc_attr($niwas_resort_hotel_copyright_padding).'px;';
		$niwas_resort_hotel_custom_style .=' }';
	}

	$niwas_resort_hotel_slider_hide_show = get_theme_mod('niwas_resort_hotel_slider_hide_show',false);
	if( $niwas_resort_hotel_slider_hide_show == true){
		$niwas_resort_hotel_custom_style .=' .page-template-custom-home-page #inner-pages-header {';
			$niwas_resort_hotel_custom_style .=' display:none;';
		$niwas_resort_hotel_custom_style .=' }';
	}