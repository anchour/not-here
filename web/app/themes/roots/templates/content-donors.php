<?php while (have_posts()) : the_post(); ?>
    <?php $donors = get_field('donors'); ?>

    <?php if ( is_array($donors) && count($donors) > 0 ): $count = 0; ?>

        <div class="section light">
            <div class="container">
                <div class="row">
                    <?php foreach($donors as $donor) : ?>
                        <div class="donor col-md-6 col-sm-4 col-xs-2">

                            <div class="front">
                                <?= get_donor_logo($donor['donor_logo']); ?>
                            </div>
                            <div class="back">
                                <span class="donor-name">
                                    <?= $donor['donor_name']; ?>
                                </span>
                                <div class="donor-info">
                                    <?= $donor['info']; ?>
                                </div>
                                <div class="donor-website">
                                    <a href="<?= format_donor_url($donor['donor_website']); ?>">
                                        <?= format_readable_url($donor['donor_website']); ?>
                                    </a>
                                </div>
                            </div>

                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    <?php endif; ?>
<?php endwhile; ?>
