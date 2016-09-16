<?php
namespace lf\app\widgets\breadcrumbs\engine\Trails;

use \lf\app\widgets\breadcrumbs\engine\Crumb;

class Home extends Trail
{

    /**
     * Compile home crumbs
     *
     * @author Guriev Eugen <gurievcreative@gmail.com>
     * @return Home instance.
     */
    public function compile()
    {
        return $this;
    }
}
