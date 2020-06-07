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

// Include ACF
define( 'ACF_PATH', get_stylesheet_directory() . '/inc/acf/' );
define( 'ACF_URL', get_stylesheet_directory_uri() . '/inc/acf/' );

include_once( ACF_PATH . 'acf.php' );

add_filter('acf/settings/url', 'acf_settings_url');
function acf_settings_url( $url ) {
    return ACF_URL;
}

/* add_filter('acf/settings/show_admin', 'acf_settings_show_admin');
function acf_settings_show_admin( $show_admin ) {
    return false;
} */