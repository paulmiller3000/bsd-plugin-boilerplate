<?php

/*
 * Plugin Name:     BSD Plugin Boilerplate
 * Plugin URI:      https://www.battlestardigital.com/
 * Description:     Plugin boilerplate
 * Version:         1.0.0
 * Author:          Battlestar Digital
 * Author URI:      https://www.battlestardigital.com/
 * Text Domain:     bsd-plugin-boilerplate
 */

namespace BSD_Plugin_Boilerplate;

if ( !function_exists('add_action') ) {
  echo 'Yo! I\'m just a plugin. There\'s nothing I can do when called directly.';
  exit;
}

// Setup
define( 'BSD_PLUGIN_BOILERPLATE_URL', __FILE__ );

// Includes
include( 'includes/activate.php' );
include( 'includes/init.php' );
include( 'includes/class-bsd-plugin-boilerplate.php' );
include( 'includes/front/enqueue.php' );
include( 'includes/admin/menus.php' ); // Admin menus

// Hooks
register_activation_hook(__FILE__, 'BSD_Plugin_Boilerplate\Inc\activate_plugin' );
add_action( 'init', 'BSD_Plugin_Boilerplate\Inc\plugin_init' );
add_action( 'wp_enqueue_scripts', 'BSD_Plugin_Boilerplate\Inc\Front\front_enqueue', 100 );
add_action( 'admin_menu', 'BSD_Plugin_Boilerplate\Inc\Admin\bsd_plugin_boilerplate_admin_menus' );

$plugin = new Inc\BSD_PLUGIN_BOILERPLATE_MAIN_PLUGIN();
$plugin->run();