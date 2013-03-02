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

add_action('media_buttons','add_sc_select',11);
function add_sc_select(){
    global $shortcode_tags;
    /** Any Shortcodes that should be excluded from this list should be added below */
    $exclude = array("wp_caption", "embed");
    echo '<select style="float:right;margin-right:-80px;position:relative;top:45px;height:30px;" id="sc_select">
    <option>Select Shortcode...</option>';
    foreach ($shortcode_tags as $key => $val){
            if(!in_array($key,$exclude)){
            $shortcodes_list .= '<option value="['.$key.'][/'.$key.']">'.$key.'</option>';
            }
        }
     echo $shortcodes_list;
     echo '</select>';
}
add_action('admin_head', 'button_js');
function button_js() {
    echo '<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery("#sc_select").change(function() {
            send_to_editor(jQuery("#sc_select :selected").val());
                return false;
            });
        });
    </script>';
}
add_action('media_buttons','add_sc_select',11);
function add_sc_select(){
    global $shortcode_tags;
    /** Any Shortcodes that should be excluded from this list should be added below */
    $exclude = array("wp_caption", "embed");
    echo '<select style="float:right;margin-right:-80px;position:relative;top:45px;height:30px;" id="sc_select">
    <option>Select Shortcode...</option>';
    foreach ($shortcode_tags as $key => $val){
            if(!in_array($key,$exclude)){
            $shortcodes_list .= '<option value="['.$key.'][/'.$key.']">'.$key.'</option>';
            }
        }
     echo $shortcodes_list;
     echo '</select>';
}
add_action('admin_head', 'button_js');
function button_js() {
    echo '<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery("#sc_select").change(function() {
            send_to_editor(jQuery("#sc_select :selected").val());
                return false;
            });
        });
    </script>';
}
