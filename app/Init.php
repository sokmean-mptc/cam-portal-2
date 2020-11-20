<?php
/**
 * @package cam-portal-2
 */

namespace App;

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

final class Init
{
    function __construct() {

    }

    public static function getServices() {
        return array(
            
            Egov\RegisterNavMenu::class,
            Egov\CustomizeLogo::class,
            Egov\RegisterSidebar::class,
            Egov\CMB2::class,
            Egov\PostViewCount::class,
            Egov\CustomPostType::class,
            Egov\CustomTaxonomy::class,
            
           
        );
    }

    public static function registerServices() {
        foreach( self::getServices() as $class ) {
            $service = self::instantiate( $class );
            if( method_exists( $service, "register" ) ) {
                $service->register();
            }
        }
    }

    private static function instantiate( $class ) {
        $service = new $class();
        return $service;
    }
}