<?php
/**
 * Template for displaying search forms in niwas-resort-hotel
 *
 * @subpackage niwas-resort-hotel
 * @since 1.0
 * @version 0.1
 */
?>

<?php $unique_id = esc_attr( uniqid( 'search-form-' ) ); ?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<label >
		<span class="screen-reader-text"><?php echo esc_html_x( 'Search for:', 'label', 'niwas-resort-hotel' ); ?></span>
		<input type="search" class="search-field" placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'niwas-resort-hotel' ); ?>" value="<?php echo esc_attr(get_search_query()); ?>" name="s" />
	</label>
	<button role="tab" type="submit" class="search-submit"><?php echo esc_html_x( 'Search', 'submit button', 'niwas-resort-hotel' ); ?></button>
</form>