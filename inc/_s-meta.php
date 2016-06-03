<?php

/*
add_filter( 'rwmb_meta_boxes', '_s_register_meta_boxes' );

function _s_register_meta_boxes( $meta_boxes ) {

    global $prefix;

    $meta_boxes[] = array(
        'id'         => 'personal',
        'title'      => __( 'Personal Information', '_s' ),
        'post_types' => array( 'post', 'page' ),
        'context'    => 'normal',
        'priority'   => 'high',
        'fields' => array(
            array(
                'name'  => __( 'Full name', '_s' ),
                'desc'  => 'Format: First Last',
                'id'    => $prefix . 'fname',
                'type'  => 'text',
                'std'   => 'Anh Tran',
                'class' => 'custom-class',
                'clone' => true,
            ),
        )
    );

    return $meta_boxes;

}
*/


?>