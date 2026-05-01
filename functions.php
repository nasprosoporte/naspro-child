<?php
/**
 * Funciones del tema hijo Naspro Child
 */

// Evitar acceso directo
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}


/* =========================================================
   1. Cargar estilos del padre (Astra) + hijo
   ========================================================= */
add_action( 'wp_enqueue_scripts', 'naspro_child_enqueue_styles' );
function naspro_child_enqueue_styles() {
    // Estilos del padre Astra
    wp_enqueue_style(
        'astra-parent-style',
        get_template_directory_uri() . '/style.css'
    );

    // Estilos del hijo (cargados después para poder sobrescribir)
    wp_enqueue_style(
        'naspro-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( 'astra-parent-style' ),
        '1.3.0'
    );
}


/* =========================================================
   2. Cargar assets SOLO en la plantilla Naspro Landing
   =========================================================
   - Google Fonts (Bebas Neue + Poppins)
   - landing.css consolidado
   - landing.js consolidado
   ========================================================= */
add_action( 'wp_enqueue_scripts', 'naspro_landing_assets' );
function naspro_landing_assets() {
    $template = get_page_template_slug();
    if ( $template !== 'page-naspro.php' && $template !== 'page-legal.php' ) {
        return;
    }

    // Preconnect a Google Fonts (mejora rendimiento)
    add_action( 'wp_head', 'naspro_landing_preconnect', 1 );

    // Google Fonts: Bebas Neue + Poppins
    wp_enqueue_style(
        'naspro-google-fonts',
        'https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@300;400;500;600&display=swap',
        array(),
        null
    );

    // CSS consolidado de la landing
    wp_enqueue_style(
        'naspro-landing-css',
        get_stylesheet_directory_uri() . '/assets/css/landing.css',
        array( 'naspro-child-style' ),
        '1.3.0'
    );

    // JS consolidado de la landing (en el footer, sin dependencias)
    wp_enqueue_script(
        'naspro-landing-js',
        get_stylesheet_directory_uri() . '/assets/js/landing.js',
        array(),
        '1.3.0',
        true // true = cargar en footer
    );
}


/* =========================================================
   3. Preconnect a Google Fonts (optimización)
   ========================================================= */
function naspro_landing_preconnect() {
    echo '<link rel="preconnect" href="https://fonts.googleapis.com">' . "\n";
    echo '<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>' . "\n";
}