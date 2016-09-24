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
                    <!-- w-menu -->
                    <div class="w-menu w-menu--header">
                        <nav>
                            <ul class="w-menu__container">
                                <li class="w-menu__item w-menu__item--has_submenu">
                                    <a href="#" class="w-menu__link">Docs</a>
                                    <ul class="w-menu__sub-menu">
                                        <li class="w-menu__sub-menu-item"><a href="#" class="w-menu__sub-menu-link">Configuration</a>
                                        </li>
                                        <li class="w-menu__sub-menu-item"><a href="#" class="w-menu__sub-menu-link">Core</a></li>
                                        <li class="w-menu__sub-menu-item"><a href="#" class="w-menu__sub-menu-link">Controls</a></li>
                                    </ul>
                                </li>
                                <li class="w-menu__item w-menu__item--has_submenu">
                                    <a href="#" class="w-menu__link">About me</a>
                                    <ul class="w-menu__sub-menu">
                                        <li class="w-menu__sub-menu-item"><a href="#" class="w-menu__sub-menu-link">Configuration1</a></li>
                                        <li class="w-menu__sub-menu-item"><a href="#" class="w-menu__sub-menu-link">Core1</a></li>
                                        <li class="w-menu__sub-menu-item"><a href="#" class="w-menu__sub-menu-link">Controls1</a></li>
                                    </ul>
                                </li>
                                <li class="w-menu__item w-menu__item--has_submenu">
                                    <a href="#" class="w-menu__link">Our works</a>
                                    <ul class="w-menu__sub-menu">
                                        <li class="w-menu__sub-menu-item"><a href="#" class="w-menu__sub-menu-link">Configuration3</a></li>
                                    </ul>
                                </li>
                                <li class="w-menu__item"><a href="#" class="w-menu__link w-menu__link--search">Search</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- /w-menu -->
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
                        
                        <ul class="w-search-block__results">
                            <li class="w-search-block__item">
                                <a href="#" class="w-search-block__link">
                                    <img class="w-search-block__img" src="./img/i-m-g-0055@3x.png" alt="">
                                    <div class="w-search-block__text">
                                        <h3><b>Here is</b> will be title</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati atque sit eius, doloribus autem officia! Totam laboriosam quisquam possimus, omnis sequi quod amet reiciendis, nesciunt repudiandae minima illo molestias qui.</p>
                                    </div>
                                </a>
                            </li>
                            <li class="w-search-block__item">
                                <a href="#" class="w-search-block__link">
                                    <img class="w-search-block__img" src="./img/i-m-g-0055@3x.png" alt="">
                                    <div class="w-search-block__text">
                                        <h3><b>Here is</b> will be title</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati atque sit eius, doloribus autem officia! Totam laboriosam quisquam possimus, omnis sequi quod amet reiciendis, nesciunt repudiandae minima illo molestias qui.</p>
                                    </div>
                                </a>
                            </li>
                            <li class="w-search-block__item">
                                <a href="#" class="w-search-block__link">
                                    <img class="w-search-block__img" src="./img/i-m-g-0055@3x.png" alt="">
                                    <div class="w-search-block__text">
                                        <h3><b>Here is</b> will be title</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Obcaecati atque sit eius, doloribus autem officia! Totam laboriosam quisquam possimus, omnis sequi quod amet reiciendis, nesciunt repudiandae minima illo molestias qui.</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <button class="w-search-block__close">Close</button>
                    </div>
                    <!-- /w-search-block -->
                </div>
            </div>
        </div>
        <div class="l-header__botton">
            <!-- w-banner -->
            <div class="w-banner w-banner--header">
                <div class="w-banner__image" style="background-image: url('./img/banner-1.jpg');"></div>
            </div>
            <!-- /w-banner -->
        </div>
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
                                    <li class="b-categories__list__item"><a class="b-categories__list__item__link" href="#">Core</a></li>
                                    <li class="b-categories__list__item"><a class="b-categories__list__item__link" href="#">Widgets</a></li>
                                    <li class="b-categories__list__item"><a class="b-categories__list__item__link" href="#">Category</a></li>
                                 </ul>
                            </nav>
                        </div>
                        <!-- /b-categories -->
                    </div>
                    <h1 class="b-article__header__title">Lolita Framework</h1>
                    <div class="b-article__header__meta">
                        Posted on July 28 2016
                    </div>
                </header>
                <div class="b-article__content">
                    <div class="b-text">
                        <img src="./img/page-picture-1.jpg" class="alignleft" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae labore nesciunt exercitationem consequuntur asperiores laboriosam consequatur iusto. Nam earum, beatae veritatis ullam amet ipsam, dolore, quod fugit dolorum corporis libero accusantium quasi? Officiis optio ex deserunt iste voluptate delectus harum, error nisi. Ipsum quia repellat molestias, magnam voluptates nemo, repudiandae vitae quibusdam dolorum totam quaerat, dignissimos vel, deserunt!</p>
                        <p>Animi adipisci, explicabo, tempore quod nobis ipsam delectus reiciendis consequatur fuga facilis architecto quisquam quibusdam dolores tenetur reprehenderit blanditiis eum. Eos accusantium autem, odio ipsam placeat est consectetur, ut reprehenderit optio voluptate veniam at architecto, quam perferendis suscipit, fugit praesentium sapiente!</p>
                        <p>Dolor commodi, sequi id ullam fugiat, alias neque error quibusdam debitis. Cum numquam possimus quia, facere at, nobis consequatur. Corporis nostrum dicta quas aliquam reprehenderit quibusdam blanditiis hic. Aut culpa amet, voluptas nemo repellendus nihil possimus. Voluptate at ex, ratione ipsa quisquam modi consectetur officiis adipisci itaque blanditiis debitis nam soluta facere similique autem neque asperiores quam dolorem aliquid recusandae quaerat iure. Commodi sint dolore tempora.</p>
                        <img src="./img/page-picture-2.jpg" class="alignright" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae labore nesciunt exercitationem consequuntur asperiores laboriosam consequatur iusto. Nam earum, beatae veritatis ullam amet ipsam, dolore, quod fugit dolorum corporis libero accusantium quasi? Officiis optio ex deserunt iste voluptate delectus harum, error nisi. Ipsum quia repellat molestias, magnam voluptates nemo, repudiandae vitae quibusdam dolorum totam quaerat, dignissimos vel, deserunt!</p>
                        <p>Animi adipisci, explicabo, tempore quod nobis ipsam delectus reiciendis consequatur fuga facilis architecto quisquam quibusdam dolores tenetur reprehenderit blanditiis eum. Eos accusantium autem, odio ipsam placeat est consectetur, ut reprehenderit optio voluptate veniam at architecto, quam perferendis suscipit, fugit praesentium sapiente!</p>
                        <p>Dolor commodi, sequi id ullam fugiat, alias neque error quibusdam debitis. Cum numquam possimus quia, facere at, nobis consequatur. Corporis nostrum dicta quas aliquam reprehenderit quibusdam blanditiis hic. Aut culpa amet, voluptas nemo repellendus nihil possimus. Voluptate at ex, ratione ipsa quisquam modi consectetur officiis adipisci itaque blanditiis debitis nam soluta facere similique autem neque asperiores quam dolorem aliquid recusandae quaerat iure. Commodi sint dolore tempora.</p>
                        <p>Dolor commodi, sequi id ullam fugiat, alias neque error quibusdam debitis. Cum numquam possimus quia, facere at, nobis consequatur. Corporis nostrum dicta quas aliquam reprehenderit quibusdam blanditiis hic. Aut culpa amet, voluptas nemo repellendus nihil possimus. Voluptate at ex, ratione ipsa quisquam modi consectetur officiis adipisci itaque blanditiis debitis nam soluta facere similique autem neque asperiores quam dolorem aliquid recusandae quaerat iure. Commodi sint dolore tempora.</p>
                        <h1>H1 - lolita is awesome framework</h1>
                        <h2>H2 - lolita is awesome framework</h2>
                        <h3>H3 - lolita is awesome framework</h3>
                        <h4>H4 - lolita is awesome framework</h4>
                        <h1>Blockquote</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae labore nesciunt exercitationem consequuntur asperiores laboriosam consequatur iusto.</p>
                        <blockquote>
                            <p>
                                Lolita Framework just fucking awesome!
                                <br> - Shebela Vitaliy
                            </p>
                        </blockquote>
                        <h1>Unordered list</h1>
                        <ul>
                            <li>Item 1</li>
                            <li>Item 2</li>
                            <li>Item 3</li>
                            <li>Item 4</li>
                        </ul>
                        <h1>Ordered list</h1>
                        <ol>
                            <li>Item 1</li>
                            <li>Item 2</li>
                            <li>Item 3</li>
                            <li>Item 4</li>
                        </ol>
                    </div>
                </div>
                <footer class="b-article__footer">
                    <!-- b-tags -->
                    <div class="b-tags">
                        <nav>
                            <ul class="b-tags__list">
                                <li class="b-tags__list__item"><a class="b-tags__list__item__link" href="#">CONFIGURATION</a></li>
                                <li class="b-tags__list__item"><a class="b-tags__list__item__link" href="#">Tag</a></li>
                                <li class="b-tags__list__item"><a class="b-tags__list__item__link" href="#">CSS Loader</a></li>
                                <li class="b-tags__list__item"><a class="b-tags__list__item__link" href="#">Widgets</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- /b-tags -->
                </footer>
            </div>
            <!-- /b-article -->
        </div>
        <div class="l-content__row">
            <!-- b-might-like -->
            <div class="b-might-like">
                <h2 class="b-might-like__title">You might also like</h2>
                <ul class="b-might-like__items">
                    <li class="b-might-like__item">
                        <a href="#" class="b-might-like__item__link">
                            <img src="./img/b-might-like-1.png" class="b-might-like__item__image" alt="">
                            <h4 class="b-might-like__item__caption">Some article title</h4>
                            <div class="b-might-like__item__meta">July 28 2016</div>
                        </a>
                    </li>
                    <li class="b-might-like__item">
                        <a href="#" class="b-might-like__item__link">
                            <img src="./img/b-might-like-2.png" class="b-might-like__item__image" alt="">
                            <h4 class="b-might-like__item__caption">Some article title</h4>
                            <div class="b-might-like__item__meta">July 28 2016</div>
                        </a>
                    </li>
                    <li class="b-might-like__item">
                        <a href="#" class="b-might-like__item__link">
                            <img src="./img/b-might-like-3.png" class="b-might-like__item__image" alt="">
                            <h4 class="b-might-like__item__caption">Some article title</h4>
                            <div class="b-might-like__item__meta">July 28 2016</div>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- /b-might-like -->
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
            <!-- w-social-buttons -->
            <div class="w-social-buttons">
                <ul class="w-social-buttons__items">
                    <li class="w-social-buttons__item">
                        <a href="#" class="w-social-buttons__link"><i class="w-social-buttons__link__icon fa fa-facebook"></i></a>
                    </li>
                    <li class="w-social-buttons__item">
                        <a href="#" class="w-social-buttons__link"><i class="w-social-buttons__link__icon fa fa-twitter"></i></a>
                    </li>
                    <li class="w-social-buttons__item">
                        <a href="#" class="w-social-buttons__link"><i class="w-social-buttons__link__icon fa fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
            <!-- /w-social-buttons -->
        </div>
        <div class="l-footer__row l-footer__row--centered">
            <?php echo do_shortcode('[b-small-logo]') ?>
        </div>
    </div>
    <!-- /l-footer -->
<?php echo do_shortcode('[footer]'); ?>