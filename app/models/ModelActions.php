<?php

namespace lf;

use \lf\LolitaFramework\Core\View;
use \lf\LolitaFramework\Core\Img;
use \lf\LolitaFramework\Core\Arr;
use \lf\LolitaFramework\Core\Str;
use \lf\LolitaFramework\Core\Data;
use \lf\LolitaFramework\Core\Route;

class ModelActions{
    public static function contactForm()
    {
        check_ajax_referer('Lolita Framework', 'nonce');
        $mail = wp_mail(
            get_option('admin_email'),
            'Mail from:'.get_option(''),
            View::make(
                'blocks' . DS . 'mail',
                array(
                    'items' => Arr::except($_POST, array('action', 'nonce')),
                )
            )
        );
        wp_send_json_success(
            array(
                'mail' => $mail,
            )
        );
    }
}