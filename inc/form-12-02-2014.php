<?php
ini_set('display_errors','On');
include('C:\Program Files (x86)\Parallels\Plesk\Additional\pleskphp5\pear\Mail.php');	
	$subject = "jmgroveconstruction.com Inquiry";

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
	$message .= "<br> <strong>Refered from</strong>: ";
	$message .= $_REQUEST["refer"];
	
	$message .= "<br><br> <strong>Comments</strong>: ";
	$message .= $_REQUEST["comments"];
	$message .= "</body></html>";


$headers['From'] = 'info@jmgroveconstruction.com';
$recipients = 'service-sales@jmgroveconstruction.com';
$headers['To'] = $recipients;
$headers['Subject'] = $subject;

$headers['MIME-Version'] ='1.0';
$headers['Content-Type']= "text/html";

$body = $message;
	
$smtp_params["host"] = "localhost";
$smtp_params["port"] = "25";
$smtp_params["auth"] = true;
$smtp_params["username"] = "service-info@jmgroveconstruction.com"; // you made in plesk
$smtp_params["password"] = "Abcd@1234"; //you set this in plesk for the email account


$mail =& Mail::factory("smtp", $smtp_params);

$result = $mail->send($recipients, $headers, $body);
			
	if ($result) {	
		$URL="http://www.jmgroveconstruction.com/quote-service-contact-us.php?message=sent";
		header ("Location: $URL");

 	} else {
 		$URL="http://www.jmgroveconstruction.com/quote-service-contact-us.php?message=failed";
		header ("Location: $URL");
	}
	
?>

