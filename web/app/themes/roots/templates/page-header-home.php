<?php
/**
 * The template for displaying the featured (background) image on a page.
 *
 * @package Not Here
 * @author  Matt Robitaille <matt@anchour.com>
 */

$background  = get_field('background_image');
$headerImage = get_field('header_image');

$button_text = get_field('button_text');
$button_url  = get_field('button_url');

?>

<div class="featured-image<?php if (false === $background) : ?> no-image<?php endif; ?>">
    <?= banner_image($background); ?>
    <?php if (false !== $headerImage): ?>

        <div class="table header-content-wrap">
            <div class="cell header-content">
                <?php if (is_front_page()) : ?>
                    <img src="<?= roots_root_relative_url($headerImage['url']); ?>" alt="<?php the_title(); ?>" width="<?= $headerImage['width'] / 2; ?>" height="<?= $headerImage['height'] / 2; ?>">
                <?php else: ?>
                    <?php the_title(); ?>
                <?php endif; ?>

                <?php if (has_cta_components($button_text, $button_url)): ?>
                    <a class="btn btn-red btn-cta text-uppercase text-light" href="<?= roots_root_relative_url($button_url); ?>">
                        <?= $button_text; ?>
                    </a>
                <?php endif; ?>
            </div>
        </div>

    <?php endif; ?>
</div>