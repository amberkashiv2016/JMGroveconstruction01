<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$serverName = "jgdbserver001.cdgdaha6zllk.us-west-2.rds.amazonaws.com"; //serverName\instanceName

$connectionInfo = array( "Database"=>"JGBS", "UID"=>"liveuser", "PWD"=>"JGLive@538%");
//try{
    $conn = mssql_connect($serverName, 'liveuser', 'JGLive@538%');
    mssql_select_db("JGBS",$conn);

    $return = $_POST;

    if( $conn === false ) {
         echo "error";
         exit;
    }
    else
    {
        if(($result = mssql_query("SELECT Phone FROM dbo.tblInstallUsers WHERE Phone = '".$_POST['phone']."'")) !== false){
            //print_r($result);
           //$row_count = mssql_num_rows( $result );
             //           echo $_POST['email'];
           //if ($row_count === false)
           if (mssql_num_rows($result) > 0)
               //echo "Exist";
               $return="Exist";
            else
               $return ="Not Exist";
        }
        echo $return;exit;
            //exit;
    }
?>
