<?php
include("config.php");

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

//$dsn = "Driver={ODBC Driver 11 for SQL Server};Server=$serverName;Database=$database;";
//$dsn = "Test";
//$connection = odbc_connect("Driver={ODBC Driver 11 for SQL Server};Server=$serverName;Database=$database;", $user, $password);
$odbccon = odbc_connect($dsn, $user, $password);

    $return = $_POST;

    if (!$odbccon)
    {
		exit("Connection Failed: " . $odbccon);

    }
    else
    {
	
	$email_customer = $_POST["email"];
if (!filter_var($email_customer, FILTER_VALIDATE_EMAIL)) {
  echo $return = "email-format"; 
   exit;
}
	
	$email_query = "SELECT Count(*) AS counter  FROM dbo.tblInstallUsers WHERE Email = '".$_POST['email']."'";
        
        if(($result = odbc_exec($odbccon,$email_query)) !== false){   //print_r($result);
           //$row_count = mssql_num_rows( $result );
             //           echo $_POST['email'];
           //if ($row_count === false)
	    $arr = odbc_fetch_array($result);   
		   
           if ($arr['counter'] > 0)
               //echo "Exist";
               $return="Exist";
            else
               $return ="Not Exist";
        }
        echo $return;exit;
            //exit;
    }
?>
