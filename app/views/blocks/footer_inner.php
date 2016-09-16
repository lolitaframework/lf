        <!-- footer -->
        <footer class="widget_area main-contact-us__footer">
            <div class="row">
                <div class="widget_area main-contact-us__footer__col">
                    <div class="col-left">
                        <h4>Products</h4>
                        <!-- footer_menu_1_left -->
                        <?php echo do_shortcode('[footer_menu_1_left]'); ?>
                        <!-- /footer_menu_1_left -->
                    </div>
                    <div class="col-right">
                        <!-- footer_menu_1_right -->
                        <?php echo do_shortcode('[footer_menu_1_right]'); ?>
                        <!-- /footer_menu_1_right -->
                    </div>
                </div>
                <div class="widget_area main-contact-us__footer__col">
                    <div class="col-left">
                        <h4>Industrie</h4>
                        <!-- footer_menu_2_left -->
                        <?php echo do_shortcode('[footer_menu_2_left]'); ?>
                        <!-- /footer_menu_2_left -->
                    </div>
                    <div class="col-right">
                        <!-- footer_menu_2_right -->
                        <?php echo do_shortcode('[footer_menu_2_right]'); ?>
                        <!-- /footer_menu_2_right -->
                    </div>
                </div>
                <div class="widget_area main-contact-us__footer__col">
                    <h4>Service</h4>
                        <!-- footer_menu_3 -->
                        <?php echo do_shortcode('[footer_menu_3]'); ?>
                        <!-- /footer_menu_3 -->
                </div>
                <div class="widget_area main-contact-us__footer__col">
                    <h4>About</h4>
                        <!-- footer_menu_4 -->
                        <?php echo do_shortcode('[footer_menu_4]'); ?>
                        <!-- /footer_menu_4 -->
                </div>
                <?php if (is_active_sidebar('footer_social_network_area')) : ?>
                <div class="widget_area main-contact-us__footer__col">
                    <h4>Social media</h4>
                    
                    <?php dynamic_sidebar('footer_social_network_area'); ?>
                    
                    <!-- social_networks widget -->
                    <div class="widget social_networks social-icon">
                        <a href="https://www.facebook.com"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                        <a href="https://www.youtube.com"><i class="fa fa-youtube-square" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                    </div>
                    <!-- /social_networks widget -->
                </div>
                <?php endif; ?>
            </div>
        </footer>
        <!-- /footer -->
