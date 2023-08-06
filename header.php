<?php
/**
 * The header for our theme
 *
 * @subpackage niwas-resort-hotel
 * @since 1.0
 * @version 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php if ( function_exists( 'wp_body_open' ) ) {
    wp_body_open();
} else {
    do_action( 'wp_body_open' );
}?>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'niwas-resort-hotel' ); ?></a>
	
	<?php if (get_theme_mod('niwas_resort_hotel_hide_show_topbar',false) == true) {?>
		<div id="top-header">
			<div class="container">
				<div class="contact-details">
					<div class="row">
						<div class="col-lg-9 col-md-9">
							<div class="mail-call">
								<span>
									<?php if( get_theme_mod( 'niwas_resort_hotel_welcome') != '') { ?>	
									<p class="col-org"><?php echo esc_html( get_theme_mod('niwas_resort_hotel_welcome','') ); ?></p>
								    <?php } ?>
								</span>
								<span>
									<?php if( get_theme_mod( 'niwas_resort_hotel_call','' ) != '') { ?>
								    <p class="col-org"><a href="tel:<?php echo esc_url(get_theme_mod('niwas_resort_hotel_call','')); ?>"><i class="fas fa-phone"></i><?php echo esc_html( get_theme_mod('niwas_resort_hotel_call','') ); ?></a></p>
									<?php } ?>
								</span>
								<span>
									<?php if( get_theme_mod( 'niwas_resort_hotel_mail','' ) != '') { ?>
										<p class="col-org"><i class="fas fa-envelope"></i><a href="mailto:<?php echo esc_url(get_theme_mod('niwas_resort_hotel_mail','')); ?>"><span><?php echo esc_html(get_theme_mod('niwas_resort_hotel_mail','')); ?></a></p>
									<?php } ?>
								</span>
							</div>
						</div>
						<div class="col-lg-3 col-md-3">
							<div class="social-icons">
								<?php if( get_theme_mod( 'niwas_resort_hotel_facebook_url') != '') { ?>
							      <a href="<?php echo esc_url( get_theme_mod( 'niwas_resort_hotel_facebook_url','' ) ); ?>"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
							    <?php } ?>
							    <?php if( get_theme_mod( 'niwas_resort_hotel_twitter_url') != '') { ?>
							      <a href="<?php echo esc_url( get_theme_mod( 'niwas_resort_hotel_twitter_url','' ) ); ?>"><i class="fab fa-twitter"></i></a>
							    <?php } ?>
							    <?php if( get_theme_mod( 'niwas_resort_hotel_insta_url') != '') { ?>
							      <a href="<?php echo esc_url( get_theme_mod( 'niwas_resort_hotel_insta_url','' ) ); ?>"><i class="fab fa-instagram"></i></a>
							    <?php } ?>	
							    <?php if( get_theme_mod( 'niwas_resort_hotel_linkedin_url') != '') { ?>
							      <a href="<?php echo esc_url( get_theme_mod( 'niwas_resort_hotel_linkedin_url','' ) ); ?>"><i class="fab fa-linkedin-in"></i></a>
							    <?php } ?>		            
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php }?>
	<header role="banner" id="header">
		<div class="menu-section">
			<div class="container">
				<div class="main-top">
					<div class="row">
						<div class="col-lg-3 col-md-5">
							<div class="logo">
						        <?php if ( has_custom_logo() ) : ?>
							        <div class="site-logo"><?php the_custom_logo(); ?></div>
							    <?php endif; ?>
					            <?php if (get_theme_mod('niwas_resort_hotel_show_site_title',true)) {?>
							        <?php $blog_info = get_bloginfo( 'name' ); ?>
							        <?php if ( ! empty( $blog_info ) ) : ?>
							            <?php if ( is_front_page() && is_home() ) : ?>
								            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							        	<?php else : ?>
						            		<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
							            <?php endif; ?>
							        <?php endif; ?>
							    <?php }?>
					        	<?php if (get_theme_mod('niwas_resort_hotel_show_tagline',true)) {?>
							        <?php
							        $description = get_bloginfo( 'description', 'display' );
							        if ( $description || is_customize_preview() ) :
							          ?>
								        <p class="site-description">
								            <?php echo esc_html($description); ?>
								        </p>
							        <?php endif; ?>
							    <?php }?>
						    </div>
						</div>
						<div class="col-lg-8 col-md-6 col-10">
							<?php if (has_nav_menu('primary')){ ?>
								<div class="toggle-menu responsive-menu">
						            <button onclick="niwas_resort_hotel_open()" role="tab" class="mobile-menu"><i class="fas fa-bars"></i><span class="screen-reader-text"><?php esc_html_e('Open Menu','niwas-resort-hotel'); ?></span></button>
						        </div>
								<div id="sidelong-menu" class="nav sidenav">
					                <nav id="primary-site-navigation" class="nav-menu" role="navigation" aria-label="<?php esc_attr_e( 'Top Menu', 'niwas-resort-hotel' ); ?>">
					                    <?php 
					                    wp_nav_menu( array( 
					                      'theme_location' => 'primary',
					                      'container_class' => 'main-menu-navigation clearfix' ,
					                      'menu_class' => 'clearfix',
					                      'items_wrap' => '<ul id="%1$s" class="%2$s mobile_nav">%3$s</ul>',
					                      'fallback_cb' => 'wp_page_menu',
					                    ) ); 
					                    ?>
					                    <a href="javascript:void(0)" class="closebtn responsive-menu" onclick="niwas_resort_hotel_close()"><i class="fas fa-times"></i><span class="screen-reader-text"><?php esc_html_e('Close Menu','niwas-resort-hotel'); ?></span></a>
					                </nav>
					            </div>
					        <?php }?>
						</div>
						<div class="col-lg-1 col-md-1 col-2">
							<div class="search-box">
								<button  onclick="niwas_resort_hotel_search_open()" class="search-toggle"><i class="fas fa-search"></i></button>
							</div>
	        			</div> 
					</div>
					<div class="search-outer">
						<div class="search-inner">
				        	<?php get_search_form(); ?>
			        	</div>
			        	<button onclick="niwas_resort_hotel_search_close()" class="search-close"><i class="fas fa-times"></i></button>
			        </div>
				</div>	
			</div>		
		</div>
	</header>

	<?php if(is_singular()) {?>
		<div id="inner-pages-header">
		    <div class="header-content py-2">
			    <div class="container"> 
			      	<h1><?php single_post_title(); ?></h1>
		      	</div>
	      	</div>
	      	<div class="theme-breadcrumb py-2">
	      		<div class="container">
					<?php niwas_resort_hotel_breadcrumb();?>
				</div>
			</div>
		</div>
	<?php } ?>

	<div class="site-content-contain">
		<div id="content" class="site-content">