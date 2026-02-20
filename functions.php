<?php
function bespokerx_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'bespokerx_setup' );

function bespokerx_enqueue_scripts() {
    wp_enqueue_style( 'bespokerx-style', get_stylesheet_uri(), [], '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'bespokerx_enqueue_scripts' );