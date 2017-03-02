<?php
session_start();
//ECHO $_SESSION['captcha'];
//ECHO '<br/>';
//ECHO $_GET['code'];
if(strtolower($_GET['code']) == $_SESSION['captcha']) {
		echo "true";
	} else {
		echo "false";
	}	
unset($_SESSION['captcha']);	

?>