<?php echo do_shortcode('[header]'); ?>
    <!-- l-full-screen -->
    <section class="l-full-screen">
        <div class="l-full-screen__b-404">
            <!-- b-attachment -->
            <div class="b-404">
                <h1 class="b-404__title"><?php _e('404', 'lf') ?></h1>
                <h3  class="b-404__subtitle"><?php _e('Woops! Page not found!', 'lf') ?></h3>
                <a href="#" class="b-404__close">Close</a>
            </div>
            <!-- /b-attachment -->
        </div>
        <div class="l-full-screen__b-small-logo l-full-screen__b-small-logo--visible">
            <!-- b-small-logo -->
            <div class="b-small-logo">
                <a href="<?php echo home_url() ?>" class="b-small-logo__item" style="background-image:url('<?php echo $logo ?>');"></a>
            </div>
            <!-- /b-small-logo -->
        </div>
    </section>
    <!-- /l-full-screen -->
<?php echo do_shortcode('[footer]'); ?>