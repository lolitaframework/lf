<?php
namespace lf\app\widgets\breadcrumbs\engine\Trails;

use \lf\app\widgets\breadcrumbs\engine\Crumb;
use \lf\LolitaFramework\Core\Loc;

class Category extends Trail
{

    /**
     * Compile Category crumbs
     *
     * @author Guriev Eugen <gurievcreative@gmail.com>
     * @return Category instance.
     */
    public function compile()
    {
        $wp_rewrite = Loc::wpRewrite();

        /* Get some taxonomy and term variables. */
        $term     = get_queried_object();
        $taxonomy = get_taxonomy($term->taxonomy);

        $this->termParents($term->term_id, $taxonomy->name);
        
        return $this;
    }
}
