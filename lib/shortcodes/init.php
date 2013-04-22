<?php

// Add all the shortcodes into wordpress. Also, this is a fast way
// to find all the shortcodes in the order they are written in the
// other two files.  (where is the shortcode logic).  Another plus 
// of this separation is easy shutdown of a shortcode. If you want
// to remove some shortcode, just comment the line below.


class ShortcodesInit{
	/* ============================================================
	 * TYPOGRAPHY.PHP
	 * ============================================================ */

	public function __construct() {
		$this->add_shortcodes();
	}

	public function add_shortcodes() {
		$shortcodes = new ShortcodesTypography();
		add_shortcode("hr", 			array($shortcodes, "wt_horizontal_line") );
		add_shortcode("columns",		array($shortcodes, "wt_columns") );			// 1/1
		add_shortcode("half",	 		array($shortcodes, "wt_onehalf") );			// 1/2
		add_shortcode("third",	 		array($shortcodes, "wt_onethird") );			// 1/3
		add_shortcode("two_thirds",		array($shortcodes, "wt_twothird") );			// 2/3
		add_shortcode("btn", 			array($shortcodes, "wt_buttons") );
		add_shortcode("highlight", 		array($shortcodes, "wt_highlight") );
		add_shortcode("infobox", 		array($shortcodes, "wt_infobox") );
		add_shortcode("price-table", 	array($shortcodes, "wt_pricetable") );
		add_shortcode("googlemap", 		array($shortcodes, "wt_googlemal") );
		add_shortcode("list", 			array($shortcodes, "wt_list") );
		add_shortcode("divider", 		array($shortcodes, "wt_divider") );
		add_shortcode("label", 			array($shortcodes, "wt_label") );
		add_shortcode("quote", 			array($shortcodes, "wt_quote") );
		add_shortcode("dropcap", 		array($shortcodes, "wt_dropcap") );
		add_shortcode("modal",			array($shortcodes, "wt_modal_window") );
		add_shortcode("progress",		array($shortcodes, "wt_progress") );
		add_shortcode("video",			array($shortcodes, "wt_video_player") );
		add_shortcode("icon",			array($shortcodes, "wt_icons") );
		
		add_shortcode("posts_recent", 		array($shortcodes,"wt_get_recent_posts_list") );
		add_shortcode("the_authors", 		array($shortcodes,"wt_authors") );
		add_shortcode("showmenu", 			array($shortcodes,"wt_wp_menu") );
		add_shortcode("post_author_info", 	array($shortcodes,"wt_author_info") );
	}

}
$typography = new ShortcodesInit();