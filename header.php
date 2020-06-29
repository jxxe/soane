<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php
    if( is_front_page() ) {
        echo get_bloginfo( 'name' ) . ', ' . get_bloginfo( 'description' );
    } else {
        echo the_title() . ' | ' . get_bloginfo( 'name' );
    }
    ?></title>
    <meta name="theme-color" content="#000000"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
    <link href="<?php echo get_template_directory_uri(); ?>/inc/lightslider/lightslider.min.css" rel="stylesheet">
    
    <?php wp_head(); ?>
</head>
<body id="body" class="<?php body_class(); ?>">
<nav id="sidebar">
    <div class="site-info">
        <a class="site-title" href="<?php echo get_bloginfo( 'url' ); ?>"><h1><?php echo get_bloginfo( 'name' ); ?></h1></a>
        <div class="menus">
            <?php wp_nav_menu( array(
                'menu' => 'primary',
                'menu_class' => 'primary-menu'
            ) ); ?>
            <?php wp_nav_menu( array(
                'menu' => 'secondary',
                'menu_class' => 'secondary-menu'
            ) ); ?>
        </div>
        <div class="site-title-container">
            <a href="<?php echo get_bloginfo( 'url' ); ?>"><h1><?php echo get_bloginfo( 'name' ); ?></h1></a>
            <div class="menu-toggle-outer">
                <span class="menu-toggle">Menu</span>
            </div>
        </div>
    </div>
    <div class="caption">
        <?php if( is_singular('page') ) {
                if( get_field('images') ) {
                    get_template_part('caption');
                }
            } ?>
            <span class="copyright">Copyright <?php echo date('Y'); ?></span>
    </div>
</nav>