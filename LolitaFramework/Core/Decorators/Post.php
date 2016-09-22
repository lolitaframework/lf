<?php

namespace lf\LolitaFramework\Core\Decorators;

use \lf\LolitaFramework\Core\Str;
use \WP_Post;

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
        } else {
            $this->p = $pid;
        }
        if (!($this->p instanceof WP_Post)) {
            throw new Exception('pid is not post!');
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

        if (property_exists($this->p, $field)) {
            return $this->p->$field;
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

    /**
     * Updates the post_meta of the current object with the given value
     *
     * @param string $field
     * @param mixed $value
     * @return Post instance
     */
    public function update($field, $value)
    {
        if (isset($this->ID)) {
            update_post_meta($this->ID, $field, $value);
        }
        return $this;
    }

    /**
     * Get field value
     *
     * @param  string $field
     * @return mixed
     */
    public function meta($field, $single = true)
    {
        if (isset($this->ID)) {
            return get_post_meta($this->ID, $field, $single);
        }
        return false;
    }

    /**
     * Get the CSS classes for a post.
     *
     * @return string a space-seperated list of classes
     */
    public function postClass($class = '')
    {
        $class_array = get_post_class($class, $this->ID);
        if (is_array($class_array)) {
            return implode(' ', $class_array);
        }
        return $class_array;
    }

    /**
     * Post content
     *
     * @return string
     */
    public function content($wrap = false)
    {
        if (is_integer($wrap)) {
            return apply_filters('the_content', Str::limit($this->post_content, $wrap, ''));
        }
        return apply_filters('the_content', $this->post_content);
    }

    /**
     * Get the date to use in your template!
     *
     * @param string $date_format
     * @return string
     */
    public function date($date_format = '')
    {
        $df = $date_format ? $date_format : get_option('date_format');
        $the_date = (string) mysql2date($df, $this->post_date);
        return apply_filters('get_the_date', $the_date, $df);
    }

    /**
     * Get the time to use in your template
     *
     * @param string $time_format
     * @return string
     */
    public function time($time_format = '')
    {
        $tf = $time_format ? $time_format : get_option('time_format');
        $the_time = (string) mysql2date($tf, $this->post_date);
        return apply_filters('get_the_time', $the_time, $tf);
    }

    /**
     * Returns the edit URL of a post if the user has access to it
     *
     * @return bool|string the edit URL of a post in the WordPress admin
     */
    public function editLink()
    {
        if ($this->canEdit()) {
            return get_edit_post_link($this->ID);
        }
        return '';
    }

    /**
     * Returns the post format of a post. This will usually be called in the the loop, but can be used anywhere if a post ID is provided.
     *
     * @return mixed
     */
    public function format()
    {
        return get_post_format($this->ID);
    }

    /**
     * Whether post requires password and correct password has been provided
     *
     * @return boolean
     */
    public function password_required()
    {
        return post_password_required($this->ID);
    }

    /**
     * Get the permalink for a post object
     *
     * @return string ex: http://example.org/2015/07/my-awesome-post
     */
    public function link()
    {
        return get_permalink($this->ID);
    }

    /**
     * Get the featured image as a TimberImage
     *
     * @return Image instance or null
     */
    public function img()
    {
        $tid = get_post_thumbnail_id($this->ID);
        if ($tid) {
            return $tid;
        }
    }


    /**
     * Returns the processed title to be used in templates. This returns the title of the post after WP's filters have run. This is analogous to `the_title()` in standard WP template tags.
     *
     * @return string
     */
    public function title()
    {
        return apply_filters('the_title', $this->post_title, $this->ID);
    }
}
