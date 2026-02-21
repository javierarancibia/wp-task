<?php

/**
 * Bespoke Rx Theme Functions
 */

// ─── THEME SETUP ────────────────────────────────────────────────
function bespokerx_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'block-templates' );
    add_theme_support( 'block-template-parts' );
    add_theme_support( 'editor-styles' );

    register_nav_menus([
        'primary' => __( 'Primary Menu', 'bespokerx' ),
        'footer'  => __( 'Footer Menu', 'bespokerx' ),
    ]);
}
add_action( 'after_setup_theme', 'bespokerx_setup' );


// ─── ENQUEUE STYLES & SCRIPTS ───────────────────────────────────
function bespokerx_enqueue_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'bespokerx-fonts',
        'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=Montserrat:wght@400;700&display=swap',
        [],
        null
    );

    // Main stylesheet
    wp_enqueue_style(
        'bespokerx-style',
        get_stylesheet_uri(),
        [ 'bespokerx-fonts' ],
        '1.0.0'
    );

    // Custom CSS
    wp_enqueue_style(
        'bespokerx-custom',
        get_template_directory_uri() . '/assets/css/custom.css',
        [ 'bespokerx-style' ],
        '1.0.0'
    );

    // Main JS
    wp_enqueue_script(
        'bespokerx-main',
        get_template_directory_uri() . '/assets/js/main.js',
        [],
        '1.0.0',
        true // carga en footer
    );
}
add_action( 'wp_enqueue_scripts', 'bespokerx_enqueue_scripts' );


// ─── CUSTOM FIELDS PARA IMÁGENES EDITABLES ──────────────────────
function bespokerx_register_meta() {
    // Hero video URL — editable desde el dashboard
    register_meta( 'post', 'hero_video_url', [
        'show_in_rest'  => true,
        'single'        => true,
        'type'          => 'string',
        'auth_callback' => '__return_true',
    ]);
}
add_action( 'init', 'bespokerx_register_meta' );

function bespokerx_register_patterns() {
    // Helper function to get pattern content with PHP execution
    $get_pattern_content = function( $file ) {
        ob_start();
        include get_template_directory() . '/patterns/' . $file;
        return ob_get_clean();
    };

    register_block_pattern(
        'bespokerx/hero',
        [
            'title'   => 'Hero Section',
            'content' => $get_pattern_content( 'hero.php' ),
        ]
    );

    register_block_pattern(
        'bespokerx/experience',
        [
            'title'   => 'Experience Section',
            'content' => $get_pattern_content( 'experience.php' ),
        ]
    );

    register_block_pattern(
        'bespokerx/discover',
        [
            'title'   => 'Discover Section',
            'content' => $get_pattern_content( 'discover.php' ),
        ]
    );

    register_block_pattern(
        'bespokerx/services',
        [
            'title'   => 'Services Section',
            'content' => $get_pattern_content( 'services.php' ),
        ]
    );

    register_block_pattern(
        'bespokerx/gallery',
        [
            'title'   => 'Gallery Section',
            'content' => $get_pattern_content( 'gallery.php' ),
        ]
    );

    register_block_pattern(
        'bespokerx/reviews',
        [
            'title'   => 'Reviews Section',
            'content' => $get_pattern_content( 'reviews.php' ),
        ]
    );

    register_block_pattern(
        'bespokerx/reviews2',
        [
            'title'   => 'Reviews & Instagram Section',
            'content' => $get_pattern_content( 'reviews2.php' ),
        ]
    );

    register_block_pattern(
        'bespokerx/contact-hero',
        [
            'title'   => 'Contact Hero Section',
            'content' => $get_pattern_content( 'contact-hero.php' ),
        ]
    );
}
add_action( 'init', 'bespokerx_register_patterns' );