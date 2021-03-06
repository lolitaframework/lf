<?php echo do_shortcode('[header]'); ?>
    <!-- l-header -->
    <header class="l-header">
        <div class="l-header__top">
            <div class="l-header__wide-container">
                <div class="l-header__w-logo">
                    <!-- w-logo -->
                    <div class="w-logo w-logo--white">
                        <a href="<?php echo home_url() ?>" class="w-logo__link" style="background-image:url('<?php echo $logo ?>');"></a>
                    </div>
                    <!-- /w-logo -->
                </div>
                <div class="l-header__w-menu">
                    <?php echo do_shortcode('[lolita-menu_sc]' . $inner_menu . '[/lolita-menu_sc]'); ?>
                </div>
                <div class="l-header__w-search-block l-header__w-search-block--hidden">
                    <!-- w-search-block -->
                    <div class="w-search-block w-search-block--header w-search-block--hidden">
                        
                        <div class="w-search-block__b-search-form">
                            <!-- b-search-form -->
                            <form class="b-search-form b-search-form--header" action="/" method="get" accept-charset="utf-8">
                                <input type="search" name="search" class="b-search-form__input" value="" placeholder="Search..." autofocus>
                            </form>
                            <!-- /b-search-form -->
                        </div>
                        <?php echo $tmpl_search_item ?>
                        <ul class="w-search-block__results"></ul>
                        <button class="w-search-block__close">Close</button>
                    </div>
                    <!-- /w-search-block -->
                </div>
            </div>
        </div>
        <?php if ('' != $p->img()->src('large')) : ?>
            <div class="l-header__botton">
                <!-- w-banner -->
                <div class="w-banner w-banner--header">
                    <div class="w-banner__image" style="background-image: url('<?php echo $p->img()->src('large') ?>');"></div>
                </div>
                <!-- /w-banner -->
            </div>
        <?php endif ?>
    </header>
    <!-- /l-header -->
    <!-- l-content -->
    <div class="l-content">
        <div class="l-content__row">
            <!-- b-article -->
            <div class="b-article">
                <header class="b-article__header">
                    <div class="b-article__header__categories">
                        <!-- b-categories -->
                        <div class="b-categories">
                            <nav>
                                <ul class="b-categories__list">
                                    <?php foreach ((array) $p->categories as $cat) : ?>
                                        <li class="b-categories__list__item">
                                            <a class="b-categories__list__item__link" href="<?php echo get_term_link($cat->term_id) ?>"><?php echo $cat->name ?></a>
                                        </li>
                                    <?php endforeach ?>
                                 </ul>
                            </nav>
                        </div>
                        <!-- /b-categories -->
                    </div>
                    <h1 class="b-article__header__title"><?php echo $p->title() ?></h1>
                    <div class="b-article__header__meta">
                        <?php _e('Posted on ', 'lf') ?><?php echo $p->date() ?>
                    </div>
                </header>
                <div class="b-article__content">
                    <div class="b-text">
                        <?php echo $p->content() ?>
                    </div>
                </div>
                <footer class="b-article__footer">
                    <!-- b-tags -->
                    <div class="b-tags">
                        <nav>
                            <ul class="b-tags__list">
                                <?php foreach ((array) $p->tags as $cat) : ?>
                                    <li class="b-tags__list__item">
                                        <a class="b-tags__list__item__link" href="<?php echo get_term_link($cat->term_id) ?>"><?php echo $cat->name ?></a>
                                    </li>
                                <?php endforeach ?>
                            </ul>
                        </nav>
                    </div>
                    <!-- /b-tags -->
                </footer>
            </div>
            <!-- /b-article -->
        </div>
        <div class="l-content__row">
            <?php echo do_shortcode('[b-might-like pid="' . $p->ID . '"]'); ?>
        </div>
        <div class="l-content__row">
            <!-- b-comments -->
            <div class="b-comments">
                <h2 class="b-comments__title">2 Comments</h2>
                <ul class="b-comments__items">
                    <li class="b-comments__item">
                        <img class="b-comments__item__img" src="./img/i-m-g-0055@3x.png" alt="">
                        <div class="b-comments__item__comment">
                            <div class="b-comments__item__comment__author">Shebela Vitaliy</div>
                            <div class="b-comments__item__comment__meta">July 29 2016 at 09:26 am</div>
                            <div class="b-comments__item__comment__text">Everybody sucks! I’m the best front end developer in this fucking world! Everybody sucks! I’m the best front end developer in this fucking world! Everybody sucks! I’m the best front end developer in this fucking world! Everybody sucks! I’m the best front end developer in this fucking world! Everybody sucks! I’m the best front end developer in this fucking world!</div>
                            <a href="#" class="b-comments__item__comment__reply">Reply</a>
                        </div>
                    </li>
                    <li class="b-comments__item">
                        <img class="b-comments__item__img" src="./img/i-m-g-0055@3x.png" alt="">
                        <div class="b-comments__item__comment">
                            <div class="b-comments__item__comment__author">Shebela Vitaliy</div>
                            <div class="b-comments__item__comment__meta">July 29 2016 at 09:26 am</div>
                            <div class="b-comments__item__comment__text">Everybody sucks! I’m the best front end developer in this fucking world!</div>
                            <a href="#" class="b-comments__item__comment__reply">Reply</a>
                        </div>
                    </li>
                </ul>
                <form class="b-comments__post-form" action="/" method="get" accept-charset="utf-8">
                    <span class="b-comments__post-form__caption">Leave a reply</span>
                    <label class="b-comments__post-form__label"><span class="b-comments__post-form__label__text">Name * :</span>
                        <input class="b-comments__post-form__input" type="text" id="name" name="name">
                    </label>
                    <label class="b-comments__post-form__label"><span class="b-comments__post-form__label__text">Email * :</span>
                        <input class="b-comments__post-form__input" type="text" id="email" name="email">
                    </label>
                    <label class="b-comments__post-form__label"><span class="b-comments__post-form__label__text">Website:</span>
                        <input class="b-comments__post-form__input" type="text" id="website" name="website">
                    </label>
                    <label class="b-comments__post-form__label"><span class="b-comments__post-form__label__text">Comment:</span>
                        <textarea class="b-comments__post-form__textarea" id="comment" name="comment"></textarea>
                    </label>
                    <input class="b-comments__post-form__submit" type="submit" name="submit" value="Post comment">
                </form>
            </div>
            <!-- /b-comments -->
        </div>
    </div>
    <!-- /l-content -->
    <!-- l-footer -->
    <div class="l-footer">
        <div class="l-footer__row">
            <?php echo do_shortcode('[lolita-instagram_sc]'.$instagram.'[/lolita-instagram_sc]') ?>
            <!-- w-folow -->
            <div class="w-folow">
                <h5 class="w-folow__title">Folow</h5>
                <div class="w-folow__frame">
                    <ul class="w-folow__items">
                        <li class="w-folow__item">
                            <a href="#" class="w-folow__item__link">
                                <img class="w-folow__item__image" src="./img/w-folow-1.jpg" alt="">
                                <div class="w-folow__item__desc">Design a lolitaframework.com website using sketch app</div>
                            </a>
                        </li>
                        <li class="w-folow__item">
                            <a href="#" class="w-folow__item__link">
                                <img class="w-folow__item__image" src="./img/w-folow-2.jpg" alt="">
                                <div class="w-folow__item__desc">Design a lolitaframework.com website using sketch app</div>
                            </a>
                        </li>
                        <li class="w-folow__item">
                            <a href="#" class="w-folow__item__link">
                                <img class="w-folow__item__image" src="./img/w-folow-3.jpg" alt="">
                                <div class="w-folow__item__desc">Design a lolitaframework.com website using sketch app</div>
                            </a>
                        </li>
                        <li class="w-folow__item">
                            <a href="#" class="w-folow__item__link">
                                <img class="w-folow__item__image" src="./img/w-folow-4.jpg" alt="">
                                <div class="w-folow__item__desc">Design a lolitaframework.com website using sketch app</div>
                            </a>
                        </li>
                        <li class="w-folow__item">
                            <a href="#" class="w-folow__item__link">
                                <img class="w-folow__item__image" src="./img/w-folow-5.jpg" alt="">
                                <div class="w-folow__item__desc">Design a lolitaframework.com website using sketch app</div>
                            </a>
                        </li>
                        <li class="w-folow__item">
                            <a href="#" class="w-folow__item__link">
                                <img class="w-folow__item__image" src="./img/w-folow-6.jpg" alt="">
                                <div class="w-folow__item__desc">Design a lolitaframework.com website using sketch app</div>
                            </a>
                        </li>
                        <li class="w-folow__item">
                            <a href="#" class="w-folow__item__link">
                                <img class="w-folow__item__image" src="./img/w-folow-7.jpg" alt="">
                                <div class="w-folow__item__desc">Design a lolitaframework.com website using sketch app</div>
                            </a>
                        </li>
                        <li class="w-folow__item">
                            <a href="#" class="w-folow__item__link">
                                <img class="w-folow__item__image" src="./img/w-folow-8.jpg" alt="">
                                <div class="w-folow__item__desc">Design a lolitaframework.com website using sketch app</div>
                            </a>
                        </li>
                        <li class="w-folow__item">
                            <a href="#" class="w-folow__item__link">
                                <img class="w-folow__item__image" src="./img/w-folow-1.jpg" alt="">
                                <div class="w-folow__item__desc">Design a lolitaframework.com website using sketch app</div>
                            </a>
                        </li>
                        <li class="w-folow__item">
                            <a href="#" class="w-folow__item__link">
                                <img class="w-folow__item__image" src="./img/w-folow-2.jpg" alt="">
                                <div class="w-folow__item__desc">Design a lolitaframework.com website using sketch app</div>
                            </a>
                        </li>
                        <li class="w-folow__item">
                            <a href="#" class="w-folow__item__link">
                                <img class="w-folow__item__image" src="./img/w-folow-3.jpg" alt="">
                                <div class="w-folow__item__desc">Design a lolitaframework.com website using sketch app</div>
                            </a>
                        </li>
                        <li class="w-folow__item">
                            <a href="#" class="w-folow__item__link">
                                <img class="w-folow__item__image" src="./img/w-folow-4.jpg" alt="">
                                <div class="w-folow__item__desc">Design a lolitaframework.com website using sketch app</div>
                            </a>
                        </li>
                        <li class="w-folow__item">
                            <a href="#" class="w-folow__item__link">
                                <img class="w-folow__item__image" src="./img/w-folow-5.jpg" alt="">
                                <div class="w-folow__item__desc">Design a lolitaframework.com website using sketch app</div>
                            </a>
                        </li>
                        <li class="w-folow__item">
                            <a href="#" class="w-folow__item__link">
                                <img class="w-folow__item__image" src="./img/w-folow-6.jpg" alt="">
                                <div class="w-folow__item__desc">Design a lolitaframework.com website using sketch app</div>
                            </a>
                        </li>
                        <li class="w-folow__item">
                            <a href="#" class="w-folow__item__link">
                                <img class="w-folow__item__image" src="./img/w-folow-7.jpg" alt="">
                                <div class="w-folow__item__desc">Design a lolitaframework.com website using sketch app</div>
                            </a>
                        </li>
                        <li class="w-folow__item">
                            <a href="#" class="w-folow__item__link">
                                <img class="w-folow__item__image" src="./img/w-folow-8.jpg" alt="">
                                <div class="w-folow__item__desc">Design a lolitaframework.com website using sketch app</div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- /w-folow -->
        </div>
        <div class="l-footer__row">
            <?php echo do_shortcode('[lolita-social-networks_sc]' . $social_icons . '[/lolita-social-networks_sc]') ?>
        </div>
        <div class="l-footer__row l-footer__row--centered">
            <?php echo do_shortcode('[b-small-logo]') ?>
        </div>
    </div>
    <!-- /l-footer -->
<?php echo do_shortcode('[footer]'); ?>