<?php
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Methods: PUT, GET, POST");
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	
	

	$serverName = "jgdbserver001.cdgdaha6zllk.us-west-2.rds.amazonaws.com"; //serverName\instanceName
	$conn = mssql_connect($serverName, 'liveuser', 'JGLive@538%');
	mssql_select_db("JGBS",$conn);
	if( $conn === false ) {	die( print_r( mssql_error(), true)); }
	
	
	echo $sql="UPDATE dbo.tblInstallUsers SET FristName='ww1537ww' WHERE Id=2847";
	echo "ss";
	$query = mssql_query($conn,$sql);
	
	//echo $sql;exit;
	if ($query === false){
		exit("<pre>".print_r(mssql_error(), true));
		
	}
?>
