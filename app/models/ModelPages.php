<?php

namespace lf;

use \lf\LolitaFramework\Core\View;
use \lf\LolitaFramework\Core\Decorators\Post;

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
                ),
                'tmpl_search_item' => View::make('tmpl' . DS . 'search_item'),
            )
        );
    }

    /**
     * 404 page
     */
    public static function page404()
    {
        return View::make('pages' . DS . '404');
    }

    /**
     * 404 page
     */
    public static function single()
    {
        the_post();
        return View::make(
            'pages' . DS . 'single',
            array(
                'logo' => get_theme_mod(
                    'general_site_settings_upload_a_second_logo'
                ),
                'p' => new Post(get_post()),
                'inner_menu' => View::make('json' . DS . 'inner_menu'),
            )
        );
    }
}
