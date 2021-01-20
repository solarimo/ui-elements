<?php
/**
* Plugin Name: UI-Components
* Description: weitere UI compoents für das Frontend
* Version: 1.0
* Author: Martin Gressler
**/

// Set Up
define('A_DEV_MODE', true);
$ver = A_DEV_MODE ? time() : false;

include('buttons/ui-buttons.php');
include('buttons/ui-button.php');

function ui_enqueue() {
    wp_register_style('ui-components', plugins_url( 'ui-components.css', __FILE__), [], $ver);
    wp_enqueue_style('ui-components');
}


add_shortcode('buttons', 'ui_buttons_handler');
add_shortcode('button', 'ui_button_handler');
add_action('wp_enqueue_scripts', 'ui_enqueue');