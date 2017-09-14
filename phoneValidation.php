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

    if( $odbccon === false ) {
         echo "error";
         exit;
    }
    else
    {
        if(($result = odbc_exec($odbccon,"SELECT Phone FROM dbo.tblInstallUsers WHERE Phone LIKE '%".$_POST['phone']."%'")) !== false){
            //print_r($result);
           //$row_count = mssql_num_rows( $result );
             //           echo $_POST['email'];
           //if ($row_count === false)
           if (odbc_num_rows($result) > 0)
               //echo "Exist";
               $return="Exist";
            else
               $return ="Not Exist";
        }
        echo $return;exit;
            //exit;
    }
?>
