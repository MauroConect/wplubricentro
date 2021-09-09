<?php
/*archivo de recarga de scripts y estilos */


function res_theme_style(){
 //condigo para registrar estilos
 wp_register_style('fontawesome', THEMEROOT . '/css/fontawesome.css', '','5.1.1','all');
 wp_register_style('res-styles', get_stylesheet_uri(), array('fontawesome'),'1.0','all');

 //cargar los estilos, dependencias de font awesome, funcion para cargar estilos y escripst
 wp_enqueue_style('res-styles');
    

}
//ejecutar
add_action ('wp_enqueue_scripts','res_theme_style');

/*cargando scrips */

function res_theme_scripts(){

    //registar scripts
    wp_register_script('parallax','THEMEROOT ./js/parallax.min.js' ,array('jquery'),'1.5.0',true);
    wp_register_script('res-scripts','THEMEROOT ./js/main.js' ,array('jquery','parallax'),'1.0',true);
    //cargar
    wp_enqueue_script('res-scripts');
}

//cargar scrips
add_action('wp_enqueue_scripts','res_theme_scripts');
