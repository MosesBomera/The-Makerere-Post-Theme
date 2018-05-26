<?php
/**
 * The Makerere Post SearchForm Template
 *
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */
?>
<form role="search" class="search-form" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="search" class="input-search-form" required="required" value="<?php echo get_search_query(); ?>" title="Enter the terms you wish to search for." name="s" />
	<button type="submit" class="button-search-form"><?php echo _x( 'Search', 'submit button' ); ?></button>
</form>