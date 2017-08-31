<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT, GET, POST");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

//$serverName = "jgdbserver001.cdgdaha6zllk.us-west-2.rds.amazonaws.com"; //serverName\instanceName

//$connectionInfo = array( "Database"=>"JGBS", "UID"=>"liveuser", "PWD"=>"JGLive@538%");
//try{
    // $conn = mssql_connect($serverName, 'liveuser', 'JGLive@538%');
    // mssql_select_db("JGBS",$conn);

    $odbccon = odbc_connect ( "test" ,"liveuser", "JGLive@538%");

    $return = $_POST;

    if( $odbccon === false ) {
         echo "error";
         exit;
    }
    else
    {
        if(($result = odbc_exec($odbccon,"SELECT Phone FROM dbo.tblInstallUsers WHERE Phone = '".$_POST['phone']."'")) !== false){
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
