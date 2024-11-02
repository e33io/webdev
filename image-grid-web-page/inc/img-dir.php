<?php
// images sorted by modified time, newest to oldest 
$current_url = "https://".$_SERVER["HTTP_HOST"];
$img_dir = "i";
function mtimecmp($a, $b) {
	$mt_a = filemtime($a);
	$mt_b = filemtime($b);
	if ($mt_a == $mt_b)
		return 0;
	else if ($mt_a < $mt_b)
		return -1;
	else
		return 1;
}
$images = glob($img_dir."/*.{jpg,jpeg,gif,png,bmp,webp}", GLOB_BRACE);
usort($images, "mtimecmp");
for ($i = count($images) - 1; $i >= 0; $i--) {
	$image = $images[$i];
	echo "<div class='grid-item'><a href='".$current_url."/".$image."'><img src='".$image."' title='".(basename($image))."'></a></div>";
}
