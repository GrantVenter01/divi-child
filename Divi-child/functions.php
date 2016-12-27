<?php 

add_action( 'wp_enqueue_scripts', 'my_enqueue_assets', 999 ); 

function my_enqueue_assets() { 
    
  wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri().'/js/custom.js', array('jquery') );
    
    wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' ); 
    
    wp_enqueue_style( 'child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'parent-style' ),
        wp_get_theme()->get('Version')
    );
}

add_action( 'wp_enqueue_scripts', 'my_enqueue_last', 999999); 

function my_enqueue_last() { 

    wp_enqueue_style( 'responsive-style', get_stylesheet_directory_uri().'/responsive.css' );

}