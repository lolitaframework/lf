<?php

namespace lf;

use \lf\LolitaFramework\Core\Arr;
use \lf\LolitaFramework\Core\Img;
use \lf\LolitaFramework\Core\Decorators\Post;

class ModelActions
{
    /**
     * AJAX. Search posts
     *
     * @return void
     */
    public static function search()
    {
        ini_set('display_errors', 1);
        ini_set('display_startup_errors', 1);
        error_reporting(E_ALL);
        //check_ajax_referer('Lolita Framework', 'nonce');
        $args = array(
            'posts_per_page'   => 3,
            'offset'           => 0,
            'orderby'          => 'date',
            'order'            => 'DESC',
            'post_type'        => 'post',
            'post_status'      => 'publish',
            'suppress_filters' => true,
            's'                => Arr::get($_POST, 's')
        );
        $items  = get_posts($args);
        $return = array();

        foreach ($items as &$item) {
            $p = new Post($item);
            $el = array(
                'url'     => $p->link(),
                'title'   => $p->title(),
                'content' => $p->content(255),
                'img'     => $p->img()->src('65x65'),
            );
            $return[] = $el;
        }

        wp_send_json_success(
            array(
                'items' => $return
            )
        );
    }
}
