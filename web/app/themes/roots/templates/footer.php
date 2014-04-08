<footer role="contentinfo">

    <div class="container">
        <div class="row utility">
            <div class="col-md-3 box navigation">
            <span class="heading">navigate</span>
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
                <span class="heading">address</span>
                <p>Not Here</p>
                <p>25 Waylen Drive</p>
                <p>Auburn, ME 04240</p>
                <p><a href="mailto:info@nothere.me">info@nothere.me</a></p>
            </div>

            <div class="col-md-3 box social">
            <span class="heading">social</span>
                <p><a href="#">Facebook</a></p>
                <p><a href="#">Twitter</a></p>
                <p><a href="#">Instagram</a></p>
            </div>

            <div class="col-md-3 copyright">
                <?php dynamic_sidebar('sidebar-footer'); ?>
                <br />
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
            </div>
        </div>
    </div>

</footer>

<?php wp_footer(); ?>
