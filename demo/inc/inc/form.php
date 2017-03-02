<?php
	$subject = "GeorgeJGrove.com Inquiry";
		
	$message = "<html><body><strong>Product Specifications</strong>:<br>";
	$message .= $_REQUEST['option1'];
	$message .= "<br>";
	$message .= $_REQUEST["option2"];
	$message .= "<br>";
	$message .= $_REQUEST["option3"];
	$message .= "<br>";
	$message .= $_REQUEST["option4"];
	$message .= "<br><br>";
	
	$message .= "<strong>Customer Contact Information</strong>:<br>Name: ";
	$message .= $_REQUEST["fname"];
	$message .= " ";
	$message .= $_REQUEST["lname"];
	$message .= "<br> <strong>Address</strong>: ";
	$message .= $_REQUEST["address"];
	$message .= "<br> <strong>City, State</strong>: ";
	$message .= $_REQUEST["city"];
	$message .= $_REQUEST["state"];
	$message .= "<br> <strong>Phone</strong>: ";
	$message .= $_REQUEST["phone"];
	$message .= "<br> <strong>Alternate Phone</strong>: ";
	$message .= $_REQUEST["altphone"];
	$message .= "<br> <strong>Best Time to Call</strong>: ";
	$message .= $_REQUEST["besttime"];
	$message .= "<br> <strong>Email Address</strong>: ";
	$message .= $_REQUEST["email"];
	
	$message .= "<br><br> <strong>Comments</strong>: ";
	$message .= $_REQUEST["comments"];
	$message .= "</body></html>";
	
	$headers = "Content-type: text/html\r\n";
	
	if (mail("jgrove.georgegrove@gmail.com", $subject, $message, $headers)) {	
		$URL="http://www.georgejgrove.com/quote-service-contact-us.php?message=sent";
		header ("Location: $URL");

 	} else {
 		$URL="http://www.georgejgrove.com/quote-service-contact-us.php?message=failed";
		header ("Location: $URL");
	}
	
?>




