<?php
//Crear funcion
function res_sidebars () {
//registrar zonas de widgets
register_sidebar  (array(
    'name'          => __( 'Pie de pagina zona izquierda', 'res' ),
    'id'            => 'sidebar-footer-izq',
    'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',

));

//registrar zonas de widgets
register_sidebar  (array(
    'name'          => __( 'Pie de pagina zona central', 'res' ),
    'id'            => 'sidebar-footer-der',
    'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',

));

//registrar zonas de widgets
register_sidebar  (array(
    'name'          => __( 'Pie de pagina zona derecha', 'res' ),
    'id'            => 'sidebar-footer-cen',
    'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'textdomain' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',

));


}
//al momento de cargar widgets cargar funcion
add_action('widgets_init','res_sidebars');