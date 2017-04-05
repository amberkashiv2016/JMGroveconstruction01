<?php
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Methods: PUT, GET, POST");
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	
	$serverName = "jgdbserver001.cdgdaha6zllk.us-west-2.rds.amazonaws.com"; //serverName\instanceName
	$conn = mssql_connect($serverName, 'devloperuser', 'JG%987');
	mssql_select_db("JGBS_Dev_New",$conn);
	
	/*mssql_select_db("JGC",$conn);*/
	if( $conn === false ) {	die( print_r( mssql_error(), true)); }
	 //error_reporting(E_ALL);
	 //ini_set("display_errors", 1);
	 
	date_default_timezone_set("Asia/Kolkata");
	$now=date("YmdHis"); //echo $now;
	$now_dt=date("Y-m-d");
	

	if($_POST['hid_submit']=='hid_submit_val')
	{
	//print_r($_POST);
	//exit();
	extract($_POST);
	$address=$_POST['address1'].", ".$_POST['address2'];
	$conper=$cont_name[0];
	$connum=$con_ph_num[0];
	$email_ad=$cont_email[0];
	
	$sql = 'insert into dbo.tblVendors ( VendorName,ContactPerson,ContactNumber,Email,Address )values ("'.$_POST['company'].'","'.$conper.'","'.$connum.'","'.$email_ad.'","'.$address.'")';
	
	
		
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
		/*$email = $_POST['cont_email'];*/
		$result = mssql_fetch_assoc(mssql_query("select @@IDENTITY as id"));
		$lastID = $result['id'];
		
		echo $lastID." Inserted Successfully";
		
		$con_loop=0;
		
		if(count($s1)>0)
		{
			
			foreach($cont_name as $contact_info)
			{
			if(trim($cont_name[$con_loop])!='')
				{
					if($contact_info!='')
					{
					$a=$cont_email[$con_loop];
					$b=$con_ph_num[$con_loop];
					$c=$cont_pos_title[$con_loop];
					
						
					mssql_query('insert into dbo.tblVendorEmail ( VendorId,Email,FName,Contact,Title )values ("'.$lastID.'","'.$a.'","'.$contact_info.'","'.$b.'","'.$d.'")');
						
						
					}
				
					
				
				}
			$con_loop++;
			}
		
		}
		
		}



	}
	?>