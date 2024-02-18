<?php
/**
 * Template part for displaying acf flexible content
 *
 * @package Empuls3_Theme
 */

?>



<?php

if ( get_field( 'blocks' ) ) :

	while ( has_sub_field( 'blocks', get_the_ID() ) ) :

		if ( get_row_layout() == 'hero-img-bottom' ):
			include( get_stylesheet_directory() . '/acf-blocks/hero-img-bottom.php' );
		endif;

		if ( get_row_layout() == 'logo_cloud_dark' ):
			include( get_stylesheet_directory() . '/acf-blocks/logo-cloud-dark.php' );
		endif;

		if ( get_row_layout() == 'content_image_left' ):
			include( get_stylesheet_directory() . '/acf-blocks/content-img-left.php' );
		endif;

		if ( get_row_layout() == 'services_dark' ):
			include( get_stylesheet_directory() . '/acf-blocks/services-dark.php' );
		endif;

		if ( get_row_layout() == 'services_white' ):
			include( get_stylesheet_directory() . '/acf-blocks/services-white.php' );
		endif;

		if ( get_row_layout() == 'our_process' ):
			include( get_stylesheet_directory() . '/acf-blocks/our-process.php' );
		endif;

		if ( get_row_layout() == 'cta_red_background' ):
			include( get_stylesheet_directory() . '/acf-blocks/cta-red-bg.php' );
		endif;

		if ( get_row_layout() == 'recent_posts' ):
			include( get_stylesheet_directory() . '/acf-blocks/recent-post.php' );
		endif;

	endwhile;
endif;
?>
