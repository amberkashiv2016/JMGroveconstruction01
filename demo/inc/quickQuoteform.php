<?php
	$fullName = "'".$_REQUEST["FullName"]."'";
	$address = "'".$_REQUEST["Address1"]."'";
	$dayPhone = "'".$_REQUEST["DayPhone"]."'";
	$zipCode = "'".$_REQUEST["Zipcode"]."'";
	$emailAdd = "'".$_REQUEST["EmailAddress"]."'";
	$market = "'".$_REQUEST["OptinMarketing"]."'";

	
	
	$sql = "INSERT INTO saleswave.InternetLeads(Intleads, FullName, Address, ZipCode, Phone, Email, Marketing, FromPage, Status) VALUES (NULL, ";
	$sql .= $fullName;
	$sql .= ",";
	$sql .= $address;
	$sql .= ",";
	$sql .= $zipCode;
	$sql .= ",";
	$sql .= $dayPhone;
	$sql .= ",";
	$sql .= $emailAdd;
	$sql .= ",";
	$sql .= $market;
	$sql .= ",";
	$sql .= "QuickQuote";
	$sql .= ",";
	$sql .= "' ')";
	$con = mysql_connect('saleswave.db.6328650.hostedresource.com','saleswave','Admin4JMG') or die ("<html><script language='JavaScript'>alert('Unable to connect to database! Please try again later.'),history.go(-1)</script></html>");
	
	mysql_select_db('saleswave', $con);
	$result = mysql_query($sql);
	

	$subject = "jmgroveconstruction.com Inquiry";
		
	$message = "<html><body><strong>Product Specifications</strong>:<br>";
	$message .= "<br><br>";
	
	$message .= "<strong>Customer Contact Information</strong>:<br><strong>Name</strong>: ";
	
	$message .= $_REQUEST["fullName"];
	$message .= " ";
	$message .= "<br> <strong>Address</strong>: ";
	$message .= $_REQUEST["Address1"];
	$message .= "<br> <strong>Zipcode</strong>: ";
	$message .= $_REQUEST["Zipcode"];
	$message .= "<br> <strong>Phone</strong>: ";
	$message .= $_REQUEST["DayPhone"];
	$message .= "<br> <strong>Alternate Phone</strong>: ";
	$message .= $_REQUEST["EveningPhone"];
	$message .= "<br>";
	$message .= "<br> <strong>Email Address</strong>: ";
	$message .= $_REQUEST["EmailAddress"];
	
	$message .= "<br><strong>Page they filled in information from</strong>:</br>";
	$message .= $_SERVER['SCRIPT_URI'];
	
	$message .= "<br><br>would like to be contacted about special offers via email<br>";
	$message .= $_REQUEST["OptinMarketing"];
	$message .= "</body></html>";
	
	$headers = "Content-type: text/html\r\n";
	
	if (mail("service-sales@jmgroveconstruction.com", $subject, $message, $headers)) {	
		$URL="http://www.jmgroveconstruction.com/quote-service-contact-us.php?message=sent";
		header ("Location: $URL");

 	} else {
 		$URL="http://www.jmgroveconstruction.com/quote-service-contact-us.php?message=failed";
		header ("Location: $URL");
	}
	
?>


<?php
	$msg = "Thank you ";
	$msg .= $_REQUEST["FirstName"];
	$msg .= " ";
	$msg .= $_REQUEST["LastName"];
	$msg .= " for contacting us, your business is important to us.";
	echo $msg; 
	
?>




