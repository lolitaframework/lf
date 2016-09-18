<?php

namespace lf;

use \lf\LolitaFramework\Core\View;

class ModelPages
{

    /**
     * Home page
     */
    public static function home()
    {
        return View::make(
            'pages' . DS . 'home',
            array(
                'logo' => get_theme_mod(
                    'general_site_settings_upload_a_logo'
                )
            )
        );
    }
}
