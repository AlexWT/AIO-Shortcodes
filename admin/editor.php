<?php


add_action('init', 'action_admin_init');        
// add_action('admin_enqueue_scripts', 'action_admin_scripts_init');      

/**
 * Registers TinyMCE rich editor buttons
 *
 * @return	void
 */
function action_admin_init() {

	if ( current_user_can('edit_posts') && current_user_can('edit_pages') ) {
		add_filter( 'mce_external_plugins' ,'add_rich_plugins' );
		add_filter( 'mce_buttons', 'register_rich_buttons' );
	}


}

// --------------------------------------------------------------------------

/**
 * Defines TinyMCE rich editor js plugin
 *
 * @return	void
 */
function add_rich_plugins( $plugin_array ) {	
	$plugin_array['wellthemesShortcodes'] = wt_plugin_directory() . '/js/buttons.js';		
	return $plugin_array;
}

// --------------------------------------------------------------------------

/**
 * Adds TinyMCE rich editor buttons
 *
 * @return	void
 */
function register_rich_buttons( $buttons ) {	
	array_push( $buttons, "|", 'wellthemes_button' );		
	return $buttons;
}    

?>