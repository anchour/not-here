<?php
/**
 * Template Name: Home Page
 *
 * Template for the home page. Features a repeating field layout,
 * with light/dark section styling.
 *
 * @author  Matt Robitaille <matt@anchour.com>
 * @package Not Here
 */

get_header(); ?>

	<?php
		// Start the Loop.
		while ( have_posts() ) : the_post();
			get_template_part( 'content', 'main-content' );

			get_template_part( 'content', 'page' );
		endwhile;
	?>

<?php
get_footer();
