<?php while (have_posts()) : the_post(); ?>
    <?php $sections = get_field('sections'); ?>
    <?php if (false !== $sections) : foreach($sections as $key => $section) :?>

        <div class="section <?php echo $section['theme']; ?>">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-8 col-md-offset-2">
                        <h2 class="section-title">
                            <?php echo $section['title']; ?>
                        </h2>
                        <div class="section-content">
                            <?php echo $section['content']; ?>
                        </div>
                    </div>
                </div>

                <?php if ( array_key_exists('columns', $section) ): ?>

                    <div class="row columns">
                        <?php foreach($section['columns'] as $key => $col): ?>
                            <div class="col col-md-3">
                                <?php if ( isset($col['image']) ): ?>
                                    <img src="<?= get_image($col['image']); ?>" alt="<?= $col['name']; ?>">
                                <?php endif; ?>
                                <h3><?php echo $col['name']; ?></h3>
                            </div>
                        <?php endforeach; ?>
                    </div>

                <?php endif; ?>
            </div>
        </div>

    <?php endforeach; endif; ?>
    <?php wp_link_pages(array('before' => '<nav class="pagination">', 'after' => '</nav>')); ?>
<?php endwhile; ?>
