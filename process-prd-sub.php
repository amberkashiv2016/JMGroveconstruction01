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

	if($_POST['hid_pr_submit']=='hid_pr_submit_val')
	{
	//print_r($_POST);
	//exit();
	extract($_POST);
	
	print_r($_POST);
	exit();
	
	
	
	}
	?>