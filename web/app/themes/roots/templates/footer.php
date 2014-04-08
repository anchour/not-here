<footer role="contentinfo">

    <div class="container">
        <div class="row utility">
            <div class="col-md-3 box navigation">
                <?php
                if (has_nav_menu('primary_navigation')) :
                    wp_nav_menu([
                        'theme_location' => 'primary_navigation',
                        'menu_class' => 'nav footer-nav list-unstyled',
                        'depth' => 1,
                    ]);
                endif;
                ?>
            </div>

            <div class="col-md-3 box address">
                <p>Not Here</p>
                <p>25 Waylen Drive</p>
                <p>Auburn, ME 04240</p>
            </div>

            <div class="col-md-3 box contact">
                <p><span>E:</span> <a href="mailto:info@nothere.me">info@nothere.me</a></p>
                <p><span>T:</span> 207-123-4567</p>
                <p><span>F:</span> 207-123-4567</p>
            </div>

            <div class="col-md-3 box social">
                <p><a href="#">Facebook</a></p>
                <p><a href="#">Twitter</a></p>
                <p><a href="#">Instagram</a></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 copyright text-center">
                <?php dynamic_sidebar('sidebar-footer'); ?>
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
            </div>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>
