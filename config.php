<?php $currentpage = "employment";
$serverName = "jgdbserver001.cdgdaha6zllk.us-west-2.rds.amazonaws.com"; //serverName\instanceName
$database="JGBS_Dev_New";
$user="devloperuser";
$password="JG%987";
echo $_SERVER['PHP_SELF'];
$proocutonmode = 1;
/*
if($proocutonmode === 2)//
{
$dsn = "Live";
}
else if($proocutonmode === 1)
{
$dsn = "Test";
}
else{
$dsn = "Driver={ODBC Driver 11 for SQL Server};Server=$serverName;Database=$database;";
}
*/
