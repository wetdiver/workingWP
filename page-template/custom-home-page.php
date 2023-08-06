<?php
/**
 * Template Name: Custom Home
 */

get_header(); ?>

<?php do_action( 'niwas_resort_hotel_above_slider' ); ?>

<?php if( get_theme_mod('niwas_resort_hotel_slider_hide_show') != ''){ ?>	
	<section id="slider">
	  	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel"> 
		    <?php $niwas_resort_hotel_slider_pages = array();
		      	for ( $count = 1; $count <= 4; $count++ ) {
			        $mod = intval( get_theme_mod( 'niwas_resort_hotel_slider' . $count ));
			        if ( 'page-none-selected' != $mod ) {
			            $niwas_resort_hotel_slider_pages[] = $mod;
			        }
		      	}
		      	if( !empty($niwas_resort_hotel_slider_pages) ) :
		        $args = array(
		          	'post_type' => 'page',
		          	'post__in' => $niwas_resort_hotel_slider_pages,
		          	'orderby' => 'post__in'
		        );
		        $query = new WP_Query( $args );
		        if ( $query->have_posts() ) :
		          $i = 1;
		    ?>     
		    <div class="carousel-inner" role="listbox">
		      	<?php  while ( $query->have_posts() ) : $query->the_post(); ?>
		        <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
		          	<a href="<?php echo esc_url( get_permalink() );?>"><?php the_post_thumbnail(); ?></a>
		          	<div class="carousel-caption">
			            <div class="inner_carousel">
			              	<h1><a href="<?php echo esc_url( get_permalink() );?>"><?php the_title();?></a></h1>
			              	<?php 
                  				$niwas_resort_hotel_slider_excerpt_length = get_theme_mod('niwas_resort_hotel_slider_excerpt_length');
                
                  				if( $niwas_resort_hotel_slider_excerpt_length != ''){?>
			              			<p><?php $niwas_resort_hotel_excerpt = get_the_excerpt(); echo esc_html( niwas_resort_hotel_string_limit_words( $niwas_resort_hotel_excerpt, esc_attr(get_theme_mod('niwas_resort_hotel_slider_excerpt_length','30') ) )); ?></p>	
		              	              <?php } ?>

			            </div>
		          	</div>
		        </div>
		      	<?php $i++; endwhile; 
		      	wp_reset_postdata();?>
		    </div>
		    <?php else : ?>
		    	<div class="no-postfound"></div>
		    <?php endif;
		    endif;?>
		    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		        <span class="carousel-control-prev-icon" aria-hidden="true"><i class="fas fa-chevron-circle-left"></i></span>
		    </a>
		    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		        <span class="carousel-control-next-icon" aria-hidden="true"><i class="fas fa-chevron-circle-right"></i></span>
		    </a>
	  	</div>  
	  	<div class="clearfix"></div>
	</section>
<?php }?>

<?php do_action('niwas_resort_hotel_below_slider'); ?>

<?php /*--our-services --*/?>
<?php if( get_theme_mod( 'niwas_resort_hotel_our_facilities_title') != '' || get_theme_mod( 'niwas_resort_hotel_facilities_subtitle' )!= ''|| get_theme_mod( 'niwas_resort_hotel_category_setting' )!= ''){ ?>
	<section id="our-facility">
		<div class="container">		
			<div class="service-box">
				<div class="service-title">
					<?php if( get_theme_mod('niwas_resort_hotel_our_facilities_title') != ''){ ?>
			    		<h2><?php echo esc_html(get_theme_mod('niwas_resort_hotel_our_facilities_title','')); ?></h2>
			    	<?php }?>
					<?php if( get_theme_mod('niwas_resort_hotel_facilities_subtitle') != ''){ ?>
			    		<p><?php echo esc_html(get_theme_mod('niwas_resort_hotel_facilities_subtitle','')); ?></p>
			    	<?php }?>
			    </div>
	            <div class="row">
		      		<?php
		      		$niwas_resort_hotel_catData1=  get_theme_mod('niwas_resort_hotel_category_setting');
          			if($niwas_resort_hotel_catData1){ 
		      			$page_query = new WP_Query(array( 'category_name' => esc_html($niwas_resort_hotel_catData1 ,'niwas-resort-hotel')));?>
		        		<?php while( $page_query->have_posts() ) : $page_query->the_post(); ?>	
		          			<div class="col-lg-6 col-md-6">
		          				<div class="service-section">
		          					<div class="row">
		          						<div class="col-lg-4 col-md-4">
			          						<div class="service-img">
									      		<?php the_post_thumbnail(); ?>
									  		</div>
								  		</div>
								  		<div class="col-lg-8 col-md-8">	
					          				<div class="content-facility">
					          					<h3><?php the_title();?></h3>
							            		<p><?php $excerpt = get_the_excerpt(); echo esc_html( niwas_resort_hotel_string_limit_words( $excerpt,15 ) ); ?></p>
							            		<div class="read-btn">
									              <a href="<?php the_permalink(); ?>" class="blogbutton-small"><?php esc_html_e('READ MORE','niwas-resort-hotel'); ?>
									              </a>
									            </div>
				            				</div>
			            				</div>
		            				</div>	
		          				</div>
						    </div>    	
		          		<?php endwhile; 
		          		wp_reset_postdata();
		          	}?>
	      		</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</section>
<?php }?>

<?php do_action('niwas_resort_hotel_below_our_service_section'); ?>

<div class="container lz-content">
  	<?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile; // end of the loop. ?>
</div>

<?php get_footer(); ?>