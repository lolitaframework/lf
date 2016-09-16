<?php echo do_shortcode('[header]'); ?>
<body>
  <?php echo do_shortcode('[main_sidebar]'); ?>

  <!-- CONTENT -->
  <?php if (is_active_sidebar('home_content')) : ?>
  <main class="widget_area" id="main" style="background: #eee url(<?php echo $background_image; ?>) 50% 50% no-repeat; background-size: cover;">
    <!-- Red line -->
    <div class="red-line">
        <span class="red-line__txt">home</span>
        <div class="red-line__btn-industries">
            <div class="arrow-loc">&lsaquo;</div>
        </div>
    </div>
    <!-- Red line -->
    <?php dynamic_sidebar('home_content'); ?>
  </main>
  <?php endif; ?>
  <!-- /CONTENT -->
<?php echo do_shortcode('[footer]'); ?>