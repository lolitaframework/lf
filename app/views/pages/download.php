<?php echo do_shortcode('[header]'); ?>
<body>
	<?php echo do_shortcode('[main_sidebar]'); ?>
  <!-- CONTENT -->
 <main class="widget_area" id="main-download">
        <!-- Red line -->
        <div class="red-line">
            <span class="red-line__txt">downloads</span>
            <div class="red-line__btn-industries">
                <div class="arrow-loc">&lsaquo;</div>
            </div>
        </div>
        <!-- Red line -->

        <!-- modal window -->
        <div class="widget_area main-download__bg-modal-window modal-window-js">
            <?php echo do_shortcode('[modal_contact]') ?>
        </div>
        <!-- /modal window -->
        <!-- header of content -->
        <header class="widget_area main-download__header">
            <!-- breadcrumbs -->
            <div class="widget breadcrumbs main-download__header__breadcrumbs">
                <!-- Bread  -->
                <?php echo $breadcrumbs ?>
                <!-- / Bread  -->
            </div>
            <!-- /breadcrumbs -->
            <h2>Download center</h2>
            <p>You can download free demo’s here</p>
        </header>
        <!-- /header of content -->
        <!-- Content -->
        <section class="widget_area main-download__process">
            <img src="<?php echo SITE_URL; ?>/wp-content/themes/lf/app/assets/images/solutions-monitor.png" alt="monitor">
            <div class="main-download__pprocess__block-txt">
                <div class="main-download__process__block-txt__txt1">Business Procces Management</div>
                <div class="main-download__process__block-txt__txt2">Processes</div>
                <div class="main-download__process__block-txt__btn">Verwijder</div>
            </div>
        </section>
        <section class="widget_area main-download__tile">
            <div class="main-download__tile__title">
                See what else you could download
            </div>
            <div class="widget_area main-download__tile__block-tile">
                <div class="main-download__tile__block-tile__row">
                    <div class="widget main-download__tile__block-tile__row__col">
                        <div class="main-download__tile__block-tile__row__col__title">
                            <input type="checkbox" id="checkbox1">
                            <label for="checkbox1">Producten</label>
                        </div>
                        <div class="main-download__tile__block-tile__row__col__info">Product Lifecycle<br>Management<br>&nbsp;</div>
                    </div>
                    <div class="widget main-download__tile__block-tile__row__col">
                        <div class="main-download__tile__block-tile__row__col__title">
                            <input type="checkbox" id="checkbox2">
                            <label for="checkbox2">Processen</label>
                        </div>
                        <div class="main-download__tile__block-tile__row__col__info">Business Process<br>Management<br>&nbsp;</div>
                    </div>
                    <div class="widget main-download__tile__block-tile__row__col">
                        <div class="main-download__tile__block-tile__row__col__title">
                            <input type="checkbox" id="checkbox3">
                            <label for="checkbox3">Projecten</label>
                        </div>
                        <div class="main-download__tile__block-tile__row__col__info">Project<br>and Portfolio<br>Mnagement</div>
                    </div>
                    <div class="widget main-download__tile__block-tile__row__col">
                        <div class="main-download__tile__block-tile__row__col__title">
                            <input type="checkbox" id="checkbox4">
                            <label for="checkbox4">Activia</label>
                        </div>
                        <div class="main-download__tile__block-tile__row__col__info">Enterprise Asset<br>Management<br>&nbsp;</div>
                    </div>
                    <div class="widget main-download__tile__block-tile__row__col">
                        <div class="main-download__tile__block-tile__row__col__title">
                            <input type="checkbox" id="checkbox5">
                            <label for="checkbox5">Risico's</label>
                        </div>
                        <div class="main-download__tile__block-tile__row__col__info">Enterprice Risk<br>end Control<br>Management</div>
                    </div>
                    <div class="widget main-download__tile__block-tile__row__col">
                        <div class="main-download__tile__block-tile__row__col__title">
                            <input type="checkbox" id="checkbox6">
                            <label for="checkbox6">Kwaliteit</label>
                        </div>
                        <div class="main-download__tile__block-tile__row__col__info">Product Lifecycle<br>Management<br>&nbsp;</div>
                    </div>
                    <div class="widget main-download__tile__block-tile__row__col">
                        <div class="main-download__tile__block-tile__row__col__title">
                            <input type="checkbox" id="checkbox7">
                            <label for="checkbox7">Producten</label>
                        </div>
                        <div class="main-download__tile__block-tile__row__col__info">Product Lifecycle<br>Management<br>&nbsp;</div>
                    </div>
                    <div class="widget main-download__tile__block-tile__row__col">
                        <div class="main-download__tile__block-tile__row__col__title">
                            <input type="checkbox" id="checkbox8">
                            <label for="checkbox8">Producten</label>
                        </div>
                        <div class="main-download__tile__block-tile__row__col__info">Product Lifecycle<br>Management<br>&nbsp;</div>
                    </div>
                    <div class="widget main-download__tile__block-tile__row__col">
                        <div class="main-download__tile__block-tile__row__col__title">
                            <input type="checkbox" id="checkbox9">
                            <label for="checkbox9">Producten</label>
                        </div>
                        <div class="main-download__tile__block-tile__row__col__info">Product Lifecycle<br>Management<br>&nbsp;</div>
                    </div>
                </div>
            </div>
            <div class="main-download__tile__btn">
                <i class="fa fa-play" aria-hidden="true"></i>&nbsp;Download
            </div>
        </section>
        <section class="widget_area main-download__in">
            <div class="main-download__in__login">
                <h3>Already have an account?</h3>
                <span class="lf_subscribe__success-message" style="display:none;">success</span>
                <span class="lf_subscribe__error-message" style="display:none;">error</span>
                <div class="lf_subscribe__container">
                    <form class="" action="/" method="post" accept-charset="utf-8">
                        <label>Email:
                            <input type="email" name="email" required="required" class="lf_subscribe__email" placeholder="">
                        </label>
                        <label>Password:
                            <input type="password" name="password" required="required" class="lf_subscribe__password" placeholder="">
                        </label>
                        <input type="submit" name="" class="lf_subscribe__submit" value="Login">
                    </form>
                </div>
            </div>
            <div class="main-download__in__reg">
                <h3>Or.. MAke a new one</h3>
                <span class="lf_subscribe__success-message" style="display:none;">success</span>
                <span class="lf_subscribe__error-message" style="display:none;">error</span>
                <div class="lf_subscribe__container">
                    <form class="" action="/" method="post" accept-charset="utf-8">
                        <label>Name:
                            <input type="text" name="name" class="lf_subscribe__name" placeholder="">
                        </label>
                        <label>Company:
                            <input type="text" name="company" class="lf_subscribe__company" placeholder="">
                        </label>
                        <label>Industry:
                            <input type="text" name="industry" class="lf_subscribe__industry" placeholder="">
                        </label>
                        <label>Department:
                            <input type="text" name="dypartment" class="lf_subscribe__department" placeholder="">
                        </label>
                        <label>Title:
                            <input type="text" name="title" class="lf_subscribe__title" placeholder="">
                        </label>
                        <label>Country:
                            <input type="text" name="country" class="lf_subscribe__country" placeholder="">
                        </label>
                        <label>City:
                            <input type="text" name="city" class="lf_subscribe__city" placeholder="">
                        </label>
                        <label>How did you find us?:
                            <input type="text" name="how" class="lf_subscribe__how" placeholder="">
                        </label>
                        <label>Phone:
                            <input type="text" name="phone" class="lf_subscribe__phone" placeholder="">
                        </label>
                        <label>Email:
                            <input type="email" name="email" required="required" class="lf_subscribe__email" placeholder="">
                        </label>
                        <input type="submit" name="" class="lf_subscribe__submit" value="Register">
                    </form>
                </div>
            </div>
        </section>
        <section class="widget_area main-download__icon">
            <div class="main-download__icon__row">
                <div class="main-download__icon__row__col">
                    <img src="<?php echo SITE_URL; ?>/wp-content/themes/lf/app/assets/images/download-icon1.png" alt="icon">
                    <div class="main-download__icon__row__col__block-txt">
                        <div class="main-download__icon__row__col__block-txt__title">CPM</div>
                        <div class="main-download__icon__row__col__block-txt__info">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. In delectus quos ut totam quibusdam dolore.
                        </div>
                    </div>
                </div>
                <div class="main-download__icon__row__col">
                    <img src="<?php echo SITE_URL; ?>/wp-content/themes/lf/app/assets/images/download-icon2.png" alt="icon">
                    <div class="main-download__icon__row__col__block-txt">
                        <div class="main-download__icon__row__col__block-txt__title">ECM</div>
                        <div class="main-download__icon__row__col__block-txt__info">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. In delectus quos ut totam quibusdam dolore.
                        </div>
                    </div>
                </div>
                <div class="main-download__icon__row__col">
                    <img src="<?php echo SITE_URL; ?>/wp-content/themes/lf/app/assets/images/download-icon3.png" alt="icon">
                    <div class="main-download__icon__row__col__block-txt">
                        <div class="main-download__icon__row__col__block-txt__title">FMEA</div>
                        <div class="main-download__icon__row__col__block-txt__info">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. In delectus quos ut totam quibusdam dolore.
                        </div>
                    </div>
                </div>
                <div class="main-download__icon__row__col">
                    <img src="<?php echo SITE_URL; ?>/wp-content/themes/lf/app/assets/images/download-icon4.png" alt="icon">
                    <div class="main-download__icon__row__col__block-txt">
                        <div class="main-download__icon__row__col__block-txt__title">ERM</div>
                        <div class="main-download__icon__row__col__block-txt__info">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. In delectus quos ut totam quibusdam dolore.
                        </div>
                    </div>
                </div>
                <div class="main-download__icon__row__col">
                    <img src="<?php echo SITE_URL; ?>/wp-content/themes/lf/app/assets/images/download-icon5.png" alt="icon">
                    <div class="main-download__icon__row__col__block-txt">
                        <div class="main-download__icon__row__col__block-txt__title">BPM</div>
                        <div class="main-download__icon__row__col__block-txt__info">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. In delectus quos ut totam quibusdam dolore.
                        </div>
                    </div>
                </div>
                <div class="main-download__icon__row__col">
                    <img src="<?php echo SITE_URL; ?>/wp-content/themes/lf/app/assets/images/download-icon6.png" alt="icon">
                    <div class="main-download__icon__row__col__block-txt">
                        <div class="main-download__icon__row__col__block-txt__title">EHCS</div>
                        <div class="main-download__icon__row__col__block-txt__info">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. In delectus quos ut totam quibusdam dolore.
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /Content -->
        <!-- footer -->
        <?php echo do_shortcode('[footer_inner]'); ?>        
        <!-- /footer -->
    </main>
    <!-- /CONTENT -->
    <footer></footer>
    <!-- chat -->
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
    <!--/chat -->  <?php echo do_shortcode('[footer]'); ?>