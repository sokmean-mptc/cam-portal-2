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
         * Repeatable Field Groups
         */
        $cmb_group = new_cmb2_box( array(
            'id'           => $prefix . 'metabox',
            'title'        => esc_html__( 'Data Field Group', 'cam-portal' ),
            'object_types' => array( 'section_data' ),
        ) );

        // $group_field_id is the field id string, so in this case: $prefix . 'demo'
        $group_field_id = $cmb_group->add_field( array(
            'id'          => $prefix . 'items',
            'type'        => 'group',
            // 'description' => esc_html__( 'Generates reusable form entries', 'cam-portal' ),
            'options'     => array(
                'group_title'    => esc_html__( 'Item {#}', 'cam-portal' ), // {#} gets replaced by row number
                'add_button'     => esc_html__( 'Add Another Item', 'cam-portal' ),
                'remove_button'  => esc_html__( 'Remove Item', 'cam-portal' ),
                'sortable'       => true,
                'closed'      => true, // true to have the groups closed by default
                // 'remove_confirm' => esc_html__( 'Are you sure you want to remove?', 'cam-portal' ), // Performs confirmation before removing group.
            ),
        ) );


        /**
         * Group fields works the same, except ids only need
         * to be unique to the group. Prefix is not needed.
         *
         * The parent field's id needs to be passed as the first argument.
         */
        $cmb_group->add_group_field( $group_field_id, array(
            'name'       => esc_html__( 'Title', 'cam-portal' ),
            'id'         => 'title',
            'type'       => 'text',
            // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
        ) );
        $cmb_group->add_group_field( $group_field_id, array(
            'name'       => esc_html__( 'Value', 'cam-portal' ),
            'id'         => 'value',
            'type'       => 'textarea_small',
            // 'repeatable' => true, // Repeatable fields are supported w/in repeatable groups (for most types)
        ) );



        /**
         * Custom PDF field meta box
         * Repeatable Field Groups
         */
        $cmb_pdf_field_grp = new_cmb2_box( array(
            'id'           => $prefix . 'pdf_metabox',
            'title'        => esc_html__( 'Select FDF file below :', 'cam-portal' ),
            'object_types' => array( 'post' ),
        ) );

        $group_pdf_field_id = $cmb_pdf_field_grp->add_field( array(
            'id'          => $prefix . 'pdf_items',
            'type'        => 'group',
            'options'     => array(
                'group_title'    => esc_html__( 'PDF File {#}', 'cam-portal' ), // {#} gets replaced by row number
                'add_button'     => esc_html__( 'Add More PDF', 'cam-portal' ),
                'remove_button'  => esc_html__( 'Remove This PDF', 'cam-portal' ),
                'sortable'       => true,
                'closed'      => false, // true to have the groups closed by default
            ),
        ) );

        $cmb_pdf_field_grp->add_group_field( $group_pdf_field_id, array(
            'name'       => esc_html__( 'Choose PDF File :', 'cam-portal' ),
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
    }    
}