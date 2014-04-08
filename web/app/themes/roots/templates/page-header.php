<?php
/**
 * The template for displaying the featured (background) image on a page.
 *
 * @package Not Here
 * @author  Matt Robitaille <matt@anchour.com>
 */

$background  = get_field('background_image');
$headerImage = get_field('header_image');

?>

<div class="featured-image">
    <?= banner_image($background); ?>
    <?php if (false !== $headerImage): ?>

        <div class="table header-content-wrap">
            <div class="cell header-content">
                <?php if (is_front_page()) : ?>
                    <img src="<?php echo $headerImage['url']; ?>" alt="<?php the_title(); ?>" width="<?php echo $headerImage['width'] / 2; ?>" height="<?php echo $headerImage['height'] / 2; ?>">
                <?php else: ?>
                    <?php the_title(); ?>
                <?php endif; ?>
            </div>
        </div>

    <?php endif; ?>
</div>