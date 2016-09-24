<?php

namespace lf\LolitaFramework\Core\Decorators;

use \lf\LolitaFramework\Core\Str;
use \lf\LolitaFramework\Core\Loc;
use \WP_Post;

class Post
{
    /**
     * Post ID.
     *
     * @var int
     */
    public $ID;

    /**
     * ID of post author.
     *
     * A numeric string, for compatibility reasons.
     *
     * @var string
     */
    public $post_author = 0;

    /**
     * The post's local publication time.
     *
     * @var string
     */
    public $post_date = '0000-00-00 00:00:00';

    /**
     * The post's GMT publication time.
     *
     * @var string
     */
    public $post_date_gmt = '0000-00-00 00:00:00';

    /**
     * The post's content.
     *
     * @var string
     */
    public $post_content = '';

    /**
     * The post's title.
     *
     * @var string
     */
    public $post_title = '';

    /**
     * The post's excerpt.
     *
     * @var string
     */
    public $post_excerpt = '';

    /**
     * The post's status.
     *
     * @var string
     */
    public $post_status = 'publish';

    /**
     * Whether comments are allowed.
     *
     * @var string
     */
    public $comment_status = 'open';

    /**
     * Whether pings are allowed.
     *
     * @var string
     */
    public $ping_status = 'open';

    /**
     * The post's password in plain text.
     *
     * @var string
     */
    public $post_password = '';

    /**
     * The post's slug.
     *
     * @var string
     */
    public $post_name = '';

    /**
     * URLs queued to be pinged.
     *
     * @var string
     */
    public $to_ping = '';

    /**
     * URLs that have been pinged.
     *
     * @var string
     */
    public $pinged = '';

    /**
     * The post's local modified time.
     *
     * @var string
     */
    public $post_modified = '0000-00-00 00:00:00';

    /**
     * The post's GMT modified time.
     *
     * @var string
     */
    public $post_modified_gmt = '0000-00-00 00:00:00';

    /**
     * A utility DB field for post content.
     *
     *
     * @var string
     */
    public $post_content_filtered = '';

    /**
     * ID of a post's parent post.
     *
     * @var int
     */
    public $post_parent = 0;

    /**
     * The unique identifier for a post, not necessarily a URL, used as the feed GUID.
     *
     * @var string
     */
    public $guid = '';

    /**
     * A field used for ordering posts.
     *
     * @var int
     */
    public $menu_order = 0;

    /**
     * The post's type, like post or page.
     *
     * @var string
     */
    public $post_type = 'post';

    /**
     * An attachment's mime type.
     *
     * @var string
     */
    public $post_mime_type = '';

    /**
     * Cached comment count.
     *
     * A numeric string, for compatibility reasons.
     *
     * @var string
     */
    public $comment_count = 0;

    /**
     * Stores the post object's sanitization level.
     *
     * Does not correspond to a DB field.
     *
     * @var string
     */
    public $filter;

    /**
     * Retrieve WP_Post instance.
     *
     * @static
     * @access public
     *
     * @global wpdb $wpdb WordPress database abstraction object.
     *
     * @param int $post_id Post ID.
     * @return WP_Post|false Post object, false otherwise.
     */
    public static function getInstance($post_id)
    {
        $wpdb = Loc::wpdb();

        $post_id = (int) $post_id;
        if (!$post_id) {
            return false;
        }

        $_post = wp_cache_get($post_id, 'posts');

        if (!$_post) {
            $_post = $wpdb->get_row($wpdb->prepare("SELECT * FROM $wpdb->posts WHERE ID = %d LIMIT 1", $post_id));

            if (!$_post) {
                return false;
            }

            $_post = sanitize_post($_post, 'raw');
            wp_cache_add($_post->ID, $_post, 'posts');
        } else if (empty($_post->filter)) {
            $_post = sanitize_post($_post, 'raw');
        }

        return new Post($_post);
    }

