<?php
@date_default_timezone_set("GMT"); 

define('PARAMS', array('to', 'from', 'amnt', 'format'));

if (!isset($_GET['format']) || empty($_GET['format'])) {
	$_GET['format'] = 'xml';
}

# ensure PARAM values match the keys in $GET
if (count(array_intersect(PARAMS, array_keys($_GET))) < 4) {
    echo "a 1000: error"; 
    exit();
}

# ensure no extra params
if (count($_GET) > 4) {
	echo "a 1100: error";
	exit();
}

echo "Valdation passed so far ....";
?>