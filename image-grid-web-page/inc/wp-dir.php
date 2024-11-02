<?php
// images sorted by type and name
$current_url = "https://".$_SERVER["HTTP_HOST"];
$img_dir = "wp";
$images = glob($img_dir."/*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);
foreach ($images as $image) {
	echo "<div class='grid-item'><a href='".$current_url."/".$image."'><img src='".$image."' title='".(basename($image))."'></a></div>";
}
