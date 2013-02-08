<?php

/*
	Plugin name: AIO Shortcodes
	Description: Universal plugin specifically for the purpouse of WellThemes team. The reason for it is the repeatitive use of shortcodes with similar structures. This plugin will be closed to public and used specialy for the themes we create. In future it might be offered for sale at the company site or integrated into our themes. 
	Version: 1.0
	Author: Alexander Dimitrov, Georgi Canev, Sami Chaudhary
	Author URI: http://wellthemes.com
*/

include_once('lib/functions.php');

// Including the diferent types of shortcodes.
include_once('lib/shortcodes/typography.php');	// No dynamic data here.
include_once('lib/shortcodes/queries.php');		// Shortcodes that work with the database
include_once('lib/shortcodes/init.php');		// The place where all shoertcodes start functioning

/* ============================================================================================ */
/* Initialization of the plugin. All important stuff for the setup are happening in this func.  */
/* ============================================================================================ */

function wp_init(){
	// Add the basic stylings for the plugin
	wp_register_style('aio-shortcodes', wt_plugin_directory() . '/lib/css/aio-shortcodes.css');	

	// Add them in the head
	wp_enqueue_style( 'aio-shortcodes' );
}
add_action( 'init', 'wp_init' );

