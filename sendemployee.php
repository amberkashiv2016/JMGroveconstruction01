<?php
	//var_dump($_POST['position']);
	//print_r($_POST['position']);
	//start of code to insert in sql server
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Methods: PUT, GET, POST");
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	$serverName = "jgdbserver001.cdgdaha6zllk.us-west-2.rds.amazonaws.com"; //serverName\instanceName
	//$connectionInfo = array( "Database"=>"JGBS", "UID"=>"liveuser", "PWD"=>"JGLive@538%");
	//$conn = sqlsrv_connect( $serverName, $connectionInfo);
	$conn = mssql_connect($serverName, 'liveuser', 'JGLive@538%');
	mssql_select_db("JGBS",$conn);
	if( $conn === false ) {	die( print_r( mssql_error(), true)); }
	// error_reporting(E_ALL);
	// ini_set("display_errors", 1);
	date_default_timezone_set("Asia/Kolkata");
	$now=date("YmdHis"); //echo $now;
	if(isset($_POST['submit']))
	{
		if(isset($_POST['g-recaptcha-response']) && $_POST['g-recaptcha-response'] == ""){
			echo "Error : please verify captcha first";
			exit;
		}
		foreach($_POST as $key => $value) {
			$_POST[$key] = htmlspecialchars ($value);
		}
		// resume uploading
		if(basename( $_FILES['resume']['name'])!="")
		{
			$target_path="Resumes/$now";
			$target_path = $target_path . basename( $_FILES['resume']['name']);
			//pdf|doc|txt|gif|jpg|png|jpeg
			$allowedExts = array("pdf","doc","txt","docx","PDF","DOC","TXT","DOCX","gif","jpg","png","jpeg","GIF","JPG","PNG","JPEG");
			$extension = end(explode(".", $_FILES["resume"]["name"]));
			if (($_FILES["resume"]["size"] < 2097152)	&& in_array($extension, $allowedExts)){
			if(move_uploaded_file($_FILES['resume']['tmp_name'], $target_path))
			{
				//	echo "The file ".  basename( $_FILES['resume']['name'])." has been uploaded successfully";
				//echo 'file moved';
				//exit();
			} else
			{
				//echo 'locha';
				//exit();
				//echo "There was an error uploading the file, please try again!";
			}
			}
			else
			{
				echo "Error : please enter valid resume";
				exit;
			}
		}
		// profile pic uploading
		if(basename( $_FILES['profilepic']['name'])!="")
		{
			$target_path="ProfilePicture/$now";
			$target_path = $target_path . basename( $_FILES['profilepic']['name']);
			//gif|jpg|png|jpeg
			$allowedExts = array("gif","jpg","png","jpeg","GIF","JPG","PNG","JPEG");
			$extension = end(explode(".", $_FILES["profilepic"]["name"]));
			if (($_FILES["profilepic"]["size"] < 2097152)	&& in_array($extension, $allowedExts)){
			if(move_uploaded_file($_FILES['profilepic']['tmp_name'], $target_path))
			{
			//echo "The file ".  basename( $_FILES['profilepic']['name'])." has been uploaded successfully";
				//echo 'file moved';
				//exit();
			} else
			{
				//echo 'locha';
				//exit();
				//echo "There was an error uploading the file, please try again!";
			}
			}
			else
			{
				echo "Error : please enter valid profile picture";
				exit;
			}
		}
		// set variables
		$worked = isset($_POST['workedforjg']) && $_POST['workedforjg']=='yes' ? 1 : 0;
		$license = isset($_POST['license']) && $_POST['license']=='Yes' ? 1 : 0;
		$usertype = $_POST['position']=='sales' ? 'SalesUser' : 'installer';
		$CruntEmployement = strtolower($_POST['employed'])=='yes' ? 1 : 0; //Current employmemnt status
		$FELONY = isset($_POST['crime']) && strtolower($_POST['crime'])=='yes' ? 1 : 0; 	//felony yes/no
		$CrimeStatus = strtolower($_POST['drugtest'])=='yes' ? 1 : 0; //drug test yes/no
		$email_contact = (isset($_POST['email_contact'])) ? 1 : 0; // email contact preference 
		$call_contact = (isset($_POST['call_contact'])) ? 1 : 0;  // call contact preference 
		$text_contact = (isset($_POST['text_contact'])) ? 1 : 0; // text contact preference 
		$mail_contact = (isset($_POST['mail_contact'])) ? 1 : 0; // mail contact preference 
		$SourceUser = '1537';	//source user //$SourceUser = $_POST['source'];
		$SourceID = $_POST['source'];
		$SourceText = $_POST['source_text'];		
		$EmpType = $_POST['jobtype']; //employmemnt type		
		$Notes = $_POST['messagetorecruiter']; //recruiter message 		
		$NameMiddleInitial = $_POST['NameMiddleInitial']; //Nname Middle Initial message 
	
		/*if(isset($_POST['crime']) && $_POST['crime'] !='')
		{$crime=$_POST['crime'];}
		else
		{$worked='no';} */
	}

	

	/*$sql = "insert into dbo.tblInstallUsers ( SourceID,CountryCode,Password,FristName,LastName,Email,Phone,Address,Zip,State,City,
	PrevApply,LicenseStatus,CrimeStatus,usertype,ResumePath,StartDate,PositionAppliedFor,DesignationID,Status,Source,SalaryReq,LeavingReason,DateSourced,
	CruntEmployement,FELONY,SourceUser,EmpType,Notes,NameMiddleInitial,Designation,IsEmailContactPreference,IsCallContactPreference,IsTextContactPreference,IsMailContactPreference,Picture)
	values ('".$_POST['source']."','".$_POST['country']."','jmgrove','".$_POST['fname']."','".$_POST['lname']."','".$_POST['email']."','".$_POST['phone']."',
	'".$_POST['address']."','".$_POST['zip']."','".$_POST['state']."','".$_POST['city']."','".$worked."',
	'".$license."','".$CrimeStatus."','".$_POST['user_type']."',
	'http://jmgroveconstruction.com/Resumes/$now".basename( $_FILES['resume']['name'])."',
	'".$_POST['startdate']."','".$_POST['position_text']."','".$_POST['position']."',
	'2','".$SourceText."','".$_POST['salaryrequirements']."','".$_POST['reasonforleaving']."',GETDATE(),".$CruntEmployement.",".$FELONY.",'"
	.$SourceUser."','".$EmpType."','".$Notes."','".$NameMiddleInitial."','".$_POST['position_text']."','".$email_contact."','".$call_contact."','".$text_contact."','".$mail_contact."',
	'http://jmgroveconstruction.com/ProfilePicture/$now".basename( $_FILES['profilepic']['name'])."')";*/
	/*$sql = 'insert into dbo.tblInstallUsers ( SourceID,CountryCode,Password,FristName,LastName,Email,Phone,Address,Zip,State,City,	PrevApply,LicenseStatus,CrimeStatus,usertype,ResumePath,StartDate,PositionAppliedFor,DesignationID,Status,Source,SalaryReq,LeavingReason,DateSourced,CruntEmployement,FELONY,SourceUser,EmpType,Notes,NameMiddleInitial,Designation,IsEmailContactPreference,IsCallContactPreference,IsTextContactPreference,IsMailContactPreference,Picture)
	values ("'.$_POST['source'].'","'.$_POST['country'].'","jmgrove","'.$_POST['fname'].'","'.$_POST['lname'].'","'.$_POST['email'].'","'.$_POST['phone'].'","'.$_POST['address'].'","'.$_POST['zip'].'","'.$_POST['state'].'","'.$_POST['city'].'","'.$worked.'","'.$license.'","'.$CrimeStatus.'","'.$_POST['user_type'].'","http://jmgroveconstruction.com/Resumes/'.$now.basename( $_FILES['resume']['name']).'","'.$_POST['startdate'].'","'.$_POST['position_text'].'","'.$_POST['position'].'","2","'.$SourceText.'","'.$_POST['salaryrequirements'].'","'.$_POST['reasonforleaving'].'","GETDATE()","'.$CruntEmployement.'","'.$FELONY.'","'.$SourceUser.'","'.$EmpType.'","'.$Notes.'","'.$NameMiddleInitial.'","'.$_POST['position_text'].'","'.$email_contact.'","'.$call_contact.'","'.$text_contact.'","'.$mail_contact.'","http://jmgroveconstruction.com/ProfilePicture/'.$now.basename( $_FILES['profilepic']['name']).'")';*/
	// alterchange double quote to single quote
	$sql = 'insert into dbo.tblInstallUsers ( SourceID,CountryCode,Password,FristName,LastName,Email,Phone,Address,Zip,State,City,	PrevApply,LicenseStatus,CrimeStatus,usertype,ResumePath,StartDate,PositionAppliedFor,DesignationID,Status,Source,SalaryReq,LeavingReason,DateSourced,CruntEmployement,FELONY,SourceUser,EmpType,Notes,NameMiddleInitial,Designation,IsEmailContactPreference,IsCallContactPreference,IsTextContactPreference,IsMailContactPreference,Picture)values ("'.$_POST['source'].'","'.$_POST['country'].'","jmgrove","'.$_POST['fname'].'","'.$_POST['lname'].'","'.$_POST['email'].'","'.$_POST['phone'].'","'.$_POST['address'].'","'.$_POST['zip'].'","'.$_POST['state'].'","'.$_POST['city'].'","'.$worked.'","'.$license.'","'.$CrimeStatus.'","'.$_POST['user_type'].'","http://jmgroveconstruction.com/Resumes/'.$now.basename( $_FILES['resume']['name']).'","'.$_POST['startdate'].'","'.$_POST['position_text'].'","'.$_POST['position'].'","2","'.$SourceText.'","'.$_POST['salaryrequirements'].'","'.$_POST['reasonforleaving'].'","GETDATE()","'.$CruntEmployement.'","'.$FELONY.'","'.$SourceUser.'","'.$EmpType.'","'.$Notes.'","'.$NameMiddleInitial.'","'.$_POST['position_text'].'","'.$email_contact.'","'.$call_contact.'","'.$text_contact.'","'.$mail_contact.'","http://jmgroveconstruction.com/ProfilePicture/'.$now.basename( $_FILES['profilepic']['name']).'")';
	
	//echo $sql;exit;
	$query = mssql_query($sql);
	if ($query === false){
		exit("<pre>".print_r(mssql_error(), true));
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


    //mssql_free_statement($query);

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

