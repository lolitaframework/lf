<?php
namespace lf\LolitaFramework\Core;

class Img
{
    /**
     * Get image url
     *
     * @author Guriev Eugen <gurievcreative@gmail.com>
     * @param  integer $attachment_id attachment id.
     * @param  string  $size          image size
     * @return string image url.
     */
    public static function url($attachment_id = 0, $size = 'thumbnail')
    {
        if (0 === $attachment_id) {
            $attachment_id = get_post_thumbnail_id();
        }
        $thumb_url = wp_get_attachment_image_src($attachment_id, $size, true);
        if (is_array($thumb_url)) {
            return $thumb_url[0];
        }
        return '';
    }
}
