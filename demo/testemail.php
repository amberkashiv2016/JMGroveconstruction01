<?php
error_reporting(E_ALL);
ini_set('display_errors','On');
echo "Start Pear Test<br />";
include('C:\Program Files (x86)\Parallels\Plesk\Additional\pleskphp5\pear\Mail.php');
//include('Mail/mime.php');


$recipients = 'swapnil@indyainfotech.com';

$headers['From'] = 'info@jmgroveconstruction.com';
$headers['To'] = $recipients;
$headers['Subject'] = ' Test message ';
$body = 'Test message body';


$smtp_params["host"] = "localhost";
$smtp_params["port"] = "25";
$smtp_params["auth"] = true;
$smtp_params["username"] = "service-info@jmgroveconstruction.com"; // you made in plesk
$smtp_params["password"] = "Abcd@1234"; //you set this in plesk for the email account
echo "Param Set<br />";
// Create the mail object using the Mail::factory method
$mail =& Mail::factory("smtp", $smtp_params);
echo "CReated Mail Object<br />";
$result = $mail->send($recipients, $headers, $body);
echo "Tried to send mail<br />"; 