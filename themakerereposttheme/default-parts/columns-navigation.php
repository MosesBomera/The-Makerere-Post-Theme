<?php
/*
 * Makerere Post Columns-Navigation Template.
 * Displays the Columns-Navigation Section.
 * 
 * @package The Makerere Post Theme 
 * @since   The Makerere Post Theme 1.0
 */
 /** Displays the a menu of the available columns. */
?>
<div class="columns-container">
	<h2 class="widget-title">
		Columns
	</h2>
		<section class="column-cloud" role="cloud">
		
			<?php wp_tag_cloud( array( 	'smallest' 	=> 1,
										'largest'  	=> 1.3,
										'unit'		=> 'em',
										'taxonomy' => 'column' ) ); 
			?>
			
		</section>
</div>
