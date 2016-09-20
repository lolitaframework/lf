<?php

namespace lf;

class ModelActions
{
    /**
     * AJAX. Search posts
     *
     * @return void
     */
    public static function search()
    {
        wp_send_json_success( $_POST );
    }
}
