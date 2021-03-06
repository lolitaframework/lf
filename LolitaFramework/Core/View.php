<?php
namespace lf\LolitaFramework\Core;

use \lf\LolitaFramework;

class View
{
    /**
     * Is path have extension?
     *
     * @author Guriev Eugen <gurievcreative@gmail.com>
     * @param  string  $path file.
     * @return boolean YES / NO.
     */
    public static function isHaveExtension($path)
    {
        $parts = pathinfo($path);
        return array_key_exists('extension', $parts);
    }

    /**
     * Get default view folder
     *
     * @author Guriev Eugen <gurievcreative@gmail.com>
     * @return string default folder.
     */
    public static function getDefaultFolder()
    {
        return apply_filters(
            'lf_default_views_folder',
            LolitaFramework::baseDir() . DS . 'app' . DS . 'views' . DS
        );
    }

    /**
     * Render view
     *
     * @author Guriev Eugen <gurievcreative@gmail.com>
     * @param type $path view path.
     * @param  array $data include data.
     * @return rendered html
     */
    public static function make($path, array $data = array())
    {
        $data = array_merge($data, Loc::helpers());
        // If path setted like this "someview" then
        // We need add default folder path and extension .php
        if (!self::isHaveExtension($path)) {
            $path = self::getDefaultFolder() . $path . '.php';
        }
        // Add parameters to temporary query variable.
        $data['view'] = new self;

        extract($data);
        ob_start();
        require($path);

        // Return the compiled view and terminate the output buffer.
        return self::minimize(ltrim(ob_get_clean()));
    }

    /**
     * Minimize before output
     *
     * @author Guriev Eugen <gurievcreative@gmail.com>
     * @param  string $buffer to minimize.
     * @return string minimized.
     */
    public static function minimize($buffer)
    {
        if (true == WP_DEBUG) {
            return $buffer;
        }
        $search = array(
            '/\>[^\S ]+/s',  // strip whitespaces after tags, except space
            '/[^\S ]+\</s',  // strip whitespaces before tags, except space
            '/(\s)+/s',      // shorten multiple whitespace sequences
        );

        $replace = array(
            '>',
            '<',
            '\\1',
        );

        return preg_replace($search, $replace, $buffer);
    }
}
