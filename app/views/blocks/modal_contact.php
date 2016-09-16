<!-- modal window -->
    <div class="widget_area modal-window">
        <div class="modal-window__btn-exit">&#10005;</div>

        <!-- form widget -->
        <div class="widget modal-window__form">
            <span class="lf_subscribe__success-message" style="display:none;"><?php _e('Message sent successfully.', 'lf') ?></span>
            <span class="lf_subscribe__error-message" style="display:none;"><?php _e('Message not sent. Please contact the administrator for help.', 'redbrook'); ?></span>
            <div class="lf_subscribe__container">
                <form class="" id="contact_us_modal" action="/" method="post" accept-charset="utf-8">
                    <p>
                        <label>Name:
                            <input type="text" name="name" required="required" class="lf_subscribe__email" placeholder="">
                        </label>
                    </p>
                    <p>
                        <label>Email:
                            <input type="email" name="email" required="required" class="lf_subscribe__email" placeholder="">
                        </label>
                    </p>
                    <p>
                        <label>About product:
                            <select name="product">
                                <?php foreach ((array) $products_opt as $key => $value): ?>
                                    <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
                                <?php endforeach ?>
                            </select>
                        </label>
                    </p>
                    <p>
                        <label>Massage:
                            <textarea name="textarea" class="lf_subscribe__textarea" placeholder="" id="txt-ar"></textarea>
                        </label>
                    </p>
                    <p>
                        <input type="submit" name="submit" class="lf_subscribe__submit" value="Submit">
                    </p>
                </form>
            </div>
        </div>
        <!-- /form widget -->

        <!-- contact inform widget -->
        <div class="widget modal-window__contact">
            <p>Tel: <?php echo $telefon ?></p>
            <p>Adres: <?php echo $address ?></p>
            <p>Email: <?php echo $communication ?></p>
            <div class="widget social_networks modal-window__contact__social">
            <?php foreach ((array) $socials as $social): ?>
                <a href="<?php echo $social['url'] ?>"><i class="<?php echo $social['icon_css'] ?>"></i></a>
            <?php endforeach ?>
            </div>
        </div>
        <!-- /contact inform widget -->
    </div>
<!-- /modal window -->