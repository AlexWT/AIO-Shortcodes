<?php

/*
	Plugin name: AIO Shortcodes
	Description: Universal plugin specifically for the purpouse of WellThemes team. The reason for it is the repeatitive use of shortcodes with similar structures. This plugin will be closed to public and used specialy for the themes we create. In future it might be offered for sale at the company site or integrated into our themes. 
	Version: 1.2
	Author: Alexander Dimitrov, Georgi Canev, Sami Chaudhary
	Author URI: http://wellthemes.com
*/

include_once('lib/functions.php');
//include_once('admin/editor.php');				// Basicly, buttons for the shortcodes.

// Including the diferent types of shortcodes.
include_once('lib/shortcodes/typography.php');	// No dynamic data here.
include_once('lib/shortcodes/queries.php');		// Shortcodes that work with the database
include_once('lib/shortcodes/init.php');		// The place where all shoertcodes start functioning


/* ============================================================================================ */
/* Initialization of the plugin. All important stuff for the setup are happening in this func.  */
/* ============================================================================================ */

function wt_init(){
	// Add the basic stylings for the plugin
	wp_register_style('style', wt_plugin_directory() . '/lib/css/style.css');
	wp_register_style('respo', wt_plugin_directory() . '/lib/css/responsive.css');		

	// Add them in the head
	wp_enqueue_style( 'style' );
	wp_enqueue_style( 'respo' );

	// Load the javascript (in this case bootstrap but we can load any other with the same function)
	enqueue_scripts();
}
add_action( 'init', 'wt_init', 5 );

function enqueue_scripts() {
	wp_enqueue_script('bootstrap', plugins_url('js/bootstrap.min.js', __FILE__), array('jquery'), '1.0', true);
}    
add_action('wp_enqueue_scripts', 'enqueue_scripts');