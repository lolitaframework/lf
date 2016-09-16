<?php echo do_shortcode('[header]'); ?>
<body>
  <?php echo do_shortcode('[main_sidebar]'); ?>
  
  <!-- CONTENT -->
  <main id="main-contact-us">
        <!-- Red line -->
        <div class="red-line">
            <span class="red-line__txt">contact&nbsp;us</span>
            <div class="red-line__btn-industries">
                <div class="arrow-loc">&lsaquo;</div>
            </div>
        </div>
        <div class="main-contact-us__bg-modal-window modal-window-js">
            <?php echo do_shortcode('[modal_contact]') ?>
        </div>

        <!-- header of content -->
        <header class="main-contact-us__header">
            <!-- breadcrumbs -->
            <div class="widget_area breadcrumbs main-contact-us__header__breadcrumbs">
                <!-- Bread  -->
                <?php echo $breadcrumbs ?>
                <!-- / Bread  -->
            </div>
            <!-- /breadcrumbs -->
            <h2><?php the_title() ?></h2>
        </header>
        <!-- /header of content -->

        
        <section class="wiget_area main-contact-us__feedback">

            <!-- custom html widget -->
            <div class="wiget_area main-contact-us__feedback__contact">
                <p>Contcat the main office</p>
                <div class="main-contact-us__feedback__contact__txt">
                    Adres:<span class="main-contact-us__feedback__contact__txt_inf"><?php echo $address ?></span>
                </div>
                <div class="main-contact-us__feedback__contact__txt">
                    Telefoon:<span class="main-contact-us__feedback__contact__txt_inf"><?php echo $telefon ?></span>
                </div>
                <div class="main-contact-us__feedback__contact__txt">
                    Partnerships:<span class="main-contact-us__feedback__contact__txt_inf"><?php echo $partnerships ?></span>
                </div>
                <div class="main-contact-us__feedback__contact__txt">
                    Sales:<span class="main-contact-us__feedback__contact__txt_inf"><?php echo $sales ?></span>
                </div>
                <div class="main-contact-us__feedback__contact__txt">
                    Communication:<span class="main-contact-us__feedback__contact__txt_inf"><?php echo $communication ?></span>
                </div>
            </div>
            <!-- /custom html widget -->

            <!-- contact us form widget -->
            <div class="wiget_area main-contact-us__feedback__form">
                <p>Or..fill this form</p>
                <span class="lf_subscribe__success-message" style="display:none;"><?php _e('Message sent successfully.', 'lf') ?></span>
                <span class="lf_subscribe__error-message" style="display:none;"><?php _e('Message not sent. Please contact the administrator for help.', 'redbrook'); ?></span>
                <div class="lf_subscribe__container">
                    <form id="contact_us_form" class="" action="/" method="post" accept-charset="utf-8">
                        <label>Name:
                            <input type="text" name="name" required="" class="lf_subscribe__name" placeholder="">
                        </label>
                        <label>Company:
                            <input type="text" name="company" required="" class="lf_subscribe__company" placeholder="">
                        </label>
                        <label>Email:
                            <input type="email" name="email" required="required" class="lf_subscribe__email" placeholder="">
                        </label>
                        <label>Phone:
                            <input type="text" name="phone" required="" class="lf_subscribe__phone" placeholder="">
                        </label>
                        <label>Message:
                            <textarea name="message"></textarea>
                        </label>
                        <input type="submit" name="" class="lf_subscribe__submit" value="Sent" id="sent">
                    </form>
                </div>
            </div>
            <!-- /contact us form widget -->
        </section>

        
        <section class="wiget_area main-contact-us__map">
            <?php echo do_shortcode($gmap_sc) ?>
        </section>
    
        <?php echo do_shortcode('[footer_inner]'); ?>        
    </main>
    <!-- /CONTENT -->
  <?php echo do_shortcode('[footer]'); ?>
