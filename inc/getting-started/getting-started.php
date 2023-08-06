<?php
//about theme info
add_action( 'admin_menu', 'niwas_resort_hotel_gettingstarted' );
function niwas_resort_hotel_gettingstarted() {    	
	add_theme_page( esc_html__('About Theme', 'niwas-resort-hotel'), esc_html__('About Theme', 'niwas-resort-hotel'), 'edit_theme_options', 'niwas_resort_hotel_guide', 'niwas_resort_hotel_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function niwas_resort_hotel_admin_theme_style() {
   wp_enqueue_style('custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getting-started/getting-started.css');
}
add_action('admin_enqueue_scripts', 'niwas_resort_hotel_admin_theme_style');

//guidline for about theme
function niwas_resort_hotel_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'niwas-resort-hotel' );
?>

<div class="wrapper-info">
	<div class="col-left">
		<div class="intro">
			<h3><?php esc_html_e( 'Welcome to Niwas Resort Hotel WordPress Theme', 'niwas-resort-hotel' ); ?> <span>Version: <?php echo esc_html($theme['Version']);?></span></h3>
		</div>
		<div class="started">
			<hr>
			<div class="free-doc">
				<div class="lz-4">
					<h4><?php esc_html_e( 'Start Customizing', 'niwas-resort-hotel' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Go to', 'niwas-resort-hotel' ); ?> <a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e( 'Customizer', 'niwas-resort-hotel' ); ?> </a> <?php esc_html_e( 'and start customizing your website', 'niwas-resort-hotel' ); ?></span>
					</ul>
				</div>
				<div class="lz-4">
					<h4><?php esc_html_e( 'Support', 'niwas-resort-hotel' ); ?></h4>
					<ul>
						<span><?php esc_html_e( 'Send your query to our', 'niwas-resort-hotel' ); ?> <a href="<?php echo esc_url( NIWAS_RESORT_HOTEL_SUPPORT ); ?>" target="_blank"> <?php esc_html_e( 'Support', 'niwas-resort-hotel' ); ?></a></span>
					</ul>
				</div>
			</div>
			<p><?php esc_html_e( 'Niwas Resort Hotel is an attention grabbing, stylish, inviting and modern hotel and resort WordPress theme for luxury hotel, resort, lodge, home stay, motel, guest house, holiday home, inn, dormitory, farmhouse, service apartment and other such hospitality business. Apart from that it can also be used by restaurants, eateries, food joints, cafes and bakeries. It can very well serve bloggers, travel adventures, travel critic and hotel inspector or reviewer. It has a manageable interface of backend which makes designing website a super easy task. It loads fast and gives a good rank to website in search engine results. This resort and hotel WordPress theme is fully responsive and loads on all browsers smoothly. It can be translated into several other languages and you can write content from left to right as well. It facilitates easy customization through theme customizer wherein you can change the colour scheme, background, font, logo, header, footer and menu styles and slider settings. The theme supports gallery where you can show alluring hotel and resort images; testimonial section to get customer feedback and subscribers form to connect with customers. The Bootstrap framework strengthens its base. It is a complete theme for all range of hotels and resorts.', 'niwas-resort-hotel')?></p>
			<hr>			
			<div class="col-left-inner">
				<h3><?php esc_html_e( 'Get started with Free Niwas Resort Hotel Theme', 'niwas-resort-hotel' ); ?></h3>
				<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/customizer-image.png" alt="" />
			</div>
		</div>
	</div>
	<div class="col-right">
		<div class="col-left-area">
			<h3><?php esc_html_e('Premium Theme Information', 'niwas-resort-hotel'); ?></h3>
			<hr>
		</div>
		<div class="centerbold">
			<a href="<?php echo esc_url( NIWAS_RESORT_HOTEL_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'niwas-resort-hotel'); ?></a>
			<a href="<?php echo esc_url( NIWAS_RESORT_HOTEL_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'niwas-resort-hotel'); ?></a>
			<a href="<?php echo esc_url( NIWAS_RESORT_HOTEL_PRO_DOCS ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'niwas-resort-hotel'); ?></a>
			<hr class="secondhr">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/niwas-hotel-resort.jpg" alt="" />
		</div>
		<h3><?php esc_html_e( 'PREMIUM THEME FEATURES', 'niwas-resort-hotel'); ?></h3>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon01.png" alt="" />
			<h4><?php esc_html_e( 'Banner Slider', 'niwas-resort-hotel'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon02.png" alt="" />
			<h4><?php esc_html_e( 'Theme Options', 'niwas-resort-hotel'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon03.png" alt="" />
			<h4><?php esc_html_e( 'Custom Innerpage Banner', 'niwas-resort-hotel'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon04.png" alt="" />
			<h4><?php esc_html_e( 'Custom Colors and Images', 'niwas-resort-hotel'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon05.png" alt="" />
			<h4><?php esc_html_e( 'Fully Responsive', 'niwas-resort-hotel'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon06.png" alt="" />
			<h4><?php esc_html_e( 'Hide/Show Sections', 'niwas-resort-hotel'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon07.png" alt="" />
			<h4><?php esc_html_e( 'Woocommerce Support', 'niwas-resort-hotel'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon08.png" alt="" />
			<h4><?php esc_html_e( 'Limit to display number of Posts', 'niwas-resort-hotel'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon09.png" alt="" />
			<h4><?php esc_html_e( 'Multiple Page Templates', 'niwas-resort-hotel'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon10.png" alt="" />
			<h4><?php esc_html_e( 'Custom Read More link', 'niwas-resort-hotel'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon11.png" alt="" />
			<h4><?php esc_html_e( 'Code written with WordPress standard', 'niwas-resort-hotel'); ?></h4>
		</div>
		<div class="lz-6">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/icon12.png" alt="" />
			<h4><?php esc_html_e( '100% Multi language', 'niwas-resort-hotel'); ?></h4>
		</div>
	</div>
</div>
<?php } ?>