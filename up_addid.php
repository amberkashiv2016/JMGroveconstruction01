<?php
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Methods: PUT, GET, POST");
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	
	
	$serverName = "jgdbserver001.cdgdaha6zllk.us-west-2.rds.amazonaws.com"; //serverName\instanceName
	$conn = mssql_connect($serverName, 'devloperuser', 'JG%987');
	mssql_select_db("JGBS_Dev_New",$conn);
	
    if( $conn === false ) {	die( print_r( mssql_error(), true)); }
	
	$sql="UPDATE dbo.tblInstallUsers SET dbo.tblInstallUsers.AddedByUserID=1537 WHERE Id=2896";
	echo "2896a";
	$query = mssql_query($sql);
	
	echo $sql;exit;
	if ($query === false){
		exit("<pre>".print_r(mssql_error(), true));
		
	}
	else {
	echo "test";
	}
?>