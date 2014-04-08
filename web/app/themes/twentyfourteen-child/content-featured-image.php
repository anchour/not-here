<?php
/**
 * The template for displaying the featured (background) image on a page.
 *
 * @package Not Here
 * @author  Matt Robitaille <matt@anchour.com>
 */

$background  = get_field('background_image');
$defaultImage = get_template_directory_uri() . '/images/cityscape.jpg';
$headerImage = get_field('header_image');

?>

<div class="featured-image">
	<img class="background" src="<?php echo $background['url'];?>" alt="">
	<?php if (false !== $headerImage): ?>
		<div class="page-logo">
			<img src="<?php echo $headerImage['url']; ?>" alt="<?php the_title(); ?>" width="<?php echo $headerImage['width'] / 2; ?>" height="<?php echo $headerImage['height'] / 2; ?>">
		</div>
	<?php endif; ?>
</div>