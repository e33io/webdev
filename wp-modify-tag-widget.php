<?php

// WordPress function to modify the Tag Cloud widget
// URL: https://git.sr.ht/~e33io/webdev/tree/main/item/wp-modify-tag-widget.php

function mod_tag_cloud_widget() {
	$args = array(
		'smallest' => 1.125,
		'largest' => 1.75,
		'unit' => 'rem',
		'echo' => false,
	);
	return $args;
}
add_filter( 'widget_tag_cloud_args', 'mod_tag_cloud_widget' );
