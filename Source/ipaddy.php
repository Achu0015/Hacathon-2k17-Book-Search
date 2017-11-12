<?php
function get_ip_list() {
$tmp = array();
if (isset($_SERVER['HTTP_X_FORWARDED_FOR']) && strpos($_SERVER['HTTP_X_FORWARDED_FOR'],',')) {
$tmp += explode(',',$_SERVER['HTTP_X_FORWARDED_FOR']);
} elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
$tmp[] = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
$tmp[] = $_SERVER['REMOTE_ADDR'];
return $tmp;
}
?>
