<?php
include 'library.php'; // include the library file
include "classes/class.phpmailer.php"; // include the class name
//define the receiver of the email
$to = 'chaitanya.amirineni@gmail.com';
//define the subject of the email
$subject = 'Test mail';
//define the message to be sent. Each line should be separated with \n

// message
$message="<style type=text/css><!--
	 td {	font-family: Arial, Helvetica, sans-serif;	font-size: 12px;}--></style>
	<table width=100% border=0 align=center cellpadding=1 cellspacing=0>
		<tr>
			<td>
				<table width=100% border=0 align='center' cellpadding=3 cellspacing=0 bgcolor=#FFFFFF>
					<tr>
					  <td colspan='3' valign=top>&nbsp;</td>
				  </tr>
					<tr>
					  <td height='1' colspan='3' valign=top bgcolor=#004d90 style=color:#FFFFFF;font-weight:bold>Contact Details</td>
				  </tr>
					<tr>
					  <td valign=top>&nbsp;</td>
					  <td colspan='2' valign=top>&nbsp;</td>
  					</tr>
					<tr>
						<td valign=top>company Name</td>
						<td valign=top>:</td>
						<td valign=top>".$_POST['fname']."</td>
					</tr>
                  <tr>
						<td>country</td>
						<td>:</td>
						<td align=left>".$_POST['femail']."</td>
					</tr>

					<tr>	<td>state Province </td>
						<td>:</td>
						<td align=left>".$_POST['ftitle']."</td>

					</tr>
					<tr>
					<td>city</td>
						<td>:</td>
						<td align=left>".$_POST['fdesc']."</td>

					</tr>


		  </table>
		  </td>
		  </tr>
		  </table>
		";

	$email = 'seo@jmgroveconstruction.com';
	$mail	= new PHPMailer; // call the class
	$mail->IsSMTP();
	$mail->Host = SMTP_HOST; //Hostname of the mail server
	$mail->Port = SMTP_PORT; //Port of the SMTP like to be 25, 80, 465 or 587
	$mail->SMTPAuth = true; //Whether to use SMTP authentication
	$mail->Username = SMTP_UNAME; //Username for SMTP authentication any valid email created in your domain
	$mail->Password = SMTP_PWORD; //Password for SMTP authentication
	$mail->AddReplyTo("seo@jmgroveconstruction.com", "JM Grove Construction"); //reply-to address
	$mail->SetFrom("seo@jmgroveconstruction.com", "JM Grove Construction"); //From address of the mail
	// put your while loop here like below,
	$mail->Subject = "Mail from industry"; //Subject od your mail
	$mail->AddAddress($email, "JM Grove Construction"); //To address who will receive this email
	$mail->MsgHTML($message); //Put your body of the message you can place html code here

	$send = $mail->Send(); //Send the mails
	if($send){
		
                $URL="http://www.jmgroveconstruction.com/quote-service-contact-us.php?message=sent";
		header ("Location: $URL");
	}
	else{
		
                $URL="http://www.jmgroveconstruction.com/quote-service-contact-us.php?message=failed";
		header ("Location: $URL");
	}

?>