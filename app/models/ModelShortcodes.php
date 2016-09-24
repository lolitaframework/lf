<?php

namespace lf;

use \lf\LolitaFramework\Core\View;
use \lf\LolitaFramework\Core\Arr;
use \lf\LolitaFramework\Core\Decorators\Post;

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

    /**
     * Block b-might-like
     *
     * @param  array $atts
     * @param  string $content
     * @return string
     */
    public static function bMightLike($atts, $content = '')
    {
        $pid = Arr::get($atts, 'pid', -1);
        $p   = Post::getInstance($pid);
        if ($p instanceof Post) {
            $related_posts = $p->relatedPosts(
                'any',
                array('posts_per_page' => 3)
            );
            if (count($related_posts)) {
                return View::make(
                    'blocks' . DS . 'b-might-like',
                    array(
                        'related_posts' => $related_posts,
                    )
                );
            }
        }
        return '';
    }
}
