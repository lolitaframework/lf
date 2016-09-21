<?php

namespace lf\LolitaFramework\Core\Decorators;

class Post
{
    /**
     * Current post
     * @var null
     */
    private $p = null;

    /**
     * Class consructor
     *
     * @param mixed $pid
     */
    public function __construct($pid = null)
    {
        if ($pid === null) {
            $this->p = get_post();
        } else if (is_integer($pid)) {
            $this->p = get_post($pid);
        }
    }

    /**
     * Magic __get
     *
     * @return mixed
     */
    public function __get($field)
    {
        if (property_exists($this, $field)) {
            return $this->$field;
        }

        if (method_exists($this, $field)) {
            return $this->$field();
        }
        return null;
    }

    /**
     * Can you edit this post? Well good for you. You're no better than me.
     *
     * @return bool
     */
    public function canEdit()
    {
        if (!function_exists('current_user_can')) {
            return false;
        }
        if (current_user_can('edit_post', $this->ID)) {
            return true;
        }
        return false;
    }
}
