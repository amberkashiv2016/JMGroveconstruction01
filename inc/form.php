<?php

include("../config.php");

	error_reporting(0);
	

if($proocutonmode === 2)//
{
$dsn = "Live";
}
else if($proocutonmode === 1)
{
$dsn = "Test";
}
else{
$dsn = "Driver={ODBC Driver 11 for SQL Server};Server=$serverName;Database=$database;";
}

//$dsn = "Driver={ODBC Driver 11 for SQL Server};Server=$serverName;Database=$database;";
//$connection = odbc_connect("Driver={ODBC Driver 11 for SQL Server};Server=$serverName;Database=$database;", $user, $password);
//$dsn = "Test";
$connection = odbc_connect($dsn, $user, $password);
if (!$connection)
  {exit("Connection Failed: " . $connection);}
  else
  {
	 
  }

//ini_set('display_errors','On');
include('C:\Program Files (x86)\Parallels\Plesk\Additional\pleskphp5\pear\Mail.php');	

 if( !isset($_REQUEST['iamspamblocker'])) { die("No Direct Access"); } //spam check 
	$message = "<html><body>";

	if(($_REQUEST['option1']!="") || ($_REQUEST['option2']!=="") || ($_REQUEST['option3']!="") || ($_REQUEST['option4']!="") ) {
	$message .= "<strong>Product Specifications</strong>:<br>";
	}
	if(isset($_REQUEST['option1']) && $_REQUEST['option1']!= '') {
	$message .= $_REQUEST['option1']; 
	$message .= "<br>";
	}
	if(isset($_REQUEST['option2']) && $_REQUEST['option2']!= '') { 
	$message .= $_REQUEST["option2"];
	$message .= "<br>";
	}
	if(isset($_REQUEST['option3']) && $_REQUEST['option3']!= '') { 
	$message .= $_REQUEST["option3"];
	$message .= "<br>";
	}
	if(isset($_REQUEST['option4']) && $_REQUEST['option4']!= '') { 
	$message .= $_REQUEST["option4"];
	$message .= "<br><br>";
	}
	$message .= "<strong>Customer Contact Information</strong>:<br>Name: ";
	if(isset($_REQUEST["fname"])) {
	$message .= $_REQUEST["fname"];
	$message .= " ";
	$message .= $_REQUEST["lname"];
	}
	if(isset($_REQUEST['Address']) && $_REQUEST['Address']!='' ) {
	$message .= "<br> <strong>Address</strong>: ";
	$message .= $_REQUEST["address"];
	}
	/* if(isset($_REQUEST['city']) && $_REQUEST['city']!= '') {
	$message .= "<br> <strong>City, State</strong>: ";
	$message .= $_REQUEST["city"];
	$message .= " ";
	}
	if(isset($_REQUEST['state']) && $_REQUEST['state']!= '') {
	$message .= $_REQUEST["state"];
	} */
	if(isset($_REQUEST['phone']) && $_REQUEST['phone']!= '') {
	$message .= "<br> <strong>Phone</strong>: ";
	$message .= $_REQUEST["phone"];
	}
	if(isset($_REQUEST['altphone']) && $_REQUEST["altphone"]!= '') {
	$message .= "<br> <strong>Alternate Phone</strong>: ";
	$message .= $_REQUEST["altphone"];
	}
	if(isset($_REQUEST['besttime']) && $_REQUEST["besttime"]!= '') {
	$message .= "<br> <strong>Best Time to Call</strong>: ";
	$message .= $_REQUEST["besttime"];
	}
	if(isset($_REQUEST['email']) && $_REQUEST['email']!= '') {
	$message .= "<br> <strong>Email Address</strong>: ";
	$message .= $_REQUEST["email"];
	}
	if(isset($_REQUEST['zip']) && $_REQUEST['zip']!= '') {
	$message .= "<br> <strong>Zip Code</strong>: ";
	$message .= $_REQUEST["zip"];
	}
	
	if(isset($_REQUEST['product_line']) && $_REQUEST['product_line']!= '') {
	$message .= "<br><br> <strong>Product Line </strong>: ";
	$message .= $_REQUEST["product_line"]; 
	}
	
	if(isset($_REQUEST['services_estimate']) && $_REQUEST['services-estimate']!= '') {
	$message .= "<br><br> <strong>Service/Estimate </strong>: ";
	$message .= $_REQUEST["services_estimate"]; 
	}
	
	if(isset($_REQUEST['refer']) && $_REQUEST['refer']!= '')  {
	$message .= "<br> <strong>Refered from</strong>: ";
	$message .= $_REQUEST["refer"];
	}
	
	
	if(isset($_REQUEST['comments']) && $_REQUEST['comments']!= '') {
	$message .= "<br><br> <strong>Comments</strong>: ";
	$message .= $_REQUEST["comments"]; 
	}
	
	$message .= "<br>ip of user:".get_ip();
	$message .= "</body></html>";
	
	//For subject according to page
	$page  = $_REQUEST["page"];
	if ($page == "contact"){
		//$subject			=	"Form Recieved on jmgroveconstruction.com";
		
	} else if($page == "service"){
		$subject			=	"Service request jmgroveconstruction.com";
		
	} else if($page == "quote"){
		$subject			=	"Estimate request jmgroveconstruction.com";
		
	} else {
		//check if page is there so page title goes to subject automatically
		$page_info		=	'';
		if(!empty($page)){ $page_info ="from page $page"; }
		$subject			=	"Form Recieved on jmgroveconstruction.com $page_info";
	}
	
