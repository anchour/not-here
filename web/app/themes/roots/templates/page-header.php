<?php
/**
 * The template for displaying the featured (background) image on a page.
 *
 * @package Not Here
 * @author  Matt Robitaille <matt@anchour.com>
 */

$heading = get_field('heading');
$sub_heading = get_field('sub_heading');
$banner = get_field('banner_image');

?>

<div class="featured-image">
    <?= banner_image($banner); ?>

    <div class="table header-content-wrap">
        <div class="cell header-content">
            <div class="container">
                <h1><?= get_acf_title(); ?></h1>

                <?php if ($sub_heading) : ?>
                    <div class="sub-heading">
                        <?= $sub_heading; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

</div>