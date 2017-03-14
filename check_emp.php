<?php
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Methods: PUT, GET, POST");
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	
	
	$serverName = "jgdbserver001.cdgdaha6zllk.us-west-2.rds.amazonaws.com"; //serverName\instanceName
	$conn = mssql_connect($serverName, 'liveuser', 'JGLive@538%');
	mssql_select_db("JGBS",$conn);
	if( $conn === false ) {	die( print_r( mssql_error(), true)); }
	
	echo "test";
	$result = mssql_fetch_array(mssql_query("select * from dbo.tblInstallUsers where Id=2833"));
	
	echo "<pre>";
	print_r($result);
	/*foreach($result as $row)
	{
	echo $row['FristName']."<br>";
	}*/
	?>