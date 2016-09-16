  <div class="widget menu-toggle"><i class="fa fa-bars" aria-hidden="true"></i></div>
  <!-- HEADER -->
  <header id="header">
      <!-- main_panel_top -->
      <?php if (is_active_sidebar('main_panel_top')) : ?>
          <header class="widget_area header__title">
            <!-- lf_logo -->
            <div class="widget lf_logo header__title__logo">
                <a href="/"><img src="<?php echo $logo; ?>" alt="logo" class="logo-img"></a>
            </div>
            <!-- /lf_logo -->

            <!-- lf_search -->
            <div class="widget lf_search header__title__search">
              <div class="cir"><i class="fa fa-search" aria-hidden="true"></i></div>
              <form role="search" method="get" id="searchform"
                  class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                  <input type="text" class="search-field" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Zoeken..." />
              </form>
            </div>
            <!-- /lf_search -->

          </header>
      <?php endif; ?>
      <!-- /main_panel_top -->

    <!-- main_panel_middle -->
    <div class="widget_area">
    <?php 
        wp_nav_menu(
            array(
                'theme_location'  => 'main_panel',
                'container'       => 'div', 
                'container_class' => '', 
                'container_id'    => '',
                'menu_class'      => 'menu', 
                'menu_id'         => '',
                'echo'            => true,
                'depth'           => 1,
            )
        );
    ?>
    </div>
    <!-- /main_panel_middle -->

    <!-- main_panel_bottom -->
    <footer class="widget_area header__footer">
    <?php 
        wp_nav_menu(
            array(
                'theme_location'  => 'language',
                'container'       => 'div', 
                'container_class' => '', 
                'container_id'    => '',
                'menu_class'      => 'menu', 
                'menu_id'         => '',
                'echo'            => true,
            )
        );
    ?>
    <div class="links">
      <a href="#">Copyright 2016</a>&nbsp;|&nbsp;<a href="#">Privacy Policy</a>
    </div>
    </footer>
    <!-- /main_panel_bottom -->

  </header>
  <!-- / HEADER -->
  <?php echo do_shortcode('[sub_menus]'); ?> 