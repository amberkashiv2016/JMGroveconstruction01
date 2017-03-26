<?php
	header("Access-Control-Allow-Origin: *");
	header("Access-Control-Allow-Methods: PUT, GET, POST");
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	
	

	$serverName = "jgdbserver001.cdgdaha6zllk.us-west-2.rds.amazonaws.com"; //serverName\instanceName
	$conn = mssql_connect($serverName, 'liveuser', 'JGLive@538%');
	mssql_select_db("JGBS",$conn);
	if( $conn === false ) {	die( print_r( mssql_error(), true)); }
	
	// Send a select query to MSSQL
$query = mssql_query('SELECT AddedByUserID FROM dbo.tblInstallUsers');

// Print the field type and length
echo '\'' . mssql_field_name($query, 0) . '\' is a type of ' . 
     strtoupper(mssql_field_type($query, 0)) . 
     '(' . mssql_field_length($query, 0) . ')';
	
	
	echo $sql="UPDATE dbo.tblInstallUsers SET AddedByUserID=AddedByUserID|4 WHERE Id='2847'";
	echo "ssq";
	$query = mssql_query($sql);
	
	//echo $sql;exit;
	if ($query === false){
		exit("<pre>".print_r(mssql_error(), true));
		
	}
?>
