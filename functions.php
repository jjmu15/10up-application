<?php

// register menu
function murphyup_menu() {
  register_nav_menu('header-menu',__( 'Header Menu' ));
}
add_action( 'init', 'murphyup_menu' );


/**
 * Enqueue MurphyUp Styles and Scripts
 */
function murphyup_scripts() {
    wp_enqueue_style( 'theme', get_template_directory_uri() . '/dist/css/theme.css' );
    wp_enqueue_script( 'menu', get_template_directory_uri() . '/dist/js/menu.js', null, null, true );


}
add_action( 'wp_enqueue_scripts', 'murphyup_scripts' );


/**
 * Add Menu to WP API for React Menu Demonstration
 */
function get_murphyup_menu() {
  $menuLocations = get_nav_menu_locations();
  $menuID = $menuLocations['header-menu'];
   // Replace your menu name, slug or ID carefully
   return wp_get_nav_menu_items($menuID);
}
add_action( 'rest_api_init', function () {
   register_rest_route( 'v2', 'menu', array(
       'methods' => 'GET',
       'callback' => 'get_murphyup_menu',
   ) );
} );
