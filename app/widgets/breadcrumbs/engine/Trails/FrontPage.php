<?php
namespace lf\app\widgets\breadcrumbs\engine\Trails;

use \lf\app\widgets\breadcrumbs\engine\Crumb;

class FrontPage extends Trail
{

    /**
     * Compile front page crumbs
     *
     * @author Guriev Eugen <gurievcreative@gmail.com>
     * @return FrontPage instance.
     */
    public function compile()
    {
        return $this;
    }
}
