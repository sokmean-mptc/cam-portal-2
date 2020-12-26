<?php
/**
 * @package cam-portal-2
 */

namespace App\Egov;

class RegisterSidebar
{
    public function register() {
        add_action( 'widgets_init', array( $this, 'registerSidebar') );
    }

    public function registerSidebar() {
        $config = array(
            'before_widget' => '<section class="widget %1$s %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>'
        );
        register_sidebar( 
            array(
                'name' => __( 'Primary', 'sage' ),
                'id' => 'sidebar-primary'
            ) + $config
        );
        register_sidebar( 
            array(
                'name' => __('Copyright', 'sage'),
                'id' => 'sidebar-copyright'
            ) + $config
        );
    }    
}