<?php

// WordPress function to replace the default WP login icon with the Site Icon
// URL: https://github.com/e33io/webdev/blob/main/wp-login-icon-function.php

function e33_login_icon() { ?>
	<style type="text/css">
		.login h1 a {
			background-image: url( <?php site_icon_url() ?> );
			background-size: contain;
			width: 90px;
			height: 90px;
			border-radius: 45px;
		}
	</style>
<?php }
add_action( 'login_head', 'e33_login_icon' );
function e33_login_url() {
	return '/';
}
add_filter( 'login_headerurl', 'e33_login_url' );
