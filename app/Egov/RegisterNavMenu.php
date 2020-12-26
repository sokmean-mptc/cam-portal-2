<?php
/**
 * @package cam-portal-2
 */

namespace App\Egov;

class RegisterNavMenu
{
    public function register() {
        add_action( 'after_setup_theme', array( $this, 'registerMenu' ) );
    }

    public function registerMenu() {
        $args = [
            'social_menu' => __( 'Social Menu', 'sage' ),
            'main_menu' => __( 'Main Menu', 'sage' ),
            'footer_menu' => __( 'Footer Menu', 'sage' )
        ];
        register_nav_menus( $args );
    }    
}