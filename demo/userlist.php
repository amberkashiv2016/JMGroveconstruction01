<?php
$serverName = "jgdbserver001.cdgdaha6zllk.us-west-2.rds.amazonaws.com"; //serverName\instanceName

    //$connectionInfo = array( "Database"=>"JGBS", "UID"=>"liveuser", "PWD"=>"JGLive@538%");
    //$conn = sqlsrv_connect( $serverName, $connectionInfo);
     $conn = mssql_connect($serverName, 'liveuser', 'JGLive@538%');
     mssql_select_db("JGBS",$conn);
    if( $conn === false ) {
         die( print_r( sqlsrv_errors(), true));
    }
	else
	{//echo "Success";
	}
$q = mssql_query('select * from dbo.tblInstallUsers order by Id desc');
if ($q === false){
    exit("<pre>".print_r(sqlsrv_errors(), true));
    }
	echo "<pre>";
while($row = mssql_fetch_assoc($q)) {
   print_r($row);
}
exit;
?>