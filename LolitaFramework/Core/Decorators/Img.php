<?php

namespace lf\LolitaFramework\Core\Decorators;

use \lf\LolitaFramework\Core\Str;

class Img
{
    /**
     * Image url index.
     */
    const URL = 0;

    /**
     * Image width index
     */
    const WIDTH = 1;

    /**
     * Image height index
     */
    const HEIGHT = 2;

    /**
     * Current image ID
     * @var null
     */
    private $ID = 0;

    /**
     * Class consructor
     *
     * @param mixed $pid
     */
    public function __construct($iid)
    {
        if (!is_integer($iid) || $iid <= 0) {
            throw new Exception('Incorrect image id!');
        }
        $this->ID = $iid;
        wp_get_attachment_image_src($attachment_id, $size, true);
    }

    /**
     * Image data
     *
     * @param  integer $index 0 - url, 1 - width, 2 - height
     * @param  string $size
     * @return Boolean|String
     */
    public function data($index = 0, $size = 'thumbnail')
    {
        $img = image_downsize($this->ID, $size);
        if (is_array($img)) {
            return $img[0];
        }
        return false;
    }

    /**
     * Image source
     *
     * @param  string $size
     * @return Boolean|String
     */
    public function src($size = 'thumbnail')
    {
        return $this->data(self::URL, $size);
    }

    /**
     * Image width
     *
     * @param  string $size
     * @return Boolean|String
     */
    public function width($size = 'thumbnail')
    {
        return $this->data(self::WIDTH, $size);
    }

    /**
     * Image height
     *
     * @param  string $size
     * @return Boolean|String
     */
    public function height($size = 'thumbnail')
    {
        return $this->data(self::HEIGHT, $size);
    }

    /**
     * Alt text stored in WordPress
     *
     * @return string alt text stored in WordPress
     */
    public function alt() {
        return trim(strip_tags(get_post_meta($this->ID, '_wp_attachment_image_alt', true)));
    }
}
