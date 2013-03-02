<?php

// Add all the shortcodes into wordpress. Also, this is a fast way
// to find all the shortcodes in the order they are written in the
// other two files.  (where is the shortcode logic).  Another plus 
// of this separation is easy shutdown of a shortcode. If you want
// to remove some shortcode, just comment the line below.


/* ============================================================
 * TYPOGRAPHY.PHP
 * ============================================================ */
add_shortcode("hr",   		"wt_horizontal_line");

add_shortcode("columns",		"wt_columns");			// 1/1
add_shortcode("half",	 		"wt_onehalf");			// 1/2
add_shortcode("third",	 		"wt_onethird");			// 1/3
add_shortcode("two_thirds",		"wt_twothird");			// 2/3

add_shortcode("btn", 			"wt_buttons");
add_shortcode("highlight", 		"wt_highlight");
add_shortcode("infobox", 		"wt_infobox");
add_shortcode("price-table", 	"wt_pricetable");
add_shortcode("googlemap", 		"wt_googlemal");
add_shortcode("list", 			"wt_list");
add_shortcode("divider", 		"wt_divider");
add_shortcode("label", 			"wt_label");
add_shortcode("quote", 			"wt_quote");
add_shortcode("dropcap", 		"wt_dropcap");
add_shortcode("modal",			"wt_modal_window");
add_shortcode("progress",		"wt_progress");
add_shortcode("video",			"wt_video_player");
add_shortcode("icon",			"wt_icons");

/* ============================================================
 * QUERIES.PHP
 * ============================================================ */
add_shortcode("posts_recent", 		"wt_get_recent_posts_list");
add_shortcode("the_authors", 		"wt_authors");
add_shortcode("showmenu", 			"wt_wp_menu");
add_shortcode("post_author_info", 	"wt_author_info");
