<?php echo do_shortcode('[header]'); ?>
<body>
  <?php echo do_shortcode('[main_sidebar]'); ?>
  <!-- CONTENT -->
  <main class="widget_area" id="main-solutions">

    <!-- Red line -->
    <div class="red-line">
        <span class="red-line__txt">solutions</span>
        <div class="red-line__btn-industries">
            <div class="arrow-loc">&lsaquo;</div>
        </div>
    </div>
    <!-- Red line -->

    <!-- modal window -->
    <div class="widget_area main-solutions__bg-modal-window modal-window-js">
        <?php echo do_shortcode('[modal_contact]') ?>
    </div>
    <!-- /modal window -->
    <!-- header of content -->
        <header class="widget_area main-solutions__header">
            <!-- first of two blocks of header -->
            <div class="widget_area main-solutions__header__bg">
                <!-- breadcrumbs -->
                <div class="widget_breadcrumbs main-solutions__header__bg__breadcrumbs">
                    <!-- Bread  -->
                    <?php echo $breadcrumbs ?>
                    <!-- / Bread  -->
                </div>  
                <!-- breadcrumbs -->
                <div class="main-solutions__header__bg__second-block">
                    <div class="main-solutions__header__bg__second-block__txt">
                        <?php the_title() ?>
                    </div>
                    <div class="main-solutions__header__bg__second-block__polygon">
                        <p><?php echo $additional_industry_sub_title ?></p>
                        <?php echo $additional_industry_description ?>
                    </div>
                </div>
            </div>
            <!-- /first of two blocks of header -->
            <?php if (is_array($additional_industry_solutions)): ?>
              <div class="widget_area main-solutions__header__menu">
                <div class="menu-navigation-container">
                  <ul class="menu">
                    <?php foreach ($additional_industry_solutions as $index => $el): ?>
                      <?php if ($index >= 8): ?>
                        <li class="menu__item" style="display:none">
                          <a href="<?php echo get_permalink($el->ID) ?>"><?php echo $el->post_title ?></a>
                        </li>
                      <?php else : ?>
                        <li class="menu__item">
                          <a href="<?php echo get_permalink($el->ID) ?>"><?php echo $el->post_title ?></a>
                        </li>
                      <?php endif ?>
                    <?php endforeach ?>
                  </ul>
                </div>
                <a href="#" class="see_more_industries"><span>&#10010;</span> See more industies</a>
              </div>
            <?php endif ?>
        </header>
        <!-- /header of content -->
        <!-- article block 1 -->
        <article class=" widget_area main-solutions__article1">
            <?php the_content(); ?>
            <?php if ('' !== $additional_industry_pdf): ?>
              <div class="main-solutions__article1__btn1">
                  <a href="<?php echo $additional_industry_pdf ?>"><i class="fa fa-play" aria-hidden="true"></i>&nbsp;Download demo</a>
              </div>
            <?php endif ?>
        </article>
        <!-- /article block 1 -->
        <?php if ('' !== $industry_row_1_content): ?>
          <!-- section block -->
          <section class="widget_area main-solutions__value-users">
              <?php echo $industry_row_1_content ?>
          </section>
          <!-- /section block -->
        <?php endif ?>
        <!-- article block 2 -->
        <article class=" widget_area main-solutions__article2">
            <div class="main-solutions__article2__block-inf">
                <header class="entry-header main-solutions__article2__block-inf__header">
                    <?php echo $industry_row_2_title ?>
                </header>
                <div class="entry-content main-solutions__article2__block-inf__content">
                    <?php echo $industry_row_2_content ?>
                </div>
                <?php if ('' !== $additional_industry_pdf): ?>
                  <div class="main-solutions__article2__block-inf__btn">
                      <a href="<?php echo $additional_industry_pdf ?>"><i class="fa fa-play" aria-hidden="true"></i>&nbsp;Download demo</a>
                  </div>
                <?php endif ?>
            </div>
            <img src="<?php echo $industry_row_2_image; ?>" alt="monitor">
        </article>
        <!-- /article block 2 -->
        <!-- section block -->
        <section class=" widget_area main-solutions__screenshots">
            <h3>Screenshots</h3>
            <div class="widget main-solutions__screenshots__slider">
                <?php foreach ((array) $industry_row_3_screenshots as $key => $value): ?>
                  <div class="main-solutions__screenshots__slider__item">
                    <img src="<?php echo $value ?>" alt="screenshot">
                    <div class="main-solutions__screenshots__slider__item__txt">
                        <?php echo $industry_row_3_content ?>
                    </div>
                  </div>
                <?php endforeach ?>
            </div>
            <?php foreach ((array) $industry_row_4_Info as $el): ?>
              <div class="widget main-solutions__screenshots__block-txt">
                <p><?php echo $el['title'] ?><span class="btn-slide-toggle">&lsaquo;</span></p>
                <p>
                    <?php echo $el['content'] ?>
                </p>
              </div>
            <?php endforeach ?>
        </section>
        <!-- /section block -->
        <!-- section block -->
        <section class="widget_area main-solutions__doze">
            <div class="main-solutions__doze__header">Deze oplossing is voor de onderstaande industrieën</div>
            <?php if (is_array($additional_industry_solutions)): ?>
              <div class="widget_area main-solutions__doze__menu">
                <div class="menu-navigation-container">
                  <ul class="menu">
                    <?php foreach ($additional_industry_solutions as $index => $el): ?>
                      <?php if ($index >= 8): ?>
                        <li class="menu__item" style="display:none">
                          <a href="<?php echo get_permalink($el->ID) ?>"><?php echo $el->post_title ?></a>
                        </li>
                      <?php else : ?>
                        <li class="menu__item">
                          <a href="<?php echo get_permalink($el->ID) ?>"><?php echo $el->post_title ?></a>
                        </li>
                      <?php endif ?>
                    <?php endforeach ?>
                  </ul>
                </div>
                <a href="#" class="see_more_industries"><span>&#10010;</span> See more industies</a>
              </div>
            <?php endif ?>
            <div class="main-solutions__doze__btn-line">
                <?php if ('' !== $additional_industry_pdf): ?>
                  <div class="main-solutions__doze__btn-line__btn">
                    <a href="<?php echo $additional_industry_pdf ?>">
                      <img src="<?php echo $theme_url; ?>/app/assets/images/solutions-inf-icon.png" alt="informations">Download brochure
                    </a>
                  </div>
                <?php endif ?>
                
                <div class="main-solutions__doze__btn-line__btn cu-jq">
                  <span>@</span>&nbsp;&nbsp;&nbsp;Contact us
                </div>
                <div class="main-solutions__doze__btn-line__btn"><span>&#10140;</span>&nbsp;&nbsp;&nbsp;See more solutions</div>
            </div>
        </section>
        <!-- /section block -->
        <!-- footer -->
        <?php echo do_shortcode('[footer_inner]'); ?>        
        <!-- /footer -->
  </main>
  <!-- /CONTENT -->
  <footer></footer>
  <!-- chat -->
    <div class="chat-btn">Let's chat?&nbsp;&nbsp;x</div>
    <div class="widget chat">
        <div class="chat__btn-exit">&#10005;</div>
        <div class="chat__title">
            Laten we chatten?
        </div>
        <div class="chat__field">
            <div class="chat__field__msg-block">
                <div class="chat__field__msg-block__name">My name</div>
                <div class="chat__field__msg-block__massage">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perferendis sequi, quam exercitationem repellat, earum deleniti ex reprehenderit doloribus, omnis beatae pariatur, architecto ipsa magnam qui mollitia eveniet totam distinctio modi.
                </div>
            </div>
        </div>
        <div class="chat__input">
            <input type="text" placeholder="Type here..." id="input-msg">
            <div class="chat__input__btn-submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></div>
        </div>
    </div>
  <!--/chat -->
<?php echo do_shortcode('[footer]'); ?>