<?php while (have_posts()) : the_post(); ?>
    <?php $donors = get_field('donors'); ?>

    <?php if ( is_array($donors) && count($donors) > 0 ): $count = 0; ?>

        <?php $levels = sort_donors_by_type($donors); unset($donors); ?>


        <?php foreach($levels as $type => $donors) : ?>
            <div class="section donor-section light">

                <div class="row">
                    <div class="container">
                        <div class="col-md-12">
                            <h2 class="text-center"><?= ucwords($type); ?></h2>
                        </div>
                    </div>
                </div>

                <?php foreach($donors as $donor): ?>
                <div class="row">
                    <div class="container">
                        <div class="<?= get_donor_class($type); ?>">

                            <div class="front">
                                <?= get_donor_logo($donor); ?>
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
                    </div>
                </div>
                <?php endforeach; ?>

            </div>

        <?php endforeach; ?>


    <?php endif; ?>
<?php endwhile; ?>
