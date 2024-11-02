<?php

// WordPress function to enqueue Block Editor CSS file
// URL: https://github.com/e33io/webdev/blob/main/wp-block-editor-function.php
// Use with this Block Editor CSS file:
// https://github.com/e33io/webdev/blob/main/wp-block-editor.css

function e33_block_editor_styles() {
	wp_enqueue_style( 'wp-block-editor-css', get_theme_file_uri( '/assets/css/wp-block-editor.css' ), false );
}
add_action( 'enqueue_block_editor_assets', 'e33_block_editor_styles' );
