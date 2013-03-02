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
function wt_onethird($atts, $content = null) {
	return "<div class='span4'>". do_shortcode($content) ."</div>";
}

/**
 * Shortcode: One Half
 *
 * @return string Output html
 */
function wt_onehalf($atts, $content = null) {
	return "<div class='span6'>". do_shortcode($content) ."</div>";
}

/**
 * Shortcode: Two Thirds
 *
 * @return string Output html
 */
function wt_twothird($atts, $content = null) {
	return "<div class='span8'>". do_shortcode($content) ."</div>";
}

/**
 * Shortcode: Columns wrapper
 *
 * @return string Output html
 */
function wt_columns($atts, $content = null) {

	$column = "<div class='wt-container-fluid'>";
	$column .= "	<div class='wt-row-fluid'>";
	$column .= 			do_shortcode($content);
	$column .= "	</div>";
	$column .= "</div>";

	return $column;
}

/**
 * Shortcode: Buttons
 * 
 * The color and variations of the button are not defined here,
 * but this shortcode give freedom for creating many diferent
 * buttons and variations
 *
 * ------------------------------------------------------------
 * ALLOWED STYLES FOR THE BUTTONS
 *
 * primary
 * warning
 * danger
 * success
 * info
 * inverse
 * 
 * @param array $atts Shortcode attributes
 * @return string Output html
 */
function wt_buttons($atts, $content = null){
	extract( shortcode_atts( array(
		'btn' 			=> '',
		'size' 			=> '',
		'block'			=> 'false'
		), $atts) );

	$link = "<a href='";
	$link .= $url;
	$link .= "' class='btn";		// Open class section

	// Check if the button has some more properties.
	if($btn != '') {
		$link .= ' btn-' . $btn;
	}

	if($size != '') {
		$link .= ' btn-' . $size;
	}

	if($block == 'true') {
		$link .= ' btn-block';
	}	

	$link .= "'>";					// Close the class section
	$link .= $content;
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
	$highlight .= do_shortcode($content);
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
	$box .= do_shortcode($content);
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
	$table .= "<div class='content'>" . do_shortcode($content) . "</div>";	// The list (this is list from the editot 
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

	return "<div class='" . $style . "'>" . do_shortcode($content) . "</div>";
}

/**
 * Shortcode: Divider
 * 
 * @param array $atts Shortcode attributes
 * @return string Output html
 */
function wt_divider($atts){
	extract(shortcode_atts(array(
		'size' => 'normal'
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
		'label' => ''
		), $atts));

	if($label != '') {
		$label = "label-$label";
	}

	return "<span class='label $label'>" . $content . "</span>";
}

/**
 * Shortcode: Quote
 * 
 * @param array $atts Shortcode attributes
 * @return string Output html
 */
function wt_quote($atts, $content = null){
	extract(shortcode_atts(array(
		'float' 	=> 'none',
		'source' 	=> ''
		), $atts));

	if($source != '') {
		$source = "<small>$source</small>";
	}

	return "<blockquote class='wt_quote $float'> " . do_shortcode($content) . " $source</blockquote>";
}

/**
 * Shortcode: Dropcap
 * 
 * @param array $atts Shortcode attributes
 * @return string Output html
 */
function wt_dropcap($atts, $content = null){
	extract(shortcode_atts(array(
		'style' => '1'
		), $atts));

	$class = "dropcap-" . $style ;

	return "<span class='wt_dropcap ". $class ."'>" . $content . "</span>";
}

/**
 * Shortcode: Modal Window [bootstrap]
 *
 * @param string $content modal content
 * @param array $atts Shortcode attributes
 * @return string Output html
 */
function wt_modal_window($atts, $content = null){
	extract(shortcode_atts( array(
		'btn'		=> '',
		'btn_text' 	=> 'Click me',
		'title'		=> ''
		), $atts ));

	if ($btn != '') {
		$btn = 'btn-' . $btn;
	}

	$modal_ID = randomString();	
	// $modal_ID = "modal";
	$button = "<a href='#$modal_ID' class='btn $btn' data-toggle='modal' data-target='#$modal_ID'>$btn_text</a>";

	$modal = $button;
	$modal .= "<div id='$modal_ID' class='modal hide'>";
	$modal .=   	"<div class='modal-header'>";
	$modal .=	    "<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>";
	$modal .=	    "<h3>$title</h3>";
	$modal .=    "</div>";
	$modal .=	    "<div class='modal-body'>";
	$modal .=	    do_shortcode($content);
	$modal .=    "</div>";
    $modal .= "</div>";

	return $modal;
}

/**
 * Shortcode: Progress Bar
 * 
 * @param array $atts Shortcode attributes
 * @return string Output html
 */
function wt_progress($atts) {
	extract(shortcode_atts(array(
		'progress' 	=> '50',
		'type' 		=> ''
		), $atts));

	$progress = $progress . "%";

	if($type != '') {
		$type = "progress-$type";
	}

	$bar = "<div class='progress $type'>";
	$bar .= "	<div class='bar' style='width: $progress'></div>";
	$bar .= "</div>";

	return $bar;
}

/**
 * Shortcode: Video Player
 * 
 * @param array $atts Shortcode attributes
 * @return string Output html
 */
function wt_video_player($atts, $content = null) {
	extract(shortcode_atts(array(
		'fullwidth' => 'true',
		'width'		=> '100%',
		'height'	=> '420',
		'id'		=> ''
		), $atts));

	// Check what is the player acording the ID.
	if(preg_match("/^[0-9]+$/", $id, $matches)) {
		$player = vimeo;
	}

	switch ($player) {
		case 'vimeo':
			$video = "<iframe src='http://player.vimeo.com/video/$id?title=0&amp;byline=0&amp;portrait=0&amp;color=4584be' width='$width' height='$height' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>";
			break;
		
		default:
			// The default value is YouTube
			$video = "<iframe width='$width' height='$height' src='http://youtube.com/embed/". $id ."' frameborder='0' allowfullscreen></iframe>";
			break;
	}

	$container = "<div class='wt-container-fluid'>$video</div>";

	return $container;
}
