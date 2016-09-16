<?php

namespace lf;

use \lf\LolitaFramework\Core\View;
use \lf\LolitaFramework\Core\Img;
use \lf\LolitaFramework\Core\Arr;
use \lf\LolitaFramework\Core\Str;
use \lf\LolitaFramework\Core\Data;
use \lf\LolitaFramework\Core\Route;

class ModelMain{
    public static function products()
    {
        $args = array(
            'posts_per_page'   => -1,
            'offset'           => 0,
            'category'         => '',
            'category_name'    => '',
            'orderby'          => 'date',
            'order'            => 'DESC',
            'include'          => '',
            'exclude'          => '',
            'meta_key'         => '',
            'meta_value'       => '',
            'post_type'        => 'product',
            'post_mime_type'   => '',
            'post_parent'      => '',
            'author'       => '',
            'author_name'      => '',
            'post_status'      => 'publish',
            'suppress_filters' => true 
        );
        return get_posts($args);
    }

    public static function productsSelect()
    {
        $products = self::products();
        $options  = Arr::pluck($products, 'post_title', 'ID');
        return $options;
    }

    public static function industries()
    {
        $args = array(
            'posts_per_page'   => -1,
            'offset'           => 0,
            'category'         => '',
            'category_name'    => '',
            'orderby'          => 'date',
            'order'            => 'DESC',
            'include'          => '',
            'exclude'          => '',
            'meta_key'         => '',
            'meta_value'       => '',
            'post_type'        => 'industry',
            'post_mime_type'   => '',
            'post_parent'      => '',
            'author'       => '',
            'author_name'      => '',
            'post_status'      => 'publish',
            'suppress_filters' => true 
        );
        return get_posts($args);
    }

    public static function industriesSelect()
    {
        $products = self::industries();
        $options  = Arr::pluck($products, 'post_title', 'ID');
        return $options;
    }

    public static function getMenu($location = '')
    {
        $locations = get_nav_menu_locations();
        $menu_id   = $locations[ $location ];
        return wp_get_nav_menu_items($menu_id);
    }

    public static function getMenuGraph($location)
    {
        $graph = array();
        $menu_items = self::getMenu($location);
        foreach ((array) $menu_items as $item) {
            $item->post    = get_post($item->object_id);
            $item->excerpt = Str::words(strip_tags($item->post->post_content), 50, '');
            $graph[$item->menu_item_parent][] = $item;
        }
        return $graph;
    }
}