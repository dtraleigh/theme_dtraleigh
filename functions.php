<?php //Begin widget code
	if ( function_exists('register_sidebars') )
		register_sidebars(3);
	// End widget code

	// Begin RSS Custom Field
	function postrss($content) {
		global $wp_query;

		$postid = $wp_query->post->ID;
		$rss_append = get_post_meta($postid, 'rss_append', true);

		if(is_feed()) {
			if($rss_append !== '') {
				$content = $content . "<br /><br /><div>" . $rss_append . "</div>";
			}
			else {
				$content = $content;
			}
		}
		return $content;
	}
	
	add_filter('the_excerpt_rss', 'postrss');
	add_filter('the_content', 'postrss');
	// End RSS Customer Field
?>