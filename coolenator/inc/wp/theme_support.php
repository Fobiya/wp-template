<?php
	add_theme_support('post-thumbnails');
	add_theme_support( 'menus' );
	add_theme_support('woocommerce');

add_action( 'after_setup_theme', 'coolenator_nav_menu' );

function coolenator_nav_menu() {
	register_nav_menu( 'header', 'Header Menu' );
}
