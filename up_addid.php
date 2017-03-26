<?php
error_reporting(E_ALL);


	$serverName = "jgdbserver001.cdgdaha6zllk.us-west-2.rds.amazonaws.com"; //serverName\instanceName
	$conn = mssql_connect($serverName, 'liveuser', 'JGLive@538%');
	mssql_select_db("JGBS",$conn);
	if( $conn === false ) {	die( print_r( mssql_error(), true)); }
	
	
	mssql_query("update dbo.tblInstallUsers SET FristName='1537' where Id='2487'");
	
	if (!mssql_query) {
    // The query has failed, print a nice error message
    // using mssql_get_last_message()
    die('MSSQL error: ' . mssql_get_last_message());
}
?>
