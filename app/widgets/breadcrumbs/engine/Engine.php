<?php
namespace lf\app\widgets\breadcrumbs\engine;

use \lf\LolitaFramework\Core\Route;
use \lf\LolitaFramework\Core\Str;
use \lf\LolitaFramework\Core\View;
use \lf\app\widgets\breadcrumbs\engine\Trails\Trail;

class Engine
{
    /**
     * Widget view
     *
     * @param  array $args
     * @param  array $instance
     * @return string HTML code.
     */
    public static function widget($args, $instance)
    {
        $crumbs = self::compile();
        echo View::make(
            dirname(dirname(__FILE__)) . DS . 'views' . DS . 'breadcrumbs.php',
            array(
                'crumbs'   => $crumbs,
                'args'     => $args,
                'instance' => $instance,
            )
        );
    }
    /**
     * Get trail
     *
     * @author Guriev Eugen <gurievcreative@gmail.com>
     * @return mixed Trail class or null.
     */
    public static function getTrail()
    {
        $route_class = self::getRouteClass();
        if (class_exists($route_class)) {
            return new $route_class();
        }
        return null;
    }

    /**
     * Compile trail
     *
     * @author Guriev Eugen <gurievcreative@gmail.com>
     * @return mixed Trail or Null.
     */
    public static function compile()
    {
        $trail  = self::getTrail();
        $crumbs = array();
        if ($trail instanceof Trail) {
            $crumbs = $trail->compile()->getCrumbs();
            $crumbs[ count($crumbs) - 1 ]->setLink();
        }
        return $crumbs;
    }

    /**
     * Get route function
     *
     * @author Guriev Eugen <gurievcreative@gmail.com>
     * @return string route function.
     */
    public static function getRouteClass()
    {
        $route_class = Str::studly(Route::type());
        if ('404' === $route_class) {
            $route_class = 'Trail404';
        }
        return __NAMESPACE__ . NS . 'Trails' . NS . $route_class;
    }
}
