<?php

/* menu dinamico */

function res_menus () {
register_nav_menus(array (

    'main-menu' => 'Menu Principal en encabezado'

));
}

add_action('init','res_menus');