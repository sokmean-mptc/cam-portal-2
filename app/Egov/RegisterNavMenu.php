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
            'social_menu' => __( 'Social Menu', 'cam' ),
            'main_menu' => __( 'Main Menu', 'cam' ),
            'footer_menu' => __( 'Footer Menu', 'cam' )
        ];
        register_nav_menus( $args );
    }    
}