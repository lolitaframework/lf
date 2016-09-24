<?php

namespace lf;

use \lf\LolitaFramework\Core\View;

class ModelShortcodes
{

    /**
     * Header
     * @return string HTML code header.
     */
    public static function header()
    {
        return View::make('blocks' . DS . 'header');
    }

    /**
     * Footer
     * @return string HTML code footer.
     */
    public static function footer()
    {
        return View::make('blocks' . DS . 'footer');
    }

    /**
     * Block b-small-logo
     *
     * @return string HTML code.
     */
    public static function bSmallLogo()
    {
        return View::make(
            'blocks' . DS . 'b-small-logo',
            array(
                'logo' => get_theme_mod(
                    'general_site_settings_upload_a_logo'
                ),
            )
        );
    }
}
