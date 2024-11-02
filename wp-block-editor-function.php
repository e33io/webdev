<?php

// WordPress function to enqueue Block Editor CSS file
// URL: https://git.sr.ht/~e33io/webdev/tree/main/item/wp-block-editor-function.php
// Use with this Block Editor CSS file:
// https://git.sr.ht/~e33io/webdev/tree/main/item/wp-block-editor.css

function e33_block_editor_styles() {
	wp_enqueue_style( 'wp-block-editor-css', get_theme_file_uri( '/assets/css/wp-block-editor.css' ), false );
}
add_action( 'enqueue_block_editor_assets', 'e33_block_editor_styles' );
