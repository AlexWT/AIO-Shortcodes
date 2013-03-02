<?php

/**
 * Returns current plugin url
 *
 * @return string Plugin url
 */
function wt_plugin_directory() {
	return plugins_url( '', dirname( __FILE__ ) );
}

/**
 * Generate random string
 *
 * @return string 
 */
function randomString($length = 6) {
	$str = "";
	$characters = array_merge(range('A','Z'), range('a','z'), range('0','9'));
	$max = count($characters) - 1;

	for ($i = 0; $i < $length; $i++) {
		$rand = mt_rand(0, $max);
		$str .= $characters[$rand];
	}

	return $str;
}

/**
 * Generate row
 *
 * @return string 
 */
function bootstrap_row($type) {
	if( !isset($type) ) {
		$type = '-' . $type;
	}

	
}