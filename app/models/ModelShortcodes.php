<?php

namespace lf;

use \lf\LolitaFramework\Core\View;
use \lf\LolitaFramework;

class ModelShortcodes{

    /**
     * Header
     * @return string HTML code header. 
     */
    public static function header()
    {
        return View::make('blocks' . DS . 'header');
    }

    /**
     * Footer
     * @return string HTML code footer.
     */
    public static function footer()
    {
        return View::make('blocks' . DS . 'footer');
    }

    /**
     * Modal contact
     *
     * @return string HTML code contact.
     */
    public static function contact()
    {
        $address = get_theme_mod('contacts_address', 'Watishetadres 35');
        return View::make(
            'blocks' . DS . 'modal_contact',
            array(
                'socials'       => get_theme_mod('general_site_settings_social_icons'),
                'products_opt'  => ModelMain::productsSelect(),
                'address'       => $address,
                'telefon'       => get_theme_mod('contacts_telefon', '038 65 895 655'),
                'partnerships'  => get_theme_mod('contacts_partnerships', 'partner@lf.com'),
                'sales'         => get_theme_mod('contacts_sales', 'sales@lf.com'),
                'communication' => get_theme_mod('contacts_communication', 'communication@lf.com'),
            )
        );
    }

    /**
     * Main Sidebar
     * @return string HTML code main sidebar.
     */
    public static function main_sidebar()
    {
        $title = (string) wp_title('&raquo;', false);
        if ('' === $title) {
            $title = __('Home', 'lf');
        }
        return View::make(
            'blocks' . DS . 'main_sidebar',
            array(
                'logo' => get_theme_mod(
                    'general_site_settings_logo_favicon_upload_a_logo',
                    LolitaFramework::baseUrl() . '/app/assets/images/logo-main.png'
                ),
                'title' => $title,
            )
        );
    }

    /**
     * Footer inner
     * @return string HTML code footer inner.
     */
    public static function footer_inner()
    {
        return View::make('blocks' . DS . 'footer_inner');
    }

    /**
     * Return sub-menus HTML
     * @return string HTML code of sub-menus.
     */
    public static function sub_menus()
    {
        return View::make(
            'shortcodes' . DS . 'sub_menus',
            array(
                'menu' => ModelMain::getMenuGraph('main_panel'),
                'parents' =>  ModelMain::getMenu('main_panel'),
            )
        );
    }

    /**
     * Get footer menu 1 left
     * @return string HTML code footer menu 1 left.
     */
    public static function footer_menu_1_left()
    {
        return wp_nav_menu(
            array(
                'theme_location'  => 'footer_menu_1_left',
                'container'  => false,
                'echo'       => false,
                'menu_class' => 'menu nav navbar-nav',
                'menu_id'    => 'nav',
                'depth'      => '1',
            )
        );
    }

    /**
     * Get footer menu 1 right
     * @return string HTML code footer menu 1 right.
     */
    public static function footer_menu_1_right()
    {
        return wp_nav_menu(
            array(
                'theme_location'  => 'footer_menu_1_right',
                'container'  => false,
                'echo'       => false,
                'menu_class' => 'menu nav navbar-nav',
                'menu_id'    => 'nav',
                'depth'      => '1',
            )
        );
    }

    /**
     * Get footer menu 2 left
     * @return string HTML code footer menu 2 left.
     */
    public static function footer_menu_2_left()
    {
        return wp_nav_menu(
            array(
                'theme_location' => 'footer_menu_2_left',
                'container'      => false,
                'echo'           => false,
                'menu_class'     => 'menu nav navbar-nav',
                'menu_id'        => 'nav',
                'depth'          => '1',
            )
        );
    }

    /**
     * Get footer menu 2 right
     * @return string HTML code footer menu 2 right.
     */
    public static function footer_menu_2_right()
    {
        return wp_nav_menu(
            array(
                'theme_location' => 'footer_menu_2_right',
                'container'      => false,
                'echo'           => false,
                'menu_class'     => 'menu nav navbar-nav',
                'menu_id'        => 'nav',
                'depth'          => '1',
            )
        );
    }

    /**
     * Get footer menu 3
     * @return string HTML code footer menu 3.
     */
    public static function footer_menu_3()
    {
        return wp_nav_menu(
            array(
                'theme_location' => 'footer_menu_3',
                'container'      => false,
                'echo'           => false,
                'menu_class'     => 'menu nav navbar-nav',
                'menu_id'        => 'nav',
                'depth'          => '1',
            )
        );
    }

    /**
     * Get footer menu 4
     * @return string HTML code footer menu 4.
     */
    public static function footer_menu_4()
    {
        return wp_nav_menu(
            array(
                'theme_location' => 'footer_menu_4',
                'container'      => false,
                'echo'           => false,
                'menu_class'     => 'menu nav navbar-nav',
                'menu_id'        => 'nav',
                'depth'          => '1',
            )
        );
    }
}