    /**
     * Constructor.
     *
     * @param WP_Post|object $post Post object.
     */
    public function __construct($post)
    {
        foreach (get_object_vars($post) as $key => $value) {
            $this->$key = $value;
        }
    }

    /**
     * Isset-er.
     *
     * @param string $key Property to check if set.
     * @return bool
     */
    public function __isset($key)
    {
        if ('ancestors' == $key) {
            return true;
        }

        if ('page_template' == $key) {
            return 'page' == $this->post_type;
        }

        if ('post_category' == $key) {
            return true;
        }

        if ('tags_input' == $key) {
            return true;
        }

        return metadata_exists('post', $this->ID, $key);
    }

    /**
     * Getter.
     *
     * @param string $key Key to get.
     * @return mixed
     */
    public function __get($key)
    {
        if ('page_template' == $key && $this->__isset($key)) {
            return get_post_meta($this->ID, '_wp_page_template', true);
        }

        if ('categories' == $key) {
            return $this->terms('category', true);
        }

        if ('tags' == $key) {
            return $this->terms('post_tag', true);
        }

        // Rest of the values need filtering.
        if ('ancestors' == $key) {
            $value = get_post_ancestors($this);
        } else {
            $value = get_post_meta($this->ID, $key, true);
        }

        if ($this->filter) {
            $value = sanitize_post_field($key, $value, $this->ID, $this->filter);
        }

        return $value;
    }

    /**
     * Get the terms associated with the post
     * This goes across all taxonomies by default
     *
     * @param  string|array $tax What taxonom(y|ies) to pull from. Defaults to all registered taxonomies for the post type. You can use custom ones, or built-in WordPress taxonomies (category, tag). Timber plays nice and figures out that tag/tags/post_tag are all the same (and categories/category), for custom taxonomies you're on your own.
     * @param bool $merge Should the resulting array be one big one (true)? Or should it be an array of sub-arrays for each taxonomy (false)?
     * @return array
     */
    public function terms($tax = '', $merge = false)
    {
        $taxonomies = array();
        if (is_array($tax)) {
            $taxonomies = $tax;
        }
        if (is_string($tax)) {
            if (in_array($tax, array('all', 'any', ''))) {
                $taxonomies = get_object_taxonomies($this->post_type);
            } else {
                $taxonomies = array($tax);
            }
        }
        $term_class_objects = array();

        foreach ($taxonomies as $taxonomy) {
            $terms = wp_get_post_terms($this->ID, $taxonomy);

            if (is_wp_error($terms)) {
                throw new Exception("Error retrieving terms for taxonomy '$taxonomy' on a post in timber-post.php. WP_Error:" . $terms->get_error_message());
                return $term_class_objects;
            }

            if ( $merge && is_array($terms) ) {
                $term_class_objects = array_merge($term_class_objects, $terms);
            } else if ( count($terms) ) {
                $term_class_objects[$taxonomy] = $terms;
            }
        }
        return $term_class_objects;
    }

    /**
     * {@Missing Summary}
     *
     * @param string $filter Filter.
     * @return self|array|bool|object|WP_Post
     */
    public function filter($filter)
    {
        if ($this->filter == $filter) {
            return $this;
        }

        if ($filter == 'raw') {
            return self::get_instance($this->ID);
        }

        return sanitize_post($this, $filter);
    }

    /**
     * Convert object to array.
     *
     * @return array Object as array.
     */
    public function toArray()
    {
        $post = get_object_vars($this);

        foreach (array('ancestors', 'page_template', 'post_category', 'tags_input' ) as $key) {
            if ($this->__isset($key)) {
                $post[ $key ] = $this->__get($key);
            }
        }

        return $post;
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

    /**
     * Get the featured image as a TimberImage
     *
     * @return Image instance or null
     */
    public function img()
    {
        $tid = get_post_thumbnail_id($this->ID);
        return new Img((int) $tid);
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
}
