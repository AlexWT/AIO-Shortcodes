<?php

/**
 * Shortcode: Horizontal Line
 *
 * @param array $atts Shortcode attributes
 * @return string Output html
 */
function wt_horizontal_line($atts) {
	extract( shortcode_atts( array(
		'style' => 'normal',
		'id' 	=> null
		), $atts ) );
	
	$return = "<hr class='";
	$return .= "hr-line hr-" . $style; 	// Create the class
	if(isset($id)) {
		$return .= "' id='" . $id;
	}

	$return .= "' />";					// end the tag

	return $return;
}

/**
 * Shortcode: One third
 *
 * Separate the content into third of the parent element.
 * This styling must be provided from the theme style.css
 *
 * @param array $atts Shortcode attributes
 * @return string Output html
 */
function wt_onethird_column($atts, $content) {
	extract( shortcode_atts( array(
		'last' => false
		), $atts ) );
	$return = "<div class='column one-third";
	$last ? $return .= " last'>" : $return.= "'>";
	$return .= $content . "</div>";

	return $return;
}

/**
 * Shortcode: Buttons
 * 
 * The color and variations of the button are not defined here,
 * but this shortcode give freedom for creating many diferent
 * buttons and variations
 * 
 * @param array $atts Shortcode attributes
 * @return string Output html
 */
function wt_buttons($atts){
	extract( shortcode_atts( array(
		'color' 			=> 'gray',
		'shade' 			=> "solid",
		'rounded_corners' 	=> "standart",
		'url' 				=> "",
		'text' 				=> "",
		'size' 				=> "normal",
		'animated'			=> 'no-animation'
		), $atts) );

	if($animated == 'true') {
		$animated = 'animated';
	} else $animated = 'no-animation';

	$link = "<a href='";
	$link .= $url;
	$link .= "' class='btn btn-";
	$link .= $color . " " . $size . " " . $shade . " " . $animated . " " . $rounded_corners . "' >";;
	$link .= $text;
	$link .= "</a>";

	return $link;
}

/**
 * Shortcode: Highlites
 *
 * @param array $atts Shortcode attributes
 * @param String $content The content beween the tags
 * @return string Output html
 */
function wt_highlight($atts, $content) {
	extract(shortcode_atts(array(
		"color" => "yellow"
		), $atts));

	$highlight = "<span class='highlight-". $color ."'>";
	$highlight .= $content;
	$highlight .= "</span>";

	return $highlight;
}

/**
 * Shortcode: Infoboxes
 * 
 * @param array $atts Shortcode attributes
 * @param String $content The content beween the tags
 * @return string Output html
 */
function wt_infobox($atts, $content) {
	extract(shortcode_atts(array(
		"color" => 	"yellow",
		"size" 	=> 	"full-width",
		"type" 	=> 	"info"
		), $atts));

	$box = "<div class='infobox " . $color . " " . $size . " " . $type . "'>";
	$box .= $content;
	$box .= "</div>";

	return $box;
}

/**
 * Shortcode: Price tables
 * 
 * @param array $atts Shortcode attributes
 * @param String $content The content beween the tags
 * @return string Output html
 */
function wt_pricetable($atts, $content) {
	extract(shortcode_atts(array(
		"title" 		=> "Normal",
		"color" 		=> "dark",
		"price" 		=> "0$",
		"period" 		=> "monthly",
		"width"			=> "one-third",
		"btn_link" 		=> '#',
		"btn_color" 	=> 'gray',
		"btn_content" 	=> 'Sign Up'
		), $atts));

	$table = "<div class='pricetable " . $color;				// Open the table and color class
	$table .= " " . $width . "'>";								// Set width and close tag
	$table .= "<h2>" . $title . "</h2>";						// Title of the table
	$table .= "<span class='price'>" . $price . "</span>";		// The price of the plan
	$table .= "<span class='period'>" . $period . "</span>"; 	// For what time? Pay for year / month or?
	$table .= "<div class='content'>" . $content . "</div>";	// The list (this is list from the editot 
	$table .= "<a href='". $btn_link ."' ";						// Create the button
	$table .= "class='btn btn-" . $btn_color .  "'>";			// Add classes
	$table .= $btn_content . "</a>";							// The text and close the link
	$table .= "</div>"; 										// End the whole element (and shortcode)

	return $table;
}


/**
 * Shortcode: Google maps
 * 
 * @param array $atts Shortcode attributes
 * @return string Output html
 */
function wt_googlemap(){
	extract(shortcode_atts(array(
		'height' 	=> '640',
		'width' 	=> '480',
		'src'		=> ''
		), $atts));

	return '<iframe width="'.$width.'" height="'.$height.'" src="'.$src.'&output=embed" ></iframe>';
}

/**
 * Shortcode: List
 * 
 * @param array $atts Shortcode attributes
 * @return string Output html
 */
function wt_list($atts, $content){
	extract(shortcode_atts(array(
		'style' => 'normal'
		), $atts));

	return "<div class='" . $style . "'>" . $content . "</div>";
}

/**
 * Shortcode: Divider
 * 
 * @param array $atts Shortcode attributes
 * @return string Output html
 */
function wt_divider($atts){
	extract(shortcode_atts(array(
		'size' => 'normal'			// In best case : ['huge', normal', 'big']
		), $atts));

	return "<div class='wt_divider wt_divider-". $size . "'></div>";
}

/**
 * Shortcode: Label
 * 
 * @param array $atts Shortcode attributes
 * @return string Output html
 */
function wt_label($atts, $content = null){
	extract(shortcode_atts(array(
		'color' => 'gray'
		), $atts));

	return "<span class='wt_label wt_label-". $color ."'>" . $content . "</span>";
}