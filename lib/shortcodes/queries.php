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

/**
 * Shortcode: Author
 * 
 * Get information about the author. 
 * 
 * @param array $atts Shortcode attributes
 * @return string Output html
 */
function wt_author_info($atts){
	extract(shortcode_atts(array(
		'get'	=> 'user_nicename'
		), $atts));


	// POSSIBLE OPTIONS
	// ----------------------------------------------------------------
    // user_login
    // user_pass
    // user_nicename
    // user_email
    // user_url
    // user_registered
    // user_activation_key
    // user_status
    // display_name
    // nickname
    // first_name
    // last_name
    // description
    // jabber
    // aim
    // yim
    // user_level
    // user_firstname
    // user_lastname
    // user_description
    // rich_editing
    // comment_shortcuts
    // admin_color
    // plugins_per_page
    // plugins_last_view
    // ID 
    // ----------------------------------------------------------------

    // Add or remove one of the listed above to ban some of the options.
    $banned = array(
    	'user_pass'
    );

	if( in_array( $get, $banned) ) return;
	return the_author_meta( $get );
}
