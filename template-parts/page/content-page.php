<?php
/**
 * Template part for displaying page content in page.php
 * 
 * @subpackage niwas-resort-hotel
 * @since 1.0
 * @version 0.1
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header role="banner" class="entry-header">
		<?php niwas_resort_hotel_edit_link( get_the_ID() ); ?>
	</header>
	<div class="entry-content">
		<?php the_post_thumbnail(); ?>
		<?php			
			the_content();

			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'niwas-resort-hotel' ),
				'after'  => '</div>',
			) );
		?>
	</div>
</article>