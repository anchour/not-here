<?php
/**
 * Template Name: Register Page
 *
 * @package  Not Here
 * @author   Matt Robitaille <matt@anchour.com>
 */

get_header();

	// Start the Loop.
	while ( have_posts() ) : the_post();
		get_template_part( 'content', 'main-content' );

		get_template_part( 'content', 'page' );

		get_template_part( 'content', 'paypal-form' );
	endwhile;

get_footer();