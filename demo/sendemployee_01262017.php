<?php
//var_dump($_POST['position']);
//print_r($_POST['position']);
//start of code to insert in sql server
 $serverName = "jgdbserver001.cdgdaha6zllk.us-west-2.rds.amazonaws.com"; //serverName\instanceName

    //$connectionInfo = array( "Database"=>"JGBS", "UID"=>"liveuser", "PWD"=>"JGLive@538%");
    //$conn = sqlsrv_connect( $serverName, $connectionInfo);
     $conn = mssql_connect($serverName, 'devloperuser', 'JG%987');
     mssql_select_db("JGBS_Dev",$conn);
    if( $conn === false ) {
         die( print_r( sqlsrv_errors(), true));
    }
	else
	{//echo "Success";
	}

 date_default_timezone_set("Asia/Kolkata");
	$now=date("YmdHis");
	//echo $now;

		if(basename( $_FILES['resume']['name'])!="")
											{
		$target_path="Resumes/$now";


												$target_path = $target_path . basename( $_FILES['resume']['name']);

												if(move_uploaded_file($_FILES['resume']['tmp_name'], $target_path))
												{
												//	echo "The file ".  basename( $_FILES['resume'['name'])." has been uploaded successfully";
												} else
												{
													//echo "There was an error uploading the file, please try again!";
												}

									}

	if(isset($_POST['submit']))
	{

	if($_POST['worked']=='yes')
	{$worked=1;}
	else
	{$worked=0;}

	if($_POST['license']=='Yes')
	{$license=1;}
	else
	{$license=0;}

	if($_POST['crime']=='Yes')
	{$crime=1;}
	else
	{$crime=0;}

	if($_POST['position']=='sales')
	{$usertype='SalesUser';}
	else
	{$usertype='installer';}



//	$sql = "insert into dbo.tblInstallUsers ( FristName,LastName,Email,Phone,Address,Zip,State,City,PrevApply,LicenseStatus,CrimeStatus,usertype,ResumePath,StartDate,PrimeryTradeId,PTradeOthers) values ('".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['phone']."','".$_POST['address']."','".$_POST['zip']."','".$_POST['state']."','".$_POST['city']."','".$worked."','".$license."','".$crime."','".$usertype."','http://jmgroveconstruction.com/Resumes/$now".basename( $_FILES['resume']['name'])."','".$_POST['startdate']."','".$_POST['position']."','".$_POST['otherposition']."')";
	$sql = "insert into dbo.tblInstallUsers ( Password,FristName,LastName,Email,Phone,Address,Zip,State,City,
  PrevApply,LicenseStatus,CrimeStatus,usertype,ResumePath,StartDate,Designation,DesignationID,Status,Source,SalaryReq,LeavingReason)
  values ('jmgrove','".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['phone']."',
  '".$_POST['address']."','".$_POST['zip']."','".$_POST['state']."','".$_POST['city']."','".$worked."',
  '".$license."','".$crime."','".$_POST['user_type']."',
  'http://jmgroveconstruction.com/Resumes/$now".basename( $_FILES['resume']['name'])."',
  '".$_POST['startdate']."','".$_POST['position_text']."','".$_POST['position']."',
  'Applicant','JGC-EmploymentPage','".$_POST['salaryrequirements']."','".$_POST['reasonforleaving']."')";
	$query = mssql_query($sql);
    if ($query === false){
    exit("<pre>".print_r(sqlsrv_errors(), true));
    }
	else
	{
		//echo "Record Inserted Successfully";
        // $URL="http://jmgroveconstruction.com/employment.php?view=formbox&rstatus=1";
        ///$URL="http://www.jmgroveconstruction.com/quote-service-contact-us.php?message=sent";
        $email = $_POST['email'];
        $result = mssql_fetch_assoc(mssql_query("select @@IDENTITY as id"));
        $lastID = $result['id'];
        //echo 'http://web.jmgrovebuildingsupply.com/stafflogin.aspx?Email='.$email.'&ID='.$lastID;
        ?>
          <script type="text/javascript">
            window.location.href = '<?php echo 'http://web.jmgrovebuildingsupply.com/stafflogin.aspx?Email='.$email.'&ID='.$lastID; ?>';
          </script>
        <?php

	}


/*	 $sql1 = "SELECT * FROM dbo.tblInstallUsers order by Id DESC";

	$query = sqlsrv_query($conn, $sql1);
    if ($query === false){
    exit("<pre>".print_r(sqlsrv_errors(), true));
    }

	   while ($row = sqlsrv_fetch_array($query))
    {
	//$newDate = strtotime($row['FMDate']);
// date_default_timezone_set("Asia/Kolkata");
//	$timestamp = new DateTime();
//echo $timestamp->format('Y-m-d H:i:s');
	//$newDate = $newDate->format('d/m/Y');

		echo "<Br>";
       print_r($row);


    }*/
    mssql_free_statement($query);

	}

	//end code to insert in sql server


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
					  <td height='1' colspan='3' valign=top bgcolor=#004d90 style=color:#FFFFFF;font-weight:bold>Employment Application</td>
				  </tr>
					<tr>
					  <td valign=top>&nbsp;</td>
					  <td colspan='2' valign=top>&nbsp;</td>
  					</tr>
					<tr>
						<td valign=top>First Name</td>
						<td valign=top>:</td>
						<td valign=top>".$_POST['fname']."</td>
					</tr>
                  <tr>
						<td>Last Name</td>
						<td>:</td>
						<td align=left>".$_POST['lname']."</td>
					</tr>

					<tr>	<td>Email </td>
						<td>:</td>
						<td align=left>".$_POST['email']."</td>

					</tr>
					<tr>
					<td>State</td>
						<td>:</td>
						<td align=left>".$_POST['state']."</td>

					</tr>
						<tr>
					<td>city</td>
						<td>:</td>
						<td align=left>".$_POST['city']."</td>

					</tr>
						<tr>
					<td>zip</td>
						<td>:</td>
						<td align=left>".$_POST['zip']."</td>

					</tr>
						<tr>
					<td>address</td>
						<td>:</td>
						<td align=left>".$_POST['address']."</td>

					</tr>
						<tr>
					<td>phone</td>
						<td>:</td>
						<td align=left>".$_POST['phone']."</td>

					</tr>
						<tr>
					<td>Start Date</td>
						<td>:</td>
						<td align=left>".$_POST['startdate']."</td>

					</tr>
						<tr>
					<td>Salary Requirement</td>
						<td>:</td>
						<td align=left>".$_POST['salary']."</td>

					</tr>
	<tr>
					<td>position</td>
						<td>:</td>
						<td align=left>".$_POST['position']."</td>

					</tr>	<tr>
					<td>Have you previously worked for j.m grove? </td>
						<td>:</td>
						<td align=left>".$_POST['worked']."</td>

					</tr>	<tr>
					<td>Do you have a liscense?</td>
						<td>:</td>
						<td align=left>".$_POST['license']."</td>

					</tr>	<tr>
					<td>Have you ever plead guilty or been convicted of a crime?</td>
						<td>:</td>
						<td align=left>".$_POST['crime']."</td>

					</tr>

		  </table>
		  </td>
		  </tr>
		  </table>
		";

	$email = 'hr@jmgroveconstruction.com';
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
	$mail->Subject = "Mail for Employment"; //Subject od your mail
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

