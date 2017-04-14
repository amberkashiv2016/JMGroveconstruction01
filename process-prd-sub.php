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
	extract($_POST);
	
	/*print_r($_POST);
	exit();*/
	
	$con_loop=0;
		
		if(count($s2)>0)
		{
		
			foreach($_POST['product_name'] as $contact_info)
			{
			if(trim($product_name[$con_loop])!='')
				{
					if($contact_info!='')
					{
					/*$venid==$vendorid[$con_loop];
					$pdesc=$product_desc[$con_loop];
					$pcunit=$product_cost_unit[$con_loop];*/
					
					/*$last_pid_qr = mssql_fetch_array(mssql_query("SELECT MAX(ID) as pid FROM tblVendorProduct"));
					$last_pid =	$last_pid_qr['pid']+1;*/
											
					mssql_query("insert into dbo.tblVendorProduct ( ID,VendorID,ItemDescription,UnitCost )values (7,1618,'test',3)");
						
					}
				
				}
			$con_loop++;
			}
	
	
		}
	
	/*if($_POST['hid_pr_submit']=='hid_pr_submit_val')
	{
			
	
	
	
	
	}*/
	?>