<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

$strTile = $_POST['bathroom-tile-flooring-value'];

$savedBathroomArray = array();
if(isset($_COOKIE['bathroom-shower-glass-door'])){
	$cookie = $_COOKIE['bathroom-shower-glass-door'];
	$cookie = stripslashes($cookie);
	$savedBathroomArray = json_decode($cookie, true);
}
if (in_array($strTile, $savedBathroomArray)) {

} else {
	if(count($savedBathroomArray) <= 5) {
		array_push($savedBathroomArray, $strTile);
	} else {
		array_shift($savedBathroomArray);
		array_push($savedBathroomArray, $strTile);
	}
}

$strCookie = json_encode($savedBathroomArray);
setcookie('bathroom-shower-glass-door', $strCookie, time() + 3600);

exit(header('Location: bathroom-shower-glass-door.php'));

?>