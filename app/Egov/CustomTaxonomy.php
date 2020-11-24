<?php
/**
 * @package EgovBlock
 */

namespace App\Egov;

class CustomTaxonomy
{
    public function register() {
        add_action( 'init', array( $this, 'registerCustomTaxonomy') );
    }

    public function registerCustomTaxonomy() {

        $args = array(
            /**
             * (array) An array of labels for this taxonomy. 
             * By default, Tag labels are used for non-hierarchical taxonomies, and Category labels are used for hierarchical taxonomies. 
             * See accepted values in get_taxonomy_labels().
             */
            'labels' => array(
                'name' => __( 'Types', 'egov' )
            ),

            /**
             * (string) A short descriptive summary of what the taxonomy is for.
             */
            'description' => __( 'Section Type Taxonomy created for stor group type of tourism.', 'egov' ),
            
            
            /**
             * (bool) Whether a taxonomy is intended for use publicly either via the admin interface or by front-end users. 
             * The default settings of $publicly_queryable, $show_ui, and $show_in_nav_menus are inherited from $public.
             */
            'public' => true,

            /**
             * (bool) Whether the taxonomy is publicly queryable. 
             * If not set, the default is inherited from $public
             */
            'publicly_queryable' => true,

            /**
             * (bool) Whether the taxonomy is hierarchical. 
             * Default false.
             */
            'hierarchical' => true,

            /**
             * (bool) Whether to generate and allow a UI for managing terms in this taxonomy in the admin. 
             * If not set, the default is inherited from $public (default true).
             */
            'show_ui' => true,

            /**
             * (bool) Whether to show the taxonomy in the admin menu. 
             * If true, the taxonomy is shown as a submenu of the object type menu. 
             * If false, no menu is shown. $show_ui must be true. 
             * If not set, default is inherited from $show_ui (default true).
             */
            'show_in_menu' => true,

            /**
             * (bool) Makes this taxonomy available for selection in navigation menus. 
             * If not set, the default is inherited from $public (default true).
             */
            'show_in_nav_menus' => true,

            /**
             * (bool) Whether to include the taxonomy in the REST API. 
             * Set this to true for the taxonomy to be available in the block editor.
             */
            'show_in_rest' => true,

            /**
             * (string) To change the base url of REST API route. 
             * Default is $taxonomy.
             */
            'rest_base' => 'types',

            /**
             * (string) REST API Controller class name. 
             * Default is 'WP_REST_Terms_Controller'.
             */
            'rest_controller_class' => 'WP_REST_Terms_Controller',

            /**
             * (bool) Whether to list the taxonomy in the Tag Cloud Widget controls. 
             * If not set, the default is inherited from $show_ui (default true).
             */
            'show_tagcloud' => true,

            /**
             * (bool) Whether to show the taxonomy in the quick/bulk edit panel. 
             * It not set, the default is inherited from $show_ui (default true).
             */
            'show_in_quick_edit' => true,

            /**
             * (bool) Whether to display a column for the taxonomy on its post type listing screens. 
             * Default false.
             */
            'show_admin_column' => true,

            /**
             * (bool|callable) Provide a callback function for the meta box display. 
             * If not set, post_categories_meta_box() is used for hierarchical taxonomies, and post_tags_meta_box() is used for non-hierarchical. 
             * If false, no meta box is shown.
             */
            // 'meta_box_cb' => array( $this, 'function' ),

            /**
             * (callable) Callback function for sanitizing taxonomy data saved from a meta box. 
             * If no callback is defined, an appropriate one is determined based on the value of $meta_box_cb.
             */
            // 'meta_box_sanitize_cb' => array( $this, 'sanitizing' ),

            /**
             * (array) Array of capabilities for this taxonomy.
             */
            'capabilities' => array(
                'manage_terms' => 'manage_categories',
                'edit_terms' => 'edit_categories',
                'delete_terms' => 'delete_categories',
                'assign_terms' => 'assign_categories'
            ),

            /**
             * (bool|array) Triggers the handling of rewrites for this taxonomy. 
             * Default true, using $taxonomy as slug. 
             * To prevent rewrite, set to false. 
             * To specify rewrite rules, an array can be passed with any of these keys:
             */
            'rewrite' => array( 
                /**
                 * (string) Customize the permastruct slug. 
                 * Default $taxonomy key.
                 */
                'slug' => 'types',
                /**
                 * (bool) Should the permastruct be prepended with WP_Rewrite::$front. 
                 * Default true.
                 */
                'with_front' => true,
                /**
                 * (bool) Either hierarchical rewrite tag or not. 
                 * Default false.
                 */
                'hierarchical' => false,
                /**
                 * (int) Assign an endpoint mask. 
                 * Default EP_NONE.
                 */
                'ep_mask' => EP_NONE
            ),
           
            /**
             * (string|bool) Sets the query var key for this taxonomy. 
             * Default $taxonomy key. 
             * If false, a taxonomy cannot be loaded at ?{query_var}={term_slug}. 
             * If a string, the query ?{query_var}={term_slug} will be valid.
             */
            'query_var' => 'types',

            /**
             * (callable) Works much like a hook, in that it will be called when the count is updated. 
             * Default _update_post_term_count() for taxonomies attached to post types, 
             * which confirms that the objects are published before counting them. 
             * Default _update_generic_term_count() for taxonomies attached to other object types, such as users.
             */
            // 'update_count_callback' => array( $this, '_update_generic_term_count' ),

            /**
             * (bool) This taxonomy is a "built-in" taxonomy. 
             * INTERNAL USE ONLY! Default false.
             */
            '_builtin' => false
        );

        /**
         * $taxonomy : (string) (Required) Taxonomy key, must not exceed 32 characters.
         * $object_type : (array|string) (Required) Object type or array of object types with which the taxonomy should be associated.
         */
        register_taxonomy( 'types', 'section_data', $args );



        $args = array(
            /**
             * (array) An array of labels for this taxonomy. 
             * By default, Tag labels are used for non-hierarchical taxonomies, and Category labels are used for hierarchical taxonomies. 
             * See accepted values in get_taxonomy_labels().
             */
            'labels' => array(
                'name' => __( 'Sector', 'egov' )
            ),

            /**
             * (string) A short descriptive summary of what the taxonomy is for.
             */
            'description' => __( 'Sector', 'egov' ),
            
            
            /**
             * (bool) Whether a taxonomy is intended for use publicly either via the admin interface or by front-end users. 
             * The default settings of $publicly_queryable, $show_ui, and $show_in_nav_menus are inherited from $public.
             */
            'public' => true,

            /**
             * (bool) Whether the taxonomy is publicly queryable. 
             * If not set, the default is inherited from $public
             */
            'publicly_queryable' => true,

            /**
             * (bool) Whether the taxonomy is hierarchical. 
             * Default false.
             */
            'hierarchical' => true,

            /**
             * (bool) Whether to generate and allow a UI for managing terms in this taxonomy in the admin. 
             * If not set, the default is inherited from $public (default true).
             */
            'show_ui' => true,

            /**
             * (bool) Whether to show the taxonomy in the admin menu. 
             * If true, the taxonomy is shown as a submenu of the object type menu. 
             * If false, no menu is shown. $show_ui must be true. 
             * If not set, default is inherited from $show_ui (default true).
             */
            'show_in_menu' => true,

            /**
             * (bool) Makes this taxonomy available for selection in navigation menus. 
             * If not set, the default is inherited from $public (default true).
             */
            'show_in_nav_menus' => true,

            /**
             * (bool) Whether to include the taxonomy in the REST API. 
             * Set this to true for the taxonomy to be available in the block editor.
             */
            'show_in_rest' => true,

            /**
             * (string) To change the base url of REST API route. 
             * Default is $taxonomy.
             */
            'rest_base' => 'sector',

            /**
             * (string) REST API Controller class name. 
             * Default is 'WP_REST_Terms_Controller'.
             */
            'rest_controller_class' => 'WP_REST_Terms_Controller',

            /**
             * (bool) Whether to list the taxonomy in the Tag Cloud Widget controls. 
             * If not set, the default is inherited from $show_ui (default true).
             */
            'show_tagcloud' => true,

            /**
             * (bool) Whether to show the taxonomy in the quick/bulk edit panel. 
             * It not set, the default is inherited from $show_ui (default true).
             */
            'show_in_quick_edit' => true,

            /**
             * (bool) Whether to display a column for the taxonomy on its post type listing screens. 
             * Default false.
             */
            'show_admin_column' => true,

            /**
             * (bool|callable) Provide a callback function for the meta box display. 
             * If not set, post_categories_meta_box() is used for hierarchical taxonomies, and post_tags_meta_box() is used for non-hierarchical. 
             * If false, no meta box is shown.
             */
            // 'meta_box_cb' => array( $this, 'function' ),

            /**
             * (callable) Callback function for sanitizing taxonomy data saved from a meta box. 
             * If no callback is defined, an appropriate one is determined based on the value of $meta_box_cb.
             */
            // 'meta_box_sanitize_cb' => array( $this, 'sanitizing' ),

            /**
             * (array) Array of capabilities for this taxonomy.
             */
            'capabilities' => array(
                'manage_terms' => 'manage_categories',
                'edit_terms' => 'edit_categories',
                'delete_terms' => 'delete_categories',
                'assign_terms' => 'assign_categories'
            ),

            /**
             * (bool|array) Triggers the handling of rewrites for this taxonomy. 
             * Default true, using $taxonomy as slug. 
             * To prevent rewrite, set to false. 
             * To specify rewrite rules, an array can be passed with any of these keys:
             */
            'rewrite' => array( 
                /**
                 * (string) Customize the permastruct slug. 
                 * Default $taxonomy key.
                 */
                'slug' => 'sector',
                /**
                 * (bool) Should the permastruct be prepended with WP_Rewrite::$front. 
                 * Default true.
                 */
                'with_front' => false
                /**
                 * (bool) Either hierarchical rewrite tag or not. 
                 * Default false.
                 */
                // 'hierarchical' => false,
                /**
                 * (int) Assign an endpoint mask. 
                 * Default EP_NONE.
                 */
                // 'ep_mask' => EP_NONE
            ),
           
            /**
             * (string|bool) Sets the query var key for this taxonomy. 
             * Default $taxonomy key. 
             * If false, a taxonomy cannot be loaded at ?{query_var}={term_slug}. 
             * If a string, the query ?{query_var}={term_slug} will be valid.
             */
            'query_var' => 'sector'

            /**
             * (callable) Works much like a hook, in that it will be called when the count is updated. 
             * Default _update_post_term_count() for taxonomies attached to post types, 
             * which confirms that the objects are published before counting them. 
             * Default _update_generic_term_count() for taxonomies attached to other object types, such as users.
             */
            // 'update_count_callback' => array( $this, '_update_generic_term_count' ),

            /**
             * (bool) This taxonomy is a "built-in" taxonomy. 
             * INTERNAL USE ONLY! Default false.
             */
            // '_builtin' => false
        );

        /**
         * $taxonomy : (string) (Required) Taxonomy key, must not exceed 32 characters.
         * $object_type : (array|string) (Required) Object type or array of object types with which the taxonomy should be associated.
         */
        register_taxonomy( 'sector', 'organization', $args );



        $args = array(
            /**
             * (array) An array of labels for this taxonomy. 
             * By default, Tag labels are used for non-hierarchical taxonomies, and Category labels are used for hierarchical taxonomies. 
             * See accepted values in get_taxonomy_labels().
             */
            'labels' => array(
                'name' => __( 'Organization Type', 'egov' )
            ),

            /**
             * (string) A short descriptive summary of what the taxonomy is for.
             */
            'description' => __( 'Organization Type', 'egov' ),
            
            
            /**
             * (bool) Whether a taxonomy is intended for use publicly either via the admin interface or by front-end users. 
             * The default settings of $publicly_queryable, $show_ui, and $show_in_nav_menus are inherited from $public.
             */
            'public' => true,

            /**
             * (bool) Whether the taxonomy is publicly queryable. 
             * If not set, the default is inherited from $public
             */
            'publicly_queryable' => true,

            /**
             * (bool) Whether the taxonomy is hierarchical. 
             * Default false.
             */
            'hierarchical' => true,

            /**
             * (bool) Whether to generate and allow a UI for managing terms in this taxonomy in the admin. 
             * If not set, the default is inherited from $public (default true).
             */
            'show_ui' => true,

            /**
             * (bool) Whether to show the taxonomy in the admin menu. 
             * If true, the taxonomy is shown as a submenu of the object type menu. 
             * If false, no menu is shown. $show_ui must be true. 
             * If not set, default is inherited from $show_ui (default true).
             */
            'show_in_menu' => true,

            /**
             * (bool) Makes this taxonomy available for selection in navigation menus. 
             * If not set, the default is inherited from $public (default true).
             */
            'show_in_nav_menus' => true,

            /**
             * (bool) Whether to include the taxonomy in the REST API. 
             * Set this to true for the taxonomy to be available in the block editor.
             */
            'show_in_rest' => true,

            /**
             * (string) To change the base url of REST API route. 
             * Default is $taxonomy.
             */
            'rest_base' => 'organization_type',

            /**
             * (string) REST API Controller class name. 
             * Default is 'WP_REST_Terms_Controller'.
             */
            'rest_controller_class' => 'WP_REST_Terms_Controller',

            /**
             * (bool) Whether to list the taxonomy in the Tag Cloud Widget controls. 
             * If not set, the default is inherited from $show_ui (default true).
             */
            'show_tagcloud' => true,

            /**
             * (bool) Whether to show the taxonomy in the quick/bulk edit panel. 
             * It not set, the default is inherited from $show_ui (default true).
             */
            'show_in_quick_edit' => true,

            /**
             * (bool) Whether to display a column for the taxonomy on its post type listing screens. 
             * Default false.
             */
            'show_admin_column' => true,

            /**
             * (bool|callable) Provide a callback function for the meta box display. 
             * If not set, post_categories_meta_box() is used for hierarchical taxonomies, and post_tags_meta_box() is used for non-hierarchical. 
             * If false, no meta box is shown.
             */
            // 'meta_box_cb' => array( $this, 'function' ),

            /**
             * (callable) Callback function for sanitizing taxonomy data saved from a meta box. 
             * If no callback is defined, an appropriate one is determined based on the value of $meta_box_cb.
             */
            // 'meta_box_sanitize_cb' => array( $this, 'sanitizing' ),

            /**
             * (array) Array of capabilities for this taxonomy.
             */
            'capabilities' => array(
                'manage_terms' => 'manage_categories',
                'edit_terms' => 'edit_categories',
                'delete_terms' => 'delete_categories',
                'assign_terms' => 'assign_categories'
            ),

            /**
             * (bool|array) Triggers the handling of rewrites for this taxonomy. 
             * Default true, using $taxonomy as slug. 
             * To prevent rewrite, set to false. 
             * To specify rewrite rules, an array can be passed with any of these keys:
             */
            'rewrite' => array( 
                /**
                 * (string) Customize the permastruct slug. 
                 * Default $taxonomy key.
                 */
                'slug' => 'organization_type',
                /**
                 * (bool) Should the permastruct be prepended with WP_Rewrite::$front. 
                 * Default true.
                 */
                'with_front' => false
                /**
                 * (bool) Either hierarchical rewrite tag or not. 
                 * Default false.
                 */
                // 'hierarchical' => false,
                /**
                 * (int) Assign an endpoint mask. 
                 * Default EP_NONE.
                 */
                // 'ep_mask' => EP_NONE
            ),
           
            /**
             * (string|bool) Sets the query var key for this taxonomy. 
             * Default $taxonomy key. 
             * If false, a taxonomy cannot be loaded at ?{query_var}={term_slug}. 
             * If a string, the query ?{query_var}={term_slug} will be valid.
             */
            'query_var' => 'organization_type',

            /**
             * (callable) Works much like a hook, in that it will be called when the count is updated. 
             * Default _update_post_term_count() for taxonomies attached to post types, 
             * which confirms that the objects are published before counting them. 
             * Default _update_generic_term_count() for taxonomies attached to other object types, such as users.
             */
            // 'update_count_callback' => array( $this, '_update_generic_term_count' ),

            /**
             * (bool) This taxonomy is a "built-in" taxonomy. 
             * INTERNAL USE ONLY! Default false.
             */
            // '_builtin' => false
        );

        /**
         * $taxonomy : (string) (Required) Taxonomy key, must not exceed 32 characters.
         * $object_type : (array|string) (Required) Object type or array of object types with which the taxonomy should be associated.
         */
        register_taxonomy( 'organization_type', 'organization', $args );

    }
}