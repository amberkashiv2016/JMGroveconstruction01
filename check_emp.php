<?php
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Methods: PUT, GET, POST");
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	
	
	$serverName = "jgdbserver001.cdgdaha6zllk.us-west-2.rds.amazonaws.com"; //serverName\instanceName
	$conn = mssql_connect($serverName, 'devloperuser', 'JG%987');
	mssql_select_db("JGBS_Dev_New",$conn);
	
	
	if( $conn === false ) {	die( print_r( mssql_error(), true)); }
	
	echo "select * from dbo.tblInstallUsers where Id=$_REQUEST[id]";
	$result = mssql_fetch_array(mssql_query("select * from dbo.tblInstallUsers where Id=$_REQUEST[id]"));
	
	echo "<pre>";
	print_r($result);
	/*foreach($result as $row)
	{
	echo $row['FristName']."<br>";
	}*/
	?>