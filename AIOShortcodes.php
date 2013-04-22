<?php

/*
 Plugin name: AIO Shortcodes
 Description: Universal plugin specifically for the purpouse of WellThemes team. The reason for it is the repeatitive use of shortcodes with similar structures. This plugin will be closed to public and used specialy for the themes we create. In future it might be offered for sale at the company site or integrated into our themes.
 Version: 2.0
 Author: Alexander Dimitrov, Georgi Canev
 Author URI: http://wellthemes.com
 */

//include_once('admin/editor.php');				// Basicly, buttons for the shortcodes.

class AioShortcodes {

	public function __construct() {
		include_once ('lib/functions.php');
		include_once ('lib/shortcodes/typography.php');
		include_once ('lib/shortcodes/queries.php');
		include_once ('lib/shortcodes/init.php');
		
		add_action('init', array($this, 'wtInit') /*, 5 */ );
		add_action('wp_enqueueScripts', array($this, 'enqueueScripts'));

		$this -> runPlugin();
	}

	public function runPlugin() {
		$typo = new ShortcodesInit();
	}

	public function wtInit() {
		// Add the basic stylings for the plugin
		wp_register_style('style', ShortcodesFunctions::wtPluginDirectory() . '/lib/css/style.css');
		wp_register_style('respo', ShortcodesFunctions::wtPluginDirectory() . '/lib/css/responsive.css');

		// Add them in the head
		wp_enqueue_style('style');
		wp_enqueue_style('respo');

		// Load the javascript (in this case bootstrap but we can load any other with the same function)
		$this -> enqueueScripts();
	}

	public function enqueueScripts() {
		wp_enqueue_script('bootstrap', plugins_url('js/bootstrap.min.js', __FILE__), array('jquery'), '1.0', true);
		wp_enqueue_script('responsive-videos', plugins_url('js/videos.js', __FILE__), array('jquery'), '1.0', true);
	}

}

$AioShortcodes = new AioShortcodes();

/* ============================================================================================ */
/* Initialization of the plugin. All important stuff for the setup are happening in this func.  */
/* ============================================================================================ */
