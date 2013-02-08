<?php

/**
 * Returns current plugin url
 *
 * @return string Plugin url
 */
function wt_plugin_directory() {
	return plugins_url( '', dirname( __FILE__ ) );
}