<?php
/**
 * @package cam-portal-2
 */

namespace App\Egov;

class CMB2
{
    public function register() {
        add_action( 'cmb2_admin_init', array( $this, 'init' ) );
    }

    public function init() { 
        
        $prefix = 'cam_group_';

        /**
         * Repeatable Field Groups Section Post Type
         */
        $cmb_group = new_cmb2_box( array(
            'id'           => $prefix . 'metabox',
            'title'        => esc_html__( 'Data Field Group', 'sage' ),
            'object_types' => array( 'section_data' ),
        ) );
        $cmb_group->add_field( array(
            'id'         => $prefix . 'title',
            'type'       => 'text',
            'name' => __( 'Title', 'sage' ),
            'desc' => __( 'The column heading, leave this empty that mean display none of this column', 'sage' ),
            'default' => 'Title'
        ) );
        $cmb_group->add_field( array(
            'id'         => $prefix . 'option-1',
            'type'       => 'text',
            'name' => __( 'Option 1', 'sage' ),
            'desc' => __( 'The column heading, leave this empty that mean display none of this column', 'sage' )
        ) );
        $cmb_group->add_field( array(
            'id'         => $prefix . 'option-2',
            'type'       => 'text',
            'name' => __( 'Option 2', 'sage' ),
            'desc' => __( 'The column heading, leave this empty that mean display none of this column', 'sage' )
        ) );
        $cmb_group->add_field( array(
            'id'         => $prefix . 'value',
            'type'       => 'text',
            'name' => __( 'Value', 'sage' ),
            'desc' => __( 'The column heading, leave this empty that mean display none of this column', 'sage' ),
            'default' => 'Value '
        ) );
        $cmb_group->add_field( array(
            'id'         => $prefix . 'description',
            'type'       => 'textarea',
            'name' => __( 'Description', 'sage' )
        ) );
        $group_field_id = $cmb_group->add_field( array(
            'id'          => $prefix . 'items',
            'type'        => 'group',
            // 'description' => esc_html__( 'Generates reusable form entries', 'sage' ),
            'options'     => array(
                'group_title'    => esc_html__( '{#}', 'sage' ), // {#} gets replaced by row number
                'add_button'     => esc_html__( 'Add Another Item', 'sage' ),
                'remove_button'  => esc_html__( 'Remove Item', 'sage' ),
                'sortable'       => true,
                'closed'      => true, // true to have the groups closed by default
                // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'sage' ), // Performs confirmation before removing group.
            ),
        ) );
        $cmb_group->add_group_field( $group_field_id, array(
            'name'       => esc_html__( 'Title', 'sage' ),
            'id'         => 'title',
            'type'       => 'textarea_small',
            // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
        ) );
        $cmb_group->add_group_field( $group_field_id, array(
            'name'       => esc_html__( 'Option 1', 'sage' ),
            'id'         => 'option-1',
            'type'       => 'textarea_small',
            // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
        ) );
        $cmb_group->add_group_field( $group_field_id, array(
            'name'       => esc_html__( 'Option 2', 'sage' ),
            'id'         => 'option-2',
            'type'       => 'textarea_small',
            // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
        ) );
        $cmb_group->add_group_field( $group_field_id, array(
            'name'       => esc_html__( 'Value', 'sage' ),
            'id'         => 'value',
            'type'       => 'textarea_small',
            // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
        ) );


        /**
         * Custom PDF field meta box Post
         * Repeatable Field Groups
         */
        $cmb_pdf_field_grp = new_cmb2_box( array(
            'id'           => $prefix . 'pdf_metabox',
            'title'        => esc_html__( 'Select FDF file below :', 'sage' ),
            'object_types' => array( 'post' ),
        ) );
        $group_pdf_field_id = $cmb_pdf_field_grp->add_field( array(
            'id'          => $prefix . 'pdf_items',
            'type'        => 'group',
            'options'     => array(
                'group_title'    => esc_html__( 'PDF File {#}', 'sage' ), // {#} gets replaced by row number
                'add_button'     => esc_html__( 'Add More PDF', 'sage' ),
                'remove_button'  => esc_html__( 'Remove This PDF', 'sage' ),
                'sortable'       => true,
                'closed'      => false, // true to have the groups closed by default
            ),
        ) );
        $cmb_pdf_field_grp->add_group_field( $group_pdf_field_id, array(
            'name'       => esc_html__( 'Choose PDF File :', 'sage' ),
            'id'         => 'pdf_url',
            'type'       => 'file',
            'query_args' => array( 'type' => 'application/pdf'),
            'options' => array(
                'url' => false, // Hide the text input for the url
            ),
            'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
        ) );
        /**
         * Custom Facebook Video field meta box
         * Repeatable Field Groups
         */
        $cmb_facebook_video_field_grp = new_cmb2_box( array(
            'id'           => $prefix . 'facebook_video_metabox',
            'title'        => 'Facebook Video URL Below :',
            'object_types' => array( 'post' ),
        ) );
        $cmb_facebook_video_field_grp->add_field( array(
            'id'         => 'facebook_video_url',
            'type'       => 'text_url',
            'repeatable' => true,
        ) );



        
        /**
         * Add Field for Contact Organization Post Type
         */
        $prefix = 'cam_portal_';
        
        $cmb_brand = new_cmb2_box( array(
            'id'            => $prefix . 'brand_item',
            'title'         => 'Ogranization Detail',
            'object_types'  => array( 'organization', ), // Post type
        ) );
        $cmb_brand->add_field( array(
            'name'      => 'Ogranization Address',
            'id'        => $prefix . 'dept_address',
            'type'      => 'wysiwyg',
            'options' => array(
                'media_buttons' => false,
                'textarea_rows' => get_option('default_post_edit_rows', 3),
                'teeny' => true,
            ),
        ) );
        $cmb_brand->add_field( array(
            'name' 		=> 'Ogranization Address Maps',
            'desc' 		=> 'Input maps address iframe',
            'id' 		=> $prefix . 'dept_address_maps',
            'type' 		=> 'textarea_code'
        ) );
        $group_field_id = $cmb_brand->add_field( array(
            'description' => 'You can add or remove mutiple contact in below field',
            'id' 		=> $prefix . 'dept_contact_group',
            'type'        => 'group',
            'options'     => array(
                'group_title'       => 'Contact {#}',
                'add_button'        => 'Add Another Contact',
                'remove_button'     => 'Remove Contact',
                'sortable'          => true,
            ),
        ) );
        $cmb_brand->add_group_field( $group_field_id, array(
            'name' => 'Position',
            'id'   => 'contact_position',
            'type' => 'text',
            // 'repeatable' => true,
        ) );
        
        $cmb_brand->add_group_field( $group_field_id, array(
            'name' => 'Full name',
            'id'   => 'contact_name',
            'type' => 'text',
        ) );
        $cmb_brand->add_group_field( $group_field_id, array(
            'name' => 'Contact Number',
            'id'   => 'contact_number',
            'type' => 'text',
            // 'repeatable' => true,
        ) );
        $cmb_brand->add_group_field( $group_field_id, array(
            'name' => 'Email',
            'id'   => 'contact_email',
            'type' => 'text_email',
        ) );
        


        // custom feild category
        $cmb_cat = new_cmb2_box( array(
            'id'            => $prefix . 'category',
            'title'         => 'Category',
            'object_types'  => array( 'term', ),
            'taxonomies'    => array( 'category' ), 
        ) );
        $cmb_cat->add_field( array(
            'name'      => 'Display blog',
            'desc'      => 'Choose blog to display',
            'id'        => $prefix . 'category_blog',
            'type'      => 'radio_inline',
            'options'	=> array(
                'default'	=> __( 'Default', 'sage' ), 
                'document'	=> __( 'Document', 'sage' ), 
            ),
            'default'	=> 'default'
            
        ) );



        // Add Custom Logo Image for sector taxonomies
        $cmb_term = new_cmb2_box( array(
            'id'            => $prefix . 'sector_tax',
            'title'         => 'Customize Term',
            'object_types'  => array( 'term', ),
            'taxonomies'    => array( 'sector' ), 
        ) );
        $cmb_term->add_field( array(
            'name'      => 'Logo',
            'desc'      => 'Add Custom Logo Image for sector taxonomies',
            'id'        => $prefix . 'sector_logo',
            'type'      => 'file',
            'preview_size' => 'thumbnail',
            'text'      => array(
                'add_upload_file_text' => 'Add Logo'
            ),
            'options'   => array(
                'url'   => false
            ),
            'query_args' => array(
                'type' => array(
                    'image/jpeg',
                    'image/png',
                ),
            ),
        ) );
    }    
}