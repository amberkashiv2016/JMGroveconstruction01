<?php
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Methods: PUT, GET, POST");
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	
	
	$serverName = "jgdbserver001.cdgdaha6zllk.us-west-2.rds.amazonaws.com"; //serverName\instanceName
	$conn = mssql_connect($serverName, 'liveuser', 'JGLive@538%');
	mssql_select_db("JGBS",$conn);
	if( $conn === false ) {	die( print_r( mssql_error(), true)); }
	
	$result = mssql_fetch_assoc(mssql_query("select * from dbo.tblInstallUsers order by DateSourced limit 0,10"));
	
	foreach($result as $row)
	{
	echo $row->FristName."<br>";
	}
	?>