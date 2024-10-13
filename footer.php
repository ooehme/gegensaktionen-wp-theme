</div><!-- .container -->
    <footer class="site-footer bg-light mt-4 py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
                </div>
                <div class="col-md-6">
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'depth' => 1,
                        'container' => 'nav',
                        'container_class' => 'footer-nav',
                        'menu_class' => 'nav justify-content-end',
                    ));
                    ?>
                </div>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>
</html>