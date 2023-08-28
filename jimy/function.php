<?php

function addStyleSheets() {
  wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/css/fontawesome.min.css');
  wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.css');
  wp_enqueue_style( 'style', get_template_directory_uri() . 'style.css')
}

function addScripts() {
  wp_deregister_script('jquery'); // Remove Registration For Old jQuery
  wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, '', true); // Register A New jQuery In Footer
  wp_enqueue_script('jquery'); // Enqueue The New jQuery
  wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true); // Note the 'jquery' dependency here
  wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js', array(), false, true); // Note the 'jquery' dependency here
}


function addCustomMenu() {
  register_nav_menu('bootgstrap-menu', __('Bootstrap Navigation Bar'));
}

wp_nav_menu();

add_action('wp_enqueue_scripts', 'addStyleSheets');
add_action('wp_enqueue_scripts', 'addScripts');
add_action('init', 'addCustomMenu');