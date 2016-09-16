<ul id="main-industries" class="sub-menus">
<?php foreach ($menu as $parent => $items): ?>
    <?php if ($parent > 0): ?>
        <?php
        $p = get_post($parent);
        foreach ($parents as $el) {
            if ($el->ID == $parent) {
                $p = $el;
            }
        }
        ?>
            <i class="fa fa-arrow-left submenu_back_button" aria-hidden="true"></i>
            <li class="sub-menu sub-menu-1 menu-item-<?php echo $parent; ?>">
                <!-- Banner -->
                <section class="widget_area main-industries__banner" style="">
                    <div class="widget main-industries__banner__block-txt">
                        <div class="main-industries__banner__block-txt__title">
                            <?php echo $p->title ?>
                        </div>
                        <div class="main-industries__banner__block-txt__content">
                            <?php echo $p->description ?>
                        </div>
                    </div>
                </section>
                <!--/Banner -->
                <?php if (count($items) < 13) : ?>
                    <section class="widget_area main-industries__tile">
                    <?php for($i = 0; $i < count($items); $i+=4) : ?>
                        <?php for($x = 0; $x < 4; $x++) : ?>
                            <?php if (isset($items[$i+$x])) : ?>
                                <?php $el = $items[$i+$x]; ?>
                                <div class="main-industries__tile__col" data-index="<?php echo $i+$x; ?>">
                                    <div class="main-industries__tile__col__title"><?php echo $el->title ?></div>
                                    <div class="main-industries__tile__col__info"><?php echo $el->description ?></div>
                                    <div class="main-industries__tile__col__triangle"></div>
                                    <div class="main-industries__tile__col__block-product">
                                        <div class="main-industries__tile__col__block-product__title">
                                            <?php echo $el->post->post_title ?>
                                            <br>
                                        </div>
                                        <div class="main-industries__tile__col__block-product__txt">
                                            <?php echo $el->excerpt ?>
                                        </div>
                                        <div class="main-industries__tile__col__block-product__butt">
                                            <a href="<?php echo get_permalink($el->object_id) ?>">
                                                Go to this product <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <?php if ($i+$x == 3): ?>
                                    <!-- five element -->
                                    <div class="main-industries__tile__col-ins">
                                        <div class="main-industries__tile__col-ins__title"></div>
                                        <div class="main-industries__tile__col-ins__txt"></div>
                                        <div class="main-industries__tile__col-ins__butt"></div>
                                    </div>
                                    <!-- /five element -->
                                <?php endif ?>
                            <?php endif ?>
                        <?php endfor ?>
                    <?php endfor; ?>
                    </section>
                <?php else : ?>
                    <!-- Section fields -->
                    <section class="widget_area main-industries__fields">
                        <?php foreach ($items as $el) : ?>
                            <div class="widget main-industries__fields__item">
                                <?php echo $el->title ?>
                                <div class="main-industries__fields__item__block-inside">
                                    <div class="main-industries__fields__item__block-inside__triangle"></div>
                                    <div class="main-industries__fields__item__block-inside__title">
                                        <?php echo $el->post->post_title ?>
                                    </div>
                                    <div class="main-industries__fields__item__block-inside__content">
                                        <?php echo $el->excerpt ?>
                                    </div>
                                    <div class="main-industries__fields__item__block-inside__butt">
                                        <a href="<?php echo get_permalink($el->object_id) ?>">
                                            Go to this product <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    </section>
                    <!-- /Section fields -->
                <?php endif ?>
            </li>
    <?php endif ?>
<?php endforeach ?>
</ul>