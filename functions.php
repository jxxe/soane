<?php
// Disable Gutenberg editor
add_filter('use_block_editor_for_post', '__return_false', 10);

// Add styles to editor
add_editor_style( 'css/editor.css' );

// Register custom navigation menus
function soane_menus() {

	$locations = array(
		'primary' => __( 'Primary', 'soane' ),
		'secondary' => __( 'Secondary', 'soane' ),
	);
	register_nav_menus( $locations );

}
add_action( 'init', 'soane_menus' );