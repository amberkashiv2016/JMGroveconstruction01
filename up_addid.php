<?php
	$serverName = "jgdbserver001.cdgdaha6zllk.us-west-2.rds.amazonaws.com"; //serverName\instanceName
	$conn = mssql_connect($serverName, 'liveuser', 'JGLive@538%');
	mssql_select_db("JGBS",$conn);
	/*mssql_select_db("JGC",$conn);*/
	if( $conn === false ) {	die( print_r( mssql_error(), true)); }
	
	
	mssql_query("update dbo.tblInstallUsers SET AddedByUserID='1537' where Id='2487'");
?>
