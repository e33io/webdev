<!DOCTYPE html>
<html>
	<head>
		<!-- https://git.sr.ht/~e33io/webdev/tree/main/item/image-grid-web-page -->
		<meta charset="UTF-8">
		<title>e33io shared images</title>
		<meta name="description" content="a collection of screenshots and other images">
		<meta name="robots" content="noindex, nofollow">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" href="/icon.svg" type="image/svg+xml">
		<link rel="apple-touch-icon" href="/apple-touch-icon.png">
		<link rel="stylesheet" href="assets/css/style.css">
		<link rel="stylesheet" href="assets/fonts/inter/inter.css">
		<link rel="stylesheet" href="assets/fonts/plexmonomod/plexmonomod.css">
		<meta property="og:title" content="e33io shared images">
		<meta property="og:description" content="a collection of screenshots and other images">
		<meta property="og:image" content="https://i.e33.io/assets/images/icon-630px.png">
		<meta property="og:url" content="https://i.e33.io">
	</head>
	<body>
		<div class='heading'>
			<h4>e33io shared images</h4>
		</div>
		<div class='container'>
			<div class='img-grid'>
				<?php include("inc/img-dir.php"); ?>
			</div>
			<h4>a collection of screenshots and other images</h4>
			<hr>
			<p>git repos: <a href="https://git.sr.ht/~e33io">git.sr.ht/~e33io</a><br>
			main blog: <a href="https://e33.io">e33.io</a><br>
			micro blog: <a href="https://micro.e33.io">micro.e33.io</a></p>
			<div class='site-map'>
				<?php include("inc/site-map.php"); ?>
			</div>
		</div>
		<div class='footer'>
			<h5>&copy; e33io</h5>
		</div>
	</body>
</html>
