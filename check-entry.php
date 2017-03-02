<?php

 $serverName = "jgdbserver001.cdgdaha6zllk.us-west-2.rds.amazonaws.com"; 





 $conn = mssql_connect($serverName, 'devloperuser', 'JG%987');
 
 mssql_select_db("JGBS_Dev",$conn);
 
 if( $conn === false ) {
     die( print_r( sqlsrv_errors(), true));
 }
 else{
    echo "Success";
 }

 echo '<pre>';
 $query = mssql_query('SELECT *
FROM dbo.tblInstallUsers
WHERE Id = (SELECT MAX(Id) FROM dbo.tblInstallUsers)');

while($rows = mssql_fetch_array($query)){
    print_r($rows);
}
 
    // Free the query result
    mssql_free_result($query);
