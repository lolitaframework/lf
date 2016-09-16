<?php

namespace lf;

use \lf\LolitaFramework\Core\View;
use \lf\LolitaFramework\Core\Img;
use \lf\LolitaFramework\Core\Arr;
use \lf\LolitaFramework\Core\Str;
use \lf\LolitaFramework\Core\Data;
use \lf\LolitaFramework\Core\Route;
use \lf\LolitaFramework;

class ModelPages{

    public static function home()
    {
        return View::make(
            'pages' . DS . 'home',
            array(
                'background_image' => 
                get_theme_mod(
                    'general_site_settings_background_image',
                    LolitaFramework::baseUrl() . '/app/assets/images/homepage.jpg'
                )
            )
        );
    }

    public static function contact_us()
    {
        wp_enqueue_script('wp-util');
        wp_enqueue_script(
            'contact_us',
            LolitaFramework::baseUrl() . '/app/assets/js/contact_us.js',
            array('jquery')
        );
        the_post();
        $address = get_theme_mod('contacts_address', 'Watishetadres 35');

        return View::make(
            'pages' . DS . 'contact-us',
            array(
                'address'       => $address,
                'breadcrumbs'   => do_shortcode(View::make('shortcodes' . DS . 'breadcrumbs')),
                'telefon'       => get_theme_mod('contacts_telefon', '038 65 895 655'),
                'partnerships'  => get_theme_mod('contacts_partnerships', 'partner@lf.com'),
                'sales'         => get_theme_mod('contacts_sales', 'sales@lf.com'),
                'communication' => get_theme_mod('contacts_communication', 'communication@lf.com'),
                'gmap_sc'       => View::make(
                    'shortcodes' . DS . 'gmap', 
                    array('address' => $address)
                ),
            )
        );
    }

    public static function download()
    {
        the_post();
        $breadcrumbs = View::make('shortcodes' . DS . 'breadcrumbs');
        
        return View::make(
            'pages' . DS . 'download',
            array(
                'breadcrumbs'   => do_shortcode($breadcrumbs),
            )
        );
    }

    public static function solutions()
    {
        the_post();
        $breadcrumbs = View::make('shortcodes' . DS . 'breadcrumbs');

        return View::make(
            'pages' . DS . 'solutions',
            array(
                'breadcrumbs'   => do_shortcode($breadcrumbs),
            )
        );
    }

    public static function product()
    {
        the_post();
        $post_id     = get_the_ID();
        $data = array_merge(
            array(
                'breadcrumbs' => do_shortcode(View::make('shortcodes' . DS . 'breadcrumbs')),
                'theme_url'   => LolitaFramework::baseUrl(),
            ),
            Data::postMeta(
                $post_id,
                array(
                    'additional_product_sub_title',
                    'additional_product_description',
                    'additional_product_pdf',
                    'additional_product_industries',
                    'product_row_1_content',
                    'product_row_2_title',
                    'product_row_2_content',
                    'product_row_2_image',
                    'product_row_3_screenshots',
                    'product_row_3_content',
                    'product_row_4_Info',
                )
            )
        );

        $data['product_row_2_image'] = Img::url($data['product_row_2_image'], 'medium');

        $additional_product_industries = array();
        foreach ((array) $data['additional_product_industries'] as $el) {
            $el['industry'] = (int) $el['industry'];
            if ($el['industry']) {
                $additional_product_industries[] = get_post($el['industry']);
            }
        }
        $data['additional_product_industries'] = $additional_product_industries;

        foreach ($data['product_row_3_screenshots'] as &$value) {
            $value = Img::url($value, '598x286');
        }

        return View::make(
            'pages' . DS . 'product',
            $data
        );
    }

    public static function industry()
    {
        the_post();
        $post_id     = get_the_ID();
        $data = array_merge(
            array(
                'breadcrumbs' => do_shortcode(View::make('shortcodes' . DS . 'breadcrumbs')),
                'theme_url'   => LolitaFramework::baseUrl(),
            ),
            Data::postMeta(
                $post_id,
                array(
                    'additional_industry_sub_title',
                    'additional_industry_description',
                    'additional_industry_pdf',
                    'additional_industry_solutions',
                    'industry_row_1_content',
                    'industry_row_2_title',
                    'industry_row_2_content',
                    'industry_row_2_image',
                    'industry_row_3_screenshots',
                    'industry_row_3_content',
                    'industry_row_4_Info',
                )
            )
        );

        $additional_product_industries = array();
        foreach ((array) $data['additional_industry_solutions'] as $el) {
            $el['product'] = (int) $el['product'];
            if ($el['product']) {
                $additional_industry_solutions[] = get_post($el['product']);
            }
        }
        $data['additional_industry_solutions'] = $additional_industry_solutions;

        $data['industry_row_2_image'] = Img::url($data['industry_row_2_image'], 'medium');
        foreach ($data['industry_row_3_screenshots'] as &$value) {
            $value = Img::url($value, '598x286');
        }

        return View::make(
            'pages' . DS . 'industry',
            $data
        );
    }

}