<?php 
$serverName = "jgdbserver001.cdgdaha6zllk.us-west-2.rds.amazonaws.com"; //serverName\instanceName
$database="JGBS_Dev_New";
$user="devloperuser";
$password="JG%987";

$actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

if ( strpos($actual_link, 'jmgroveconstruction.com') !== false  && strpos($actual_link, 'jmgroveconstruction.com/demo') === false) 
{
	$proocutonmode = 2;
}else if(strpos($actual_link, 'jmgroveconstruction.com/demo') !== false)
{
	$proocutonmode = 1;
}else{
	$proocutonmode = 3;
}

//$proocutonmode = 1;
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
