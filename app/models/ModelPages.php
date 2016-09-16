<?php

namespace lf;

use \lf\LolitaFramework\Core\View;
use \lf\LolitaFramework\Core\Img;
use \lf\LolitaFramework\Core\Arr;
use \lf\LolitaFramework\Core\Str;
use \lf\LolitaFramework\Core\Data;
use \lf\LolitaFramework\Core\Route;
use \lf\LolitaFramework;

class ModelPages{

    /**
     * Home page
     */
    public static function home()
    {
        return View::make(
            'pages' . DS . 'home',
            array(
                'logo' => 
                get_theme_mod(
                    'general_site_settings_upload_a_logo'
                )
            )
        );
    }
}