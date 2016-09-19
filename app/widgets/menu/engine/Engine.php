<?php

namespace lf\app\widgets\menu\engine;

use \lf\LolitaFramework\Core\Arr;

class Engine
{
    /**
     * Locations
     */
    public static function locations()
    {
        $locations = get_nav_menu_locations();
        if (count($locations)) {
            $locations = array_flip($locations);
        }
        $locations = Arr::prepend($locations, __('Select location', 'lf'), -1);
        return $locations;
    }

    /**
     * Get menu
     */
    public static function getMenu($location = '')
    {
        if ($location > 0) {
            return wp_get_nav_menu_items($menu_id);
        }
        return false;
    }
}
