<?php

// Add all the shortcodes into wordpress. Also, this is a fast way
// to find all the shortcodes in the order they are written in the
// other two files.  (where is the shortcode logic).  Another plus 
// of this separation is easy shutdown of a shortcode. If you want
// to remove some shortcode, just comment the line below.


/* ============================================================
 * TYPOGRAPHY.PHP
 * ============================================================ */
add_shortcode("hr", 			"wt_horizontal_line");
add_shortcode("one-third", 		"wt_onethird_column");
add_shortcode("btn", 			"wt_buttons");
add_shortcode("highlight", 		"wt_highlight");
add_shortcode("infobox", 		"wt_infobox");
add_shortcode("price-table", 	"wt_pricetable");
add_shortcode("googlemap", 		"wt_googlemal");
add_shortcode("list", 			"wt_list");
add_shortcode("divider", 		"wt_divider");
add_shortcode("label", 			"wt_label");

/* ============================================================
 * QUERIES.PHP
 * ============================================================ */
add_shortcode("recent-posts-list", 	"wt_get_recent_posts_list");
add_shortcode("the_authors", 		"wt_authors");
add_shortcode("showmenu", 			"wt_wp_menu");