<?php

$prefix = '__s_';

require get_template_directory() . '/inc/_s-meta.php';
require get_template_directory() . '/inc/_s-ajax.php';
require get_template_directory() . '/inc/_s-shortcodes.php';

/**
 * Hide editor for specific pages.
 *
 */

/*
add_action( 'admin_init', '_s_hide_editor' );

function _s_hide_editor() {

	// Get the Post ID.
	$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
	if( !isset( $post_id ) ) return;

	// Get the name of the Page Template file.
	//$template_file = get_post_meta($post_id, '_wp_page_template', true);

    $onPages = array();
    if(in_array($post_id,$onPages)) { 
    	remove_post_type_support('page', 'editor');
    }

}
*/


/**
 * Modify Main Query
 *
 */

/*
add_action( 'pre_get_posts', '_s_modify_main_query' );

function _s_modify_main_query( $query ) {

 	if ( is_post_type_archive( 'post_type_id' ) && $query->is_main_query() && !is_admin() ) { 
		
		$query->query_vars['order'] = 'ASC';
		$query->query_vars['orderby'] = 'menu_order';

 	}

}
*/



?>