<?php
$file = file('http://localhost/vinos/app/admin_banner.php');
foreach ($file as $linenum => $line) {
	echo "<b>Line #{$linenum}</b> ".htmlspecialchars($line).' <br/>';
}
?>