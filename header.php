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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/script.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/js/lightslider.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightslider/1.1.6/css/lightslider.min.css" rel="stylesheet">
    <?php if( is_singular('page') ) { ?>
        <?php if( get_field('color_theme') == 'dark' ) { ?>
            <style>
                body {
                    background-color: #000000;
                }
				
				* {
					color: white!important;
				}
				
				.site-title-container {
					background-color: black!important;
				}
            </style>
        <?php } ?>
        <?php if( !empty(get_field('images')) ) { ?>
		<script>
		$(document).ready(function() {
			$('.copyright').hide();	
		})
		</script>
        <style>
            #grid .grid {
                column-count: <?php echo get_field('columns'); ?>;
            }
            <?php if( get_field('color_theme') == 'dark' ) { ?>
            body {
                background-color: #000000;
                color: white;
            }
            <?php }} ?>
        </style>
    <?php } ?>
    <?php wp_head(); ?>
</head>
<body id="body" class="<?php body_class(); ?>">
<nav id="sidebar">
    <div class="site-info">
        <a class="site-title" href="<?php echo get_bloginfo( 'url' ); ?>"><h1><?php echo get_bloginfo( 'name' ); ?></h1></a>
        <div class="menus">
            <?php wp_nav_menu( array( 'menu' => 'primary', ) ); ?>
            <?php wp_nav_menu( array( 'menu' => 'secondary', ) ); ?>
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