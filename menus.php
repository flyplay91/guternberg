<?php

function register_menus() {
    register_nav_menus(
    array(
    'main-menu' => __( 'Main Menu' ),
    'utility-menu' => __( 'Utility Menu' ),
    'social-menu' => __( 'Social Menu' ),
    'footer-menu' => __( 'Footer Menu' ),
    'resources-menu' => __( 'Resources Menu' ),
    'footer-bottom-menu' => __( 'Footer Utility Menu' )
    )
    );
}
add_action( 'init', 'register_menus' );