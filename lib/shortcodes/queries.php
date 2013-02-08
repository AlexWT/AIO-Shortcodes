<?php

/**
 * Shortcode: Get the recent post
 * 
 * @param array $atts Shortcode attributes
 * @return string Output html as list
 */
function wt_get_recent_posts_list($atts){
	extract( shortcode_atts( array(
		'title' 	=> 	'Recent Posts',
		'limit' 	=> 	"5",
		'order' 	=> 	'DESC',
		'orderby' 	=> 	'post_date',
		'category'	=>	'0'
		), $atts ) );

	$args = array(
		'numberposts' 	=> $limit,
		'order'			=> $order,
		'orderby'		=> $orderby,
		'category'		=> $category
		);
	$recent_posts = wp_get_recent_posts( $args );

	$heading = "<h2 class='rp-heading'>";
	$heading .= $title;
	$heading .= "</h2>"; 

	// Create the list of posts
	$list = "<ul>";
	foreach( $recent_posts as $post ) 
		$list .= "<li><a href='". get_permalink($recent["ID"]) ."'>". $post["post_title"] ."</a></li>";
	$list .= "</ul>";

	return $heading.$list;
}

/**
 * Shortcode: The Authors
 * 
 * @param array $atts Shortcode attributes
 * @return string Output html as list
 */
function wt_authors($atts){
	extract( shortcode_atts( array(
			"display_posts" => true,
			"exclude_admin" => false,
			"show_fullname" => true,
			"hide_empty" 	=> false,
			"custom_style"	=> ''
		), $atts ) );

	$list = list_authors($display_posts, $exclude_admin, $show_fullname, $hide_empty);
	return "<div class='author-list ".$custom_style."'>" . $list . "</div>";
}


/**
 * Shortcode: Menu
 * 
 * Print a menu in the content area. Can be use as sitemap.
 * 
 * @param array $atts Shortcode attributes
 * @return string Output html
 */
function wt_wp_menu($atts){
	extract(shortcode_atts(array(
		'menu' 		=> null,
		'container' => 'div'
		), $atts));

	$array = array(
		'menu' => $menu,
		'echo' => false);

	return wp_nav_menu($array);
}