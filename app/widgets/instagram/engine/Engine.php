<?php

namespace lf\app\widgets\instagram\engine;

use \lf\LolitaFramework\Core\Arr;
use \lf\LolitaFramework\Core\View;
use \lf\app\widgets\instagram\engine\sdk\Instagram;

class Engine
{
    /**
     * Render the google map widget
     *
     * @param  array $args
     * @param  array $instance
     * @return void
     */
    public static function widget($args, $instance)
    {
        $instagram = new Instagram('b7d74f40454b44df83186e95ce6dab75');
        echo '<pre>';
        var_dump($instagram->getPopularMedia());
        echo '</pre>';
    }
}
