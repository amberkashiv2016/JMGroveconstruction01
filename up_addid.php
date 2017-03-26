<?php
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Methods: PUT, GET, POST");
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	
	

	$serverName = "jgdbserver001.cdgdaha6zllk.us-west-2.rds.amazonaws.com"; //serverName\instanceName
	$conn = mssql_connect($serverName, 'liveuser', 'JGLive@538%');
	mssql_select_db("JGBS",$conn);
	if( $conn === false ) {	die( print_r( mssql_error(), true)); }
	
	
	mssql_query("UPDATE dbo.tblInstallUsers SET 1='ww1537ww' WHERE Id='2487'");
	
	if (!mssql_query) {
    // The query has failed, print a nice error message
    // using mssql_get_last_message()
    die('MSSQL error: ' . mssql_get_last_message());
}
?>
