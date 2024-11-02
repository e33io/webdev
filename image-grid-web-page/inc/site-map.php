<?php
// site map dropdown menu
$domain_name = $_SERVER["HTTP_HOST"];
echo"<details>
	<summary class='p'>site map</summary>
		<ul>
			<li><code><a href='/'>".$domain_name."/</a></code> (shared images page)</li>
			<li><code><a href='/i'>".$domain_name."/i</a></code> (index of shared images)</li>
		</ul>
</details>";
