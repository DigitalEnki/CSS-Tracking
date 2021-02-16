<?php
$seconds_to_cache = strtotime('+1 month');
$ts = gmdate("D, d M Y H:i:s", $seconds_to_cache) . " GMT";
header("Expires: $ts");
header("Pragma: cache");
header("Cache-Control: max-age=$seconds_to_cache");
header('Content-Type: text/css');

?>
body::after {
	content: '<?php echo uniqid('trk-'); ?>';
	display:none;
}
