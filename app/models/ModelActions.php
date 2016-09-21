<?php

namespace lf;

use \lf\LolitaFramework\Core\Arr;

class ModelActions
{
    /**
     * AJAX. Search posts
     *
     * @return void
     */
    public static function search()
    {
        check_ajax_referer('Lolita Framework', 'nonce');
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
            $el = array(
                'url'     => get_permalink($item->ID),
                'title'   => get_the_title($item->ID),
                'content' => $item->post_content,
                'img'     => '',
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
