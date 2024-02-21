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

		if ( get_row_layout() == 'hero_multi_images_left' ):
			include( get_stylesheet_directory() . '/acf-blocks/hero-multi-images-left.php' );
		endif;

		if ( get_row_layout() == 'three_details_pink_bg' ):
			include( get_stylesheet_directory() . '/acf-blocks/three-details-pink-bg.php' );
		endif;

		if ( get_row_layout() == 'image_right_white_b' ):
			include( get_stylesheet_directory() . '/acf-blocks/image-right-white-bg.php' );
		endif;

		if ( get_row_layout() == 'team' ):
			include( get_stylesheet_directory() . '/acf-blocks/team.php' );
		endif;

		if ( get_row_layout() == 'white_stats' ):
			include( get_stylesheet_directory() . '/acf-blocks/white-stats.php' );
		endif;

		if ( get_row_layout() == 'pink_cta' ):
			include( get_stylesheet_directory() . '/acf-blocks/pink-cta.php' );
		endif;

		if ( get_row_layout() == 'hero_large_image_right' ):
			include( get_stylesheet_directory() . '/acf-blocks/hero-large-image-right.php' );
		endif;

		if ( get_row_layout() == 'details_image_center' ):
			include( get_stylesheet_directory() . '/acf-blocks/details-image-center.php' );
		endif;

		if ( get_row_layout() == 'contained_in_panel' ):
			include( get_stylesheet_directory() . '/acf-blocks/contained-in-panel.php' );
		endif;

		if ( get_row_layout() == 'faqs_side_by_side' ):
			include( get_stylesheet_directory() . '/acf-blocks/faqs-side-by-side.php' );
		endif;

		if ( get_row_layout() == 'cta_image_left' ):
			include( get_stylesheet_directory() . '/acf-blocks/cta-image-left.php' );
		endif;

	endwhile;
endif;
?>
