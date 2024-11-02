<?php

// WordPress function to delay RSS feed
// URL: https://github.com/e33io/webdev/blob/main/wp-delay-rss-feed.php

function e33_delay_rss_feed( $where ) {
	global $wpdb;
	if ( is_feed() ) {
		$now = gmdate( 'Y-m-d H:i:s' );
		$wait = '1'; // integer 
		$device = 'HOUR'; // MINUTE, HOUR, DAY, WEEK, MONTH, YEAR 
		$where .= " AND TIMESTAMPDIFF( $device, $wpdb->posts.post_date_gmt, '$now' ) > $wait ";
	}
	return $where;
}
add_filter( 'posts_where', 'e33_delay_rss_feed' );
