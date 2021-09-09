<?php
/*Documentacion

@package Resolver
@subpackage ResolverLubricentro

 */

 //Definiendo constantes
define ('THEMEROOT','wp-content/themes/lubricentro/'); 

define ('IMAGES', 'wp-content/themes/lubricentro/img/');

 /*Definiendo caracteristicas del thema y permisos */
 if ( ! function_exists('res_custom_theme_features') ) {

    // Register Theme Features
    function res_custom_theme_features()  {
    
        // Add theme support for Post Formats
        add_theme_support( 'post-formats', array( 'video', 'audio' ) );
    
        // Add theme support for Featured Images
        add_theme_support( 'post-thumbnails', );
    
        // Add theme support for Custom Background
        $background_args = array(
            'default-color'          => '#ffffff',
            'default-image'          => '',
            'default-repeat'         => '',
            'default-position-x'     => '',
            'wp-head-callback'       => '_custom_background_cb',
            'admin-head-callback'    => '',
            'admin-preview-callback' => '',
        );
        add_theme_support( 'custom-background', $background_args );
    
        // Add theme support for Custom Header
        $header_args = array(
            'default-image'          => '',
            'width'                  => 0,
            'height'                 => 0,
            'flex-width'             => false,
            'flex-height'            => false,
            'uploads'                => true,
            'random-default'         => false,
            'header-text'            => false,
            'default-text-color'     => '',
            'wp-head-callback'       => '',
            'admin-head-callback'    => '',
            'admin-preview-callback' => '',
            'video'                  => true,
            'video-active-callback'  => '',
        );
        add_theme_support( 'custom-header', $header_args );
    
        // Add theme support for HTML5 Semantic Markup
        add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
    
        // Add theme support for document Title tag
        add_theme_support( 'title-tag' );
    
        // Add theme support for Translation
        load_theme_textdomain( 'res', get_template_directory() . '/languages' );
        //añadir tamaño de imagenes personalizados
        add_image_size('product_size_image, 825,533,true');
    }
    add_action( 'after_setup_theme', 'res_custom_theme_features' );
    //Definiendo compatibilidad con wo
    add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
   add_theme_support( 'woocommerce' );
}

    
    
    }

    /*Registrando y cargando hojas de estilo */

    require_once('includes/scripts-style.php');

      /*Registrando menus*/

    require_once('includes/menus.php');