$recipients			=	'naveenkr.chaudhary82@gmail.com';

/* $headers['From']	=	'service-sales@jmgroveconstruction.com'; //edit use same mail as used for smtp
//$recipients			=	'customer-service@jmgroveconstruction.com';
$recipients			=	'naveenkr.chaudhary82@gmail.com';

$headers['To']		=	$recipients;
$headers['Subject']	=	$subject;

$headers['MIME-Version']	=	'1.0';
$headers['Content-Type']	=	"text/html"; */

$from_email = "service-sales@jmgroveconstruction.com";

$headers = "From: <" . strip_tags($from_email)  . ">\r\n" . "CC: info@netcollab.in"; 


$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

$body 						=	$message;
	
$smtp_params["host"]		=	"localhost";
$smtp_params["port"]		=	"25";
$smtp_params["auth"]		=	true;
$smtp_params["username"]	=	"service-sales@jmgroveconstruction.com"; // you made in plesk
$smtp_params["password"]	=	"Azekdeck1"; //you set this in plesk for the email account

//$mail =& Mail::factory("smtp", $smtp_params);

//print_r($headers);
/*
 * check email if valid only then mail 
 * for spam check 
 * @author ajay3085006
 * @dated: 22 feb 2016
 */
$email	= $_REQUEST['email'];
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	 echo "This ($email) email address is considered invalid.";
exit;
}
$phone	= $_REQUEST['phone'];
if (!is_numeric($phone)) {
	 echo "This ($phone) phone  is considered invalid.";
exit;
}

$customerName = $_REQUEST["fname"] . " " . $_REQUEST["lname"];
$customerPhone = $_REQUEST["phone"];
$customerEmail = $_REQUEST["email"];
$customerZip = $_REQUEST["zip"];
$productLine = $_REQUEST["product_line"];
$servicesEstimate = $_REQUEST["services_estimate"];

$pro_id = implode(',',$productLine);

//$productLine = serialize($productLine1)

//$sqlx='select * FROM dbo.tblProductMaster WHERE ";

 /* $sqlx = 'SELECT * 
          FROM dbo.tblProductMaster 
         WHERE ProductId IN (' . $pro . ')';

		 
		$rsx = odbc_exec($connection,$sqlx);
		$pname = array();		
		while (odbc_fetch_row($rsx))
		{
		   //$productID=odbc_result($rsx,"ProductId");
		   $productName=odbc_result($rsx,"ProductName");
		   //echo "<hr>";
		   $pname[] = $productName;
		}
$pro_names = implode(',',$pname);		
	print_r($pro_names);  */
//print_r($pro_id);

$customer_data = "insert into dbo.new_customer (CustomerName, CellPh,Email, ZipCode, Service,ProductOfInterest) values ( '".$customerName."', '".$customerPhone."', '".$customerEmail."' , '".$customerZip."', '".$servicesEstimate."', '".$pro_id."')";


$odbc_customer_data = odbc_prepare($connection, $customer_data);

		if (!odbc_execute($odbc_customer_data)) { 
		     
		    echo "insert error in new_customer"; 
			
				exit;
		}

	$subject = "Free Project Quote";
	//$result = $mail->send($recipients, $headers, $body);
	$result = mail($recipients, $subject, $body, $headers);	
	
	if ($result) {	
		$URL="http://www.jmgroveconstruction.com/quote-service-contact-us.php?message=sent";
		$URL="http://www.jmgroveconstruction.com/devlp/quote-service-contact-us.php?message=sent";
		header ("Location: $URL");

 	} else {
 		$URL="http://www.jmgroveconstruction.com/quote-service-contact-us.php?message=failed";
 		$URL="http://www.jmgroveconstruction.com/devlp/quote-service-contact-us.php?message=failed";
		header ("Location: $URL");
	}
	
	
function get_ip() {
		//Just get the headers if we can or else use the SERVER global
		if ( function_exists( 'apache_request_headers' ) ) {
			$headers = apache_request_headers();
		} else {
			$headers = $_SERVER;
		}
		//Get the forwarded IP if it exists
		if ( array_key_exists( 'X-Forwarded-For', $headers ) && filter_var( $headers['X-Forwarded-For'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 ) ) {
			$the_ip = $headers['X-Forwarded-For'];
		} elseif ( array_key_exists( 'HTTP_X_FORWARDED_FOR', $headers ) && filter_var( $headers['HTTP_X_FORWARDED_FOR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 )
		) {
			$the_ip = $headers['HTTP_X_FORWARDED_FOR'];
		} else {
			
			$the_ip = filter_var( $_SERVER['REMOTE_ADDR'], FILTER_VALIDATE_IP, FILTER_FLAG_IPV4 );
		}
		return $the_ip;
	}
